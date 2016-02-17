/**
 * JavaScript for Mizzou Framework Style Guide
 *
 * @author Josh Hughes (hughesjd@missouri.edu), University of Missouri
 * @copyright 2016 Curators of the University of Missouri
 */

// Setup Show/Hide Source Links
setupShowHideSource();

// Setup menu button for main navigation
setupNavMenuButton('.nav--site', '#mobile-nav'); 

// Setup menu button for standard examples
//setupNavMenuButton('.nav--vertical-example--with-mobile-menu');

// Setup menu button for cloned nav example
//setupNavMenuButton('.nav--vertical-example--with-mobile-menu-and-clone', '#mobile-menu-example-clone-target');


// Affix 
$('.main__container .nav__container').affix({
  offset: {
    top: $('.mu-sig__layer').outerHeight() + $('header').outerHeight(),
    bottom: $('footer').outerHeight(true) + 100
  }
});