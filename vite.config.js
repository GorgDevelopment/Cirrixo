import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['themes/cirrixo/css/app.css', 'themes/cirrixo/js/app.js'],
            refresh: true,
            buildDirectory: 'cirrixo',
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './'),
        },
    },
}); 