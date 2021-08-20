<?php
$url = 'view/' . preg_replace('#^/+#', '', $_GET['url']);
if (!is_readable($url) || $url == 'view/') {
    $url = 'view/home.php';
}
include $url;