/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        "fade-in-left": {
          "0%": { opacity: "0", transform: "translateX(-20px)" },
          "100%": { opacity: "1", transform: "translateX(0)" },
        },
        "rgb-border": {
          "0%, 100%": { borderColor: "red" },
          "33%": { borderColor: "yellow" },
          "66%": { borderColor: "lime" },
        },
        "scroll-up": {
          "0%": { opacity: "0", transform: "translateY(30px)" },
          "100%": { opacity: "1", transform: "translateY(0)" },
        },
      },
      animation: {
        "fade-in-left": "fade-in-left 1s ease-out forwards",
        "fade-in-delay": "fade-in-left 1s ease-out 0.5s forwards",
        "fade-in-delay-2": "fade-in-left 1s ease-out 0.8s forwards",
        "fade-in-delay-3": "fade-in-left 1s ease-out 1.2s forwards",
        "rgb-border": "rgb-border 3s linear infinite",
        "scroll-up": "scroll-up 1s ease forwards",
      },
    },
  },
  plugins: [],
};
