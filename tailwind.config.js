import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                transparent: "transparent",
                current: "currentColor",

                black: colors.black,
                white: colors.white,
                gray: colors.neutral,
                "gray-background": "#f7f8fc",
                blue: "#328af1",
                "blue-hover": "#2879bd",
                yellow: "#ffc73c",
                red: "#ec454f",
                green: "#1aab8b",
                purple: "#8b60ed",
            },
            fontFamily: {
                sans: ["Open Sans", ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                custom: "62.5rem",
            },
            spacing: {
                70: "17.5rem",
                175: "43.75rem",
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
