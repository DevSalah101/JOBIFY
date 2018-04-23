var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var webserver = require('gulp-webserver');

gulp.task('sass', function() {
  gulp.src('./assets/src/styles/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest('./assets/dist/css/'));
});

gulp.task('css', function() {
  gulp.src('./assets/dist/css/all.css')
    .pipe(cleanCSS())
    .pipe(rename({
      extname: '.min.css'
    }))
    .pipe(gulp.dest('./assets/dist/css/'));
});

gulp.task('default', ['sass', 'css'], function() {
  gulp.watch(['./assets/src/styles/**/*.scss', './assets/dist/css/all.css'], ['sass', 'css']);
});
