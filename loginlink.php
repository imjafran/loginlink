<?php 
/**
 * Plugin Name
 *
 * @package           Login Link
 * @author            Jafran Hasan
 * @copyright         2020 Returnxero
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Login Link
 * Plugin URI:        https://github.com/iamjafran/loginlink
 * Description:       Simple plugin to show link to only logged in users. use the shortcode [loginlink] anywhere in your wordpress site to restrict the text/link/content inside the tag for only logged in users. you can set a message by using [loginlink message="Please login to see the link"] https://privatelink.com this is private content [/loginlink] 
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jafran Hasan
 * Author URI:        https://facebook.com/iamjafran
 * Text Domain:       loginlink
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


add_shortcode( 'loginlink', function($atts = [], $content = null){
    
    if(is_user_logged_in()){
        return $content;
    } 

    $a = shortcode_atts( array(
        'message' => 'Please login to see the link',
    ), $atts );
    
    return $a['message'];        
} );

