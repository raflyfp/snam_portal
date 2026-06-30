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
                id: "/",
                name: "SNA Medika Portal",
                short_name: "SNA Medika",
                description: "Portal aplikasi internal PT SNA Medika",

                start_url: "/",

                scope: "/",

                display: "standalone",

                orientation: "portrait",

                background_color: "#ffffff",

                theme_color: "#0d6efd",

                icons: [
                    {
                        src: "/icons/icon-192.png",
                        sizes: "192x192",
                        type: "image/png"
                    },
                    {
                        src: "/icons/icon-512.png",
                        sizes: "512x512",
                        type: "image/png"
                    }
                ]
            },

            workbox: {
                navigateFallback: null
            }
        })
    ]
})