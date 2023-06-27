import { server } from './gulp/task/server.js';
import { plugins } from './gulp/config/plugins.js';
import { html } from "./gulp/task/html.js";
import { reset } from './gulp/task/reset.js';
const mainTasks = plugins.gulp.parallel(html);
const dev = plugins.gulp.series(reset, mainTasks, server)
plugins.gulp.task('default', dev);