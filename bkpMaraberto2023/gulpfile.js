var gulp = require('gulp');
var gutil = require('gulp-util');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var sh = require('shelljs');

gulp.task('sass', function(done) {
  gulp.src([
    // 'node_modules/venobox/venobox/venobox.css',
    'assets-sources/sass/style.scss'
  ])
  .pipe(sass())
  .on('error', sass.logError)
  .pipe(concat('assets/css/main.min.css'))
  .pipe(minifyCss({
    keepSpecialComments: 0
  }))
  .pipe(gulp.dest('./'))
  .on('end', done);
});


gulp.task('app', function() {
  return gulp.src([
      // 'node_modules/jquery/dist/jquery.min.js',
      // 'node_modules/venobox/venobox/venobox.min.js',
      // 'node_modules/slick-carousel/slick/slick.min.js',
      'assets-sources/js/app.js'
    ])
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js/'));
});

gulp.task('watch', function() {
  gulp.watch('assets-sources/sass/**/*.scss', gulp.series('sass'));
  gulp.watch('assets-sources/js/**/*.js', gulp.series('app'));
});
