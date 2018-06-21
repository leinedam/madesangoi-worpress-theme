var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var uglifycss = require('gulp-uglifycss');
//var order = require("gulp-order");


gulp.task('uglifyjs', function(){
	gulp.src('js/src/themescripts.js').pipe(uglify()).pipe(concat("scripts.min.js")).pipe(gulp.dest('js'))
});


gulp.task('uglifycss', function(){
	gulp.src('style.css')
	.pipe(uglifycss())
	.pipe(concat("styles.min.css"))
	.pipe(gulp.dest('css'))
});



//concatinatio=ng all files

gulp.task('concatjs', function(){
   gulp.src(['ajquery.min.js', 'bootstrap.min.js'])
	.pipe(concat("everything.js"))
	.pipe(gulp.dest('js'))
});



gulp.task('concatcss', function(){
   gulp.src("css/*.css")
	.pipe(concat("styles.min.css"))
	.pipe(gulp.dest(''))
});
