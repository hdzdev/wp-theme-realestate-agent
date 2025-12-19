<?php
/**
 * Real Estate Agent Theme Functions
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function realestateagent_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'realestateagent'),
        'footer' => __('Footer Menu', 'realestateagent'),
    ));
}
add_action('after_setup_theme', 'realestateagent_setup');

/**
 * Add Tailwind Config Script (must be before Tailwind CSS)
 */
function realestateagent_tailwind_config() {
    ?>
    <script>
        if (typeof tailwind === 'undefined') {
            window.tailwind = {};
        }
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        smdc: {
                            blue: '#1e3a8a',
                            gold: '#c29a48',
                            light: '#f3f4f6',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Critical button styles - ensure Inquire Now buttons display correctly */
        .bg-smdc-blue,
        a.bg-smdc-blue,
        button.bg-smdc-blue {
            background-color: #1e3a8a !important;
        }
        .bg-smdc-blue.text-white,
        a.bg-smdc-blue.text-white,
        button.bg-smdc-blue.text-white {
            color: #ffffff !important;
        }
        a.bg-smdc-blue:hover,
        button.bg-smdc-blue:hover {
            background-color: #1e40af !important;
        }
    </style>
    <?php
}
add_action('wp_head', 'realestateagent_tailwind_config', 1);

/**
 * Enqueue Styles and Scripts
 */
function realestateagent_enqueue_assets() {
    // Enqueue theme stylesheet
    wp_enqueue_style('realestateagent-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Enqueue Tailwind CSS from CDN (it's actually a JavaScript file)
    wp_enqueue_script('tailwind-css', 'https://cdn.tailwindcss.com', array(), null, false);
    
    // Enqueue Phosphor Icons
    wp_enqueue_script('phosphor-icons', 'https://unpkg.com/@phosphor-icons/web', array(), null, false);
    
    // Enqueue custom JavaScript
    wp_enqueue_script('realestateagent-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    
    // Pass data to JavaScript
    wp_localize_script('realestateagent-script', 'realestateagentData', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'realestateagent_enqueue_assets');

