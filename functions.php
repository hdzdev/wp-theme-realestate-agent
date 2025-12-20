<?php
/**
 * SMDC Real Estate Agent Theme Functions
 *
 * @package RealEstateAgent
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function smdc_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Set thumbnail sizes
    set_post_thumbnail_size(1200, 630, true);
    add_image_size('smdc-property-card', 400, 300, true);
    add_image_size('smdc-property-hero', 1920, 1080, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'realestateagent'),
        'footer' => __('Footer Menu', 'realestateagent'),
    ));
    
    // Load theme textdomain
    load_theme_textdomain('realestateagent', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'smdc_setup');

/**
 * Enqueue Styles and Scripts
 * Optimized for performance with proper dependencies and loading strategies
 */
function smdc_enqueue_assets() {
    // Use file modification time for cache busting instead of static version
    // This ensures browsers always get the latest CSS when the file is rebuilt
    $stylesheet_path = get_stylesheet_directory() . '/style.css';
    $theme_version = file_exists($stylesheet_path) ? filemtime($stylesheet_path) : '1.0.0';
    
    // Enqueue theme stylesheet (compiled Tailwind CSS)
    wp_enqueue_style(
        'smdc-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );
    
    // Preload Google Fonts for better performance
    wp_enqueue_style(
        'smdc-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
    
    // Add preconnect for Google Fonts
    add_filter('style_loader_tag', 'smdc_preconnect_google_fonts', 10, 2);
    
    // Enqueue Phosphor Icons (defer loading)
    wp_enqueue_script(
        'smdc-phosphor-icons',
        'https://unpkg.com/@phosphor-icons/web',
        array(),
        null,
        false
    );
    
    // Enqueue custom JavaScript with defer
    wp_enqueue_script(
        'smdc-script',
        get_template_directory_uri() . '/js/main.js',
        array(),
        $theme_version,
        true
    );
    
    // Pass data to JavaScript
    wp_localize_script('smdc-script', 'smdcData', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('smdc_nonce'),
        'siteUrl' => esc_url(home_url('/')),
    ));
    
    // Add defer attribute to scripts
    add_filter('script_loader_tag', 'smdc_defer_scripts', 10, 2);
}
add_action('wp_enqueue_scripts', 'smdc_enqueue_assets');

/**
 * Add preconnect for Google Fonts
 */
function smdc_preconnect_google_fonts($html, $handle) {
    if ('smdc-google-fonts' === $handle) {
        // Preconnect is already added in header.php, so we just return the HTML as-is
        return $html;
    }
    return $html;
}

/**
 * Add defer attribute to non-critical scripts
 */
function smdc_defer_scripts($tag, $handle) {
    $defer_scripts = array('smdc-phosphor-icons', 'smdc-script');
    
    if (in_array($handle, $defer_scripts, true)) {
        return str_replace(' src', ' defer src', $tag);
    }
    
    return $tag;
}

/**
 * Add lazy loading to images
 */
function smdc_add_lazy_loading($attr, $attachment, $size) {
    if (!is_admin()) {
        $attr['loading'] = 'lazy';
        $attr['decoding'] = 'async';
    }
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'smdc_add_lazy_loading', 10, 3);

/**
 * Add schema.org JSON-LD markup
 */
function smdc_add_schema_markup() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'RealEstateAgent',
            'name' => get_bloginfo('name'),
            'description' => get_bloginfo('description'),
            'url' => esc_url(home_url('/')),
        );
        
        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'smdc_add_schema_markup', 5);

/**
 * Register widget areas
 */
function smdc_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'realestateagent'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'realestateagent'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'smdc_widgets_init');

/**
 * Custom excerpt length
 */
function smdc_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'smdc_excerpt_length');

/**
 * Custom excerpt more
 */
function smdc_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'smdc_excerpt_more');

/**
 * Remove unnecessary WordPress features for performance
 */
function smdc_remove_unnecessary_features() {
    // Remove emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    
    // Remove unnecessary header links
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'smdc_remove_unnecessary_features');

/**
 * Add security headers
 */
function smdc_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
    }
}
add_action('send_headers', 'smdc_security_headers');

/**
 * Optimize database queries
 */
function smdc_optimize_queries($query) {
    if (!is_admin() && $query->is_main_query()) {
        // Optimize queries for better performance
        if (is_home() || is_front_page()) {
            $query->set('posts_per_page', 10);
        }
    }
}
add_action('pre_get_posts', 'smdc_optimize_queries');

/**
 * Fallback menu for when no menu is assigned
 */
function smdc_fallback_menu() {
    $is_mobile = (strpos(wp_debug_backtrace_summary(), 'mobile-menu') !== false);
    
    if ($is_mobile) {
        echo '<a href="' . esc_url(home_url('/#heights')) . '" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-md">' . esc_html__('Heights', 'realestateagent') . '</a>';
        echo '<a href="' . esc_url(home_url('/#nature')) . '" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-md">' . esc_html__('Nature', 'realestateagent') . '</a>';
        echo '<a href="' . esc_url(home_url('/#symphony')) . '" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-md">' . esc_html__('Symphony', 'realestateagent') . '</a>';
        echo '<a href="' . esc_url(home_url('/#about')) . '" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-md">' . esc_html__('About', 'realestateagent') . '</a>';
        echo '<a href="' . esc_url(home_url('/#contact')) . '" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-smdc-blue font-bold bg-blue-50 rounded-md">' . esc_html__('Contact Us', 'realestateagent') . '</a>';
    } else {
        echo '<div class="flex space-x-8">';
        echo '<a href="' . esc_url(home_url('/#heights')) . '" class="text-gray-600 hover:text-smdc-blue font-medium transition">' . esc_html__('Heights', 'realestateagent') . '</a>';
        echo '<a href="' . esc_url(home_url('/#nature')) . '" class="text-gray-600 hover:text-smdc-blue font-medium transition">' . esc_html__('Nature', 'realestateagent') . '</a>';
        echo '<a href="' . esc_url(home_url('/#symphony')) . '" class="text-gray-600 hover:text-smdc-blue font-medium transition">' . esc_html__('Symphony', 'realestateagent') . '</a>';
        echo '<a href="' . esc_url(home_url('/#about')) . '" class="text-gray-600 hover:text-smdc-blue font-medium transition">' . esc_html__('About', 'realestateagent') . '</a>';
        echo '<a href="' . esc_url(home_url('/#contact')) . '" class="px-4 py-2 bg-smdc-blue text-white rounded-md font-medium hover:bg-blue-800 transition shadow-lg shadow-blue-900/20">' . esc_html__('Inquire Now', 'realestateagent') . '</a>';
        echo '</div>';
    }
}
