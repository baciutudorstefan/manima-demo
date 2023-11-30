import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import path from "path";
import { loadEnv } from "vite";

// Load environment variables
const env = loadEnv("", process.cwd());

export default defineConfig(({ command, mode }) => {
    // Define the environment variable
    const define = {
        "process.env.VUE_APP_RECAPTCHA_SITE_KEY": JSON.stringify(
            env.RECAPTCHA_SITE_KEY
        ),
    };

    return {
        plugins: [
            vue(),
            laravel(["resource/scss/app.scss", "resources/js/app.js"]),
        ],
        resolve: {
            alias: {
                "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
                "@": "/resources/js",
                "vue-recaptcha": "vue-recaptcha",
            },
        },
        define,
    };
});
