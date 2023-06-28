export const server = (done) => {
    app.plugins.browsersync.init({
        proxy: "http://gulp-ts.dev"
    });
}