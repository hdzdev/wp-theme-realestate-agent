# SMDC Real Estate Agent WordPress Theme

A highly optimized, mobile-first WordPress theme built with Tailwind CSS for real estate agents showcasing SMDC properties.

## Features

- ✅ **Mobile-First Design** - Responsive and optimized for all devices
- ✅ **Performance Optimized** - Lazy loading, deferred scripts, optimized assets
- ✅ **SEO Friendly** - Schema.org markup, proper heading hierarchy
- ✅ **Security Hardened** - Proper escaping, sanitization, security headers
- ✅ **WordPress Standards** - Follows WordPress coding standards and best practices
- ✅ **Modular Structure** - Template parts for easy maintenance
- ✅ **Tailwind CSS** - Utility-first CSS framework with custom build process

## Installation

1. Upload the theme folder to `/wp-content/themes/`
2. Activate the theme through the WordPress admin panel
3. Install dependencies: `npm install`
4. Build Tailwind CSS: `npm run build`

## Development

### Prerequisites

- Node.js and npm
- WordPress 5.0+
- PHP 7.4+

### Build Commands

```bash
# Install dependencies
npm install

# Build for production (minified)
npm run build

# Watch for changes during development
npm run watch
```

### Directory Structure

```
realestateagent/
├── assets/
│   └── css/
│       └── input.css          # Tailwind source file
├── template-parts/
│   ├── components/            # Reusable components
│   │   ├── property-card.php
│   │   ├── property-modal.php
│   │   └── floating-contact.php
│   └── layout/               # Layout sections
│       ├── hero-section.php
│       ├── intro-stats.php
│       ├── about-section.php
│       └── contact-section.php
├── js/
│   └── main.js               # Theme JavaScript
├── functions.php             # Theme functions
├── header.php                # Header template
├── footer.php                # Footer template
├── front-page.php            # Front page template
├── index.php                 # Fallback template
├── style.css                 # Compiled Tailwind CSS (generated)
└── tailwind.config.js        # Tailwind configuration
```

## Configuration

### Theme Settings

The theme supports WordPress Customizer for:
- Logo upload
- Hero section content
- Social media links
- Footer content

### Menu Setup

1. Go to **Appearance > Menus**
2. Create a menu and assign it to "Primary Menu" location
3. The theme includes a fallback menu if no menu is assigned

## Performance Optimizations

- **Lazy Loading Images** - All images load lazily by default
- **Deferred Scripts** - Non-critical scripts are deferred
- **Preconnect** - Google Fonts preconnect for faster loading
- **Removed Bloat** - Removed emoji scripts and unnecessary WordPress features
- **Optimized Queries** - Database queries optimized for better performance
- **Security Headers** - X-Content-Type-Options, X-Frame-Options, X-XSS-Protection

## SEO Features

- Schema.org JSON-LD markup for RealEstateAgent
- Proper heading hierarchy (H1-H6)
- Semantic HTML5 elements
- ARIA labels for accessibility
- Meta tags optimization

## Security Features

- All outputs properly escaped (esc_html, esc_url, esc_attr)
- Input sanitization
- Nonce verification for forms
- Security headers
- ABSPATH checks

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## License

GPL-2.0-or-later

## Credits

- Tailwind CSS - https://tailwindcss.com
- Phosphor Icons - https://phosphoricons.com
- WordPress - https://wordpress.org

## Support

For issues and feature requests, please contact the theme developer.
push test