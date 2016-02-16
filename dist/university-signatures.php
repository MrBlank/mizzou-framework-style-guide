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
    
    <p>Before converting Mizzou signatures for the Web, please review logo policy on the <a class="styleguide" href="http://identity.missouri.edu" title="http://identity.missouri.edu">Identity website</a>.</p>
    <ul class="styleguide">
        <li><a class="styleguide" href="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.1-policy.php" title="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.1-policy.php">MU Logo Policy</a></li>
        <li><a class="styleguide" href="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.4-unit-signatures.php" title="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.4-unit-signatures.php">Unit signature policy</a></li>
        <li><a class="styleguide" href="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.3-university-signature.php" title="http://identity.missouri.edu/graphic-identity-standards/1-the-mizzou-logo/1.3-university-signature.php">University signature policy</a></li>
    </ul>

    <p><strong>Note:</strong> Signature policy states that the provided art must not be modified. In order to split the signature up into parts for linking and hover effects, we must slice it up and create sprites. This is acceptable as long as the finished signature is a <span class="highlight"><strong>visual match to the original file provided.</strong></span></p>
    
</div>

<div class="section__topic" id="anatomy">
    <h2 class="section__topic__title">Anatomy</h2>
    
        
</div>

<div class="section__topic" id="mixin">
    <h2 class="section__topic__title">Mixin Options</h2>
    
        
</div>

<div class="section__topic" id="examples">
    <h2 class="section__topic__title">Examples</h2>
    
        
</div>


<?php
// Get contents
$aryAttributes['page']['content'] = ob_get_clean();

// Load and setup Twig
require_once 'inc/twig-config.php';
require_once 'inc/twig-setup.php';
print $objTwig->render('site-template.html.twig', $aryAttributes);
?>