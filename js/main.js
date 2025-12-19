// --- Property Data (Static) ---
const properties = {
    heights: [
        {
            id: 'glam',
            name: 'Glam Residences',
            location: 'EDSA, Quezon City',
            description: 'Styled for success. Glam Residences stands along EDSA as an icon for those who live with polish and ambition. A vertical sanctuary with rooftop lounges and gold-accented interiors designed for millennials on the rise.',
            amenities: ['Rooftop Lounge', 'Lap Pool', 'Fitness Gym', 'Function Rooms', 'Sky Deck', 'Grand Lobby'],
            units: ['1 Bedroom', '1 Bedroom with Balcony', '2 Bedroom'],
            image: 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'sail',
            name: 'Sail Residences',
            location: 'MOA Complex, Pasay City',
            description: 'The gem of the Mall of Asia district. Inspired by international seaside resorts, Sail Residences brings the ocean breeze to your doorstep with its cruise-ship themed architecture and tiered pool decks.',
            amenities: ['Ocean-Themed Pools', 'Cabanas', 'Gym', 'Clubhouse', 'Viewing Deck', 'Lush Gardens'],
            units: ['1 BR with Balcony', '2 BR with Balcony', '3 BR with Balcony'],
            image: 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'red',
            name: 'Red Residences',
            location: 'Chino Roces, Makati',
            description: 'Located in the burgeoning art and design district of Chino Roces. Red Residences is designed for the passionate and the driven, offering quick access to the Makati CBD.',
            amenities: ['Social Hall', 'Fitness Gym', 'Lap Pool', 'Play Area', 'Landscape Garden'],
            units: ['1 Bedroom', '2 Bedroom'],
            image: 'https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'sands',
            name: 'Sands Residences',
            location: 'Roxas Blvd, Manila',
            description: 'Your front seat to the world-famous Manila Bay sunset. Sands Residences blends the charm of old Manila with modern luxury, featuring a solar-powered design and beach-inspired amenities.',
            amenities: ['Sunset Lounge', 'Lap Pool', 'Kiddie Pool', 'Grand Lobby', 'Gym'],
            units: ['Studio', '1 Bedroom', '2 Bedroom'],
            image: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'gem',
            name: 'Gem Residences',
            location: 'C5, Pasig City',
            description: 'The brilliant balance of work and life. Standing along C5, Gem Residences is the perfect portal to Ortigas, BGC, and Eastwood, featuring facilities that foster productivity and wellness.',
            amenities: ['Wellness Area', 'Yoga Deck', 'Work Spaces', 'Pool', 'Game Area'],
            units: ['1 Bedroom', 'Family Suite'],
            image: 'https://images.unsplash.com/photo-1460317442991-0ec2aa247f4b?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'jade',
            name: 'Jade Residences',
            location: 'Chino Roces, Makati',
            description: 'Serenity in the city. Jade Residences offers a fusion of modern Chinese design and contemporary comfort, providing a zen-like escape within the bustling Makati landscape.',
            amenities: ['Tea Room', 'Pool Deck', 'Zen Garden', 'Gym', 'Function Hall'],
            units: ['Studio', '1 Bedroom'],
            image: 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'gold',
            name: 'Gold Residences',
            location: 'Sucat, Parañaque',
            description: 'The gold standard of living right across NAIA Terminal 1. A master-planned township that offers world-class architecture and convenience for the global traveler.',
            amenities: ['Resort Pools', 'Fitness Center', 'Social Halls', 'Enclave Gardens', 'Jogging Path'],
            units: ['1 BR', '2 BR'],
            image: 'https://images.unsplash.com/photo-1580587771525-78b9dba3b91d?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'ice',
            name: 'Ice Tower',
            location: 'MOA Complex, Pasay',
            description: 'A residential-office development designed for the entrepreneurial lifestyle. Sleek, modern, and professional, offering spaces that work as hard as you do.',
            amenities: ['Business Hub', 'Co-working Spaces', 'Pool', 'Sky Lounge', 'Meeting Rooms'],
            units: ['Studio RESO', '1 BR RESO'],
            image: 'https://images.unsplash.com/photo-1486325212027-8081e485255e?auto=format&fit=crop&q=80&w=800'
        }
    ],
    nature: [
        {
            id: 'bloom',
            name: 'Bloom Residences',
            location: 'Sucat, Parañaque',
            description: 'An active family lifestyle awaits. Bloom Residences features sprawling open spaces and sports amenities, perfect for growing families who love the outdoors.',
            amenities: ['Basketball Court', 'Volleyball Court', 'Multiple Pools', 'Jogging Path', 'Playground'],
            units: ['2 Bedroom', '2 Bedroom with Balcony'],
            image: 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'leaf',
            name: 'Leaf Residences',
            location: 'Susana Heights, Muntinlupa',
            description: 'Inspired by the tropical rainforest. Leaf Residences offers a unique design that mimics nature, providing a cool and refreshing environment in the south.',
            amenities: ['Tropical Gardens', 'Pools', 'Lounge Areas', 'Function Rooms', 'Lobby'],
            units: ['Studio', '1 Bedroom'],
            image: 'https://images.unsplash.com/photo-1449844908441-8829872d2607?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'south2',
            name: 'South 2 Residences',
            location: 'Las Piñas City',
            description: 'Convenience meets comfort within the SM Southmall complex. Enjoy the luxury of having a premier lifestyle mall just a few steps away from your home.',
            amenities: ['Gated Community', 'Swimming Pools', 'Grand Lobby', 'Landscaped Garden'],
            units: ['1 Bedroom', '2 Bedroom'],
            image: 'https://images.unsplash.com/photo-1574362848149-11496d93a7c7?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'park',
            name: 'Park Residences',
            location: 'Sta. Rosa, Laguna',
            description: 'Inspired by New York\'s Central Park. Located in the Lion City of the South, Park Residences offers a green haven next to SM City Sta. Rosa.',
            amenities: ['Central Park', 'Swimming Pool', 'Basketball Court', 'Clubhouse'],
            units: ['Studio', '1 Bedroom', '2 Bedroom'],
            image: 'https://images.unsplash.com/photo-1560185007-cde436f6a4d0?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'turf',
            name: 'Turf Residences',
            location: 'Biñan, Laguna',
            description: 'For the sports enthusiast. Turf Residences is located near world-class sports facilities, offering a dynamic and energetic community vibe.',
            amenities: ['Sports Fields', 'Gym', 'Swimming Pool', 'Pavilion', 'Linear Park'],
            units: ['1 Bedroom', 'Studio'],
            image: 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'field',
            name: 'Field Residences',
            location: 'Sucat, Parañaque',
            description: 'Suburban living in the city. Situated behind SM City Sucat, Field Residences offers vast open spaces and multiple themed gardens for relaxation.',
            amenities: ['Themed Gardens', 'Multiple Pools', 'Clubhouse', 'Badminton Court', 'Picnic Area'],
            units: ['1 Bedroom', '2 Bedroom'],
            image: 'https://images.unsplash.com/photo-1584738766473-61c083514bf4?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'spring',
            name: 'Spring Residences',
            location: 'Bicutan, Parañaque',
            description: 'New beginnings bloom here. Located right off the SLEX Bicutan exit and next to SM City Bicutan, offering unmatched accessibility.',
            amenities: ['Lap Pool', 'Lounge Pool', 'Kiddie Pool', 'Function Room', 'Alfresco Area'],
            units: ['Family Suite', '1 Bedroom'],
            image: 'https://images.unsplash.com/photo-1572120360610-d971b9d7767c?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'zeal',
            name: 'Zeal Residences',
            location: 'Gen. Trias, Cavite',
            description: 'Live with zest. A modern garden community in the historic province of Cavite, designed to bring vitality and joy to everyday living.',
            amenities: ['Lap Pool', 'Playground', 'Covered Court', 'Linear Park', 'Commercial Strip'],
            units: ['Studio', '1 Bedroom'],
            image: 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'hill',
            name: 'Hill Residences',
            location: 'Novaliches, Quezon City',
            description: 'Elevated living. Situated on higher ground, Hill Residences offers a secure, flood-free, and exclusive community in Northern Quezon City.',
            amenities: ['Jogging Path', 'Swimming Pools', 'Basketball Court', 'Function Area', 'Gate'],
            units: ['1 Bedroom', '2 Bedroom'],
            image: 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&q=80&w=800'
        }
    ],
    symphony: [
        {
            id: 'symphony_homes',
            name: 'Symphony Homes',
            location: 'Mabalacat, Pampanga',
            description: 'A house and lot development that brings harmony to your family life. Symphony Homes offers spacious horizontal living with modern amenities in a master-planned community.',
            amenities: ['Clubhouse', 'Basketball Court', 'Parks', 'Playground', 'Gated Entrance'],
            units: ['House & Lot Packages', 'Townhouse'],
            image: 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&q=80&w=800'
        },
        {
            id: 'jazz',
            name: 'Jazz Residences',
            location: 'Bel-Air, Makati',
            description: 'Experience the rhythm of the city. Known for its own Jazz Mall and proximity to the artistic hub of Reposo St., it offers a cultural and convenient lifestyle.',
            amenities: ['Jazz Mall', 'Swimming Pools', 'Gym', 'Function Rooms', 'Landscaped Gardens'],
            units: ['Studio', '1 Bedroom', '2 Bedroom'],
            image: 'https://images.unsplash.com/photo-1590725140246-20ac7013a103?auto=format&fit=crop&q=80&w=800'
        }
    ]
};

