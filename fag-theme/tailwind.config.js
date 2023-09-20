/** @type {import('tailwindcss').Config} */
const cssFilePath = "./assets/css/style.css";

module.exports = {
  content: ['./**/*.php', cssFilePath],
  theme: {
    fontFamily: {
    },
    extend: {},
  },
  plugins: [],
}

