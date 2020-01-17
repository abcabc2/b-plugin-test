<?php
/**
 * @package BPluginTest
 */

 class BPluginTestDeactivate  
 {
    public static function deactivate(){
        flush_rewrite_rules();
        echo'deactivated plugin ';
    }
 }