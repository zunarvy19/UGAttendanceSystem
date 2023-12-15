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
                primary: "#176B87",
                secondary: "#64CCC5",
                light: "#DAFFFB",
                detail: "#DA4167",
                dark: "#04364A",
                button1: "#0079FF",
                button2: "#FE0000",
            },

            fontFamily: {
                poppins: ["poppins"],
            },
        },
    },
    plugins: [],
};
