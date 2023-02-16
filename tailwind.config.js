/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './footer.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    colors: {
      'main-green': '#2E5659',
      'main-beige': '#CBA884',
      'darker-green': '#234143',
      'bg-color': '#EADCCE',
      'white': '#FFFFFF',
    },
    fontFamily: {
      sans: ['Montserrat', 'sans-serif'],
    },
    letterSpacing: {
      wider: '0.05em',
      widest: '.11em',
    },
    extend: {},
  },
  plugins: [],
}
