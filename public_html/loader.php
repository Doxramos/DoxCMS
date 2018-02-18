<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
DEFINE('Raw_Public_P', dirname(__file__));
DEFINE('__PUBLIC__', ReplaceSlashes(Raw_Public_P));
LoadNextLoaders(__PUBLIC__);
function LoadApplication() {
    $PageID = strtolower(PageIdent());
    if($PageID == 'admin') {
        \theme\theme::LoadTheme("Backend");
    } else {
        \theme\theme::LoadTheme("Frontend");
    }
}