<?php
define('EMAIL_TO', 'root@localhost');

$out = ['ok' => true];
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $out = ['ok' => false, 'error' => 'POST only'];
}

if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}

switch($_GET['action']) {
    case 'sendmail':
        if ($_SESSION['csrf'] == $_POST['csrf']) {
            $subject = 'Damavis Web : ' .
                (isset($_POST['purpose']) && $_POST['purpose'] == 'workWithUs' ? 'Work with us' : 'Contact request') .
                ' from ' . filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

            $body = '=== Message starts === ' . PHP_EOL . PHP_EOL;
            foreach(array_keys($_POST) as $arrayKey) {
                $body .= strip_tags($arrayKey) . ': ' . strip_tags($_POST[$arrayKey]) . PHP_EOL;
            }
            $body .= '=== Message ends === ' . PHP_EOL . PHP_EOL;
            mail(EMAIL_TO, $subject, $body);
        }
        break;
    case 'csrf':
        if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == $_SERVER['HTTP_HOST']) {
            $csrf = base64_encode(crypt(openssl_random_pseudo_bytes(16) ^ (time() . time()), '$5$rounds=10$eee'));
            $out['csrf'] = $csrf;
            $out['info'] = $_SERVER;
            $_SESSION['csrf'] = $csrf;
        }
        break;
}
header('Content-Type: application/json');
echo json_encode($out);