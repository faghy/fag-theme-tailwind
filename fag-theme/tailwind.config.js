/** @type {import('tailwindcss').Config} */
const cssFilePath = "./style.css";

module.exports = {
  content: ['./**/*.php', cssFilePath],
  theme: {
    fontFamily: {
    },
    extend: {},
  },
  plugins: [],
}

