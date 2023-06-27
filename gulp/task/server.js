import { plugins } from "../config/plugins.js";
import { path } from '../config/path.js';
export const server = () => {
   return plugins.browserSync.init({
        proxy: "gulp-theme"
    });
}; 