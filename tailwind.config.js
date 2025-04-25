// tailwind.config.js
module.exports = {
    important: true,
    corePlugins: {
        zIndex: true
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}