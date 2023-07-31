<?php 
//  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
// function theme_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

// }


/* Hook Ajout du lien admin pour les utilisateurs connectés*/

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
	if (is_user_logged_in() && $args->menu === 'primary') {
		$items .= '<li id="menu-item-111" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
		<a href="http://site-planty.local/admin/?customize_changeset_uuid=378b9268-0168-4cf2-9b95-a3b717437b2b&amp;customize_autosaved=on" 
		class="hfe-menu-item">Admin</a></li>' ;	
    }
	return $items;
}
 ?>    