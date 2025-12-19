<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50 text-gray-800 antialiased'); ?>>
    <?php wp_body_open(); ?>

    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
                        <div class="bg-smdc-blue text-white p-2 rounded-lg">
                            <i class="ph-fill ph-house-line text-2xl"></i>
                        </div>
                        <div>
                            <span class="font-bold text-xl tracking-tight text-smdc-blue block leading-none">SMDC</span>
                            <span class="text-xs text-smdc-gold font-semibold tracking-widest uppercase">Premier Agent</span>
                        </div>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#heights" class="text-gray-600 hover:text-smdc-blue font-medium transition">Heights</a>
                    <a href="#nature" class="text-gray-600 hover:text-smdc-blue font-medium transition">Nature</a>
                    <a href="#symphony" class="text-gray-600 hover:text-smdc-blue font-medium transition">Symphony</a>
                    <a href="#about" class="text-gray-600 hover:text-smdc-blue font-medium transition">About</a>
                    <a href="#contact" class="px-4 py-2 bg-smdc-blue text-white rounded-md font-medium hover:bg-blue-800 transition shadow-lg shadow-blue-900/20">Inquire Now</a>
                </div>
                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button onclick="toggleMobileMenu()" class="text-gray-600 hover:text-smdc-blue focus:outline-none p-2">
                        <i class="ph ph-list text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-2 shadow-lg">
                <a href="#heights" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-md">Heights</a>
                <a href="#nature" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-md">Nature</a>
                <a href="#symphony" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-md">Symphony</a>
                <a href="#about" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-md">About</a>
                <a href="#contact" onclick="toggleMobileMenu()" class="block px-3 py-3 text-base font-medium text-smdc-blue font-bold bg-blue-50 rounded-md">Contact Us</a>
            </div>
        </div>
    </nav>

