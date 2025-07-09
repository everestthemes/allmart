"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));
const minifyCSS = require("gulp-clean-css");
const autoprefixer = require("gulp-autoprefixer");
const sourceMap = require("gulp-sourcemaps");
const notify = require("gulp-notify");
const wpPot = require('gulp-wp-pot');

const pkgJson = require('./package.json');

/** Compile Sass Files */
function handleScssBuild() {
	return gulp
		.src("src/scss/**/*.scss")
		.pipe(sass({
			quietDeps: true  // Suppress deprecation warnings from dependencies
		}).on("error", sass.logError))
		.pipe(autoprefixer("last 2 versions"))
		.pipe(gulp.dest("assets/css/"))
		.pipe(notify({message: 'TASK: "Build styles" Completed! 💯', onLast: true}));
}

/** Minify Css Files */
function handleMinifyCSS() {
	return handleScssBuild()
		.pipe(gulp.src("assets/css/*.css"))
		.pipe(sourceMap.init())
		.pipe(minifyCSS())
		.pipe(sourceMap.write())
		.pipe(gulp.dest("assets/css/"))
		.pipe(notify({message: 'TASK: "Minify styles" Completed! 💯', onLast: true}));
}

/** Generate WP Pot file */
function handlePotFile() {
	return gulp
		.src('patterns/*.php')
        .pipe(wpPot( {
            domain: pkgJson.name,
            package: pkgJson.name
        } ))
        .pipe(gulp.dest(`languages/${pkgJson.name}.pot`));
}

gulp.task("file:pot", handlePotFile);
gulp.task("sass:minify", handleMinifyCSS);
gulp.task("sass:watch", () =>
	gulp.watch("src/scss/**/*.scss", handleScssBuild)
);
