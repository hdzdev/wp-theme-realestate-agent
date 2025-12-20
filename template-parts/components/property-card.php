<?php
/**
 * Property Card Component
 *
 * @package RealEstateAgent
 * @param array $property Property data array
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!isset($property)) {
    return;
}

$property_id = isset($property['id']) ? esc_attr($property['id']) : '';
$property_name = isset($property['name']) ? esc_html($property['name']) : '';
$property_location = isset($property['location']) ? esc_html($property['location']) : '';
$property_description = isset($property['description']) ? esc_html($property['description']) : '';
$property_image = isset($property['image']) ? esc_url($property['image']) : '';
?>

<div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group cursor-pointer border border-gray-100" onclick="openModal('<?php echo esc_js($property_id); ?>')">
    <div class="relative h-56 overflow-hidden">
        <img 
            src="<?php echo esc_url($property_image); ?>" 
            alt="<?php echo esc_attr($property_name); ?>" 
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
            loading="lazy"
            decoding="async"
            onerror="this.src='https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80&w=800'">
        <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all"></div>
        <div class="absolute bottom-3 left-4">
            <span class="inline-block bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-smdc-blue mb-1">
                <i class="ph-fill ph-map-pin"></i> <?php echo esc_html($property_location); ?>
            </span>
        </div>
    </div>
    <div class="p-6">
        <h3 class="text-xl font-bold text-gray-900 group-hover:text-smdc-blue transition-colors"><?php echo esc_html($property_name); ?></h3>
        <p class="text-gray-500 text-sm mt-2 line-clamp-2"><?php echo esc_html($property_description); ?></p>
        <div class="mt-4 flex items-center justify-between">
            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wide"><?php esc_html_e('View Details', 'realestateagent'); ?></span>
            <div class="w-8 h-8 rounded-full bg-smdc-light flex items-center justify-center text-smdc-blue group-hover:bg-smdc-blue group-hover:text-white transition">
                <i class="ph-bold ph-arrow-right"></i>
            </div>
        </div>
    </div>
</div>