// --- Render Functions ---

function createCard(property) {
    return `
        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group cursor-pointer border border-gray-100" onclick="openModal('${property.id}')">
            <div class="relative h-56 overflow-hidden">
                <img src="${property.image}" alt="${property.name}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" onerror="this.src='https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80&w=800'">
                <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all"></div>
                <div class="absolute bottom-3 left-4">
                     <span class="inline-block bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-smdc-blue mb-1">
                        <i class="ph-fill ph-map-pin"></i> ${property.location}
                     </span>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 group-hover:text-smdc-blue transition-colors">${property.name}</h3>
                <p class="text-gray-500 text-sm mt-2 line-clamp-2">${property.description}</p>
                <div class="mt-4 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-400 uppercase tracking-wide">View Details</span>
                    <div class="w-8 h-8 rounded-full bg-smdc-light flex items-center justify-center text-smdc-blue group-hover:bg-smdc-blue group-hover:text-white transition">
                        <i class="ph-bold ph-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    `;
}

function renderSection(sectionId, dataKey) {
    const container = document.getElementById(sectionId);
    if (container && properties[dataKey]) {
        container.innerHTML = properties[dataKey].map(prop => createCard(prop)).join('');
    }
}

// --- Init ---
document.addEventListener('DOMContentLoaded', () => {
    renderSection('heights-grid', 'heights');
    renderSection('nature-grid', 'nature');
    renderSection('symphony-grid', 'symphony');
});

