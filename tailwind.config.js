const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            margin: {
                '90': '22.5rem',
                '70': '17.5rem',
            },
            width:{
                '90': '22.5rem',
                '70': '17.5rem',
            },
            colors:{
                rose: colors.rose,
                pink: colors.pink,
                cyan: colors.cyan,
                fuchsia: colors.fuchsia,
                blueGray: colors.blueGray
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            alignItems: ['hover', 'focus'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
