<?php
define('SECRET', 'l2HpNPCod<aqO>dzE*z!l$*{S;{&/hp4');
$out = ['ok' => true];
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $out = ['ok' => false, 'error' => 'POST only'];
}

if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}

switch($_GET['action']) {
    case 'sendmail':
        $out['csrf_pass'] = $_SESSION['csrf'] == md5($_POST['csrf']);
        $out['post'] = $_POST;
        $out['session'] = $_SESSION;
        break;
    case 'csrf':
        if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == $_SERVER['HTTP_HOST']) {
            $r = (openssl_random_pseudo_bytes(16) ^ (time() . time()));
            $csrf = bin2hex($r) . '_' . crypt($r . SECRET, 'rl');
            $out['csrf'] = $csrf;
            $out['info'] = $_SERVER;
            $_SESSION['csrf'] = md5($csrf);
        }
        break;
}
header('Content-Type: application/json');
echo json_encode($out);