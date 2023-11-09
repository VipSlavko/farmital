export const server = (done) => {
    app.plugins.browsersync.init({
        proxy: "fermital.com",
        port: 3000,
        open: true,
    });
}