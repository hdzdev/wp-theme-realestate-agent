<?php
/**
 * Hero Section Template Part
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit;
}

$hero_title = get_theme_mod('smdc_hero_title', 'Live the <span class="text-smdc-gold">Good Life</span>');
$hero_subtitle = get_theme_mod('smdc_hero_subtitle', 'Your trusted partner in finding the perfect SMDC home. Explore our premium collections: Heights, Nature, and Symphony.');
$hero_image = get_theme_mod('smdc_hero_image', 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
?>

<!-- Hero Section -->
<div class="relative pt-20 pb-16 md:pt-32 md:pb-24 flex items-center min-h-[70vh] bg-cover bg-center" style="background-image: linear-gradient(rgba(30, 58, 138, 0.8), rgba(30, 58, 138, 0.7)), url('<?php echo esc_url($hero_image); ?>');">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
            <?php echo wp_kses_post($hero_title); ?>
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-200 mb-10">
            <?php echo esc_html($hero_subtitle); ?>
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#heights" class="px-8 py-4 bg-smdc-gold text-white font-bold rounded-lg shadow-lg hover:bg-yellow-600 transition transform hover:-translate-y-1">
                <?php esc_html_e('Explore Properties', 'realestateagent'); ?>
            </a>
            <a href="#contact" class="px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-smdc-blue transition">
                <?php esc_html_e('Talk to an Agent', 'realestateagent'); ?>
            </a>
        </div>
    </div>
</div>
