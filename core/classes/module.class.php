<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */

namespace module;


class module
{
    public function LoadActiveModules($Position) {
        foreach(glob(__MODULE__.'/*/module.json') as $configFile) {
            $configFile = ReplaceSlashes($configFile);
            $string = file_get_contents($configFile);
            $config = json_decode($string);
            if($config->Module->Position == $Position && $config->Module->Active == 1 ) {
                $LoadFile = str_replace('module.json', 'index.php', $configFile);
                if(file_exists($LoadFile)) {
                    require_once $LoadFile;
                }
            }

        }
    }
    public function LoadModuleJS() {
        foreach(glob(__MODULE__.'/*/module.json') as $configFile) {
            $configFile = ReplaceSlashes($configFile);
            $string = file_get_contents($configFile);
            $config = json_decode($string);
            if($config->Module->Active == 1 ) {
                $LoadFile = str_replace( 'module.json', 'script.js', $configFile);
                if(file_exists($LoadFile)) {
                    LoadJS($LoadFile, '', '');
                }
            }
        }
    }
}

function LoadActiveModules($Position) {
    return \module\module::LoadActiveModules($Position);
}
function LoadModuleJS() {
    return \module\module::LoadModuleJS();
}