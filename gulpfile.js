var gulp = require('gulp');
var sass = require('gulp-sass');
var sassAdmin = require('gulp-sass');


gulp.task('sass', function(){
  gulp.src('index.scss').pipe(sass()).pipe(gulp.dest('css'))
  gulp.src('admin-add/admin-add-post.scss').pipe(sass()).pipe(gulp.dest('admin-add'))
  gulp.src('admin-homepage/admin-homepage.scss').pipe(sass()).pipe(gulp.dest('admin-homepage'))
  gulp.src('admin-login/admin-login.scss').pipe(sass()).pipe(gulp.dest('admin-login'))
  gulp.src('admin-edit/admin-edit-post.scss').pipe(sass()).pipe(gulp.dest('admin-edit'))
})
