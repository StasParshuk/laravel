import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'public/assets/fonts/flaticon.scss',
                'public/assets/scss/style.scss',
            ],
            refresh: true,
        }),
    ],
});
