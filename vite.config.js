import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js', 'node_modules/@splidejs/splide/dist/css/splide-core.min.css', 'node_modules/@splidejs/splide/dist/css/themes/splide-default.min.css'],
            refresh: true,
        }),
    ],
    server: {
        port: 8000,
    },
});
