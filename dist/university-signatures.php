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
    'title' => 'Mizzou Signatures'
);

// Start output buffering
ob_start();
?>
<h1 class="section__title">University Signatures</h1>

<div class="section__topic" id="policy">
    <h2 class="section__topic__title">Policy</h2>
    
    <p>Before using university signatures for the Web, please review logo policy on the <a class="styleguide" href="http://identity.missouri.edu" title="http://identity.missouri.edu">Identity website</a>.</p>
    <ul class="styleguide">
        <li><a class="styleguide" href="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.1-policy.php" title="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.1-policy.php">MU Logo Policy</a></li>
        <li><a class="styleguide" href="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.3-university-signature.php" title="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.3-university-signature.php">University signature policy</a></li>
    </ul>    
</div>

<div class="section__topic" id="examples">
    <h2 class="section__topic__title">Examples</h2>
    
    <h3>Black text</h3>
    
{% set markup %}
<div class="mu-sig mu-sig--light">
    <p class="mu-sig__logo"><a href="http://missouri.edu">Mizzou Logo</a></p>
    <h2 class="mu-sig__wordmark"><a href="http://missouri.edu">University of Missouri</a></h2>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.mu-sig--light
{
    background: $grey-100;

    @include mu-sig(
        $size: 'medium'
    );
    
    @media #{$query-small}
    {
        @include mu-sig(
            $size: 'small'
        );
    }
            
    @media #{$query-large}
    {
        @include mu-sig(
            $size: 'large'
        );
    }
    
    @media print
    {
        @include mu-sig(
            $size: 'large',
            $print: 'true'
        );
    }
}{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>


    <h3>White text</h3>
    
{% set markup %}
<div class="mu-sig mu-sig--dark">
    <p class="mu-sig__logo"><a href="http://missouri.edu">Mizzou Logo</a></p>
    <h2 class="mu-sig__wordmark"><a href="http://missouri.edu">University of Missouri</a></h2>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.mu-sig--dark
{
    background: $grey-600;

    @include mu-sig(
        $size: 'medium',
        $color: 'white'
    );
    
    @media #{$query-small}
    {
        @include mu-sig(
            $size: 'small',
            $color: 'white'
        );
    }
            
    @media #{$query-large}
    {
        @include mu-sig(
            $size: 'large',
            $color: 'white'
        );
    }
    
    @media print
    {
        @include mu-sig(
            $size: 'large',
            $print: 'true'
        );
    }
}{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>
     

    <h3>Centered text</h3>
    
{% set markup %}
<div class="mu-sig mu-sig--center">
    <p class="mu-sig__logo"><a href="http://missouri.edu">Mizzou Logo</a></p>
    <h2 class="mu-sig__wordmark"><a href="http://missouri.edu">University of Missouri</a></h2>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.mu-sig--center
{
    background: $gold-400;

    @include mu-sig(
        $size: 'medium',
        $center: 'true'
    );
    
    @media #{$query-small}
    {
        @include mu-sig(
            $size: 'small',
            $center: 'true'
        );
    }
            
    @media #{$query-large}
    {
        @include mu-sig(
            $size: 'large',
            $center: 'true'
        );
    }
    
    @media print
    {
        @include mu-sig(
            $size: 'large',
            $print: 'true'
        );
    }
}{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>
        
</div>

<div class="section__topic" id="mixin">
    <h2 class="section__topic__title">Mixin Options</h2>
    
    <p>The <code class="language-sass">mu-sig()</code> mixin has a set of variables that can be passed to it to define size, style and printing options. Below are the mixin options.</p>
{% set sass %}
$size:              (Optional) Signature size. Can be `extra-small`, `small`, `medium`, or `large`. Defaults to 'small'
$color:             (Optional) Text color. Can be `black` or `white`. Defaults to 'black'
$center:            (Optional) Whether to center the signature. Defaults to false
$print:             (Optional) Whether to set the images up for printing. Defaults to false and uses the black version of wordmark and unit name
{% endset %}
<div class="source-code source-code--no-toggle"><pre class="language-markup"><code class="language-sass">{{ sass|e }}</code></pre></div>

<p>The markup is required to have classes of <code class="language-sass">mu-sig__logo</code> and <code class="language-sass">mu-sig__wordmark</code> with the elements in that order.</p>

{% set markup %}
<div class="mu-sig">
    <p class="mu-sig__logo"><a href="http://missouri.edu">Mizzou Logo</a></p>
    <h2 class="mu-sig__wordmark"><a href="http://missouri.edu">University of Missouri</a></h2>
</div>
{% endset %}
<div class="source-code source-code--no-toggle"><pre class="language-markup"><code>{{ markup|e }}</code></pre></div>
        
</div>

<div class="section__topic" id="anatomy">
    <h2 class="section__topic__title">Anatomy</h2>
    
    <p>A university signature is made up of two parts:</p>
    <ol class="list--spaced">
    <li>Stacked MU logo
        <ul>
            <li>No hover effect</li>
            <li>Must link to <a class="styleguide" href="http://missouri.edu" title="http://missouri.edu">http://missouri.edu</a></li>
        </ul>
    </li>
    <li>Wordmark
        <ul>
            <li>May have hover effect</li>
            <li>Must link to <a class="styleguide" href="http://missouri.edu" title="http://missouri.edu">http://missouri.edu</a></li>
        </ul>
    </li>   
</div>





<?php
// Get contents
$aryAttributes['page']['content'] = ob_get_clean();

// Load and setup Twig
require_once 'inc/twig-config.php';
require_once 'inc/twig-setup.php';
print $objTwig->render('site-template.html.twig', $aryAttributes);
?>