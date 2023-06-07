/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            bekgron : '#212121',
            hijau_hover : '#B8C9B8',
            abu : '#EDEDED',
            abu2 : '#6C6C6C',
            oren : '#F24E1E',
            oren2 : '#FBCABB',


            hijau1 : '#4D774E',
            hijau2 : '#164A41',
            hijau3 : '#81BC83',
            hijau4 : '#113932',
            hijau5 : '#A6C9A7',
            hijau_kartu : '#D0EDCB',

            kuning : '#F1B24A',
            kuning2 : '#E39616',
            kuning3 : '#F8D191'
        },
        extend: {
            backgroundImage: {
                pattern: "url('/public/images/background-login.svg')",
                // 'bgLogin': "url('/images/login.jpg')"
                // 'loggin' : '/images/background-login.svg',
            },
            fontFamily: {
                "Cabin-Medium": ["Cabin", "sans-serif"],
                Alkatra: ["Alkatra", "cursive"],
                Inter: ["Inter"],
            },

            aktip: 'flex items-center w-[278px] p-2 text-gray-900 rounded-lg bg-hijau1 ring-offset-2 focus:ring-2 focus:ring-hijau2 mr-3',
            nongki: 'flex items-center w-[278px] p-2 text-gray-900 rounded-lg hover:bg-hijau_hover ring-offset-2 focus:ring-2 focus:outline-non focus:ring-hijau2',

            // active :   'flex items-center w-[278px] p-2 text-gray-900 rounded-lg bg-hijau1 ring-offset-2 focus:ring-2 focus:ring-hijau2 mr-3',
            // inactive : 'flex items-center w-[278px] p-2 text-gray-900 rounded-lg  hover:bg-hijau_hover ring-offset-2 focus:ring-2 focus:outline-non focus:ring-hijau2'
        },
    },
    plugins: [require("flowbite/plugin")],
};
