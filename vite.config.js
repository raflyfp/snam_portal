import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import { VitePWA } from 'vite-plugin-pwa'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),

        VitePWA({
            registerType: 'autoUpdate',
            injectRegister: 'auto',

            devOptions: {
                enabled: true
            },

            manifest: {
                name: 'SNA Medika Portal',
                short_name: 'SNA Medika',
                start_url: '/',
                scope: "/",
                display: 'standalone',
                background_color: '#ffffff',
                theme_color: '#0d6efd',

                icons: [
                    {
                        src: '/icons/icon (2).png',
                        sizes: '192x192',
                        type: 'image/png'
                    },
                    {
                        src: '/icons/icon (1).png',
                        sizes: '512x512',
                        type: 'image/png'
                    }
                ]
            },

            workbox: {
                navigateFallback: null
            }
        })
    ]
})