<?php
$defaultKeywords = _('Damavis, Damavis Studio, Data, Big Data, Big Data Mallorca, Data Driven, Machine Learning, Mallorca Consultancy, Python, Apache Spark, Visualization, Data Lake, Scala, Apache Hadoop');
$defaultDescription = _('Damavis is an innovative startup specialized in the management of the most important resource of 21st century companies: their data. Our main objective is to get the highest possible performance of the data so that our clients can make better strategic decisions, ensuring scalability, maximum flexibility and integration of artificial intelligence algorithms.');
$meta = [
    'home' => [
        'page' => '',
        'title' => 'Damavis | '._('Data, Machine Learning &amp; Visualization'),
        'keywords' => $defaultKeywords,
        'description' => $defaultDescription ],
    'about' => [
        'page' => 'about',
        'title' => 'Damavis | '._('About'),
        'keywords' => $defaultKeywords,
        'description' => $defaultDescription ],
    'contact' => [ 'page' => 'contact', 'title' => 'Damavis | '. _('Contact'), 'keywords' => $defaultKeywords, 'description' => $defaultDescription ],
    'datadriven' => [ 'page' => 'data-driven', 'title' => 'Damavis | '. _('Data Driven'), 'keywords' => $defaultKeywords, 'description' => $defaultDescription ],
    'team' => [ 'page' => 'team', 'title' => 'Damavis | '. _('Team'), 'keywords' => $defaultKeywords, 'description' => $defaultDescription ],
    'services' => [ 'page' => 'services', 'title' => 'Damavis | ' ._('Services'), 'keywords' => $defaultKeywords, 'description' => $defaultDescription ],
    'terms' => [ 'page' => 'terms', 'title' => 'Damavis | '. _('Legal'), 'keywords' => $defaultKeywords, 'description' => $defaultDescription ],
    'work' => [ 'page' => 'work', 'title' => 'Damavis | '. _('Services'), 'keywords' => $defaultKeywords, 'description' => $defaultDescription ]];

if (!function_exists('__')) {
    function __() {
        $args = func_get_args();
        $message = _(array_shift($args));
        return vsprintf($message, $args);
    }
}

$prod = false;