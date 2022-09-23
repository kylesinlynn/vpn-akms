module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Inter', 'sans-serif']
            },
            colors: {
                'dark-violet': '#0A0019',
                'gold': '#FFFF2D'
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
