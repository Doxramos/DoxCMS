<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
require_once "../../../../loader.php";
switch($_POST['process']) {
    case "login_default": echo \user\LoginUser($_POST['login_username'], $_POST['login_password']); break;
}