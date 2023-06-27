import browserSync from "browser-sync";
import gulp from 'gulp';
import { deleteAsync } from "del";
import replace from "gulp-replace";
export const plugins = {
    browserSync,
    gulp,
    del: deleteAsync,
    replace
};