/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        colors: {
            bekgron : '#212121',
            hijau1 : '#4D774E',
            hijau2 : '#164A41',
        },
      extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
