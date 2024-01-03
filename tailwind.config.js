/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        orange: {
          lighter: '#FFEADA',
          default: '#FFBA86',
          darker: '#FF8427',
        },

        dark: {
          lighter: '#828282',
          default: '#424242',
          darker: '#000',
        },

        lightblue: '#F8F9FA',
        red: '#F6635C',
      }
    },

    fontFamily: {
        'inika': 'Inika, serif'
    }
  },
  plugins: [],
}

