<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
DEFINE("__DEFAULT_LOGIN_MODULE_P", ReplaceSlashes(dirname(__file__)));
if(!isset($_SESSION['userID'])) {
    LoadFile(__DEFAULT_LOGIN_MODULE_P, "", "Guest.panel.php");
} else {
    LoadFile(__DEFAULT_LOGIN_MODULE_P, "", "User.panel.php");
}

    ?>
    <input type="hidden" name="login_default_functionURL" id="login_default_functionURL" value="<?php echo ConvertToURL(ReplaceSlashes(dirname(__file__).'/function.d.php')); ?>">

