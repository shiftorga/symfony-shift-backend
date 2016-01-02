(function() {
    "use strict";

    var gulp = require('gulp'),
        less = require('gulp-less'),
        path = require('path'),
        paths = {
            web: './web'
        },
        applicationPaths = {
            less: ['./themes/*.less'],
            partials: ['./web/components/angular-shift/partials/partials/**/*.html']
        };
    gulp.task('build-partials', function () {
        gulp.src(applicationPaths.partials)
            .pipe(gulp.dest(paths.web + '/partials'));
    });

    gulp.task('build-css', function () {
        return gulp.src(applicationPaths.less)
            .pipe(less({
                paths: [ path.join(paths.web, 'less', 'includes') ]
            }))
            .pipe(gulp.dest(paths.web + '/css'));
    });

    gulp.task('default', function() {
        gulp.watch(['./partials/partials/**/*.html'], ['build-partials'])
    });

    gulp.task('build', ['build-partials', 'build-css']);
})();
