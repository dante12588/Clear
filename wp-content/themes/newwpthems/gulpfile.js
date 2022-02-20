'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const watch = require('gulp-watch');
const babel = require('gulp-babel');
const browserSync = require('browser-sync').create();
const reload = browserSync.reload();

gulp.task('css', function(){
    return gulp.src('./scss/style.scss')
    .pipe( sass() )
    .pipe( gulp.dest('./') );
})

gulp.task('watch', function(){
    gulp.watch('./scss/**/*.scss', gulp.series('css'));
    gulp.watch('./*.php').on('change', browserSync.reload);
    gulp.watch('./**/*.scss').on('change', browserSync.reload);
    gulp.watch('./templates/**/*.twig').on('change', browserSync.reload);
})

gulp.task('server', function() {
    browserSync.init({
        proxy: 'http://localhost/nowy/',
        notify: true,
    });

});

gulp.task('default', gulp.parallel('css', 'server', 'watch'));