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
        array('link' => $aryAttributes['site']['base_url'] . 'index.php#introduction', 'title' => 'Intorduction'),
        array('link' => $aryAttributes['site']['base_url'] . 'index.php#download', 'title' => 'Download'),
        array('link' => $aryAttributes['site']['base_url'] . 'index.php#getting-started', 'title' => 'Getting Started')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'colors.php', 'title' => 'Colors', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'colors.php#mizzou-colors', 'title' => 'Mizzou Colors'),
        array('link' => $aryAttributes['site']['base_url'] . 'colors.php#palettes', 'title' => 'Color Palettes'),
        array('link' => $aryAttributes['site']['base_url'] . 'colors.php#accessible-combinations', 'title' => 'Accessible Combinations')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'typography', 'title' => 'Typography', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'typography#typefaces', 'title' => 'Typefaces'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography#headings', 'title' => 'Headings'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography#links', 'title' => 'Links'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography#inline-styles', 'title' => 'Inline Styles'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography#text-alignment', 'title' => 'Text Alignment'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography#blockquotes', 'title' => 'Quotes'),
        array('link' => $aryAttributes['site']['base_url'] . 'typography#pre-code', 'title' => 'Formatted Text and Code')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'forms', 'title' => 'Forms and Buttons', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'forms#forms', 'title' => 'Forms'),
        array('link' => $aryAttributes['site']['base_url'] . 'forms#buttons', 'title' => 'Buttons')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'images-video', 'title' => 'Images and Video', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'images-video#figures', 'title' => 'Figures and Images'),
        array('link' => $aryAttributes['site']['base_url'] . 'images-video#image-replacement', 'title' => 'Image Replacement'),
        array('link' => $aryAttributes['site']['base_url'] . 'images-video#video', 'title' => 'Video')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'lists-tables', 'title' => 'Lists, Tables, and Rules', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'lists-tables#lists', 'title' => 'Lists'),
        array('link' => $aryAttributes['site']['base_url'] . 'lists-tables#tables', 'title' => 'Tables'),
        array('link' => $aryAttributes['site']['base_url'] . 'lists-tables#horizontal-rules', 'title' => 'Horizontal Rules'),
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'grid-system', 'title' => 'Grid System and Layout', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'grid-system#grid-system', 'title' => 'Grid System'),
        array('link' => $aryAttributes['site']['base_url'] . 'grid-system#utility', 'title' => 'Utility Classes and Mixins'),
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'navigation', 'title' => 'Navigation', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'navigation#vertical-navigation', 'title' => 'Vertical Navigation'),
        array('link' => $aryAttributes['site']['base_url'] . 'navigation#horizontal-navigation', 'title' => 'Horizontal Navigation'),
        array('link' => $aryAttributes['site']['base_url'] . 'navigation#mobile-menu-button', 'title' => 'Mobile Menu Button'),
        array('link' => $aryAttributes['site']['base_url'] . 'navigation#skip-to-content', 'title' => 'Skip to Content Links')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'signatures', 'title' => 'Mizzou Signatures', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'signatures#unit-signatures', 'title' => 'Unit Signatures'),
        array('link' => $aryAttributes['site']['base_url'] . 'signatures#university-signatures', 'title' => 'University Signatures'),
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'search', 'title' => 'Search Form and Results', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'search#search-form', 'title' => 'Search Form'),
        array('link' => $aryAttributes['site']['base_url'] . 'search#search-results', 'title' => 'Search Results')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'stories', 'title' => 'News Stories', 'children' => array(
        array('link' => $aryAttributes['site']['base_url'] . 'stories#feature-stories', 'title' => 'Feature Stories'),
        array('link' => $aryAttributes['site']['base_url'] . 'stories#regular-stories', 'title' => 'Regular Stories')
    )),
    array('link' => $aryAttributes['site']['base_url'] . 'footer', 'title' => 'Footer')
);

// Set current page value
$aryAttributes['page']['current_page'] = $aryAttributes['site']['base_url'] . basename($_SERVER['PHP_SELF']);