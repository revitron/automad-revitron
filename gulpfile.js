var gulp = require("gulp"),
	autoprefixer = require("gulp-autoprefixer"),
	cleanCSS = require("gulp-clean-css"),
	concat = require("gulp-concat"),
	less = require("gulp-less"),
	remoteSrc = require("gulp-remote-src"),
	gutil = require("gulp-util"),
	merge2 = require("merge2"),
	cleanCSSOptions = {
		format: { wrapAt: 500 },
		rebase: false,
	},
	remoteBase =
		"https://raw.githubusercontent.com/revitron/revitron-sphinx-theme/master/";

// Error handling to prevent watch task to fail silently without restarting.
var onError = function (err) {
	gutil.log(gutil.colors.red("ERROR", err.plugin), err.message);
	gutil.beep();
	new gutil.PluginError(err.plugin, err, { showStack: true });
	this.emit("end");
};

gulp.task("fonts", function () {
	return remoteSrc(
		[
			"fira-mono-latin-400.woff2",
			"fira-mono-latin-500.woff2",
			"fira-mono-latin-700.woff2",
			"fontawesome-webfont.eot",
			"fontawesome-webfont.svg",
			"fontawesome-webfont.ttf",
			"fontawesome-webfont.woff",
			"fontawesome-webfont.woff2",
			"inter-italic-var.woff2",
			"inter-roman-var.woff2",
		],
		{
			base: `${remoteBase}revitron_sphinx_theme/static/css/fonts/`,
		}
	).pipe(gulp.dest("dist/fonts"));
});

gulp.task("js", function () {
	return merge2(
		gulp.src("node_modules/jquery/dist/jquery.min.js"),
		remoteSrc(["revitron_sphinx_theme/static/js/theme.js"], {
			base: remoteBase,
		})
	)
		.pipe(concat("script.min.js", { newLine: "\r\n\r\n" }))
		.pipe(gulp.dest("dist"));
});

gulp.task("css", function () {
	return merge2(
		remoteSrc(["revitron_sphinx_theme/static/css/theme.css"], {
			base: remoteBase,
		}),
		gulp
			.src("less/revitron.less")
			.pipe(less())
			.on("error", onError)
			.pipe(autoprefixer({ grid: false }))
			.pipe(cleanCSS(cleanCSSOptions))
	)
		.pipe(concat("revitron.min.css", { newLine: "\r\n\r\n" }))
		.pipe(gulp.dest("dist"));
});

// Watch task.
gulp.task("watch", function () {
	gulp.watch("less/*.less", gulp.series("css"));
});

// The default task.
gulp.task("default", gulp.series("js", "css", "fonts"));
