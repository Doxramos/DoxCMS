<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
DEFINE('Raw_Class_P', dirname(__file__));
DEFINE('__CLASSES__', ReplaceSlashes(Raw_Class_P));
LoadFileTypes(__CLASSES__, 'class.php');
LoadFileTypes(__CLASSES__, 'hook.php');
require_once __CLASSES__.'/vendor/twilio/Twilio/autoload.php';
require_once __CLASSES__.'/vendor/twilio/Services/Twilio.php';
