'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');

const paths = {
	styles: {
		src: './sass/global.scss',
		dest: './static/css/'
	},
	scripts: {
		src: '',
		dest: './static/js/'
	},
	vendor: {
		axios: {
			src: './node_modules/axios/dist/**/*.*',
			dest: './vendor/axios'
		},
		bootstrap: {
			src: './node_modules/bootstrap/dist/**/*.*',
			dest: './vendor/bootstrap'
		},
		fontawesome: {
			src: './node_modules/@fortawesome/fontawesome-free/**/*.*',
			dest: './vendor/fontawesome-free'
		},
		vue: {
			src: './node_modules/vue/dist/**/*.*',
			dest: './vendor/vue'
		}
	}
};

function copyAxios () {

	return gulp.src(paths.vendor.axios.src)
		.pipe(gulp.dest(paths.vendor.axios.dest));
}

function copyBootstrap () {

	return gulp.src(paths.vendor.bootstrap.src)
		.pipe(gulp.dest(paths.vendor.bootstrap.dest));
}

function copyFontAwesome () {

	return gulp.src(paths.vendor.fontawesome.src)
		.pipe(gulp.dest(paths.vendor.fontawesome.dest));
}

function copyVue () {

	return gulp.src(paths.vendor.vue.src)
		.pipe(gulp.dest(paths.vendor.vue.dest));
}

function buildStyles () {

	return gulp.src(paths.styles.src)
		.pipe(sourcemaps.init())
		.pipe(sass({
				outputStyle: 'compressed'
			}).on('error', sass.logError))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(paths.styles.dest));
};

function watchStyles () {

	gulp.watch('./sass/**/*.scss', buildStyles);
};

exports.build = gulp.parallel(copyAxios, copyBootstrap, copyFontAwesome, copyVue, buildStyles);
exports.watch = watchStyles;