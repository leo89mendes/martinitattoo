import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                bebas: ['"Bebaskai"', 'sans-serif'],
                roboto: ['"Roboto"', 'sans-serif'],
            },
        },
    },
}
