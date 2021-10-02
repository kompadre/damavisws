<?php
define('SECRET', 'l2HpNPCod<aqO>dzE*z!l$*{S;{&/hp4');
$out = ['ok' => true];
if (empty($_POST)) {
    $out = ['ok' => false, 'error' => 'POST only'];
}
switch($_GET['action']) {
    case 'sendmail':
        $out['post'] = $_POST;
        break;
    case 'csrf':
        if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == $_SERVER['HTTP_HOST']) {
            $r = (openssl_random_pseudo_bytes(16) ^ (time() . time()));
            $csrf = bin2hex($r) . '_' . password_hash($r . SECRET, PASSWORD_DEFAULT);
            $out['csrf'] = $csrf;
            $out['info'] = $_SERVER;
        }
        break;
}
header('Content-Type: application/json');
echo json_encode($out);