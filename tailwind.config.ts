import  {type Config, } from "tailwindcss";
import colors from "tailwindcss/colors"

console.log(123123123)

const config: Config = {
    mode: "jit",
    content: [
        "./**/*.{js,json,liquid,php}",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
                "gradient-conic":
                    "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
            },
        },
        screens: {
            sm: '600px',
            md: '1240px',
            lg: '1560px',
            xl: '1920px',
        },
        fontFamily: {
            sans: ['Zen Old Mincho', 'sans-serif'],
            serif: ['Zen Old Mincho', 'sans-serif'],
            body: "sans",
        },
        colors: {
            ...colors,
            color1: '#f3d9d9',
            color2: '#aaded2',
            color3: '#176e81',
            color4: '#24989f',
            color5: '#6cb9be',
            color6: '#b6d1d1',
            color7: '#e1e7e7',
            white: '#ffffff',
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
export default config;