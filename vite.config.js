import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js',
            'resources/css/bootstrap.min.css', 'resources/js/bootstrap.bundle.min.js',
            'resources/js/sb-forms-latest.js','resources/js/buscador.js'],
            refresh: true,
        }),
    ],
});
