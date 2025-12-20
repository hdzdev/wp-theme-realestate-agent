<?php
/**
 * Intro Stats Section Template Part
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Intro Stats -->
<div class="bg-white py-12 shadow-sm relative z-20 -mt-10 mx-4 md:mx-auto max-w-6xl rounded-xl border border-gray-100">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-100">
        <div class="p-4">
            <i class="ph-duotone ph-buildings text-4xl text-smdc-blue mb-2"></i>
            <div class="text-3xl font-bold text-gray-900">20+</div>
            <div class="text-sm text-gray-500 uppercase tracking-wide"><?php esc_html_e('Properties', 'realestateagent'); ?></div>
        </div>
        <div class="p-4">
            <i class="ph-duotone ph-map-pin text-4xl text-smdc-blue mb-2"></i>
            <div class="text-3xl font-bold text-gray-900"><?php esc_html_e('Prime', 'realestateagent'); ?></div>
            <div class="text-sm text-gray-500 uppercase tracking-wide"><?php esc_html_e('Locations', 'realestateagent'); ?></div>
        </div>
        <div class="p-4">
            <i class="ph-duotone ph-star text-4xl text-smdc-blue mb-2"></i>
            <div class="text-3xl font-bold text-gray-900"><?php esc_html_e('5-Star', 'realestateagent'); ?></div>
            <div class="text-sm text-gray-500 uppercase tracking-wide"><?php esc_html_e('Amenities', 'realestateagent'); ?></div>
        </div>
        <div class="p-4">
            <i class="ph-duotone ph-users text-4xl text-smdc-blue mb-2"></i>
            <div class="text-3xl font-bold text-gray-900"><?php esc_html_e('Trusted', 'realestateagent'); ?></div>
            <div class="text-sm text-gray-500 uppercase tracking-wide"><?php esc_html_e('Service', 'realestateagent'); ?></div>
        </div>
    </div>
</div>
