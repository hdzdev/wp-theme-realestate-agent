<?php
/**
 * The main template file
 *
 * @package RealEstateAgent
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header();
?>

    <!-- Hero Section -->
    <div class="relative pt-20 pb-16 md:pt-32 md:pb-24 flex items-center min-h-[70vh] bg-cover bg-center" style="background-image: linear-gradient(rgba(30, 58, 138, 0.8), rgba(30, 58, 138, 0.7)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Live the <span class="text-smdc-gold">Good Life</span>
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-200 mb-10">
                Your trusted partner in finding the perfect SMDC home. Explore our premium collections: Heights, Nature, and Symphony.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#heights" class="px-8 py-4 bg-smdc-gold text-white font-bold rounded-lg shadow-lg hover:bg-yellow-600 transition transform hover:-translate-y-1">
                    Explore Properties
                </a>
                <a href="#contact" class="px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-smdc-blue transition">
                    Talk to an Agent
                </a>
            </div>
        </div>
    </div>

    <!-- Intro Stats -->
    <div class="bg-white py-12 shadow-sm relative z-20 -mt-10 mx-4 md:mx-auto max-w-6xl rounded-xl border border-gray-100">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-100">
            <div class="p-4">
                <i class="ph-duotone ph-buildings text-4xl text-smdc-blue mb-2"></i>
                <div class="text-3xl font-bold text-gray-900">20+</div>
                <div class="text-sm text-gray-500 uppercase tracking-wide">Properties</div>
            </div>
            <div class="p-4">
                <i class="ph-duotone ph-map-pin text-4xl text-smdc-blue mb-2"></i>
                <div class="text-3xl font-bold text-gray-900">Prime</div>
                <div class="text-sm text-gray-500 uppercase tracking-wide">Locations</div>
            </div>
            <div class="p-4">
                <i class="ph-duotone ph-star text-4xl text-smdc-blue mb-2"></i>
                <div class="text-3xl font-bold text-gray-900">5-Star</div>
                <div class="text-sm text-gray-500 uppercase tracking-wide">Amenities</div>
            </div>
            <div class="p-4">
                <i class="ph-duotone ph-users text-4xl text-smdc-blue mb-2"></i>
                <div class="text-3xl font-bold text-gray-900">Trusted</div>
                <div class="text-sm text-gray-500 uppercase tracking-wide">Service</div>
            </div>
        </div>
    </div>

    <!-- Property Sections Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-24">

        <!-- Heights Category -->
        <section id="heights" class="scroll-mt-24">
            <div class="text-center mb-12">
                <span class="text-smdc-gold font-bold uppercase tracking-wider text-sm">Urban Sophistication</span>
                <h2 class="text-3xl md:text-4xl font-bold text-smdc-blue mt-2">SMDC Heights</h2>
                <div class="w-24 h-1 bg-smdc-gold mx-auto mt-4 rounded-full"></div>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Iconic towers and vertical villages located in the heart of the metro's busiest districts.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="heights-grid">
                <!-- Heights properties will be rendered here by JavaScript -->
            </div>
        </section>

        <!-- Nature Category -->
        <section id="nature" class="scroll-mt-24">
            <div class="text-center mb-12">
                <span class="text-green-600 font-bold uppercase tracking-wider text-sm">Green Living</span>
                <h2 class="text-3xl md:text-4xl font-bold text-smdc-blue mt-2">SMDC Nature</h2>
                <div class="w-24 h-1 bg-green-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Garden communities and resort-styled homes that offer a breath of fresh air.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="nature-grid">
                <!-- Nature properties will be rendered here by JavaScript -->
            </div>
        </section>

        <!-- Symphony Category -->
        <section id="symphony" class="scroll-mt-24">
            <div class="text-center mb-12">
                <span class="text-purple-600 font-bold uppercase tracking-wider text-sm">Harmonious Lifestyle</span>
                <h2 class="text-3xl md:text-4xl font-bold text-smdc-blue mt-2">SMDC Symphony</h2>
                <div class="w-24 h-1 bg-purple-500 mx-auto mt-4 rounded-full"></div>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Master-planned communities where family, comfort, and rhythm come together.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="symphony-grid">
                <!-- Symphony properties will be rendered here by JavaScript -->
            </div>
        </section>

    </div>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white border-t border-gray-100 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Agent Profile -->
            <div class="flex flex-col md:flex-row items-center gap-12 mb-20">
                <div class="w-full md:w-1/3">
                    <div class="relative">
                        <div class="absolute inset-0 bg-smdc-gold rounded-2xl transform rotate-3 translate-x-2 translate-y-2"></div>
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800" alt="Agent Profile" class="relative rounded-2xl shadow-lg w-full object-cover h-[400px]">
                    </div>
                </div>
                <div class="w-full md:w-2/3">
                    <span class="text-smdc-blue font-bold uppercase tracking-wider text-sm mb-2 block">About Your Agent</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Dedicated to Finding Your Perfect Home</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Hello! I am your dedicated partner in finding the perfect property within the SMDC portfolio. With a deep understanding of the local market and a passion for personalized service, I ensure a smooth, transparent, and rewarding buying process for every client.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <i class="ph-fill ph-certificate text-smdc-gold text-3xl mr-3"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">Certified</h4>
                                <p class="text-sm text-gray-500">Licensed Real Estate Broker</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="ph-fill ph-handshake text-smdc-gold text-3xl mr-3"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">Trusted</h4>
                                <p class="text-sm text-gray-500">500+ Clients Assisted</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="text-center mb-12">
                <h3 class="text-2xl font-bold text-gray-900">What Clients Say</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-xl relative group hover:shadow-lg transition">
                    <i class="ph-fill ph-quotes text-4xl text-smdc-gold/20 absolute top-4 right-4"></i>
                    <p class="text-gray-600 italic mb-6">"Professional, knowledgeable, and very patient. Helped us find the perfect unit in Shore Residences."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-smdc-blue rounded-full flex items-center justify-center text-white font-bold">JD</div>
                        <div>
                            <div class="font-bold text-gray-900">John D.</div>
                            <div class="text-xs text-gray-500">Shore Residences Investor</div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-xl relative group hover:shadow-lg transition">
                    <i class="ph-fill ph-quotes text-4xl text-smdc-gold/20 absolute top-4 right-4"></i>
                    <p class="text-gray-600 italic mb-6">"The process was seamless from inquiry to turnover. Highly recommended for OFWs looking to invest."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-smdc-blue rounded-full flex items-center justify-center text-white font-bold">MR</div>
                        <div>
                            <div class="font-bold text-gray-900">Maria R.</div>
                            <div class="text-xs text-gray-500">Air Residences Owner</div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-xl relative group hover:shadow-lg transition">
                    <i class="ph-fill ph-quotes text-4xl text-smdc-gold/20 absolute top-4 right-4"></i>
                    <p class="text-gray-600 italic mb-6">"Excellent service! Provided us with detailed computations and honest advice about the market."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-smdc-blue rounded-full flex items-center justify-center text-white font-bold">RL</div>
                        <div>
                            <div class="font-bold text-gray-900">Robert L.</div>
                            <div class="text-xs text-gray-500">Glam Residences Buyer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inquiry Section -->
    <section id="contact" class="bg-smdc-blue py-20 relative overflow-hidden">
        <!-- Decoration circles -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-blue-800 rounded-full opacity-30 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-72 h-72 bg-smdc-gold rounded-full opacity-20 blur-3xl"></div>

        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-1/2 p-10 bg-gray-50 flex flex-col justify-center">
                    <h3 class="text-2xl font-bold text-smdc-blue mb-4">Start Your Investment Today</h3>
                    <p class="text-gray-600 mb-6">
                        Whether you are looking for a home or a high-yield investment, we are here to guide you through every step of the process.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center text-gray-700">
                            <i class="ph-fill ph-check-circle text-smdc-gold text-xl mr-3"></i>
                            <span>Free Property Consultation</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="ph-fill ph-check-circle text-smdc-gold text-xl mr-3"></i>
                            <span>Sample Computations</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="ph-fill ph-check-circle text-smdc-gold text-xl mr-3"></i>
                            <span>Site Tripping Assistance</span>
                        </li>
                    </ul>
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <p class="text-sm text-gray-500">Call or Message us directly:</p>
                        <p class="text-xl font-bold text-smdc-blue mt-1 flex items-center">
                            <i class="ph-fill ph-phone mr-2"></i> +63 917 123 4567
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2 p-10">
                    <form onsubmit="handleFormSubmit(event)" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-smdc-blue focus:border-transparent outline-none transition" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-smdc-blue focus:border-transparent outline-none transition" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Property of Interest</label>
                            <select id="contact-property-select" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-smdc-blue focus:border-transparent outline-none transition">
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="SMDC Heights">SMDC Heights</option>
                                <option value="SMDC Nature">SMDC Nature</option>
                                <option value="SMDC Symphony">SMDC Symphony</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea rows="3" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-smdc-blue focus:border-transparent outline-none transition" placeholder="I would like to know more about..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-smdc-blue text-white font-bold py-3 rounded-lg hover:bg-blue-800 transition transform active:scale-95 shadow-lg">
                            Send Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Overlay -->
    <div id="property-modal" class="fixed inset-0 z-[60] hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-gray-900 bg-opacity-75 transition-opacity backdrop-blur-sm" onclick="closeModal()"></div>

        <!-- Modal Panel -->
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-4xl fade-in">
                    
                    <!-- Close Button -->
                    <button onclick="closeModal()" class="absolute top-4 right-4 z-20 bg-white/80 p-2 rounded-full hover:bg-white text-gray-800 transition">
                        <i class="ph-bold ph-x text-xl"></i>
                    </button>

                    <div class="grid md:grid-cols-2">
                        <!-- Image Slider Side -->
                        <div class="relative h-64 md:h-auto bg-gray-200">
                            <img id="modal-image" src="" alt="Property" class="absolute inset-0 w-full h-full object-cover">
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
                                    <h4 class="text-sm font-bold text-smdc-gold uppercase tracking-wider mb-2">Overview</h4>
                                    <p id="modal-description" class="text-gray-600 leading-relaxed text-sm"></p>
                                </div>

                                <div>
                                    <h4 class="text-sm font-bold text-smdc-blue uppercase tracking-wider mb-2">Amenities</h4>
                                    <ul id="modal-amenities" class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                                        <!-- Amenities injected here -->
                                    </ul>
                                </div>

                                <div>
                                    <h4 class="text-sm font-bold text-smdc-blue uppercase tracking-wider mb-2">Units Offered</h4>
                                    <div id="modal-units" class="flex flex-wrap gap-2">
                                        <!-- Unit badges injected here -->
                                    </div>
                                </div>

                                <div class="pt-6 border-t border-gray-100 flex gap-4">
                                    <button onclick="scrollToInquiry()" class="flex-1 bg-smdc-blue text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition shadow-lg text-center">
                                        Inquire Now
                                    </button>
                                    <button onclick="closeModal()" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-600 font-medium hover:bg-gray-50 transition">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Contact Button -->
    <div class="fixed bottom-6 left-6 z-50 flex flex-col-reverse items-center gap-3">
        <!-- Main Toggle Button -->
        <button id="contactFab" onclick="toggleContactMenu()" class="w-14 h-14 bg-smdc-blue text-white rounded-full shadow-lg hover:bg-blue-800 transition-all duration-300 transform hover:scale-110 focus:outline-none flex items-center justify-center border-2 border-white">
            <i class="ph-fill ph-chat-teardrop-text text-2xl"></i>
        </button>
        
        <!-- Options (Hidden by default) -->
        <div id="contactOptions" class="flex flex-col gap-3 hidden opacity-0 translate-y-4 transition-all duration-300 mb-2">
            <!-- Email -->
            <a href="mailto:agent@smdc.com" class="w-12 h-12 bg-white text-gray-700 rounded-full shadow-md hover:bg-gray-50 flex items-center justify-center transition-transform hover:scale-110" title="Email Us">
                <i class="ph-fill ph-envelope-simple text-xl"></i>
            </a>
            <!-- WhatsApp -->
            <a href="https://wa.me/639171234567" target="_blank" class="w-12 h-12 bg-[#25D366] text-white rounded-full shadow-md hover:bg-[#128C7E] flex items-center justify-center transition-transform hover:scale-110" title="WhatsApp">
                <i class="ph-fill ph-whatsapp-logo text-xl"></i>
            </a>
            <!-- Viber (Generic Icon used as proxy) -->
            <a href="viber://chat?number=%2B639171234567" class="w-12 h-12 bg-[#7360f2] text-white rounded-full shadow-md hover:bg-[#5949c2] flex items-center justify-center transition-transform hover:scale-110" title="Viber">
                <i class="ph-fill ph-phone-call text-xl"></i>
            </a>
            <!-- Mobile -->
            <a href="tel:+639171234567" class="w-12 h-12 bg-blue-600 text-white rounded-full shadow-md hover:bg-blue-700 flex items-center justify-center transition-transform hover:scale-110" title="Call Now">
                <i class="ph-fill ph-phone text-xl"></i>
            </a>
        </div>
    </div>

<?php
get_footer();

