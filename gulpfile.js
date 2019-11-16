var gulp = require('gulp');
var sass = require('gulp-sass');
var sassAdmin = require('gulp-sass');


gulp.task('sass', function(){
  gulp.src('index.scss').pipe(sass()).pipe(gulp.dest('css'))
  gulp.src('admin-edit/admin-add-post.scss').pipe(sass()).pipe(gulp.dest('admin-edit'))
  gulp.src('admin/admin-login.scss').pipe(sass()).pipe(gulp.dest('admin'))
})
