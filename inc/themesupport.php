<?php

// Featured Image
add_theme_support( 'post-thumbnails' );

// hide default post types
function remove_default_post_type() {
    remove_menu_page('edit.php'); // Removes the "Posts" menu item
}
add_action('admin_menu', 'remove_default_post_type');
