"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));
var concat = require("gulp-concat");

function buildStyles() {
  return gulp
    .src("scss/**/*.scss")
    .pipe(concat("custom.scss"))
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./css/"));
}
gulp.task("watch", function () {
  gulp.watch("./scss/**/*.scss", gulp.series("buildStyles"));
  //gulp.watch("./app/js/**/*.js", gulp.series("js"));
});
exports.buildStyles = buildStyles;