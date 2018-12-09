<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


if ( !function_exists( 'twentynineteen_parent_css' ) ):
    function twentynineteen_parent_css() {
        wp_enqueue_style( 'parent-css', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'twentynineteen_parent_css', 10 );

