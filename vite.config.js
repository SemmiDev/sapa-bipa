import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(
            {
                content: [
                    "./resources/**/*.blade.php",
                    "./resources/**/*.js",
                    "./resources/**/*.vue",
                ],
                theme: {
                    extend: {
                        fontFamily: {
                            'nunito': ['Nunito', 'sans-serif'],
                        },
                        colors: {
                            'primary-orange': '#F77500',
                            'primary-green': '#67A516',
                            'accent-blue': '#3B82F6',
                            'accent-purple': '#8B5CF6',
                            'accent-pink': '#EC4899',
                            'accent-yellow': '#F59E0B',
                        },
                        fontSize: {
                            'body-mobile': ['16px', '1.5'],
                            'body-desktop': ['18px', '1.6'],
                        }
                    }
                },
                plugins: [],
            }

        ),
    ],
});
