import * as nodePath from 'path';
const rootFolder = nodePath.basename(nodePath.resolve());
const srcFolder = `./#src`;
const buildFolder = `./${rootFolder}`;
export const path = {
    buildFolder,
    srcFolder,
    src: {
        html: `${srcFolder}/*.{html,php}`,
        sass: `${srcFolder}/assets/sass/style.sass`,
        js: `${srcFolder}/assets/js/script.js`,
        fonts: `${srcFolder}/assets/fonts/**/*.*`,
        img: `${srcFolder}/assets/img/**/*.{png,gif,jpg,svg,jpeg,webp,mp4}`
    },
    build: {
        html: `${buildFolder}/`,
        css: `${buildFolder}/assets/sass/style.sass`,
        js: `${buildFolder}/assets/js/script.js`,
        fonts: `${buildFolder}/assets/fonts/`,
        img: `${buildFolder}/assets/img/`
    },
    watch: {
        html: `${srcFolder}/*.{html,php}`,
        sass: `${srcFolder}/assets/sass/**/*.sass`,
        js: `${srcFolder}/assets/js/**/*.sass`,
        fonts: `${srcFolder}/assets/fonts/**/*.*`,
        img: `${srcFolder}/assets/img/**/*.{png,gif,jpg,svg,jpeg,webp,mp4}`
    },
};