var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var plumberNotifier = require('gulp-plumber-notifier');


gulp.task('sass', function() {
  gulp.src('./assets/src/styles/**/*.scss')
    .pipe(plumberNotifier())
    .pipe(sass())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest('./assets/dist/css/'));
});

// gulp.task('css', function() {
//   gulp.src('./assets/dist/css/all.css')
//   .pipe(plumberNotifier())
//     .pipe(cleanCSS())
//     .pipe(rename({
//       extname: '.min.css'
//     }))
//     .pipe(gulp.dest('./assets/dist/css/'));
// });


gulp.task('scripts', function() {
  return gulp.src('./assets/src/scripts/**/*.js')
  .pipe(plumberNotifier())
    .pipe(concat('all.js'))
    .pipe(gulp.dest('./assets/dist/js/'));
});

gulp.task('default', ['sass', 'scripts'], function() {
  gulp.watch(['./assets/src/styles/**/*.scss', './assets/src/scripts/**/*.js'], ['sass', 'scripts']);
});
