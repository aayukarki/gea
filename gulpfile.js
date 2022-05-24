// Imports
var path = require('path');
var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var imagemin = require('gulp-imagemin');
var del = require('del');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var concat = require('gulp-concat');
var cache = require('gulp-cached');
var uglify = require('gulp-uglify-es').default;
//const webp = require('gulp-webp');

// Bootstrap Javascript
var BOOTSTRAP = './node_modules/bootstrap/js/dist/';
var bootstrap_scripts = [
    // Don't need jquery because WordPress comes with it
    // 'node_modules/jquery/dist/jquery.min.js',
    // BOOTSTRAP + 'alert.js',
    BOOTSTRAP + 'button.js',
    BOOTSTRAP + 'util.js',
    //BOOTSTRAP + 'carousel.js',
    BOOTSTRAP + 'collapse.js',
    BOOTSTRAP + 'dropdown.js',
    // BOOTSTRAP + 'index.js',
    BOOTSTRAP + 'modal.js',
    // BOOTSTRAP + 'popover.js',
    // BOOTSTRAP + 'scrollspy.js',
    BOOTSTRAP + 'tab.js',
    // BOOTSTRAP + 'toast.js',
    // BOOTSTRAP + 'tooltip.js',
];

// Lazy Loading Library
var lazy_load_script = './node_modules/lazyload/lazyload.min.js';

// slick
var slick = './node_modules/slick-carousel/slick/slick.min.js';

// Font Awesome Icons
//var font_awesome_scripts = [
//    'node_modules/@fortawesome/fontawesome-free/js/brands.min.js',
//    'node_modules/@fortawesome/fontawesome-free/js/regular.min.js',
//    'node_modules/@fortawesome/fontawesome-free/js/solid.min.js',
//];

// Magnific Popup
var magnific_popup_scripts = ['./node_modules/magnific-popup/dist/jquery.magnific-popup.js'];

// Masonry
var masonry_scripts = ['./node_modules/masonry-layout/dist/masonry.pkgd.min.js'];

// AOS
var aos_scripts = ['./node_modules/aos/dist/aos.js']

// Definitions
var src = './src/';
var build = '../wp-content/themes/aiims/';

var sources = {
    theme: `${src}theme-files/**/*`,
    images: [`${src}images/**/*`],
    styles: `${src}styles/**/*`,
    scripts: `${src}scripts/**/*`,
    fonts: `${src}fonts/**/*`,
    data_files: `${src}data/**/*`,
    fontawesome_fonts: 'node_modules/@fortawesome/fontawesome-free/webfonts/**/*',
    vendor_scripts: [].concat.apply([], [
        bootstrap_scripts,
        lazy_load_script,
        //magnific_popup_scripts,
        //masonry_scripts,
        slick,
        aos_scripts,
    ]),
}
var destinations = {
    images: `${build}images/`,
    styles: `${build}styles/`,
    scripts: `${build}scripts/`,
    fonts: `${build}fonts/`,
    data_files: `${build}data/`,
    fontawesome_fonts: `${build}/webfonts/`
}

/**
 * Copy PHP files, base stylesheet and other WordPress items that don't need to be compiled / modified
 */
function theme() {
    return gulp.src(sources.theme)
        .pipe(gulp.dest(build))
}

/**
 * Optimises all source images
 */
function images() {
    return gulp.src(sources.images)
        .pipe(cache('images'))
        .pipe(imagemin())
        .pipe(gulp.dest(destinations.images))
};

/**
 * Compile sass files to css and write sourcemaps for development
 */
function styles() {
    return gulp.src(sources.styles)
        // .pipe(cache('styles'))
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', function (err) {
            console.error(err.message);
            browserSync.notify('<pre style="text-align: left">' + err.message + '</pre>', 10000);
            this.emit('end');
        }))
        .pipe(autoprefixer())
        // .pipe(sourcemaps.write())
        .pipe(cssnano())
        .pipe(gulp.dest(destinations.styles))
        .pipe(browserSync.stream({
            match: '**/*.css'
        }))
}
// custom font needs its web fonts in the root directory
function fonts() {
    return gulp.src(sources.fonts)
        .pipe(gulp.dest(destinations.fonts))
}

// font awesome needs its web fonts in the root directory
function fontawesome_fonts() {
    return gulp.src(sources.fontawesome_fonts)
        .pipe(gulp.dest(destinations.fontawesome_fonts))
}

// data file for the calculator
function data_files() {
    return gulp.src(sources.data_files)
        .pipe(gulp.dest(destinations.data_files))
}

function vendor_scripts() {
    return gulp.src(sources.vendor_scripts)
        .pipe(sourcemaps.init())
        .pipe(concat('vendor.min.js'))
        .pipe(sourcemaps.write())

        .pipe(uglify())
        .pipe(gulp.dest(destinations.scripts))
}

function custom_scripts() {
    return gulp.src(sources.scripts)
        // .pipe(sourcemaps.init())
        .pipe(concat('scripts.min.js'))
        // .pipe(sourcemaps.write())

        .pipe(uglify())
        .pipe(gulp.dest(destinations.scripts))
}

function slick_assets() {
    return gulp.src('./node_modules/slick-carousel/slick/ajax-loader.gif')
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('../wp-content/themes/aiims/styles/'));
}

function slick_fonts() {
    return gulp.src('./node_modules/slick-carousel/slick/fonts/**/*')
    .pipe(gulp.dest('../wp-content/themes/aiims/styles/fonts/'));
}

/**
 * Removes all files in the /build folder for an initial clean
 */
function clean() {
    return del(build + '**/*', {
        force: true
    })
}

/**
 * Watch for changes in our source files and reload browser or inject changes where needed
 */
function watch() {
    browserSync.init({
        proxy: encodeURI(`localhost/aiims/${path.resolve(__dirname, '../').split(path.sep).pop()}/`),
        injectChanges: true,
        // files: [__dirname, '!node_modules/']
    });

    gulp.watch(sources.images, images).on('change', browserSync.reload);
    gulp.watch(sources.theme, theme).on('change', browserSync.reload);
    gulp.watch(sources.scripts, custom_scripts).on('change', browserSync.reload);
    gulp.watch(sources.scripts, vendor_scripts).on('change', browserSync.reload);
    gulp.watch(sources.data_files, data_files).on('change', browserSync.reload);
    gulp.watch(sources.styles, styles);
}

exports.watch = gulp.series(
    clean,
    gulp.parallel(
        theme,
        images,
        fonts,
        fontawesome_fonts,
        data_files,
        slick_assets, 
        slick_fonts,
        custom_scripts,
        vendor_scripts,
        styles
    ),
    watch
)