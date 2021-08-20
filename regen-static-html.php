<?php
chdir(getcwd());

foreach(['en', 'es'] as $lang) {
    foreach(glob( './view/*.php' ) as $template) {
        $innerPage =pathinfo($template, PATHINFO_FILENAME);
        $outfile = './html/' . $lang . '.' . $innerPage . '.html';
        ob_start();
        include $template;
        $html = ob_get_clean();
        file_put_contents($outfile, $html);
        echo "Written `$outfile`.\n";
        foreach(array_keys($GLOBALS) as $gvar) {
            if (in_array($gvar, ['lang', 'template', 'GLOBALS'])) { continue; }
            unset($$gvar);
            unset($GLOBALS[$gvar]);
        }
    }
}
