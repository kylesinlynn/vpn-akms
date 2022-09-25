module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.{js,vue}",
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
