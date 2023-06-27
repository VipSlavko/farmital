import { plugins } from "../config/plugins.js";
import { path } from "../config/path.js";
export const html = () => {
    return plugins.gulp.src(path.src.html)
    .pipe(plugins.gulp.dest(path.build.html));
};