<?php
/**
 * The footer template file
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-10 border-t border-gray-800" role="contentinfo">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-center md:text-left">
                <h4 class="text-white text-lg font-bold"><?php bloginfo('name'); ?></h4>
                <p class="text-sm mt-1"><?php esc_html_e('Helping you find your dream home since 2020.', 'realestateagent'); ?></p>
            </div>
            <div class="flex space-x-6">
                <?php
                $social_links = array(
                    'facebook' => get_theme_mod('smdc_facebook_url', '#'),
                    'instagram' => get_theme_mod('smdc_instagram_url', '#'),
                    'linkedin' => get_theme_mod('smdc_linkedin_url', '#'),
                );
                ?>
                <?php if (!empty($social_links['facebook'])) : ?>
                    <a href="<?php echo esc_url($social_links['facebook']); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-white transition" aria-label="<?php esc_attr_e('Facebook', 'realestateagent'); ?>">
                        <i class="ph-fill ph-facebook-logo text-2xl" aria-hidden="true"></i>
                    </a>
                <?php endif; ?>
                <?php if (!empty($social_links['instagram'])) : ?>
                    <a href="<?php echo esc_url($social_links['instagram']); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-white transition" aria-label="<?php esc_attr_e('Instagram', 'realestateagent'); ?>">
                        <i class="ph-fill ph-instagram-logo text-2xl" aria-hidden="true"></i>
                    </a>
                <?php endif; ?>
                <?php if (!empty($social_links['linkedin'])) : ?>
                    <a href="<?php echo esc_url($social_links['linkedin']); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-white transition" aria-label="<?php esc_attr_e('LinkedIn', 'realestateagent'); ?>">
                        <i class="ph-fill ph-linkedin-logo text-2xl" aria-hidden="true"></i>
                    </a>
                <?php endif; ?>
            </div>
            <div class="text-sm text-center md:text-right">
                <p>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'realestateagent'); ?></p>
                <p class="text-xs mt-1"><?php esc_html_e('Independent Accredited Seller.', 'realestateagent'); ?></p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

