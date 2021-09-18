<?php
$out = ['ok' => true];
if (empty($_POST)) {
    $out = ['ok' => false, 'error' => 'POST only'];
}
switch($_GET['action']) {
    case 'sendmail':
        $out = var_export($_POST, true);
        break;
}
header('Content-Type: application/json');
echo json_encode($out);