<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
function ConvertToURL($Path) {
    $url = str_replace(__PUBLIC__, '//'.$_SERVER['HTTP_HOST'], $Path);
    return $url;
}
function LoadFile($Path, $Folder, $File) {
    $Path = $Path.'/'.$Folder.'/'.$File;
    $LoadFile = rtrim(ReplaceSlashes($Path), '/');
    if(file_exists($LoadFile)) {
        require_once $LoadFile;
    } else {
        echo $File. ' Not Found';
    }
}
function PageIdent() {
    if(!isset($_GET['page'])) {
        return "Home";
    } else {
        return str_replace("-", ' ', $_GET['page']);
    }
}
function LoadCSS($path, $folder, $file) {
    $Path = $path.'/'.$folder.''.$file;
    echo "<link href='".ConvertToURL($Path)."' rel='stylesheet'>".PHP_EOL;
}
function LoadJS($path, $folder, $file) {
    $Path = rtrim($path.'/'.$folder.''.$file, '/');
    echo "<script src='".ConvertToURL($Path)."'></script>".PHP_EOL;
}
function LoadBootStrapCSS() {
    foreach(glob(__BIN__.'/bootstrap4/css/*.css') as $CSSFile) {
        echo "<link href='".ConvertToURL($CSSFile)."' rel='stylesheet'>".PHP_EOL;
    }
}
function LoadBootStrapJS() {
    foreach(glob(__BIN__.'/bootstrap4/js/*.js') as $ScriptFile) {
        echo "<script src='".ConvertToURL($ScriptFile)."'></script>".PHP_EOL;
    }
}
function LoadJQuery() {
    foreach(glob(__BIN__.'/jquery/*.js') as $JQuery) {
        echo "<script src='".ConvertToURL($JQuery)."'></script>".PHP_EOL;
    }
}
function LoadFontAwesome() {
    foreach(glob(__BIN__.'/font-awesome/css/fontawesome-all.css') as $FAFile) {
        echo "<link href='".ConvertToURL($FAFile)."' rel='stylesheet'>".PHP_EOL;
    }
}

