/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './template-parts/**/*.php',
    './js/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
      colors: {
        smdc: {
          blue: '#1e3a8a',
          gold: '#c29a48',
          light: '#f3f4f6',
        }
      }
    },
  },
  plugins: [],
}
