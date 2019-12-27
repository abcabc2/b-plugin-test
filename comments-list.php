<?php
/*
* @package CommentsListPlugin
*/
/*
 * Plugin Name:     B Plugin test
 * Plugin URI:      
 * Description:     Test create plugin.
 * Version:         1.0.0
 * Author:          v3d Software
 * Author URI:      http://wwww.v3d.pl/plugins/
 * Text Domain:     B Plugin test
 * Domain Path:     /languages
 *
 * Copyright:       v3d Software
 * License:         GNU General Public License v3.0
 * License URI:     https://www.gnu.org/licenses/gpl.html
 */
defined( 'ABSPATH') or die( 'You can\t access this file');
class CommentsListPlugin
{
    
    function __construct()
    {
        add_action( 'init', array($this, 'custom_post_type' ) );
    }

    
    function register_frontend()
    {
        // add css js to frontend
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
        // add css to backend
        //add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }
    function register_backend()
    {
        // add css js to backend
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }   

    function activate() {
        //echo'Activated plugin ';
        $this->custom_post_type();
        flush_rewrite_rules();
    }
    function deactivate()
    {
        //echo'deactivated plugin ';
    }
    function uninstall()
    {
        
    }
    function custom_post_type()
    {
        //register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
    }  
    function enqueue()
    {
        wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/css/mydbstyle.css', __FILE__ ) );
        wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/js/mydbscript.js', __FILE__ ) );
    }


}

if(class_exists('CommentsListPlugin')){
    $commentsListPlugin = new CommentsListPlugin();
    $commentsListPlugin->register_frontend();
    $commentsListPlugin->register_backend();
}



// sortcode
/*
function shortcode_plugin_demo($atts) {
    $Content = "<style>\r\n";
    $Content .= "h3.demoClass {\r\n";
    $Content .= "color: #26b158;\r\n";
    $Content .= "}\r\n";
    $Content .= "</style>\r\n";
    $Content .= '<h3 class="demoClass">Demo short code</h3>';
     
    return $Content;
}

add_shortcode('shortcode_demo', 'shortcode_plugin_demo');
*/
//activation
register_activation_hook( __FILE__, array( $commentsListPlugin, 'activate' ) );

//deactivation
register_deactivation_hook( __FILE__, array( $commentsListPlugin, 'deactivate' ) );

// uninstall
register_uninstall_hook( __FILE__, array( $commentsListPlugin, 'uninstall' ) );
 /*
 if (! defined('ABSPATH')) {
    die;
}
*/
//define( 'ABSPATH') or die( 'You can\t access this file');
/*
if( ! function_exists( 'add_action')){
    echo 'You don\t have function';
    exit;
}
*/
/*
function customFunction($arg){
    echo $arg;
}

customFunction('first function');
*/
/*
defined( 'ABSPATH') or die( 'You can\t access this file');
class CommentsListPlugin
{
    function __construct($string){
        echo($string);
    }
}

if(class_exists('CommentsListPlugin')){
    $addPlugin = new CommentsListPlugin('Comments Plugin Initialized');
}
*/