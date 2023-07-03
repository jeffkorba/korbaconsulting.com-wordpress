const gulp = require('gulp');
const clean = require('gulp-clean');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');

const paths = {
	styles: {
		src: './src/sass/main.scss',
		dest: './static/css'
	},
	scripts: {
		src: './src/scripts/*.{js,json}',
		dest: './static/js'
	},
	vendor: {
		axios: {
			src: './node_modules/axios/dist/**/*.*',
			dest: './static/vendor/axios'
		},
		bootstrap: {
			src: './node_modules/bootstrap/dist/**/*.*',
			dest: './static/vendor/bootstrap'
		},
		fontawesome: {
			src: './node_modules/@fortawesome/fontawesome-free/**/*.*',
			dest: './static/vendor/fontawesome-free'
		},
		vue: {
			src: './node_modules/vue/dist/**/*.*',
			dest: './static/vendor/vue'
		}
	}
};

function cleanVendor () {

	return gulp.src('./static/vendor/*', {
		read: false,
		allowEmpty: true
	})
	.pipe(clean());
}

function cleanScripts () {

	return gulp.src(paths.scripts.dest, {
			read: false,
			allowEmpty: true
		})
		.pipe(clean());
}

function cleanStyles () {

	return gulp.src(paths.styles.dest, {
			read: false,
			allowEmpty: true
		})
		.pipe(clean());
}

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

function buildScripts () {

	return gulp.src(paths.scripts.src)
		.pipe(sourcemaps.init())
		.pipe(uglify())
        .pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(paths.scripts.dest));
};

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

exports.build = gulp.series(cleanVendor, copyAxios, copyBootstrap, copyFontAwesome, copyVue, cleanScripts, buildScripts, cleanStyles, buildStyles);
exports.scripts = gulp.series(cleanScripts, buildScripts);
exports.styles = gulp.series(cleanStyles, buildStyles);
exports.vendor = gulp.series(cleanVendor, copyAxios, copyBootstrap, copyFontAwesome, copyVue);
exports.watch = watchStyles;