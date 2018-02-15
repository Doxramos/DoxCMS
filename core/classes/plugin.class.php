<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */

namespace plugin;


class plugin
{
    public function LoadActivePlugins() {
        foreach(glob(__PLUGIN__.'/*/plugin.json') as $configFile) {
            $configFile = ReplaceSlashes($configFile);
            $string = file_get_contents($configFile);
            $config = json_decode($string);
            if($config->Plugin->Active == 1 ) {
                $LoadFile = str_replace('plugin.json', 'index.php', $configFile);
                if(file_exists($LoadFile)) {
                    require_once $LoadFile;
                }
            }

        }
    }
}

function LoadActivePlugins() {
    return \plugin\plugin::LoadActivePlugins();
}