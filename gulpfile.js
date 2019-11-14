var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
  return gulp.src('index.scss','admin/admin-login.scss').pipe(sass()).pipe(gulp.dest('css'))
})


/*
gulp.task('adminsass',function(){
  return gulp.src('')
})
*/
