<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */

class config
{
    public function Config($category,$returnvariable)
    {
        //$configFile = ConfigFile();
        $string = file_get_contents($configFile);
        $config = json_decode($string, true);
        return $config[$category][$returnvariable];
    }
}