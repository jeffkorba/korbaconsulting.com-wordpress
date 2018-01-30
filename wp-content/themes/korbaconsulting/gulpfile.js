/*
jslint
node: true,
esversion: 6
*/

'use strict';

const gulp = require('gulp');
const clean = require('gulp-clean');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
// const ngAnnotate = require('gulp-ng-annotate');
const sass = require('gulp-sass');
// const include = require('gulp-include');
const autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function () {

	gulp.src('sass/global.scss')
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoprefixer({
            browsers: ['last 3 versions'],
            cascade: false
        }))
		.pipe(rename('global.min.css'))
		.pipe(gulp.dest('static/css'));

	// gulp.src('sass/vendor.scss')
	// 	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	// 	.pipe(rename('vendor.min.css'))
	// 	.pipe(gulp.dest('build/css'));
});

gulp.task('js', function () {
	return gulp.src('scripts/**/*.js')
		.pipe(concat('global.js'))
		.pipe(gulp.dest('static/js'))
		.pipe(rename('global.min.js'))
		// .pipe(ngAnnotate())
		.pipe(uglify())
		.pipe(gulp.dest('static/js'));
});

// gulp.task('html', function () {
//
// 	gulp.src('app/index.html')
// 		.pipe(include())
// 		.on('error', console.log)
// 		.pipe(gulp.dest('build'));
//
// 	gulp.src('app/views/**/*.html')
// 		.pipe(include())
// 		.on('error', console.log)
// 		.pipe(gulp.dest('build/views'));
// });

// gulp.task('data', function () {
//
// 	return gulp.src('app/data/**/*.json')
// 		.pipe(gulp.dest('build/data'));
// });

// gulp.task('images', function () {
//
// 	return gulp.src('images/**/*')
// 		.pipe(gulp.dest('build/images'));
// });

// gulp.task('vendor', function () {
//
// 	return gulp.src('vendor/**/*')
// 		.pipe(gulp.dest('build/vendor'));
// });

gulp.task('watch', function () {

	// gulp.watch('images/**/*', ['images']);
	gulp.watch('sass/**/*.scss', ['css']);
	gulp.watch('app/**/*.js', ['js']);
	// gulp.watch('app/data/**/*.json', ['data']);
	// gulp.watch(['app/index.html', 'app/views/**/*.html'], ['html']);
	// gulp.watch('vendor/**/*', ['vendor']);
});

gulp.task('clean', function () {
	return gulp.src('build', {read: false})
        .pipe(clean());
});


gulp.task('build', ['css', 'js']);

gulp.task('default', ['build']);
