import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    'default': '#d90429',
                    '50': '#fff0f3',
                    '100': '#ffdee4',
                    '200': '#ffc2cd',
                    '300': '#ff98aa',
                    '400': '#ff5c78',
                    '500': '#ff2a4f',
                    '600': '#f80a33',
                    '700': '#d90429',
                    '800': '#ac0824',
                    '900': '#8e0e24',
                    '950': '#4e010e',
                },
                accent: {
                    '50': '#effef4',
                    '100': '#d9ffe7',
                    '200': '#b5fdd0',
                    '300': '#7cf9ad',
                    '400': '#3cec82',
                    '500': '#13d460',
                    '600': '#08a045',
                    '700': '#0b8a3e',
                    '800': '#0f6c35',
                    '900': '#0e592e',
                    '950': '#013217',
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};
