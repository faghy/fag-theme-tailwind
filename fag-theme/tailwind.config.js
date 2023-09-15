/** @type {import('tailwindcss').Config} */
const cssFilePath = "./style.css";

module.exports = {
  content: ['./**/*.php', cssFilePath],
  theme: {
    extend: {},
  },
  plugins: [],
}
