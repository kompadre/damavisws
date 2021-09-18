<?php
$out = ['ok' => true];
if (empty($_POST)) {
    $out = ['ok' => false, 'error' => 'POST only'];
}
switch($_SERVER['REQUEST_URI']) {
    case 'sendmail':
        $out = var_export($_POST, true);
}
header('Content-Type: application/json');
return json_encode($out);