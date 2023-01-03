import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
const domain = "gathr-space.test"; // add it
const homedir = require("os").homedir(); // add it

export default defineConfig({
    // add this block
    server: {
        https: {
            key: homedir + "/.config/valet/Certificates/" + domain + ".key",
            cert: homedir + "/.config/valet/Certificates/" + domain + ".crt",
        },
        host: domain,
        hmr: {
            host: domain,
        },
    },
    plugins: [
        // basicSsl(),
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
