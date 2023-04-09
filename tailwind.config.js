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
            hijau3 : '#81BC83',
            kuning : '#F1B24A',
            hijau4 : '#113932',
            kuning2 : '#E39616',
        },
      extend: {
        backgroundImage: {
            'pattern': "url('/public/images/background-login.svg')",
            // 'bgLogin': "url('/images/login.jpg')"
            // 'loggin' : '/images/background-login.svg',
        },
        fontFamily: {
            'Cabin-Medium': ['Cabin', 'sans-serif'],
            'Alkatra': ['Alkatra', 'cursive'],

        }
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
