import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'text': '#f5f5f5',
                'background': '#111111',
                'backgroundGray': '#252525',
                'primary': '#003366',
                'secondary': '#D1D1D1',
                'accent': '#FFB300',
               },fontSize: {
                sm: '0.750rem',
                base: '1rem',
                xl: '1.333rem',
                '2xl': '1.777rem',
                '3xl': '2.369rem',
                '4xl': '3.158rem',
                '5xl': '4.210rem',
              },
              fontFamily: {
                heading: 'Fira Sans',
                body: 'Fira Sans',
              },
              fontWeight: {
                normal: '400',
                bold: '700',
              },
        },
    },

    plugins: [forms],
};
