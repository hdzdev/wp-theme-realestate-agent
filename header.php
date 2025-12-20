<?php
/**
 * The header for our theme
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50 text-gray-800 antialiased'); ?>>
    <?php wp_body_open(); ?>

    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full z-50 transition-all duration-300" id="navbar" role="navigation" aria-label="<?php esc_attr_e('Primary navigation', 'realestateagent'); ?>">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2" aria-label="<?php esc_attr_e('Home', 'realestateagent'); ?>">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <div class="bg-smdc-blue text-white p-2 rounded-lg">
                                <i class="ph-fill ph-house-line text-2xl" aria-hidden="true"></i>
                            </div>
                            <div>
                                <span class="font-bold text-xl tracking-tight text-smdc-blue block leading-none"><?php bloginfo('name'); ?></span>
                                <span class="text-xs text-smdc-gold font-semibold tracking-widest uppercase"><?php esc_html_e('Premier Agent', 'realestateagent'); ?></span>
                            </div>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'flex space-x-8',
                            'container'      => false,
                            'fallback_cb'    => 'smdc_fallback_menu',
                        ));
                    } else {
                        smdc_fallback_menu();
                    }
                    ?>
                </div>
                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button 
                        onclick="toggleMobileMenu()" 
                        class="text-gray-600 hover:text-smdc-blue focus:outline-none p-2" 
                        aria-label="<?php esc_attr_e('Toggle mobile menu', 'realestateagent'); ?>" 
                        aria-expanded="false"
                        id="mobile-menu-toggle">
                        <i class="ph ph-list text-2xl" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full" role="menu">
            <div class="px-4 pt-2 pb-6 space-y-2 shadow-lg" id="mobile-menu-items">
                <?php
                if (has_nav_menu('primary')) {
                    $menu_items = wp_get_nav_menu_items(wp_get_nav_menu_object(get_nav_menu_locations()['primary']));
                    if ($menu_items) {
                        foreach ($menu_items as $item) {
                            echo '<a href="' . esc_url($item->url) . '" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-md" role="menuitem">' . esc_html($item->title) . '</a>';
                        }
                    } else {
                        smdc_fallback_menu();
                    }
                } else {
                    smdc_fallback_menu();
                }
                ?>
            </div>
        </div>
    </nav>
