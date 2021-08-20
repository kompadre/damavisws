<?php

require './config.php';

if (php_sapi_name() == 'cli') {
    if (!isset($lang)) {
        $lang = isset($argv[1]) ? $argv[1] : 'en';
    }
    if (!isset($innerPage)) {
        $innerPage = $argv[0];
        $innerPage = pathinfo($innerPage, PATHINFO_FILENAME);
    }
    $outerPage = '' . (isset($meta[$innerPage]) ? $meta[$innerPage]['page'] : $meta['home']['page']);
    $_SERVER['REQUEST_URI'] = '/' . $lang . '/' . $outerPage;
    $_SERVER['HTTP_HOST'] = getenv('DAMAVISWS_DOMAIN') ?: 'www.damavis.com';
    if (getenv('DAMAVISWS_PORT') && !in_array(getenv('DAMAVISWS_PORT'), ['80', '443'])) {
        $_SERVER['HTTP_HOST'] .= ':' . getenv('DAMAVISWS_PORT');
    }
    $_SERVER['HTTPS'] = (bool)getenv('DAMAVISWS_HTTPS');
}
else if (!isset($lang)) {
    $lang = (isset($_GET['l']) && $_GET['l'] == 'es') ? 'es' : 'en';
}

$currentPage = isset($currentPage) ? $currentPage : 'home';
$newlocale = $lang == 'en' ? 'C' : ($lang . '_' . strtoupper($lang == 'en' ? 'US' : $lang) . '.utf8');
if ($lang != 'en') { putenv('LANGUAGE=' . $lang . '_' . strtoupper($lang)); }
setlocale(LC_MESSAGES, $newlocale);
textdomain('messages');
bind_textdomain_codeset('messages', 'utf-8');
bindtextdomain('messages', './i18n');