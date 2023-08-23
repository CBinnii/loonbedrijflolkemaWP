<?php 

/**
 * Template: Functions.php 
 */

// Removing the admin bar
remove_action('init', 'wp_admin_bar_init');

register_nav_menu( "Primary", "Menu" ); // Register the menu once

// Thumbnail support
add_theme_support('post-thumbnails', array('page', 'post', 'lookbook'));
add_theme_support('widgets');

function remove_menus(){
	remove_menu_page( 'upload.php' ); //Media - imagens, vídeos, docs, etc...
 	remove_menu_page( 'edit.php' ); //Appearance - aparência (recomendo!)
 	remove_menu_page( 'edit-comments.php' ); //Comments - comentários
}
add_action( 'admin_menu', 'remove_menus' );