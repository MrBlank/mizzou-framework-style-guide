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
            //server: {
            //    baseDir: 'dist'
            //}
            proxy: 'localhost:8888'
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
                outputStyle: 'compact'
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
            'src/js/affix.js', 
            'src/js/source-code-buttons.js',
            'src/js/script.js',
            'bower_components/prism/prism.js',
            'bower_components/prism/components/prism-javascript.js',
            'bower_components/prism/components/prism-php.js',
            'bower_components/prism/components/prism-sass.js'
            ])
            .pipe(objPlugins.concat('script.js'))
            //.pipe(objPlugins.uglify(objConfiguration.uglify))
            .pipe(objGulp.dest(strDistPath + 'js/'));
    });
    aryDefaultTasks.push('script.js');
    
    
    
    
    // Watch (All Files)
    //-----------------------------------------------
    
    objGulp.task('watch', function() 
    {   
        objGulp.run('browserSync');
        
        // Execute task
        objGulp.watch('src/scss/*.scss', ['all-css']);
        objGulp.watch('src/js/*.js', ['script.js']);
        objGulp.watch('dist/*.html').on('change', objPlugins.browserSync.reload);
        objGulp.watch('dist/*.php').on('change', objPlugins.browserSync.reload);
        objGulp.watch('dist/*.twig').on('change', objPlugins.browserSync.reload);
        objGulp.watch('dist/css/*.css').on('change', objPlugins.browserSync.reload);
        objGulp.watch('dist/js/*.js').on('change', objPlugins.browserSync.reload);
    });
    
    
        
        
    // Copy files from Bower Components
    //-----------------------------------------------
    
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
    
    // Twig library
    objGulp.task('twig', function() 
    {    
        // Execute task
        objGulp.src('bower_components/twig/lib/Twig/**/*')
            .pipe(objGulp.dest(strDistPath + 'inc/Twig/'));
    });
    aryCopyTasks.push('twig');
    
    // Twig extensions
    objGulp.task('twig-extensions.php', function() 
    {    
        // Execute task
        objGulp.src('bower_components/mizzou-framework/dist/inc/twig-extensions.php')
            .pipe(objGulp.dest(strDistPath + 'inc/'));
    });
    aryCopyTasks.push('twig-extensions.php');
    
    // Twig templates
    objGulp.task('twig-templates', function() 
    {    
        // Components - execute task
        objGulp.src([
                'bower_components/mizzou-framework/dist/inc/templates/components/footer.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/google-analytics.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/head-css.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/head-icons.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/head-metadata.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/header-with-university-signature.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/legal-text.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/main.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/navigation-pagination.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/navigation.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/outdated-browser.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/search-results.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/skip-to-content.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/social-media.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/typekit.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/unit-signature.html.twig',
                'bower_components/mizzou-framework/dist/inc/templates/components/university-signature.html.twig'
            ])
            .pipe(objGulp.dest(strDistPath + 'inc/templates/components/'));
            
        // Macros - execute task
        objGulp.src([
                'bower_components/mizzou-framework/dist/inc/templates/macros/navigation.html.twig'
            ])
            .pipe(objGulp.dest(strDistPath + 'inc/templates/macros/'));
            
        // Templates - execute task
        objGulp.src([
                'bower_components/mizzou-framework/dist/inc/templates/main-template.html.twig'
            ])
            .pipe(objGulp.dest(strDistPath + 'inc/templates/'));
    });
    aryCopyTasks.push('twig-templates');
    
        
    // Register copy tasks
    objGulp.task('copy', aryCopyTasks);
    
    
    
    
    
    
    // Deafult task
    //-----------------------------------------------
    
    objGulp.task('default', aryDefaultTasks);
    
}());