<?php
/**
 * Colors
 *
 * @author Josh Nichols (nicholsjc@missouri.edu), University of Missouri
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
<h1 class="section__title">Buttons</h1>



<div class="section__topic" id="default">
    <h2 class="section__topic__title">Default Styles</h2>
    
    <p>Most buttons are applied inline using CMS tools by content editors, so we have a set of classes for buttons. <code class="language-markup">.button</code> is the base class and is modified by <code class="language-markup">.button--secondary</code> and <code class="language-markup">.button--apply</code>.</p>
    
    <p>Button size is relative to its parent element.</p>
    
{% set markup %}
<div class="button-examples buttons--light">
    <p>
        <a class="button" href="#">Default Button</a> 
        <a class="button button--secondary" href="#">Secondary Button</a> 
        <a class="button button--apply" href="#">Apply Button</a>
    </p>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.buttons--light {
    background-color: $grey-100;
}
{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>

</div>

<div class="section__topic" id="overrides">
    <h2 class="section__topic__title">Overrides</h2>
    
    <p>If buttons are used on a different colored background, color overrides are needed. Here are a few common options.</p>
    <p>The apply button should always be red.</p>

{% set markup %}
<div class="button-examples buttons--dark">
    <p>
        <a class="button" href="#">Default Button</a> 
        <a class="button button--secondary" href="#">Secondary Button</a> 
        <a class="button button--apply" href="#">Apply Button</a>
    </p>
</div>
<div class="button-examples buttons--gold">
    <p>
        <a class="button" href="#">Default Button</a> 
        <a class="button button--secondary" href="#">Secondary Button</a> 
        <a class="button button--apply" href="#">Apply Button</a>
    </p>
</div>

{% endset %}
{{ markup|raw }}
{% set sass %}
.buttons--dark {
    background-color: $grey-600;
        
    .button--secondary {
        background-color: $grey-600;
        color: $grey-100;
    
        &:hover,
        &:focus,
        &:active {
            background-color: fade-out($gold-200, .8);
            color: $grey-100;
        }
    }
}

.buttons--gold {
    background-color: $gold-400;
    
    .button {
        background-color: $grey-600;
        color: $grey-100;
        border-color: $grey-600;
    
        &:hover,
        &:focus,
        &:active {
            background-color: fade-out($grey-600, .3);
            color: $grey-100;
            border-color: $grey-600;
        }
    }
    .button--secondary { 
        background-color: transparent;
        color: $grey-600;
        border-color: $grey-600;
    
        &:hover,
        &:focus,
        &:active {
            background-color: fade-out($gold-200, .6);
            color: $grey-600;
            border-color: $grey-600;
        }
    }
}
{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>
    
</div>


<div class="section__topic" id="positioning">
    <h2 class="section__topic__title">Positioning</h2>
    
    <p>By default, buttons are aligned as block-level elements. This behavior can be overridden to inline-block for special cases or media queries. The <code class="language-sass">button--inline-block()</code> mixin will set the buttons as inline. The <code class="language-sass">button--block()</code> mixin will change it back to block.</p>
{% set sass %}
.button {
    @include button--inline-block();
}
@media #{$query-small} {
    
    .button {
        @include button--block();
    }
}
{% endset %}
<div class="source-code source-code--no-toggle"><pre class="language-markup"><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>

<p>For block alignment, the last-child of <code class="language-markup">.button</code> elements has its bottom margin reduced to keep vertical alignment consistent.</p>
    
</div>


<div class="section__topic" id="custom">
    <h2 class="section__topic__title">Custom Buttons</h2>
    
    <p>Custom button styles can be created with a mixin. The <code class="language-sass">custom-button()</code> mixin has a set of color variables that can be passed to it to define button style. Below are the mixin options with their default values. All are optional.</p>

    <p>This mixin is for creating buttons that need to be positioned differently than default buttons. It is best to use the default <code class="language-markup">.button</code> class and create a new modifier class on buttons for consistent positioning. </p>

{% set sass %}
$color-background:              $gold-400
$color-text:                    $black
$color-border:                  $gold-400
$color-background-hover:        $gold-200
$color-text-hover:              $black
$color-border-hover:            $gold-400
{% endset %}
<div class="source-code source-code--no-toggle"><pre class="language-markup"><code class="language-sass">{{ sass|e }}</code></pre></div>
    
</div>


<?php
// Get contents
$aryAttributes['page']['content'] = ob_get_clean();

// Load and setup Twig
require_once 'inc/twig-config.php';
require_once 'inc/twig-setup.php';
print $objTwig->render('site-template.html.twig', $aryAttributes);
?>