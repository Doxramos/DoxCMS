<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
function ReplaceSlashes($Path) {
    return str_replace('\\', '/', $Path);
}
DEFINE('Raw_Root_P', dirname(__file__));
DEFINE('__ROOT__', ReplaceSlashes(Raw_Root_P));
function LoadNextLoaders($path)
{
    $path .='/*/*';
    foreach(glob($path) as $folder) {
        if(strpos($folder, 'loader.php') !== false) {
            require_once  $folder;
        }
    }
}
function LoadFileTypes($folder, $fileType) {
    foreach(glob($folder.'/*.'.$fileType) as $file) {
        require_once $file;
    }
}
LoadNextLoaders(__ROOT__);

/*TODO README __ROOT__ returns the true root directory of the project
  TODO READMEDEV LoadNextLoaders Loads the next segment after a given path argument
  TODO READMEDEV LoadFileTypes requires folder and filetype
*/