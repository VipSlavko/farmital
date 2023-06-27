import { plugins } from "../config/plugins.js";
import { path } from '../config/path.js';
export const reset = () => {
   return plugins.del(path.buildFolder);
}; 