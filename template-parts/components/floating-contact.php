<?php
/**
 * Floating Contact Button Component
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Floating Contact Button -->
<div class="fixed bottom-6 left-6 z-50 flex flex-col-reverse items-center gap-3">
    <!-- Main Toggle Button -->
    <button 
        id="contactFab" 
        onclick="toggleContactMenu()" 
        class="w-14 h-14 bg-smdc-blue text-white rounded-full shadow-lg hover:bg-blue-800 transition-all duration-300 transform hover:scale-110 focus:outline-none flex items-center justify-center border-2 border-white"
        aria-label="<?php esc_attr_e('Toggle contact options', 'realestateagent'); ?>">
        <i class="ph-fill ph-chat-teardrop-text text-2xl"></i>
    </button>
    
    <!-- Options (Hidden by default) -->
    <div id="contactOptions" class="flex flex-col gap-3 hidden opacity-0 translate-y-4 transition-all duration-300 mb-2">
        <!-- Email -->
        <a 
            href="mailto:agent@smdc.com" 
            class="w-12 h-12 bg-white text-gray-700 rounded-full shadow-md hover:bg-gray-50 flex items-center justify-center transition-transform hover:scale-110" 
            title="<?php esc_attr_e('Email Us', 'realestateagent'); ?>"
            aria-label="<?php esc_attr_e('Email Us', 'realestateagent'); ?>">
            <i class="ph-fill ph-envelope-simple text-xl"></i>
        </a>
        <!-- WhatsApp -->
        <a 
            href="https://wa.me/639171234567" 
            target="_blank" 
            rel="noopener noreferrer"
            class="w-12 h-12 bg-[#25D366] text-white rounded-full shadow-md hover:bg-[#128C7E] flex items-center justify-center transition-transform hover:scale-110" 
            title="<?php esc_attr_e('WhatsApp', 'realestateagent'); ?>"
            aria-label="<?php esc_attr_e('WhatsApp', 'realestateagent'); ?>">
            <i class="ph-fill ph-whatsapp-logo text-xl"></i>
        </a>
        <!-- Viber -->
        <a 
            href="viber://chat?number=%2B639171234567" 
            class="w-12 h-12 bg-[#7360f2] text-white rounded-full shadow-md hover:bg-[#5949c2] flex items-center justify-center transition-transform hover:scale-110" 
            title="<?php esc_attr_e('Viber', 'realestateagent'); ?>"
            aria-label="<?php esc_attr_e('Viber', 'realestateagent'); ?>">
            <i class="ph-fill ph-phone-call text-xl"></i>
        </a>
        <!-- Mobile -->
        <a 
            href="tel:+639171234567" 
            class="w-12 h-12 bg-blue-600 text-white rounded-full shadow-md hover:bg-blue-700 flex items-center justify-center transition-transform hover:scale-110" 
            title="<?php esc_attr_e('Call Now', 'realestateagent'); ?>"
            aria-label="<?php esc_attr_e('Call Now', 'realestateagent'); ?>">
            <i class="ph-fill ph-phone text-xl"></i>
        </a>
    </div>
</div>
