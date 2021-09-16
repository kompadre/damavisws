<?php
$out = ['ok' => true];
if (empty($_POST)) {
    return json_encode('POST only');
}
switch($_SERVER['REQUEST_URI']) {
    case 'sendmail':
        $out = var_export($_POST);
}
header('Content-Type: application/json');
return json_encode($out);