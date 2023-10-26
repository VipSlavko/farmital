export const server = (done) => {
    app.plugins.browsersync.init({
        proxy: "fermital.com"
    });
}