"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));
var concat = require("gulp-concat");
// kuba
var pathDest =
  "E:/Program Files/xampp/htdocs/wp_jablonie/wp-content/themes/72-Jablonie";
// julia
//var pathDest = "D:/Program Files/xampp/htdocs/wp_jablonie/wp-content/themes/72-Jablonie";

function buildStyles() {
  return gulp
    .src("scss/**/*.scss")
    .pipe(concat("style.scss"))
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./dist/"));
}

function copyFiles() {
  return gulp.src("./dist/**/*").pipe(gulp.dest(pathDest));
}

gulp.task("watch", function () {
  buildStyles();
  copyFiles();
  gulp.watch("./scss/**/*.scss", gulp.series("buildStyles", "copyFiles"));
  gulp.watch("./dist/**", gulp.series("copyFiles"));
});

exports.buildStyles = buildStyles;
exports.copyFiles = copyFiles;
