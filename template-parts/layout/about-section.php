<?php
/**
 * About Section Template Part
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- About Section -->
<section id="about" class="py-20 bg-white border-t border-gray-100 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Agent Profile -->
        <div class="flex flex-col md:flex-row items-center gap-12 mb-20">
            <div class="w-full md:w-1/3">
                <div class="relative">
                    <div class="absolute inset-0 bg-smdc-gold rounded-2xl transform rotate-3 translate-x-2 translate-y-2"></div>
                    <img 
                        src="<?php echo esc_url('https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800'); ?>" 
                        alt="<?php esc_attr_e('Agent Profile', 'realestateagent'); ?>" 
                        class="relative rounded-2xl shadow-lg w-full object-cover h-[400px]"
                        loading="lazy"
                        decoding="async">
                </div>
            </div>
            <div class="w-full md:w-2/3">
                <span class="text-smdc-blue font-bold uppercase tracking-wider text-sm mb-2 block"><?php esc_html_e('About Your Agent', 'realestateagent'); ?></span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6"><?php esc_html_e('Dedicated to Finding Your Perfect Home', 'realestateagent'); ?></h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    <?php esc_html_e('Hello! I am your dedicated partner in finding the perfect property within the SMDC portfolio. With a deep understanding of the local market and a passion for personalized service, I ensure a smooth, transparent, and rewarding buying process for every client.', 'realestateagent'); ?>
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex items-start">
                        <i class="ph-fill ph-certificate text-smdc-gold text-3xl mr-3"></i>
                        <div>
                            <h4 class="font-bold text-gray-900"><?php esc_html_e('Certified', 'realestateagent'); ?></h4>
                            <p class="text-sm text-gray-500"><?php esc_html_e('Licensed Real Estate Broker', 'realestateagent'); ?></p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="ph-fill ph-handshake text-smdc-gold text-3xl mr-3"></i>
                        <div>
                            <h4 class="font-bold text-gray-900"><?php esc_html_e('Trusted', 'realestateagent'); ?></h4>
                            <p class="text-sm text-gray-500"><?php esc_html_e('500+ Clients Assisted', 'realestateagent'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-gray-900"><?php esc_html_e('What Clients Say', 'realestateagent'); ?></h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 p-8 rounded-xl relative group hover:shadow-lg transition">
                <i class="ph-fill ph-quotes text-4xl text-smdc-gold/20 absolute top-4 right-4"></i>
                <p class="text-gray-600 italic mb-6"><?php esc_html_e('"Professional, knowledgeable, and very patient. Helped us find the perfect unit in Shore Residences."', 'realestateagent'); ?></p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-smdc-blue rounded-full flex items-center justify-center text-white font-bold">JD</div>
                    <div>
                        <div class="font-bold text-gray-900"><?php esc_html_e('John D.', 'realestateagent'); ?></div>
                        <div class="text-xs text-gray-500"><?php esc_html_e('Shore Residences Investor', 'realestateagent'); ?></div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-gray-50 p-8 rounded-xl relative group hover:shadow-lg transition">
                <i class="ph-fill ph-quotes text-4xl text-smdc-gold/20 absolute top-4 right-4"></i>
                <p class="text-gray-600 italic mb-6"><?php esc_html_e('"The process was seamless from inquiry to turnover. Highly recommended for OFWs looking to invest."', 'realestateagent'); ?></p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-smdc-blue rounded-full flex items-center justify-center text-white font-bold">MR</div>
                    <div>
                        <div class="font-bold text-gray-900"><?php esc_html_e('Maria R.', 'realestateagent'); ?></div>
                        <div class="text-xs text-gray-500"><?php esc_html_e('Air Residences Owner', 'realestateagent'); ?></div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="bg-gray-50 p-8 rounded-xl relative group hover:shadow-lg transition">
                <i class="ph-fill ph-quotes text-4xl text-smdc-gold/20 absolute top-4 right-4"></i>
                <p class="text-gray-600 italic mb-6"><?php esc_html_e('"Excellent service! Provided us with detailed computations and honest advice about the market."', 'realestateagent'); ?></p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-smdc-blue rounded-full flex items-center justify-center text-white font-bold">RL</div>
                    <div>
                        <div class="font-bold text-gray-900"><?php esc_html_e('Robert L.', 'realestateagent'); ?></div>
                        <div class="text-xs text-gray-500"><?php esc_html_e('Glam Residences Buyer', 'realestateagent'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
