// packages
const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();

// location variables
const location = {
	styles: {
		src: './src/styles/**/*.scss',
		dist: './dist/styles'
	},
	scripts: {
		src: './src/scipts/**/*.js',
		dist: './dist/scripts'
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
	// concatenate
	// minify
	// output
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