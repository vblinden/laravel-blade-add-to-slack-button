import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    build: {
        outDir: "resources/dist/css",
        assetsDir: "",
        rollupOptions: {
            input: ["resources/css/button.css"],
            output: {
                assetFileNames: "[name][extname]",
                entryFileNames: "[name].js",
            },
        },
    },
    plugins: [tailwindcss()],
});
