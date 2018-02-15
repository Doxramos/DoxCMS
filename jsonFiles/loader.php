<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
DEFINE('Raw_Config_Path', dirname(__file__));
DEFINE('__CONF__', ReplaceSlashes(Raw_Config_Path));
function ConfigFile() {
    return __CONF__.'/config.json';
}
function Config($category,$returnvariable)
{
    $configFile = ConfigFile();
    $string = file_get_contents($configFile);
    $config = json_decode($string, true);
    return $config[$category][$returnvariable];
}
LoadFileTypes(__CORE__, 'class.php');
LoadFileTypes(__CLASSES__, 'class.php');
LoadFileTypes(__CLASSES__, 'hook.php');

/*TODO
$category aruments
SiteDetails, Database, Backend, Frontend, APIKeys
$return Default Variables
SiteDetails =>
    SiteName
    URL
    FriendlyURL
    Webmaster
Database    =>
    Database
    Host
    User
    Pass
    Port
Backend     =>
    path
    Name
    loadfile
Frontend    =>
    path
    Name
    loadfile
APIKeys     =>
    USPS
    NumVerify
    MailboxLayer
 */