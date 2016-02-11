/**
 * Gulpfile for Mizzou Framework Style Guide
 *
 * @author Josh Hughes (hughesjd@missouri.edu), University of Missouri
 * @copyright 2016 Curators of the University of Missouri
 * @version 3.0.0
 */
  
(function()
{
    'use strict'
    
    // Set dist path
    var strDistPath                     = 'dist/';
    
    // Include gulp
    var objGulp                         = require('gulp');
    
    // Include gulp plugins
    var objPlugins                      = {};
    objPlugins.browserSync              = require('browser-sync');
    objPlugins.autoprefixer             = require('gulp-autoprefixer');
    objPlugins.concat                   = require('gulp-concat');
    objPlugins.jshint                   = require('gulp-jshint');
    objPlugins.notify                   = require('gulp-notify');
    objPlugins.sass                     = require('gulp-sass');
    objPlugins.uglify                   = require('gulp-uglify');
    
    // Files to run JSHint on
    var aryJSHintFiles                  = ['gulpfile.js'];
    
    // Default tasks
    var aryDefaultTasks                 = [];
    // Copy tasks
    var aryCopyTasks                    = [];
    
    
    // Static server setup
    objGulp.task('browserSync', function() 
    {
        objPlugins.browserSync({
            server: {
                baseDir: 'dist'
            },
            //proxy: 'localhost:8888'
        })
    });
    
    
    // All CSS files
    objGulp.task('all-css', function() 
    {    
        // Configuration
        var objConfiguration = {
            autoprefixer: {
                browsers: [
                    'last 2 versions',
                    'ie 9',
                    'ie 10',
                    'ie 11'
                ]
            },
            notify: {
                title: 'Task Successful',
                message: 'All CSS files have been compiled.'
            },
            sass: {
                outputStyle: 'compressed'
            }
        };
        
        // Execute task
        objGulp.src('src/scss/*.scss')
            .pipe(objPlugins.sass(objConfiguration.sass).on('error', objPlugins.sass.logError))
            .pipe(objPlugins.autoprefixer(objConfiguration.autoprefixer))
            .pipe(objGulp.dest(strDistPath + 'css/'))
            .pipe(objPlugins.notify(objConfiguration.notify));
    });
    aryDefaultTasks.push('all-css');
    
    
    // Main JS file
    objGulp.task('script.js', function() 
    {    
        // Configuration
        var objConfiguration = {
            uglify: {
                mangle: false
            }
        };
        
        // Execute task
        objGulp.src([
            'bower_components/mizzou-framework/src/js/class-manipulation.js', 
            'bower_components/mizzou-framework/src/js/dom-traversal.js',
            'bower_components/mizzou-framework/src/js/menu-button.js',
            'src/js/source-code-buttons.js',
            'src/js/script.js',
            'bower_components/prism/prism.js',
            'bower_components/prism/components/prism-javascript.js',
            'bower_components/prism/components/prism-php.js',
            'bower_components/prism/components/prism-sass.js'
            ])
            .pipe(objPlugins.concat('script.js'))
            .pipe(objPlugins.uglify(objConfiguration.uglify))
            .pipe(objGulp.dest(strDistPath + 'js/'));
    });
    aryDefaultTasks.push('script.js');
    
    
    // Watch (All Files)
    objGulp.task('watch', function() 
    {   
        objGulp.run('browserSync');
        
        // Execute task
        objGulp.watch('src/scss/*.scss', ['all-css']);
        objGulp.watch('src/js/*.js', ['script.js']);
        objGulp.watch('dist/*.html').on('change', objPlugins.browserSync.reload);
        objGulp.watch('dist/css/*.css').on('change', objPlugins.browserSync.reload);
        objGulp.watch('dist/js/*.js').on('change', objPlugins.browserSync.reload);
    });
    
    
        
    // Copy files from Bower Components
    
    // Images
    objGulp.task('boilerplate-images', function() 
    {    
        // Execute task
        objGulp.src([
            'bower_components/mizzou-framework/dist/images/*'
            ])
            .pipe(objGulp.dest(strDistPath + 'images/'));
    });
    aryCopyTasks.push('boilerplate-images');
    
    // Fonts
    objGulp.task('boilerplate-fonts', function() 
    {    
        // Execute task
        objGulp.src([
            'bower_components/mizzou-fonts/Proxima Nova/webfonts/*',
            'bower_components/mizzou-fonts/Janson/webfonts/*'
            ])
            .pipe(objGulp.dest(strDistPath + 'fonts/'));
    });
    aryCopyTasks.push('boilerplate-fonts');
        
    // Register copy tasks
    objGulp.task('copy', aryCopyTasks);
    
    
    
    // Register default tasks
    objGulp.task('default', aryDefaultTasks);
}());