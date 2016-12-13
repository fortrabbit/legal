// INIT
// load gulp and plugins
// run npm update to get all the sources from the packages.json file

var gulp    = require('gulp'),
    concat  = require('gulp-concat'),
    jshint  = require('gulp-jshint'),
    uglify  = require('gulp-uglify'),
    fs      = require('fs'), // filesystem access (to read aws.json)
    s3      = require('gulp-s3');


// VARIABLES
// where to find and put stuff


var source = {
    js: [
        'public/src/js/dynatexer.js',
        'public/src/js/dynatexer.calls.js'
    ]
};

var target = { js: 'public/dist/js' };


// SCRIPTS task

gulp.task('scripts', function () {
  gulp.src( source.js )
    .pipe(concat('www-fortrabbit.js' ))
    .pipe(jshint())
    .pipe(uglify())
    .pipe(gulp.dest( target.js )); // local target
});



// DEPLOY task
// just grab the static files & push them to S3
// call this manually: gulp deploy

gulp.task('deploy', function () {
    aws = JSON.parse(fs.readFileSync('aws.json'));
    gulp.src(target_path + concat_file)
        .pipe(s3(aws));
});


// run the tasks in sequence!
gulp.task('default', ['scripts', 'deploy']);
