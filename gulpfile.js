// Load our plugins
var	gulp			= require('gulp'),
	sass			= require('gulp-sass'),  // Our sass compiler
	notify			= require('gulp-notify'), // Basic gulp notificatin using OS
	sourcemaps		= require('gulp-sourcemaps'), // Sass sourcemaps
	rename			= require('gulp-rename'), // Allows us to rename our css file prior to minifying
	autoprefixer		= require('gulp-autoprefixer'), // Adds vendor prefixes for us
	concat			= require('gulp-concat'), // Concat our js
	uglify			= require('gulp-uglify'), // Minify our js
	jshint 			= require('gulp-jshint'); // Checks for js errors


// Our 'styles' tasks, which handles our sass actions such as compliling and minification
gulp.task('styles', function() {
	gulp.src('assets/sass/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({
			// outputStyle: 'compressed'
		})
		.on('error', notify.onError(function(error) {
			return "Error: " + error.message;
		}))
		)
		.pipe(autoprefixer({
			browsers: ['last 2 versions', 'ie >= 9']
		})) // our autoprefixer - add and remove vendor prefixes using caniuse.com
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./assets/dist/css')) // Location of our app.css file
		.pipe(notify({
			message: "Styles task complete!"
		}));
});


//Our 'deploy' task which deploys on a local dev environment
gulp.task('deploylocal', function() {

	var files = [
		'assets/dist/**/*', 
		'node_modules/foundation-sites/dist/**/*', 
		'inc/**.*',
		'js/**/*.js',
		'languages/**.*',
		'layouts/**.*',
		'page-templates/**/*',
		'screenshot.png',
		'*.php',
		'style.css'];

	var dest = '/var/www/html/theme-dev/wp-content/themes/woodstove';

	return gulp.src(files, {base:"."})
	        .pipe(gulp.dest(dest));
});


// Our 'scripts' task, which handles our javascript elements
gulp.task('js', function() {
	return gulp.src('assets/js/**/*.js')
		.pipe(concat('app.js'))
		.pipe(gulp.dest('./assets/dist/js'))
		.pipe(rename({suffix: '.min'}))
		.pipe(uglify()
		.on('error', notify.onError(function(error) {
			return "Error: " + error.message;
		}))
		)
		.pipe(gulp.dest('./assets/dist/js'))
		.pipe(notify({ message: "Scripts task complete!"}));
});


// Our 'jsHint' task, which checks for JS errors
gulp.task('jsHint', function() {
	return gulp.src('./assets/js/**/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
		.pipe( notify( { message: "jsHint task complete", onLast: true } ) );
} );


// Our default gulp task, which runs all of our tasks upon typing in 'gulp' in Terminal
gulp.task('default', ['styles', 'js', 'jsHint', 'deploylocal']);
