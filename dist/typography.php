<?php
/**
 * Colors
 *
 * @author Josh Hughes (hughesjd@missouri.edu), Josh Nichols (nicholsjc@missouri.edu), University of Missouri
 * @copyright 2016 Curators of the University of Missouri
 */
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Page attributes
$aryAttributes['page'] = array(
    'title' => 'Typography'
);

// Start output buffering
ob_start();
?>
<h1 class="section__title">Typography</h1>

<p>Proxima Nova is the preferred default typeface with Janson as an optional decorative typeface. You don't need to purchase all weights or styles. At minimum, you would need regular, italic, bold (or semibold) and bold italic (or semibold italic) of Proxima Nova. Other weights and styles are acceptable in addition. Only embed the weights you need to keep page weights down.</p>

<div class="section__topic" id="proxima">
    <h2 class="section__topic__title">Proxima Nova</h2>
    <p>Proxima Nova <a href="http://www.fontspring.com/fonts/mark-simonson-studio/proxima-nova">requires a license</a> or a <a href="https://typekit.com/fonts/proxima-nova">Typekit account</a> to use.</p>
    <div class="source">
        <div class="font-examples">
            <h3>Thin (200)</h3>
            <p class="thin">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Light (300)</h3>
            <p class="light">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Regualr (400)</h3>
            <p class="normal">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Medium (500)</h3>
            <p class="medium">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Semibold (600)</h3>
            <p class="semibold">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Bold (700)</h3>
            <p class="bold">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Extra Bold (800)</h3>
            <p class="xbold">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Black (900)</h3>
            <p class="black">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
        </div>
    </div>   
       
</div>

<div class="section__topic" id="janson">
    <h2 class="section__topic__title">Janson</h2>
    <p>MU’s official typeface is Janson and is primarily used with signatures. <a href="http://www.myfonts.com/fonts/urw/janson/">Requires a license</a> and a tracking <code class="language-sass">@import</code> link that is unique to a specific font kit.</p>
    <p>University and unit signatures are graphics, so you do not need the Janson typeface for signatures.</p>
    
    <div class="source">
        <div class="font-examples">
            <h3>Light (300)</h3>
            <p class="serif light">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Roman (400)</h3>
            <p class="serif normal">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Medium (500)</h3>
            <p class="serif medium">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Bold (700)</h3>
            <p class="serif bold">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
            <h3>Small Caps (400, no italics)</h3>
            <p class="serif-sc">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
        </div>
    </div>
    
</div>

<div class="section__topic" id="mono">
    <h2 class="section__topic__title">Monospace</h2>
    <p class="styleguide">Standard monospaced system font that’s primarily used for code examples. No font embedding needed.</p>
    <div class="source">
        <div class="font-examples">
            <h3>Normal (400)</h3>
            <p class="monospace">AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789</p>
        </div>
    </div>
</div>

<div class="section__topic" id="mixin">
    <h2 class="section__topic__title">Type Mixins</h2>
    
    <p>There are two mixins to embed fonts. To include a weight, set the weight variable to <code class="language-sass">true</code>. All are set to <code class="language-sass">false</code> by default and weights not used may be omitted.</p>
    
{% set sass %}
@include font-proxima-nova(
    $thin-200:          'false',
    $light-300:         'false',
    $regular-400:       'true',
    $medium-500:        'false',
    $semibold-600:      'true',
    $bold-700:          'false',
    $extrabold-800:     'false',
    $black-900:         'false'
);

/**
 * Add your tracking link for license, unique to each fontkit you build.
 * Include when calling the mixin. Replace '{fontkit-id}' with the number.
 * (This @import is placed at the top of compiled CSS file when compiled.)
 */
 
@import url("//hello.myfonts.net/count/{fontkit-id}"); 
 
@include font-janson(
    $light-300:         'false',
    $roman-400:         'true',
    $medium-500:        'true',
    $bold-700:          'true',
    $smallcaps-400:     'false' // No bold or italic for smallcaps
);{% endset %}
<div class="source-code source-code--no-toggle"><pre><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>
      
</div>


<div class="section__topic" id="vars">
    <h2 class="section__topic__title">Type Variables</h2>
    
    <p>Default variables can be overwritten.</p>
    
{% set sass %}
// Font family

$font-serif:                    'Janson', 'Times New Roman', Times, serif !default;
$font-serif-sc:                 'Janson-SC', $font-serif !default;
$font-sans:                     'Proxima Nova', 'proxima-nova', 'Arial', sans-serif !default; // 'Proxima Nova' is for embedded web fonts & desktop, 'proxima-nova' is for Typekit
$font-monospace:                'source code pro', 'Menlo', 'Courier New', monospace !default; 

$font-default:                  $font-sans;

// Font weights. Aligns with Proxima Nova's weights

$font-thin:                     200 !default; 
$font-light:                    300 !default; 
$font-normal:                   400 !default;
$font-medium:                   500 !default;
$font-semibold:                 600 !default;
$font-bold:                     700 !default;
$font-xbold:                    800 !default;
$font-black:                    900 !default;

$font-bold-default:             $font-semibold !default; // The default bold weight.

// Font path

$font-path:                     '../fonts' !default;

// Base values

$font-family:                   $font-sans !default;
$font-size:                     16 !default;
$font-line-height:              1.5 !default;
{% endset %}
<div class="source-code source-code--no-toggle"><pre><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>
    
</div>



<?php
// Get contents
$aryAttributes['page']['content'] = ob_get_clean();

// Load and setup Twig
require_once 'inc/twig-config.php';
require_once 'inc/twig-setup.php';
print $objTwig->render('site-template.html.twig', $aryAttributes);
?>