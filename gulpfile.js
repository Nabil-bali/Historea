var gulp = require('gulp');
var path = require('path');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var open = require('gulp-open');

var Paths = {
  HERE: './',
  DIST: 'dist/',
  CSS: './public/now-ui-kit/assets/css/',
  SCSS_TOOLKIT_SOURCES: './public/now-ui-kit/assets/scss/now-ui-kit.scss',
  SCSS: './public/now-ui-kit/assets/scss/**/**'
};

gulp.task('compile-scss', function() {
  return gulp.src(Paths.SCSS_TOOLKIT_SOURCES)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write(Paths.HERE))
    .pipe(gulp.dest(Paths.CSS));
});

gulp.task('watch', function() {
  gulp.watch(Paths.SCSS, ['compile-scss']);
});

// set chrome navigator
var options = {
  app: 'chrome'
};

gulp.task('open', function() {
  gulp.src('index.php')
    .pipe(open(options));
});

gulp.task('open-app', ['open', 'watch']);