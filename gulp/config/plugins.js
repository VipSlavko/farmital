import browserSync from "browser-sync";
import gulp from 'gulp';
import { deleteAsync } from "del"; 'del';
export const plugins = {
    browserSync,
    gulp,
    del: deleteAsync,
};