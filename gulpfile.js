"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));
var concat = require("gulp-concat");
// kuba
//var pathDest = "E:/Program Files/xampp/htdocs/wp_jablonie/wp-content/themes/72-Jablonie"
// julia
var pathDest = "D:/Program Files/xampp/htdocs/wp_jablonie/wp-content/themes/72-Jablonie";

var path =
  "D:/Program Files/xampp/htdocs/wp_jablonie/wp-content/themes/72-Jablonie";

function buildStyles() {
  return gulp
    .src("scss/**/*.scss")
    .pipe(concat("style.scss"))
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./dist/"));
}

function copyStyles() {
  return gulp.src("./dist/style.css").pipe(gulp.dest(path));
}

function copyPhp() {
  return gulp.src("./dist/**/*").pipe(gulp.dest(pathDest));
}

function copyFiles() {
  return gulp.src("./dist/**/*").pipe(gulp.dest(pathDest));
}

gulp.task("watchStyle", function () {
  buildStyles();
  copyStyles();
  copyFiles();
  gulp.watch("./scss/**/*.scss", gulp.series("buildStyles", "copyStyles", "copyFiles"));
  gulp.watch(
    "./dist/**/*.php",
    gulp.series( "copyPhp")
  );
  
});

gulp.task("watchPhp", function () {
  copyPhp();
  gulp.watch("./**/*.php", gulp.series("copyPhp"));
});


gulp.task("watch", gulp.series("watchStyle", "watchPhp"));

exports.buildStyles = buildStyles;
exports.copyStyles = copyStyles;
exports.copyPhp = copyPhp;
exports.copyFiles = copyFiles;
