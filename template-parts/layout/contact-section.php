<?php
/**
 * Contact Section Template Part
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Inquiry Section -->
<section id="contact" class="bg-smdc-blue py-20 relative overflow-hidden">
    <!-- Decoration circles -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-blue-800 rounded-full opacity-30 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-72 h-72 bg-smdc-gold rounded-full opacity-20 blur-3xl"></div>

    <div class="max-w-4xl mx-auto px-4 relative z-10">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
            <div class="md:w-1/2 p-10 bg-gray-50 flex flex-col justify-center">
                <h3 class="text-2xl font-bold text-smdc-blue mb-4"><?php esc_html_e('Start Your Investment Today', 'realestateagent'); ?></h3>
                <p class="text-gray-600 mb-6">
                    <?php esc_html_e('Whether you are looking for a home or a high-yield investment, we are here to guide you through every step of the process.', 'realestateagent'); ?>
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center text-gray-700">
                        <i class="ph-fill ph-check-circle text-smdc-gold text-xl mr-3"></i>
                        <span><?php esc_html_e('Free Property Consultation', 'realestateagent'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="ph-fill ph-check-circle text-smdc-gold text-xl mr-3"></i>
                        <span><?php esc_html_e('Sample Computations', 'realestateagent'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <i class="ph-fill ph-check-circle text-smdc-gold text-xl mr-3"></i>
                        <span><?php esc_html_e('Site Tripping Assistance', 'realestateagent'); ?></span>
                    </li>
                </ul>
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <p class="text-sm text-gray-500"><?php esc_html_e('Call or Message us directly:', 'realestateagent'); ?></p>
                    <p class="text-xl font-bold text-smdc-blue mt-1 flex items-center">
                        <i class="ph-fill ph-phone mr-2"></i> 
                        <a href="tel:+639171234567" class="hover:underline">+63 917 123 4567</a>
                    </p>
                </div>
            </div>
            <div class="md:w-1/2 p-10">
                <form onsubmit="handleFormSubmit(event)" class="space-y-4">
                    <?php wp_nonce_field('smdc_contact_form', 'smdc_contact_nonce'); ?>
                    <div>
                        <label for="contact-name" class="block text-sm font-medium text-gray-700 mb-1"><?php esc_html_e('Full Name', 'realestateagent'); ?></label>
                        <input 
                            type="text" 
                            id="contact-name"
                            name="contact_name"
                            required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-smdc-blue focus:border-transparent outline-none transition" 
                            placeholder="<?php esc_attr_e('John Doe', 'realestateagent'); ?>">
                    </div>
                    <div>
                        <label for="contact-email" class="block text-sm font-medium text-gray-700 mb-1"><?php esc_html_e('Email Address', 'realestateagent'); ?></label>
                        <input 
                            type="email" 
                            id="contact-email"
                            name="contact_email"
                            required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-smdc-blue focus:border-transparent outline-none transition" 
                            placeholder="<?php esc_attr_e('john@example.com', 'realestateagent'); ?>">
                    </div>
                    <div>
                        <label for="contact-property-select" class="block text-sm font-medium text-gray-700 mb-1"><?php esc_html_e('Property of Interest', 'realestateagent'); ?></label>
                        <select 
                            id="contact-property-select" 
                            name="contact_property"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-smdc-blue focus:border-transparent outline-none transition">
                            <option value="General Inquiry"><?php esc_html_e('General Inquiry', 'realestateagent'); ?></option>
                            <option value="SMDC Heights"><?php esc_html_e('SMDC Heights', 'realestateagent'); ?></option>
                            <option value="SMDC Nature"><?php esc_html_e('SMDC Nature', 'realestateagent'); ?></option>
                            <option value="SMDC Symphony"><?php esc_html_e('SMDC Symphony', 'realestateagent'); ?></option>
                        </select>
                    </div>
                    <div>
                        <label for="contact-message" class="block text-sm font-medium text-gray-700 mb-1"><?php esc_html_e('Message', 'realestateagent'); ?></label>
                        <textarea 
                            id="contact-message"
                            name="contact_message"
                            rows="3" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-smdc-blue focus:border-transparent outline-none transition" 
                            placeholder="<?php esc_attr_e('I would like to know more about...', 'realestateagent'); ?>"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-smdc-blue text-white font-bold py-3 rounded-lg hover:bg-blue-800 transition transform active:scale-95 shadow-lg">
                        <?php esc_html_e('Send Inquiry', 'realestateagent'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
