<?php
/**
 * Configure Standard Twig Variables
 *
 * @author Josh Hughes (hughesjd@missouri.edu), Undergraduate Studies, University of Missouri
 * @copyright 2015 Curators of the University of Missouri
 */

// Set timezone
date_default_timezone_set('America/Chicago');

// Make sure attributes container is set
if (!isset($aryAttributes)) {
    $aryAttributes = array();
}

// Setup caching
$aryTwigOptions = array(
    'autoreload'    => true,
    'cache'         => __DIR__ . '/../../../twig-cache'
);

// Site options
$aryAttributes['site'] = array(
    'apple_mask_icon_color'     => '#000000',
    'base_url_dev'              => 'http://localhost:3000/Dropbox%20sites%20link/mizzou-framework-style-guide/dist/',
    'base_url'                  => '',
    'detected_hostname'         => $_SERVER['HTTP_HOST'],
    'facebook_url'              => '',
    'flickr_url'                => '',
    'hostname'                  => '',
    'ms_tile_color'             => '#f1b82d',
    'name'                      => 'Mizzou Framework Style Guide',
    'published_by'              => 'Mizzou Creative',
    'published_by_link'         => 'https://marcom.missouri.edu',
    'search_action_path'        => 'search/',
    'search_enabled'            => false,
    'search_field_name'         => 'q',
    'site_icon_color'           => 'gold',
    'short_name'                => 'Style Guide',
    'twitter_username'          => '',
    'typekit_id'                => '',
    'viewport'                  => 'width=device-width, initial-scale=1.0',
    'year'                      => date('Y')
);

// Development options (use base_url_dev and disable cache)
if ($aryAttributes['site']['hostname'] != $aryAttributes['site']['detected_hostname']) {
    $aryAttributes['site']['base_url'] = $aryAttributes['site']['base_url_dev'];
    $aryTwigOptions = array();
}

// Asset url
$aryAttributes['site']['asset_url'] = $aryAttributes['site']['base_url'];

// Main navigation
$aryAttributes['site']['navigation_items'] = array(
    array('link' => $aryAttributes['site']['base_url'] . 'index.php', 'title' => 'General Principles', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'index.php#introduction', 'title' => 'Introduction'),
        array('link' => $aryAttributes['site']['base_url'] . 'index.php#download', 'title' => 'Download'),
        array('link' => $aryAttributes['site']['base_url'] . 'index.php#getting-started', 'title' => 'Getting Started')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'unit-signatures.php', 'title' => 'Unit Signatures', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'unit-signatures.php#policy', 'title' => 'Policy'),
        array('link' => $aryAttributes['site']['base_url'] . 'unit-signatures.php#examples', 'title' => 'Examples'),
        array('link' => $aryAttributes['site']['base_url'] . 'unit-signatures.php#mixin', 'title' => 'Mixin Options'),
        array('link' => $aryAttributes['site']['base_url'] . 'unit-signatures.php#anatomy', 'title' => 'Anatomy'),
        array('link' => $aryAttributes['site']['base_url'] . 'unit-signatures.php#unit-art', 'title' => 'Creating Unit Art')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'university-signatures.php', 'title' => 'University Signatures', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'university-signatures.php#policy', 'title' => 'Policy'),
        array('link' => $aryAttributes['site']['base_url'] . 'university-signatures.php#examples', 'title' => 'Examples'),
        array('link' => $aryAttributes['site']['base_url'] . 'university-signatures.php#mixin', 'title' => 'Mixin Options'),
        array('link' => $aryAttributes['site']['base_url'] . 'university-signatures.php#anatomy', 'title' => 'Anatomy')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'colors.php', 'title' => 'Colors', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'colors.php#mizzou-colors', 'title' => 'Mizzou Colors'),
        array('link' => $aryAttributes['site']['base_url'] . 'colors.php#palettes', 'title' => 'Color Palettes'),
        array('link' => $aryAttributes['site']['base_url'] . 'colors.php#accessible-combinations', 'title' => 'Accessible Combinations')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'typography.php', 'title' => 'Typography', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'typography.php#proxima', 'title' => 'Proxima Nova'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography.php#janson', 'title' => 'Janson'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography.php#mono', 'title' => 'Monospace'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography.php#mixin', 'title' => 'Type Mixins'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography.php#vars', 'title' => 'Type Variables')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'grid.php', 'title' => 'Grid System', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'grid.php#row', 'title' => 'Grid Row'),
        array('link' => $aryAttributes['site']['base_url'] . 'grid.php#column', 'title' => 'Grid Column'),
        array('link' => $aryAttributes['site']['base_url'] . 'grid.php#examples', 'title' => 'Examples')
    ))
);

// Set current page value
$aryAttributes['page']['current_page'] = $aryAttributes['site']['base_url'] . basename($_SERVER['PHP_SELF']);