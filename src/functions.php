<?php

// Gets stylesheet from parent theme and inserts it into the HEAD using wp_enqueue_scripts
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Access Image Metadata
// Necessary for displaying the 'inspired by' posts.
function wp_get_attachment( $attachment_id ) {
	$attachment = get_post( $attachment_id );
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink( $attachment->ID ),
		'src' => $attachment->guid,
		'title' => $attachment->post_title
	);
}

// Removes Comments
// Removes from admin menu
function courtauld_remove_edit_comments() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'jclwilson_remove_edit_comments' );

// Removes from post and pages
function courtauld_remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action('init', 'courtauld_remove_comment_support', 100);

// Removes from admin bar
function courtauld_remove_admin_comments() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'courtauld_remove_admin_comments' );

?>
