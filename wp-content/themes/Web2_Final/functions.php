<?php
function theme_enqueue_styles() {
    wp_enqueue_style('index', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/*if (!function_exists('log_debug')) {
    function log_debug($message) {
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('[Debug] ' . $message);
        }
    }
}*/


?>

