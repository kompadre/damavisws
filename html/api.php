<?php
function sendJsonAndExit($response) {
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

function validateRecaptcha($token) {
    if (!$token || strlen($token) < 400) return ['success' => false];
    $secret = getenv('RECAPTCHA_SECRET');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $secret, 'response' => $token)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    sendJsonAndExit(['ok' => false, 'error' => 'POST only']);
}

if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}

switch($_GET['action']) {
    case 'sendmail':
        if ($_SESSION['csrf'] != $_POST['csrf']) {
            sendJsonAndExit(['ok' => false, 'reason' => 'csrf']);
        }
        $recaptchaResponse = validateRecaptcha($_POST['recaptcha']);
        if ($recaptchaResponse['success'] != true || $recaptchaResponse['score'] < 0.5 || $recaptchaResponse['action'] != 'sendmail') {
            sendJsonAndExit(['ok' => false, 'reason' => 'captcha']);
        }
        unset($_SESSION['csrf']);
        $to = filter_var(getenv('DAMAVISWS_EMAIL_TO'), FILTER_VALIDATE_EMAIL) === false ?
            'root@localhost' :
            getenv('DAMAVISWS_EMAIL_TO');

        $from = filter_var(getenv('DAMAVISWS_EMAIL_FROM'), FILTER_VALIDATE_EMAIL) === false ?
            'root@localhost' :
            getenv('DAMAVISWS_EMAIL_FROM');

        $data = filter_input_array(INPUT_POST, [
            'name' => FILTER_SANITIZE_STRING,
            'email' => FILTER_SANITIZE_EMAIL,
            'message' => FILTER_SANITIZE_STRING,
            'purpose' => FILTER_SANITIZE_STRING,
        ]);

        $subject = 'Damavis Web | ' .
            ($data['purpose'] == 'workWithUs' ? 'Work with us' : 'Contact request from ' . $data['email']);

        $body = '<html><body><pre>';
        $body .= '<strong>=== Message starts ===</strong>' . PHP_EOL;
        foreach($data as $inputKey => $inputData) {
            if ($inputData != null)
                $body .= $inputKey . ': ' . $inputData . PHP_EOL;
        }
        $body .= '<strong>=== Message ends ===</strong>';
        $body .= '</pre></body></html>';
        $headers = [
            'MIME-Version: 1.0',
            'Content-type: text/html; charset=utf-8',
            'From: ' . $from,
        ];
        $result = mail($to, $subject, $body, implode(PHP_EOL, $headers));
        sendJsonAndExit(['ok' => true, 'success' => $result]);
        break;
    case 'csrf':
        if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) != $_SERVER['HTTP_HOST']) {
            sendJsonAndExit(['ok' => false]);
        }
        $csrf = base64_encode(openssl_random_pseudo_bytes(16) ^ (time() . time()));
        $_SESSION['csrf'] = $csrf;
        sendJsonAndExit(['ok' => true, 'csrf' => $csrf]);
        break;
    default:
}

sendJsonAndExit(['ok' => false]);
