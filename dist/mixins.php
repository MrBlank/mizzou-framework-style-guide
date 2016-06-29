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
    'title' => 'Mixins'
);

// Start output buffering
ob_start();
?>
<h1 class="section__title">Mixins</h1>

<p>There are a few mixins in the framework to help with common styling needs.</p>

<div class="section__topic" id="clearfix">
    <h2 class="section__topic__title">Clearfix</h2> 
    
    <p>The <code class="language-sass">clearfix()</code> mixin is way to apply a <a href="http://nicolasgallagher.com/micro-clearfix-hack/">clear fix</a> and allows a container to fully enclose its floated children.</p>

{% set markup %}
<div class="float-example">
    <div class="float-example__element">
        Floated Element
    </div>
    
    <div class="float-example__element">
        Floated Element
    </div>
</div>
{% endset %}
{{ markup|raw }}   
{% set sass %}
.float-example
{
    @include clear-fix();
    @include box(
        $background: $gold-100, 
        $padding: 1em, 
        $border-size: 1px, 
        $border-color: $gold-400
    );
    margin-bottom: $base-margin + 0em;
}

.float-example__element
{
    width: 160px;
    height: 160px;
    float: left;
    padding: 1em;
    margin: 0 .5em .5em 0;
    background-color: $gold-300;
    border: 1px solid $gold-400;
}
{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>
        
</div>


<div class="section__topic" id="box">
    <h2 class="section__topic__title">Box</h2> 
    
    <p>The <code class="language-sass">box()</code> mixin is good for adding emphasis to an element.</p>
    <h3>Mixin Variables</h3>
{% set sass %}
$background             (Optional) Defaults to $box-bg-color. Use `none` to remove 
$padding                (Optional) Defaults to 1rem.
$border-size            (Optional) Defaults to 0.
$border-color           (Optional) Defaults to $box-border-color.
$border-style           (Optional) Defaults to `Solid`.
{% endset %}
<div class="source-code source-code--no-toggle"><pre><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>


{% set markup %}
<div class="box-example">
    <p>A box with some added style options.</p>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.box-example 
{
    @include box(
        $background: $gold-100, 
        $padding: 1em, 
        $border-size: 1px, 
        $border-color: $gold-400
    );
}
{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>
    
</div>

<div class="section__topic" id="center-block">
    <h2 class="section__topic__title">Center Block</h2> 
    
    <p>The <code class="language-sass">center-block()</code> mixin is a quick way to center layouts.</p>
    <h3>Mixin Variables</h3>
{% set sass %}
$max-width   (Optional) Defaults to $base-max-width. Use `none` to disable.
$min-width   (Optional) Defaults to $base-min-width. Use `none` to disable.
{% endset %}
<div class="source-code source-code--no-toggle"><pre><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>
    
{% set markup %}
<div class="center-block-example">
    <p>This is a centered container.</p>
</div>
{% endset %}
{{ markup|raw }}   
{% set sass %}
.center-block-example
{
    @include center-block(
        $max-width: 500px, 
        $min-width: 250px
    );
    @include box();
    text-align: center;
}
{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>

    
</div>

<div class="section__topic" id="image-replacement">
    <h2 class="section__topic__title">Image Replacement</h2> 
    <p>Replacing HTML elements with images in CSS is a common need, so we have a pair of Sass mixins that can be employed.</p>
    
    <h3>Standard Image Replacement</h3>
    <p><code class="language-sass">replace-with-image()</code> offsets an element's text, and sets a background image.</p>
    
    


<h3>Printable Image Replacement</h3>
    <p><code class="language-sass">print-image()</code> guarantees that a background image shows up when a page is printed. Use inside <code class="language-sass">@media print</code>.</p>
    <h3>Mixin Variables</h3>
{% set sass %}
$filename       (Optional) Filename of the image. Defaults to `none`
$width          (Optional) Width of the image. Defaults to `none`
$height         (Optional) Height of the image. Defaults to `none`
{% endset %}
<div class="source-code source-code--no-toggle"><pre><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>

{% set markup %}
<p class="replace-with-image-example">Mizzou Logo</p>
{% endset %}
{{ markup|raw }}   
{% set sass %}
.replace-with-image-example
{
    @include replace-with-image(
        $filename: 'mu-logo-large.svg',
        $width: 66px,
        $height: 74px
    );   
    
    @media print 
    {
        @include print-image(
            $filename: 'mu-logo-large.svg',
            $width: 66px,
            $height: 74px
        );
    }   
}
{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>    
    
</div>

<div class="section__topic" id="child">
    <h2 class="section__topic__title">First and Last Child</h2> 
    
    <p>When using a containing element with padding, you may want to override the margins of child element to keep gutters consistent.</p>
    <p><code class="language-sass">first-child()</code> removes the top margin from the first child element and <code class="language-sass">last-child()</code> removes the bottom margin from the last child element. These are both used in the <code class="language-sass">box()</code> mixin.</p>
    
{% set markup %}
<div class="child-example">
    <div class="child-example__element">Child element</div>
    <div class="child-example__element">Child element</div>
    <div class="child-example__element">Child element</div>
</div>
{% endset %}
{{ markup|raw }}   
{% set sass %}
.child-example 
{
    background-color: $gold-100;
    padding: 1em;
    margin-bottom: $base-margin + 0em;
    @include first-child();
    @include last-child();
    
    .child-example__element
    {
        background-color: $gold-300;
        padding: 1em;
        margin: 1em 0;
    }  
}
{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>    
    

    
</div>


<?php
// Get contents
$aryAttributes['page']['content'] = ob_get_clean();

// Load and setup Twig
require_once 'inc/twig-config.php';
require_once 'inc/twig-setup.php';
print $objTwig->render('site-template.html.twig', $aryAttributes);
?>