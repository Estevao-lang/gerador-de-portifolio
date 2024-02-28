import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            style: ['resources/css/app.css'],  // Use style instead of input for CSS
            js: ['resources/js/app.js'],  // Keep js for JavaScript entry
            refresh: true,
        }),
    ],
});

