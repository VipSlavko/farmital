import * as nodePath from 'path';
const rootFolder = nodePath.basename(nodePath.resolve());
const buildFolder = `D:/openserver/domains/fermital/wp-content/themes/fermital`;
const srcFolder = `./src`;
export const path = {
    build: {
        js: `${buildFolder}/assets/js/`,
        html: `${buildFolder}/`,
        css: `${buildFolder}/assets/css/`,
        images: `${buildFolder}/assets/img/`,
        files: `${buildFolder}/`,
        fonts: `${buildFolder}/assets/fonts/`
    },
    src: {
        js: `${srcFolder}/assets/js/script.js`,
        files: `${srcFolder}/*.*`,
        svg: `${srcFolder}/assets/img/**/*.svg`,
        html: `${srcFolder}/**/*.{html,php}`,
        images: `${srcFolder}/assets/img/**/*.{jpg,jpeg,svg,ico,png,gif,webp}`,
        sass: `${srcFolder}/assets/sass/style.sass`,
        svgicons: `${srcFolder}/assets/svgicons/*.svg`,
    },
    watch: {
        js: `${srcFolder}/assets/js/**/*.js`,
        sass: `${srcFolder}/assets/sass/**/*.sass`,
        html: `${srcFolder}/**/*.{html,php}`,
        files: `${srcFolder}/*.*`,
        images: `${srcFolder}/assets/img/**/*.{jpg,jpeg,svg,ico,png,gif,webp}`,
    },
    clean: buildFolder,
    srcFolder: srcFolder,
    rootFolder: rootFolder,
}