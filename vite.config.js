import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    publicDir: 'public',
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/scss/app.scss', 
                'resources/js/app.js',
                'resources/js/read.js',
                'resources/js/pagination.js',
                'resources/js/filter.js',
                'resources/js/delete.js',
                'resources/js/update.js',
                'resources/js/uploadDialogs.js',
                'resources/js/dialog.js',
                'resources/js/showme.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
