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
<h1 class="section__title">Unit Signatures</h1>

<div class="section__topic" id="policy">
    <h2 class="section__topic__title">Policy</h2>
    
    <p>Before converting unit signatures for the Web, please review logo policy on the <a href="http://identity.missouri.edu" title="http://identity.missouri.edu">Identity website</a>.</p>
    <ul>
        <li><a href="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.1-policy.php" title="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.1-policy.php">MU Logo Policy</a></li>
        <li><a href="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.4-unit-signatures.php" title="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.4-unit-signatures.php">Unit signature policy</a></li>
    </ul>

    <p><strong>Note:</strong> Signature policy states that the provided art must not be modified. In order to split the signature up into parts for linking and hover effects, we must slice it up and create sprites. This is acceptable as long as the finished signature is a <span class="highlight"><strong>visual match to the original file provided.</strong></span></p>
    
</div>

<div class="section__topic" id="examples">
    <h2 class="section__topic__title">Examples</h2>
    
    <h3>Black text</h3>
    
{% set markup %}
<div class="unit-sig unit-sig--light">
    <p class="unit-sig__logo"><a href="http://missouri.edu">Mizzou Logo</a></p>
    <h1 class="unit-sig__unit"><a href="http://missouri.edu">Office of Programs</a></h1>
    <h2 class="unit-sig__wordmark"><a href="http://missouri.edu">University of Missouri</a></h2>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.unit-sig--light
{
    background: $grey-100;

    @include mu-unit-sig(
        $size: 'medium',
        $name-width: 284px,
        $name-height: 40px,
        $wordmark-indent: 2px
    );
    
    @media #{$query-small}
    {
        @include mu-unit-sig(
            $size: 'small',
            $name-width: 194px,
            $name-height: 27px,
            $wordmark-indent: 1px
        );
    }
            
    @media #{$query-large}
    {
        @include mu-unit-sig(
            $size: 'large',
            $name-width: 404px,
            $name-height: 57px,
            $wordmark-indent: 2px
        );
    }
    
    @media print
    {
        @include mu-unit-sig(
            $size: 'large',
            $name-width: 404px,
            $name-height: 57px,
            $wordmark-indent: 2px,
            $print: 'true'
        );
    }
}{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>


    <h3>White text</h3>
    
{% set markup %}
<div class="unit-sig unit-sig--dark">
    <p class="unit-sig__logo"><a href="http://missouri.edu">Mizzou Logo</a></p>
    <h1 class="unit-sig__unit"><a href="http://missouri.edu">Office of Programs</a></h1>
    <h2 class="unit-sig__wordmark"><a href="http://missouri.edu">University of Missouri</a></h2>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.unit-sig--dark
{
    background: $grey-600;

    @include mu-unit-sig(
        $size: 'medium',
        $color: 'white',
        $name-width: 284px,
        $name-height: 40px,
        $wordmark-indent: 2px
    );
    
    @media #{$query-small}
    {
        @include mu-unit-sig(
            $size: 'small',
            $color: 'white',
            $name-width: 194px,
            $name-height: 27px,
            $wordmark-indent: 1px
        );
    }
            
    @media #{$query-large}
    {
        @include mu-unit-sig(
            $size: 'large',
            $color: 'white',
            $name-width: 404px,
            $name-height: 57px,
            $wordmark-indent: 2px
        );
    }
    
    @media print
    {
        @include mu-unit-sig(
            $size: 'large',
            $name-width: 404px,
            $name-height: 57px,
            $wordmark-indent: 2px,
            $print: 'true'
        );
    }
}{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>
     

    <h3>Centered text</h3>
    
{% set markup %}
<div class="unit-sig unit-sig--center">
    <p class="unit-sig__logo"><a href="http://missouri.edu">Mizzou Logo</a></p>
    <h1 class="unit-sig__unit"><a href="http://missouri.edu">Office of Programs</a></h1>
    <h2 class="unit-sig__wordmark"><a href="http://missouri.edu">University of Missouri</a></h2>
</div>
{% endset %}
{{ markup|raw }}
{% set sass %}
.unit-sig--center
{
    background: $grey-100;

    @include mu-unit-sig(
        $size: 'medium',
        $center: 'true',
        $name-width: 284px,
        $name-height: 40px,
        $wordmark-indent: 2px
    );
    
    @media #{$query-small}
    {
        @include mu-unit-sig(
            $size: 'small',
            $center: 'true',
            $name-width: 194px,
            $name-height: 27px,
            $wordmark-indent: 1px
        );
    }
            
    @media #{$query-large}
    {
        @include mu-unit-sig(
            $size: 'large',
            $center: 'true',
            $name-width: 404px,
            $name-height: 57px,
            $wordmark-indent: 2px
        );
    }
    
    @media print
    {
        @include mu-unit-sig(
            $size: 'large',
            $center: 'true',
            $name-width: 404px,
            $name-height: 57px,
            $wordmark-indent: 2px,
            $print: 'true'
        );
    }
}{% endset %}
<div class="source-code"><pre><h3>Markup</h3><code class="language-markup">{{ markup|e }}</code><h3>SASS CSS</h3><code class="language-sass">{{ sass|e }}</code></pre></div>

        
</div>

<div class="section__topic" id="mixin">
    <h2 class="section__topic__title">Mixin Options</h2>
    
    <p>The <code class="language-sass">mu-unit-sig()</code> mixin has a set of variables that can be passed to it to define size, style and printing options. Below are the mixin options.</p>
{% set sass %}
$size:              (Optional) Signature size. Can be `small`, `medium`, or `large`. Defaults to 'small'
$color:             (Optional) Text color. Can be `black` or `white`. Defaults to 'black'
$wordmark-indent:   (Optional) Helps left alignment with unit name when aligned left. Defaults to 0
$center:            (Optional) Whether to center the signature. Defaults to false
$print:             (Optional) Whether to set the images up for printing. Defaults to false and uses the black version of wordmark and unit name
{% endset %}
<div class="source-code source-code--no-toggle"><pre class="language-markup"><code class="language-sass">{{ sass|e }}</code></pre></div>

<p>The variables below set the options for the custom unit name image. Every site will have a unique unit name. Images for these are not part of the framework.</p>

{% set sass %}
$name-width:        Width (px) of the unit name image
$name-height:       Height (px) of the unit name image. Should be half the actual height, as it's a rollover sprite
$name-prefix:       (Optional) Prefix for unit name file. Defaults to 'unit-name'
$name-margin:       (Optional) Helps adjust space between unit name and wordmark with bottom margin. Defaults to 0
{% endset %}
<div class="source-code source-code--no-toggle"><pre class="language-markup"><code class="language-sass">{{ sass|e }}</code></pre></div>

<p>The markup is required to have classes of <code class="language-sass">unit-sig__logo</code>, <code class="language-sass">unit-sig__unit</code> and <code class="language-sass">unit-sig__wordmark</code> with the elements in that order.</p>

{% set markup %}
<div class="unit-sig">
    <p class="unit-sig__logo"><a href="http://missouri.edu">Mizzou Logo</a></p>
    <h1 class="unit-sig__unit"><a href="http://missouri.edu">Office of Programs</a></h1>
    <h2 class="unit-sig__wordmark"><a href="http://missouri.edu">University of Missouri</a></h2>
</div>
{% endset %}
<div class="source-code source-code--no-toggle"><pre class="language-markup"><code>{{ markup|e }}</code></pre></div>

<div class="section__topic" id="anatomy">
    <h2 class="section__topic__title">Anatomy</h2>
    
    <p>A unit signature is made up of three parts:</p>
    <ol class="list--spaced">
    <li>Stacked MU logo
        <ul>
            <li>No hover effect</li>
            <li>Must link to <a class="styleguide" href="http://missouri.edu" title="http://missouri.edu">http://missouri.edu</a></li>
        </ul>
    </li>
    <li>Unit name
        <ul>
            <li>May have a hover effect</li>
            <li>Must link to the site’s homepage (the exception is the homepage itself)</li>
            <li>This is the art you will have to create from the <a class="styleguide" href="unit_name_art.html#2-1_download" title="unit_name_art.html#2-1_download">provided signature file</a>.</li>
        </ul>
    </li>
    <li>Wordmark
        <ul>
            <li>May have hover effect</li>
            <li>Must link to <a class="styleguide" href="http://missouri.edu" title="http://missouri.edu">http://missouri.edu</a></li>
        </ul>
    </li>    
</div>

<div class="section__topic" id="unit-art">
    <h2 class="section__topic__title">Creating Unit Art</h2>

    <p><a class="button__download" href="http://missouri.box.com/identity">Download Mizzou signature art files</a></p>
    <p>Custom unit signature art is stored on the university's Box service. To access your unit's art
        assets, use the button above and login to the shared folder with your Pawprint. </p>
    <p>If a signature, signature variation or a version with different line breaks isn't in the shared folder, 
        please contact <a href="identity@missouri.edu" title="identity@missouri.edu">identity@missouri.edu</a> to request one to be made.</p>
    <h3>Template instructions</h3>
    <p>For unit signatures, we have pre-made assets for the Mizzou logo and "University of Missouri" workmark, 
        but we still need to create unit name assets for each site. Here are the steps to take the 
        <a href="http://missouri.box.com/identity" title="http://missouri.box.com/identity">files provided by MARCOM</a> and create properly sized files:</p>
    <h4>Setup the document</h4>
    <ol>
        <li>Open the provided .eps file with Illustrator, and copy the unit name from either the horizontal or vertical version.</li>
        <li>Copy and paste it into a new document using the Web profile so there's a pixel grid and RGB color settings.</li>
    </ol>
    <h4>Fix the colors, if necessary</h4>
    <ol>
        <li>Select the unit name</li>
        <li>Make sure the fill color is <code class="language-markup">#000000</code></li>
    </ol>
    <h4>Scaling the signature</h4>
    <p>There are three sizes of unit signature: <em>small</em> (32 pixel logo), <em>medium</em> (48 pixel logo), and <em>large</em> (64 pixel logo).</p>
    <ol>
        <li>Select the unit name</li>
        <li>Menu: <strong>Object</strong> &gt; <strong>Transform</strong> &gt; <strong>Scale</strong></li>
        <li>Place the following values in the Uniform box for the size you want:
            <ul>
                <li>Small:  <code class="language-markup">52.903%</code></li>
                <li>Medium: <code class="language-markup">77.799%</code></li>
                <li>Large:  <code class="language-markup">102.695%</code></li>
            </ul>
        </li>
    </ol>
    <h4>Create the Unit Name Sprite</h4>
    <p>Now we need to make the <a href="http://blog.teamtreehouse.com/css-sprites-with-background-positioning" title="http://blog.teamtreehouse.com/css-sprites-with-background-positioning">sprite image</a> for the unit name. We already have assets for the logo and wordmark.</p>
    <p><img src="images/unit-name_48.svg" alt="Unit name sprite"></p>
    <ol>
        <li>Size the artboard around the unit name. There should be 1 pixel at the top, no space on the left and right, and the bottom should be spaced accordingly:
            <ul>
                <li>Small:  8 pixels from the baseline of the unit name text</li>
                <li>Medium: 12 pixels from the baseline of the unit name text</li>
                <li>Large:  17 pixels from the baseline of the unit name text</li>
                <li><strong>Note:</strong> The max-width of a unit name that fits on an iPhone 5 screen is 245px. You may need to request an alternate version of the unit name with 
                different line breaks for small screens if your artboard exceeds this width. Please contact <a href="identity@missouri.edu" title="identity@missouri.edu">identity@missouri.edu</a> to request 
                one to be made.</li>
            </ul>
        </li>
        <li>Double the height of the artboard, and duplicate the unit name so it occupies the same position on the lower half of the artboard.</li>
        <li>Change the color of the second unit name to <code>#900000</code>.</li>
        <li><strong>Save for web</strong> as a <strong>PNG-24</strong> file.
            <ul>
                <li>See naming conventions below.</li>
            </ul>
        </li>
        <li><strong>Save a copy ...</strong> as an <strong>SVG</strong> file. 
            <ul>
                <li>See naming conventions below.</li>
                <li>Set <strong>SVG Profiles</strong> to <strong>SVG 1.0</strong></li>
                <li>Under <strong>Advanced Options,</strong> <strong>Set Decimal Places</strong> to 3</li>
                <li>Under <strong>Advanced Options,</strong> <em>uncheck</em> <strong>Responsive</strong></li>
            </ul>
        </li>
    </ol>
    <p><img src="images/svg-options.png" alt="SVG options"></p>
    <h4>Naming the Files</h4>
    <p>To work with the unit signature mixin, unit name images must be named in a consistent way. </p>
    <ul>
        <li><code class="language-sass">$name-prefix</code> is your custom, short unit name. The mixin default is <code class="language-markup">unit-name</code></li> 
        <li><code class="language-sass">$color</code> is <code class="language-markup">black</code> or <code class="language-markup">white</code>.</li>
        <li><code class="language-sass">$size</code> is <code class="language-markup">small</code>, <code class="language-markup">medium</code> or <code class="language-markup">large</code>. </li>
        <li>Separate the variables with hyphens.</li>
        <li>The final file name will look like this:<code class="language-markup">{$name-prefix}-{$color}-{$size}.svg</code></li>
        <li>Place in the images folder with the other signature art files.</li>
    </ul>
    <h4>(Optional) Version for dark backgrounds</h4>
    <p>If you're creating a unit signature with white text, you just need to adjust the colors of the two unit names:</p>
    <ol>
        <li>The top unit name should be set to <code class="language-markup">#ffffff</code>.</li>
        <li>The bottom unit name should be set to <code class="language-markup">#f1b82d</code>.</li>
    </ol>
</div>

<?php
// Get contents
$aryAttributes['page']['content'] = ob_get_clean();

// Load and setup Twig
require_once 'inc/twig-config.php';
require_once 'inc/twig-setup.php';
print $objTwig->render('site-template.html.twig', $aryAttributes);
?>