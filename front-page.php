<?php
/**
 * The front page template file
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<?php get_template_part('template-parts/layout/hero-section'); ?>

<?php get_template_part('template-parts/layout/intro-stats'); ?>

<!-- Property Sections Container -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-24">

    <!-- Heights Category -->
    <section id="heights" class="scroll-mt-24">
        <div class="text-center mb-12">
            <span class="text-smdc-gold font-bold uppercase tracking-wider text-sm"><?php esc_html_e('Urban Sophistication', 'realestateagent'); ?></span>
            <h2 class="text-3xl md:text-4xl font-bold text-smdc-blue mt-2"><?php esc_html_e('SMDC Heights', 'realestateagent'); ?></h2>
            <div class="w-24 h-1 bg-smdc-gold mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto"><?php esc_html_e('Iconic towers and vertical villages located in the heart of the metro\'s busiest districts.', 'realestateagent'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="heights-grid">
            <!-- Heights properties will be rendered here by JavaScript -->
        </div>
    </section>

    <!-- Nature Category -->
    <section id="nature" class="scroll-mt-24">
        <div class="text-center mb-12">
            <span class="text-green-600 font-bold uppercase tracking-wider text-sm"><?php esc_html_e('Green Living', 'realestateagent'); ?></span>
            <h2 class="text-3xl md:text-4xl font-bold text-smdc-blue mt-2"><?php esc_html_e('SMDC Nature', 'realestateagent'); ?></h2>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto"><?php esc_html_e('Garden communities and resort-styled homes that offer a breath of fresh air.', 'realestateagent'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="nature-grid">
            <!-- Nature properties will be rendered here by JavaScript -->
        </div>
    </section>

    <!-- Symphony Category -->
    <section id="symphony" class="scroll-mt-24">
        <div class="text-center mb-12">
            <span class="text-purple-600 font-bold uppercase tracking-wider text-sm"><?php esc_html_e('Harmonious Lifestyle', 'realestateagent'); ?></span>
            <h2 class="text-3xl md:text-4xl font-bold text-smdc-blue mt-2"><?php esc_html_e('SMDC Symphony', 'realestateagent'); ?></h2>
            <div class="w-24 h-1 bg-purple-500 mx-auto mt-4 rounded-full"></div>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto"><?php esc_html_e('Master-planned communities where family, comfort, and rhythm come together.', 'realestateagent'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="symphony-grid">
            <!-- Symphony properties will be rendered here by JavaScript -->
        </div>
    </section>

</div>

<?php get_template_part('template-parts/layout/about-section'); ?>

<?php get_template_part('template-parts/layout/contact-section'); ?>

<?php get_template_part('template-parts/components/property-modal'); ?>

<?php get_template_part('template-parts/components/floating-contact'); ?>

<?php
get_footer();
