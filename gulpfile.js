var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var imagemin = require('gulp-imagemin');
var imageminPngquant = require('imagemin-pngquant');
var imageminJpegRecompress = require('imagemin-jpeg-recompress');
var del = require('del');
var zip = require('gulp-zip');

// File Paths
var dev_path = 'dev-assets';
var dist_path = 'assets';
var scripts_path = dev_path + '/javascript/**/*.js';
var sass_path = dev_path + '/sass/**/*.scss';
var image_path = dev_path +'/images/**/*.{png,jpeg,jpg,svg,gif}';
var svg_path = dev_path + '/svg/**/*.svg';

// Date Stuff
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1 // Janurary is 0!;
var yyyy = today.getFullYear();

if (dd < 10) { dd = '0' + dd }
if (mm < 10) { mm = '0' + mm }

today = dd + mm + yyyy;

// Styles - for Sass
gulp.task('styles', function() {
    console.log('Starting styles task');
    return gulp.src(sass_path)
        .pipe(plumber(function(err) {
            console.log('Styles task error!');
            console.log(err);
            this.emit('end');
        }))
        .pipe(sourcemaps.init())
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(dist_path + '/css'));
});

// Scripts
gulp.task('scripts', function() {
  console.log('Starting scripts task');

  return gulp.src([scripts_path, '!'+ dev_path + '/javascript/vendor/**/*.js'])
    .pipe(plumber(function(err) {
        console.log('Scripts task error!');
        console.log(err);
        this.emit('end');
    }))
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(concat('main.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(dist_path + '/javascript'));
  });

// Images
gulp.task('images', function() {
  console.log('Starting images task');
  return gulp.src(image_path)
  .pipe(imagemin(
    [
      imagemin.gifsicle(),
      imagemin.jpegtran(),
      imagemin.optipng(),
      imagemin.svgo(),
      imageminPngquant(),
      imageminJpegRecompress()
    ]
  ))
  .pipe(gulp.dest(dist_path + '/images'))
});

// Images
gulp.task('images', function() {
    console.log('Starting images task');
    return gulp.src(image_path)
    .pipe(imagemin(
        [
            imagemin.gifsicle(),
            imagemin.jpegtran(),
            imagemin.optipng(),
            imagemin.svgo(),
            imageminPngquant(),
            imageminJpegRecompress()
        ]
    ))
    .pipe(gulp.dest(dist_path + '/images'))
});

// Clean up the dist folder
gulp.task('clean', function() {
    return del.sync([
        dist_path
    ]);
});

// Zip things up for deployment
gulp.task('export', function() {
    console.log('Zipping up the site, excluding the development assets');
    return gulp.src(['./**/*', '!dev-assets/**/*'])
    .pipe(zip('website-export-' + today + -'.zip'))
    .pipe(gulp.dest('./'));
});

// watch for things happening
gulp.task('watch', ['default'], function() {
    console.log('Starting watch task');
    gulp.watch(sass_path, ['styles']);
    gulp.watch(scripts_path, ['scripts']);
});

// Development build task
gulp.task('build', ['clean', 'images', 'styles', 'scripts', 'export'], function() {
    console.log('Starting default task');
});

// default task, single run css and js task
gulp.task('default', ['styles', 'scripts'], function() {
  console.log('Starting default task');
});