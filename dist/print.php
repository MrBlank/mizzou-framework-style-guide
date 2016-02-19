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
    'title' => 'Print Reset'
);

// Start output buffering
ob_start();
?>
<h1 class="section__title">Print Reset</h1>

<p>The <code class="language-sass">_print.scss</code> stylesheet does the following to all elements on the page to help with printer compatibility:</p>

<ul>
    <li>Makes text black</li>
    <li>Makes borders black</li>
    <li>Removes backgrand images</li>
    <li>Makes background colors white</li>
</ul>

<p>It also overrides the base font size and sets it to 11px on the <code class="language-markup">html</code> tag.</p>
<p>Individual sites will need a separate set of rules to hide unnecessary block level elements and make fine-tuned adjustments. For ease of maintaining source code, it is recommended to use <code class="language-sass">@media print</code> with the element markup that needs print styles.</p>

<div class="section__topic" id="example">
    <h2 class="section__topic__title">Example</h2> 
    <p>Do not edit <code class="language-sass">_print.scss</code> directly. You will want to add print styles to elements as you need them.
    
{% set sass %}

nav 
{
    // Your nav styles here
    
    @media print 
    {
        // Print styles for the element
        display: none;
    }
}
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