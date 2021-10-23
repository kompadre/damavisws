<?php
chdir(getcwd());
$prod = true;
foreach(['en', 'es'] as $lang) {
    if (!is_dir('./html/' . $lang)) {
        mkdir('./html/' . $lang);
    }
    foreach(glob( './view/*.php' ) as $template) {
        $innerPage =pathinfo($template, PATHINFO_FILENAME);
        $outfile = './html/' . $lang . '/' . $innerPage . '.html';
        ob_start();
        include $template;
        $html = ob_get_clean();

        if (file_put_contents($outfile, $html)<=0) {
            echo "*** WARNING *** NOT Written `$outfile`.\n";
        }
        else {
            echo "Written `$outfile`.\n";
        }

        foreach(array_keys($GLOBALS) as $gvar) {
            if (in_array($gvar, ['lang', 'template', 'GLOBALS', 'gvar', 'prod'])) { continue; }
            unset($$gvar);
            unset($GLOBALS[$gvar]);
        }
    }
}

if (!is_dir('./html/css')) {
    mkdir('./html/css');
}
exec("sassc ./source/css/damavis.scss ./source/css/damavis.css");
exec("esbuild --minify ./source/css/damavis.css --outfile=./html/css/damavis.min.css");
exec("sassc ./source/css/damavis-fallback-ie.scss ./source/css/damavis-fallback-ie.css");
exec("esbuild --minify ./source/css/damavis-fallback-ie.css --outfile=./html/css/damavis-fallback-ie.min.css");
exec("sassc ./source/css/damavis-fallback-safari.scss ./source/css/damavis-fallback-safari.css");
exec("esbuild --minify ./source/css/damavis-fallback-safari.css --outfile=./html/css/damavis-fallback-safari.min.css");

if (!is_dir('./html/js')) {
    mkdir('./html/js');
}
exec("esbuild --minify ./source/js/damavis.js --outfile=./html/js/damavis.min.js");


