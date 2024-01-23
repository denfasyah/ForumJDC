/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
          },
        extend: {
            fontFamily: {
                'inter': ['Inter', 'sans-serif'], 
              },
            colors: {
                Blue: '#178EFC', 
                DarkBlue: '#1077D5',
                Aqua: '#07E1FF',
                Background : '#EBEBEB',
              },
        },
    },
    plugins: [require("daisyui")],
};
