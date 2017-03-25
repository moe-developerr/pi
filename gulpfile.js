// packages
const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const sassGlob = require('gulp-sass-glob');
const concat = require('gulp-concat');
const minify = require('gulp-minify');

// location variables
const location = {
	styles: {
		src: './assets/src/styles/**/*.scss',
		dist: './assets/dist/styles'
	},
	scripts: {
		src: [
			'./node_modules/jquery/dist/jquery.min.js',
			'./assets/src/scripts/vendors/flickity.js',
			'./assets/src/scripts/vendors/**/*.js',
			'./assets/src/scripts/components/**/*.js'
		],
		dist: './assets/dist/scripts'
	},
	markup: './**/*.php'
};

// tasks
gulp.task('styles', styles);
gulp.task('scripts', scripts);
gulp.task('initBrowserSync', initBrowserSync);
gulp.task('watchMarkup', watchMarkup);
gulp.task('watchStyles', watchStyles);
gulp.task('watchScripts', watchScripts);
gulp.task('watch', ['initBrowserSync', 'styles', 'scripts'], watch)
gulp.task('default', ['watch']);

// task functions
function styles() {
	return gulp.src(location.styles.src)
		.pipe(sourcemaps.init())
		.pipe(sassGlob())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(location.styles.dist))
    	.pipe(browserSync.stream());
}

function scripts() {
	return gulp.src(location.scripts.src)
		.pipe(sourcemaps.init())
		.pipe(concat('scripts.min.js'))
		.pipe(minify())
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(location.scripts.dist))
    	.pipe(browserSync.stream());
}

function initBrowserSync() {
	browserSync.init({
		proxy: 'http://pride'
	});
}

function watchMarkup() {
	return gulp.watch(location.markup, browserSync.reload);
}

function watchStyles() {
	return gulp.watch(location.styles.src, ['styles']);
}

function watchScripts() {
	return gulp.watch(location.scripts.src, ['scripts']);
}

function watch() {
	watchMarkup();
	watchStyles();
	watchScripts();
}