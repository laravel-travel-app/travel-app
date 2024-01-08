/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                //warna primer
                "clr-primary-950": "#15243c",
                "clr-primary-900": "#203a5a",
                "clr-primary-800": "#20426c",
                "clr-primary-700": "#234e81",
                "clr-primary-600": "#2a609f",
                "clr-primary-500": "#4585c6",
                "clr-primary-400": "#5f98d1",
                "clr-primary-300": "#96bbe3",
                "clr-primary-200": "#c7daf0",
                "clr-primary-100": "#e6eef8",

                //warna sekunder
                "clr-secondary-950": "#391311",
                "clr-secondary-800": "#6b2a23",
                "clr-secondary-700": "#843128",
                "clr-secondary-600": "#c64c30",
                "clr-secondary-500": "#d5633c",
                "clr-secondary-400": "#dc815b",
                "clr-secondary-300": "#e7ac8a",
                "clr-secondary-200": "#f1cdb7",
                "clr-secondary-100": "#f8e8dc",

                //warna lainnya
                "clr-smooth-white": "#f7f7fe",
                "clr-smooth-black": "#232323",
            },
            fontFamily: {
                "font-primary": ["Euclid Circular A"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
