/**
 * Сборщик css и js.
 *
 * - Сборка всех ресурсов:
 * $ npm install
 * $ gulp
 *
 * 2) Режим разработки, ресурсы автоматически пересобираются при сохранении исходных файлов:
 * $ gulp watch
 */

var gulp = require('gulp');
var sass = require('gulp-sass');
var csso = require('gulp-csso');
var autoprefixer = require('gulp-autoprefixer');
var plugins = require('gulp-load-plugins')();
const minify = require('gulp-minify');
var sourcemaps = require('gulp-sourcemaps');


var jsLibraries = './js/lib/*.js';
var jsCommon = './js/*.js';
var cssCommon = './sass/*.scss';

var destination = './compiled';
var css_destination = './compiled';

const AUTOPREFIXER_BROWSERS = [
	'ie >= 10',
	'ie_mob >= 10',
	'ff >= 30',
	'chrome >= 34',
	'safari >= 7',
	'opera >= 23',
	'ios >= 7',
	'android >= 4.4',
	'bb >= 10'
  ];

gulp.task('build-js-libraries', function() {
	return gulp.src(jsLibraries)
		// .pipe(sourcemaps.init())
		.pipe(plugins.concat('lib.js'))
		.pipe(minify())
		// .pipe(sourcemaps.write()) 		
		.pipe(gulp.dest(destination));
});

gulp.task('build-js-common', function() {
	return gulp.src(jsCommon)
		// .pipe(sourcemaps.init())
		.pipe(plugins.concat('main.js'))
		.pipe(minify())
		// .pipe(sourcemaps.write()) 		
		.pipe(gulp.dest(destination));
});

gulp.task('build-sass', function() {
	return gulp.src(cssCommon)
		.pipe(sourcemaps.init())
		.pipe(sass({  
			outputStyle: 'nested',
			precision: 10,
			includePaths: ['.'],
			onError: console.error.bind(console, 'Sass error:')
		  }))
		.pipe(plugins.concat('style.css'))
		.pipe(autoprefixer({browsers: AUTOPREFIXER_BROWSERS}))
		.pipe(csso())
		.pipe(sourcemaps.write()) 
		.pipe(gulp.dest(css_destination));
		
});
 
gulp.task('watch', function() {
	gulp.watch(jsLibraries, ['build-js-libraries']);
	gulp.watch(jsCommon, ['build-js-common']);
	gulp.watch(cssCommon, ['build-sass']);
});

gulp.task('build', [
	'build-js-libraries',
	'build-js-common',
	'build-sass',
]);

gulp.task('sass_build', [
	'build-sass',
]); 
 
gulp.task('default', ['build']);
