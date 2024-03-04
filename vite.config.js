import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      style: ['resources/css/app.css'],
      js: ['resources/js/app.js'],
      input: 'resources/js/app.js', // Add this line for input configuration
      refresh: true,
    }),
  ],
});
