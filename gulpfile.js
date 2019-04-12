var gulp          = require('gulp');
var browserSync   = require('browser-sync').create();
var $             = require('gulp-load-plugins')();
var autoprefixer  = require('autoprefixer');
var imagemin      = require("gulp-imagemin");
var plumber       = require("gulp-plumber");

var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src'
];

function sass() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.postcss([
      autoprefixer({ browsers: ['last 2 versions', 'ie >= 9'] })
    ]))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream());
};

gulp.task("imagemin", function(){
  return gulp.src("./images/raw/**/*.*")
          .pipe(plumber({errorHandler:onError}))
          .pipe(imagemin({
              progessive: true,
              interlaced: true
          }))
          .pipe(gulp.dest("./images"))
          .pipe(browserSync.stream())
          .pipe(notify({message: "Tarea imagemin finalizada"}));
});

function serve() {

  var archivos = [
    './style.css',
    './*.php',
    './template-parts/*.php',
    './inc/*.php',
    './js/**/*.js',
    'images/**/*.*'
  ]
  browserSync.init( archivos, {
    proxy: "http://localhost/dws",
    notify: true
  });

  gulp.watch("scss/**/*.scss", sass);
}

gulp.task('sass', sass);
gulp.task('serve', gulp.series('sass', serve));
gulp.task('default', gulp.series('sass', serve));


