<?php
/**
 * Property Modal Component
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Modal Overlay -->
<div id="property-modal" class="fixed inset-0 z-[60] hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-gray-900 bg-opacity-75 transition-opacity backdrop-blur-sm" onclick="closeModal()"></div>

    <!-- Modal Panel -->
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-4xl fade-in">
                
                <!-- Close Button -->
                <button onclick="closeModal()" class="absolute top-4 right-4 z-20 bg-white/80 p-2 rounded-full hover:bg-white text-gray-800 transition" aria-label="<?php esc_attr_e('Close modal', 'realestateagent'); ?>">
                    <i class="ph-bold ph-x text-xl"></i>
                </button>

                <div class="grid md:grid-cols-2">
                    <!-- Image Slider Side -->
                    <div class="relative h-64 md:h-auto bg-gray-200">
                        <img 
                            id="modal-image" 
                            src="" 
                            alt="<?php esc_attr_e('Property', 'realestateagent'); ?>" 
                            class="absolute inset-0 w-full h-full object-cover"
                            loading="lazy"
                            decoding="async">
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                            <h3 id="modal-title" class="text-2xl font-bold text-white"></h3>
                            <p id="modal-location-sub" class="text-gray-200 text-sm flex items-center">
                                <i class="ph-fill ph-map-pin mr-1"></i> <span id="modal-location-text"></span>
                            </p>
                        </div>
                    </div>

                    <!-- Content Side -->
                    <div class="p-8 max-h-[80vh] overflow-y-auto no-scrollbar">
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-sm font-bold text-smdc-gold uppercase tracking-wider mb-2"><?php esc_html_e('Overview', 'realestateagent'); ?></h4>
                                <p id="modal-description" class="text-gray-600 leading-relaxed text-sm"></p>
                            </div>

                            <div>
                                <h4 class="text-sm font-bold text-smdc-blue uppercase tracking-wider mb-2"><?php esc_html_e('Amenities', 'realestateagent'); ?></h4>
                                <ul id="modal-amenities" class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                                    <!-- Amenities injected here -->
                                </ul>
                            </div>

                            <div>
                                <h4 class="text-sm font-bold text-smdc-blue uppercase tracking-wider mb-2"><?php esc_html_e('Units Offered', 'realestateagent'); ?></h4>
                                <div id="modal-units" class="flex flex-wrap gap-2">
                                    <!-- Unit badges injected here -->
                                </div>
                            </div>

                            <div class="pt-6 border-t border-gray-100 flex gap-4">
                                <button onclick="scrollToInquiry()" class="flex-1 bg-smdc-blue text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition shadow-lg text-center">
                                    <?php esc_html_e('Inquire Now', 'realestateagent'); ?>
                                </button>
                                <button onclick="closeModal()" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-600 font-medium hover:bg-gray-50 transition">
                                    <?php esc_html_e('Close', 'realestateagent'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
