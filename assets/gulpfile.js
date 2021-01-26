const { parallel } = require("gulp");
var gulp = require("gulp");
var sass = require("gulp-sass");
// var cssmin = require("gulp-cssmin");
// var rename = require("gulp-rename");
// var htmlmin = require("gulp-htmlmin");

sass.compiler = require("node-sass");

gulp.task("sass", function () {
  return gulp
    .src("sass/**/*.scss")
    .pipe(sass.sync().on("error", sass.logError))
    .pipe(gulp.dest("css"));
});

gulp.task("sass:watch", function () {
  gulp.watch("sass/**/*.scss", gulp.parallel("sass"));
});

// gulp.task("css-min", function () {
//   return gulp
//     .src("style/css/**/*.css")
//     .pipe(cssmin())
//     .pipe(rename({ suffix: ".min" }))
//     .pipe(gulp.dest("project_mini"));
// });
// gulp.task("html-min", function () {
//   return gulp
//     .src("**/*.html")
//     .pipe(htmlmin({ collapseWhitespace: true }))
//     .pipe(rename({ suffix: ".min" }))
//     .pipe(gulp.dest("project_mini"));
// });
gulp.task("default", gulp.parallel("sass:watch"));
