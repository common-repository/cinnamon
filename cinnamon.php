<?php
/*
Plugin Name: Cinnamon
Plugin URI: https://github.com/dartiss/cinnamon
Description: Find in-page text using synonyms.
Version: 1.2.3
Author: David Artiss
Author URI: https://artiss.blog
Text Domain: cinnamon
*/

/**
* Plugin initialisation
*
* Register the cinnamon script
*
* @since	1.1.1
*/

function cinnamon_plugin_init() {

	wp_register_script( 'cinnamon_script', plugin_dir_url( __FILE__ ) . 'js/cinnamon.min.js', '', '1.0.6', true );

}

add_action( 'init', 'cinnamon_plugin_init' );

/**
* Add meta to plugin details
*
* Add options to plugin meta line
*
* @since	1.0
*
* @param	string  $links	Current links
* @param	string  $file	File in use
* @return   	string		Links, now with settings added
*/

function cinnamon_set_plugin_meta( $links, $file ) {

	if ( false !== strpos( $file, 'cinnamon.php' ) ) {

		$links = array_merge( $links, array( '<a href="https://github.com/dartiss/cinnamon">' . __( 'Github', 'cinnamon' ) . '</a>' ) ); 

		$links = array_merge( $links, array( '<a href="http://wordpress.org/support/plugin/cinnamon">' . __( 'Support', 'cinnamon' ) . '</a>' ) ); 
	}

	return $links;
}
add_filter( 'plugin_row_meta', 'cinnamon_set_plugin_meta', 10, 2 );

/**
* Add script to theme
*
* Add Cinnamon scripts to the main theme
*
* @since	1.2
*/

function cinnamon_script_output() {

	global $add_cinnamon_script;

	if ( $add_cinnamon_script ) { wp_print_scripts( 'cinnamon_script' ); }

	return;
}

add_action( 'wp_footer', 'cinnamon_script_output' );

/**
* Cinnamon shortcode
*
* Shortcode function to output cinnamon script
*
* @since	1.0
*
* @param	string	$paras		Shortcode parameters
* @param	string	$content	Word to be cinnamoned!
* @return	string			Output code
*/

function cinnamon_shortcode( $paras = '', $content = '' ) {

	// Define global to add Cinnamon script to page

	global $add_cinnamon_script;
	$add_cinnamon_script = true;

    // Loop through shortcode parameters and, if found, built the cinnamon word list

    $array = 0;
    $cinnamon_list = '';
    while ( $array < count( $paras ) ) {
		if ( 0 < $array ) { $cinnamon_list .= ','; }
		$cinnamon_list .= $paras[ $array ];
		$array++;
    }

    // If a word list exists, output the cinnamon code

    if ( '' != $cinnamon_list ) { $content = '<span data-cinnamon="' . $cinnamon_list . '">' . $content. '</span>'; }

    return $content;

}

add_shortcode( 'cinnamon', 'cinnamon_shortcode' );
?>
