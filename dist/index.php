<?php
/**
 * General Principles
 *
 * @author Josh Hughes (hughesjd@missouri.edu), Josh Nichols (nicholsjc@missouri.edu), University of Missouri
 * @copyright 2016 Curators of the University of Missouri
 */
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Page attributes
$aryAttributes['page'] = array(
    'is_homepage' => true
);

// Start output buffering
ob_start();
?>
<h1 class="section__title">General Principles</h1>

<div class="section__topic" id="introduction">
    <h2 class="section__topic__title">Introduction</h2>
        
    <p>This website serves two purposes:</p>
    
    <ol class="list--spaced">
        <li>To document standard styles and patterns established by the <a href="https://bitbucket.org/muwebcom/mizzou-framework">Mizzou Framework</a>. These styles and patterns are designed to adhere to the <a href="http://identity.missouri.edu">Mizzou Identity&#160;Standards</a>.</li>
        
        <li>To document important goals and strategies used in the building of Mizzou websites.</li>
    </ol>
</div>

<div class="section__topic" id="download">
    <h2 class="section__topic__title">Download</h2>
        
    <p><a class="button__download" href="https://bitbucket.org/muwebcom/mizzou-framework/downloads">&#9662;&#160;Download Mizzou Framework</a></p>
    <p><a href="https://bitbucket.org/muwebcom/mizzou-framework">View the Mizzou Framework repository on Bitbucket</a>.</p>
</div>

<div class="section__topic" id="getting-started">
    <h2 class="section__topic__title">Getting Started</h2>
    
    <p>This framework has several requirements in order to use.</p>
    
    <h3>Sass</h3>
    <p>All CSS in the Mizzou Framework is <a href="http://sass-lang.com/">compiled from Sass</a> source files located in <code class="language-markup">src/scss/</code>. There is no compiled CSS version of the framework. If you do not use Sass and only need assets for creating a web signature, use the <a href="http://identity.missouri.edu/web-sig/">Mizzou Web Signatures</a> project files.
    
    <h3>Autoprefixer</h3>
    <p><a href="https://github.com/postcss/autoprefixer">Autoprefixer</a> is required to deal with <a href="http://webdesign.about.com/od/css/a/css-vendor-prefixes.htm">CSS vendor prefixes</a>. If you're not using a Sass compiler that enables this or our Gulp boilerplate, you'll need to integrate Autoprefixer into your build process yourself. Our current browser support is lat 2 versions of modern browsers and IE 9+.</p>
    
    <h3>Images</h3>
    <p>Mizzou logos, wordmarks and graphics are available in various sizes. Exported, compressed files used in this framework are found in <code class="language-markup">dist/images/</code>. Source Adobe Illustrator files can be found in <code class="language-markup">src/images/</code>.</p>
    <p><strong>Note:</strong> MU logo assets aren’t meant to be used at a different size other than 100% of their file size. They have been <a class="styleguide" href="http://www.webdesignerdepot.com/2014/03/the-designers-guide-to-pixel-hinting/" title="http://www.webdesignerdepot.com/2014/03/the-designers-guide-to-pixel-hinting/">pixel hinted</a> to be as sharp as possible. Any enlarging or shrinking will distort the art. </p>
    
    <h3>Fonts</h3>
    <p><a href="http://www.fontspring.com/fonts/mark-simonson-studio/proxima-nova">Proxima Nova</a> (<a href="https://typekit.com/fonts/proxima-nova">also on Typekit</a>) and <a href="http://www.myfonts.com/fonts/urw/janson/">Janson</a> are the two Web fonts used on Mizzou sites. Both require a license to use and are not included in the source files of the Framework. </p>
    <p>Proxima Nova is the preferred default typeface with Janson as an optional decorative typeface. You don't need to purchase all weights or styles. At minimum, you would need regular, italic, bold (or semibold) and bold italic (or semibold italic). Other weights and styles are acceptable in addition. Only embed the weights you need to keep page weights down.</p>
    
    <h3>JavaScript</h3>
    <p>Some components will require JavaScript to function, such as the navigation mixin's menu button, and can be found in <code class="language-markup">src/js/</code>. The framework doesn't require <a href="https://jquery.com/">jQuery</a>, but can work in conjunction with it.</p>
        
</div>

<?php
// Get contents
$aryAttributes['page']['content'] = ob_get_clean();

// Load and setup Twig
require_once 'inc/twig-config.php';
require_once 'inc/twig-setup.php';
print $objTwig->render('site-template.html.twig', $aryAttributes);
?>