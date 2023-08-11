/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ['Ubuntu', 'sans-serif'],
        },
        extend: {
            colors: {
                'gray-850': '#162131',
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-animated')
    ],
}

