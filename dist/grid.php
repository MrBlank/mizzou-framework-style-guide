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
    'title' => 'Grid System'
);

// Start output buffering
ob_start();
?>
<h1 class="section__title">Grid System</h1>

<p>The grid system is the result of two Sass mixins: <code class="language-sass">grid-row()</code> and <code class="language-sass">grid-column()</code>. It works like&nbsp;this:</p>
<ul class="list--spaced">
    <li><code class="language-sass">grid-row()</code> is a simple container with outer padding set to half the width of a gutter (.5rem by&nbsp;default).</li>
    <li><code class="language-sass">grid-column()</code> is a floated block that takes an X and Y parameter and uses that to calculate a width. It also has outer padding that’s set to half the width of a gutter. Combined with <code class=" language-sass">grid-row()</code>, this creates a full gutter on both sides of the&nbsp;column.</li>
</ul>
<p>Float direction is customizable on columns, and the outer padding can be adjusted on both rows and columns.</p>

<p><b>Note:</b> It is required, and the framework has this set by default, that you have <code class="language-sass">box-sizing</code> set to <code class="language-sass">border-box</code> on elements that use these mixins. Because of this, only IE8+ supports the grid mixin.</p>


<div class="section__topic" id="row">
    <h2 class="section__topic__title">Grid Row</h2> 
    
    <p><code class="language-sass">grid-row()</code> adds left and right padding so outer padding is consistant with the column gutters.</p>
    
    <h3>Parameter options</h3>

{% set sass %}
$padding-left      (Optional) Padding left for the row (defaults to 0.5rem)
$padding-right     (Optional) Padding right for the row (defaults to 0.5rem)
{% endset %}
<div class="source-code source-code--no-toggle"><pre><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div> 


</div>

<div class="section__topic" id="column">
    <h2 class="section__topic__title">Grid Column</h2>   

    <p><code class="language-sass">grid-column()</code> takes a given fraction, and generates a column. The gutter is created from padding.</p>

    <h3>Parameter options</h3>

{% set sass %}
$x                  Numerator
$y                  Denominator
$padding-left       (Optional) Padding left for the column (defaults to 0.5rem)
$padding-right      (Optional) Padding right for the column (defaults to 0.5rem)
$float-direction    (Optional) How to float the column (defaults to left)
{% endset %}
<div class="source-code source-code--no-toggle"><pre><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>   

</div>

<div class="section__topic" id="examples">
    <h2 class="section__topic__title">Examples</h2> 
    
    <p><b>Note:</b> Other styles are added to the examples below to show the column structures.</p>   
    
    <h3>Basic Layout</h3>
    
{% set markup %}
<div class="grid grid--basic">
    <div class="grid--article">
        <p>Content</p>
        <p>&#160</p>
        <p>&#160</p>
    </div>
    <div class="grid--aside">
        <p>Aside</p>
        <p>&#160</p>
    </div>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.grid--basic 
{
    @include grid-row();
    background-color: $gray-500;
    margin-bottom: 1.5rem;

    p 
    {
        margin: 0;
        background-color: $warm-gray-100;
        padding: 1rem;
    }
    .grid--article 
    {
        @include grid-column(
            $x: 2, 
            $y: 3
        );
    }
    .grid--aside 
    {
        @include grid-column(
            $x: 1, 
            $y: 3
        );
    }
    
    @media #{$query-small}
    {
        .grid--article,
        .grid--aside 
        {
            @include grid-column(
                $x: 1, 
                $y: 1
            );
        }
    }
}{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>

    <h3>Two Column Layout</h3>
    
{% set markup %}
<div class="grid grid--split">
    <div class="grid__column">
        <p>Column</p>
        <p>&#160</p>
        <p>&#160</p>
    </div>
    <div class="grid__column">
        <p>Column</p>
        <p>&#160</p>
        <p>&#160</p>
    </div>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.grid--split 
{
    @include grid-row();
    background-color: $gray-500;
    margin-bottom: 1.5rem;

    p 
    {
        margin: 0;
        background-color: $warm-gray-100;
        padding: 1rem;
    }
    .grid__column 
    {
        @include grid-column(
            $x: 1, 
            $y: 2
        );
    }   
    @media #{$query-small}
    {
        .grid__column 
        {
            @include grid-column(
                $x: 1, 
                $y: 1
            );
        }
    }
}{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>

    <h3>Layered Page Layout</h3>
    
{% set markup %}
<div class="grid--header__layer">
    <div class="grid--header__wrapper">
        <div class="grid--header">
            <p>Header</p>
        </div>
    </div>
</div>
<div class="grid--content__layer">
    <div class="grid--content__wrapper">
        <div class="grid--article">
            <p>Content</p>
            <p>&#160</p>
            <p>&#160</p>
        </div>
        <div class="grid--aside">
            <p>Aside</p>
            <p>&#160</p>
        </div>
    </div>
</div>
<div class="grid--footer__layer">
    <div class="grid--footer__wrapper">
        <div class="grid--footer">
            <p>Footer</p>
        </div>
    </div>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.grid--header__layer,
.grid--content__layer,
.grid--footer__layer 
{
    p 
    {
        margin: 0;
        padding: 1rem;
        background-color: fade-out(white, .4);
    }
}
.grid--header__wrapper,
.grid--content__wrapper,
.grid--footer__wrapper 
{
    @include grid-row();
}
.grid--header__layer 
{
    background-color: $gray-500;

    .grid--header 
    {
        @include grid-column(
            $x: 1, 
            $y: 1
        );
    }
}
.grid--content__layer {
    
    background-color: $warm-gray-100;

    .grid--article 
    {
        @include grid-column(
            $x: 4, 
            $y: 6
        );
    }
    .grid--aside 
    {
        @include grid-column(
            $x: 2, 
            $y: 6
        );
    }
    
    @media #{$query-small}
    {
        .grid--article,
        .grid--aside 
        {
            @include grid-column(
                $x: 1, 
                $y: 1
            );
        }
    }   
}
.grid--footer__layer 
{
    background-color: $gray-500;
    margin-bottom: 2rem;

    .grid--footer 
    {
        @include grid-column(
            $x: 1, 
            $y: 1
        );
    }
}{% endset %}
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