// --- Modal Logic ---

function findProperty(id) {
    // Search all categories
    for (const key in properties) {
        const found = properties[key].find(p => p.id === id);
        if (found) return found;
    }
    return null;
}

function openModal(id) {
    const property = findProperty(id);
    if (!property) return;

    const modalTitle = document.getElementById('modal-title');
    const modalLocation = document.getElementById('modal-location-text');
    const modalDescription = document.getElementById('modal-description');
    const modalImage = document.getElementById('modal-image');
    
    if (modalTitle) modalTitle.innerText = property.name;
    if (modalLocation) modalLocation.innerText = property.location;
    if (modalDescription) modalDescription.innerText = property.description;
    if (modalImage) modalImage.src = property.image;
    
    // Populate Amenities
    const amenList = document.getElementById('modal-amenities');
    if (amenList) {
        amenList.innerHTML = property.amenities.map(a => `<li class="flex items-center"><i class="ph-fill ph-check text-smdc-gold mr-2"></i> ${a}</li>`).join('');
    }

    // Populate Units
    const unitList = document.getElementById('modal-units');
    if (unitList) {
        unitList.innerHTML = property.units.map(u => `<span class="bg-blue-50 text-smdc-blue text-xs font-semibold px-3 py-1 rounded-full border border-blue-100">${u}</span>`).join('');
    }

    // Update Contact Select
    const contactSelect = document.getElementById('contact-property-select');
    if (contactSelect) {
        let foundOption = false;
        for(let i=0; i<contactSelect.options.length; i++) {
            if(contactSelect.options[i].value === property.name) {
                contactSelect.selectedIndex = i;
                foundOption = true;
                break;
            }
        }
        if(!foundOption) {
            const opt = document.createElement('option');
            opt.value = property.name;
            opt.text = property.name;
            opt.selected = true;
            contactSelect.add(opt);
        }
    }

    const modal = document.getElementById('property-modal');
    if (modal) {
        modal.classList.remove('hidden');
        document.body.classList.add('modal-open');
    }
}

function closeModal() {
    const modal = document.getElementById('property-modal');
    if (modal) {
        modal.classList.add('hidden');
        document.body.classList.remove('modal-open');
    }
}

function scrollToInquiry() {
    closeModal();
    const contactSection = document.getElementById('contact');
    if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
    }
}

function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    if (menu) {
        menu.classList.toggle('hidden');
    }
}

function handleFormSubmit(e) {
    e.preventDefault();
    alert('Thank you for your inquiry! As this is a demo site, no email was sent, but in a real version, this would go straight to your inbox.');
}

// Close modal on escape key
document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        closeModal();
    }
});

// Floating Contact Button Logic
function toggleContactMenu() {
    const options = document.getElementById('contactOptions');
    const fab = document.getElementById('contactFab');
    
    if (!options || !fab) return;
    
    if (options.classList.contains('hidden')) {
        options.classList.remove('hidden');
        // Small delay to allow CSS transition to render
        setTimeout(() => {
            options.classList.remove('opacity-0', 'translate-y-4');
        }, 10);
        fab.innerHTML = '<i class="ph-bold ph-x text-2xl"></i>';
        fab.classList.add('bg-gray-700');
        fab.classList.remove('bg-smdc-blue');
    } else {
        options.classList.add('opacity-0', 'translate-y-4');
        setTimeout(() => {
            options.classList.add('hidden');
        }, 300);
        fab.innerHTML = '<i class="ph-fill ph-chat-teardrop-text text-2xl"></i>';
        fab.classList.remove('bg-gray-700');
        fab.classList.add('bg-smdc-blue');
    }
}

