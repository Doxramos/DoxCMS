<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */

namespace theme;


class theme
{
    public function LoadTheme($template) {
        $activeTheme = Config($template, 'path');
        $loadFile = Config($template, 'loadfile');
        $path = __THEME__.'/'.$activeTheme.'/'.$loadFile;
        if(file_exists($path) ) {
            require_once $path;
        } else {
            echo
            die('Theme is Corrupted');
        }
    }
}