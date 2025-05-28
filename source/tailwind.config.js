// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      fontFamily: {
        hanuman: ["Hanuman", "serif"],
      },
    },
  },
  plugins: [require("@tailwindcss/line-clamp")],
};
