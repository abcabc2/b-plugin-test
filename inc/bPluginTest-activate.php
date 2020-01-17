<?php
/**
 * @package BPluginTest
 */

 class BPluginTestActivate  
 {
    public static function activate(){
        echo'activated plugin ';
        flush_rewrite_rules();

    }
 }
 