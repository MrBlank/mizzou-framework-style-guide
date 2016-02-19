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
    'title' => 'Colors'
);

// Start output buffering
ob_start();
?>
<h1 class="section__title">Colors</h1>

<div class="section__topic" id="mizzou-colors">
    <h2 class="section__topic__title">Mizzou Colors</h2>
    
    <p>MU’s official colors are black and gold.</p>
    
    <div class="section__row">
        <div class="section__column">            
            <figure class="color-swatch color-swatch--gold-400">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Gold</p>
                    <p class="color-swatch__var">$gold</p>
                    <p class="color-swatch__hex-code">#f1b82d</p>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="section__row">
        <div class="section__column">
            <figure class="color-swatch color-swatch--black">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Black</p>
                    <p class="color-swatch__var">$black</p>
                    <p class="color-swatch__hex-code">#000000</p>
                </figcaption>
            </figure>
        </div>
    </div>
    
</div>

<div class="section__topic" id="palettes">
    <h2 class="section__topic__title">Color Palettes</h2>
        
    <div class="section__row">
        <div class="section__column">
            <h3 class="section__topic__subhead">Golds</h3>
            
            <figure class="color-swatch color-swatch--gold-100">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Gold 100</p>
                    <p class="color-swatch__var">$gold-100</p>
                    <p class="color-swatch__hex-code">#fff4d6</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--gold-200">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Gold 200</p>
                    <p class="color-swatch__var">$gold-200</p>
                    <p class="color-swatch__hex-code">#fee8b6</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--gold-300">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Gold 300</p>
                    <p class="color-swatch__var">$gold-300</p>
                    <p class="color-swatch__hex-code">#fbd986</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--gold-400">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Gold 400</p>
                    <p class="color-swatch__var">$gold-400</p>
                    <p class="color-swatch__hex-code">#f1b82d</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--gold-500">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Gold 500</p>
                    <p class="color-swatch__var">$gold-500</p>
                    <p class="color-swatch__hex-code">#d79900</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--gold-600">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Gold 600</p>
                    <p class="color-swatch__var">$gold-600</p>
                    <p class="color-swatch__hex-code">#af7c00</p>
                </figcaption>
            </figure>
        </div>
        
        <div class="section__column">
            <h3 class="section__topic__subhead">Greys</h3>
            
            <figure class="color-swatch color-swatch--grey-100">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Grey 100</p>
                    <p class="color-swatch__var">$grey-100</p>
                    <p class="color-swatch__hex-code">#f0f0f0</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--grey-200">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Grey 200</p>
                    <p class="color-swatch__var">$grey-200</p>
                    <p class="color-swatch__hex-code">#cccccc</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--grey-300">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Grey 300</p>
                    <p class="color-swatch__var">$grey-300</p>
                    <p class="color-swatch__hex-code">#999999</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--grey-400">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Grey 400</p>
                    <p class="color-swatch__var">$grey-400</p>
                    <p class="color-swatch__hex-code">#666666</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--grey-500">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Grey 500</p>
                    <p class="color-swatch__var">$grey-500</p>
                    <p class="color-swatch__hex-code">#444444</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--grey-600">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Grey 600</p>
                    <p class="color-swatch__var">$grey-600</p>
                    <p class="color-swatch__hex-code">#222222</p>
                </figcaption>
            </figure>
        </div>
        
        <div class="section__column">
            <h3 class="section__topic__subhead">Warm Greys</h3>
            
            <figure class="color-swatch color-swatch--warm-grey-100">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Warm Grey 100</p>
                    <p class="color-swatch__var">$warm-grey-100</p>
                    <p class="color-swatch__hex-code">#edeae6</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--warm-grey-200">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Warm Grey 200</p>
                    <p class="color-swatch__var">$warm-grey-200</p>
                    <p class="color-swatch__hex-code">#dbd5cd</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--warm-grey-300">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Warm Grey 300</p>
                    <p class="color-swatch__var">$warm-grey-300</p>
                    <p class="color-swatch__hex-code">#8f8884</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--warm-grey-400">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Warm Grey 400</p>
                    <p class="color-swatch__var">$warm-grey-400</p>
                    <p class="color-swatch__hex-code">#595552</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--warm-grey-500">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Warm Grey 500</p>
                    <p class="color-swatch__var">$warm-grey-500</p>
                    <p class="color-swatch__hex-code">#33312f</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--warm-grey-600">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Warm Grey 600</p>
                    <p class="color-swatch__var">$warm-grey-600</p>
                    <p class="color-swatch__hex-code">#242221</p>
                </figcaption>
            </figure>
        </div>
        
        <div class="section__column">
            <h3 class="section__topic__subhead">Tans</h3>
            
            <figure class="color-swatch color-swatch--tan-100">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Tan 100</p>
                    <p class="color-swatch__var">$tan-100</p>
                    <p class="color-swatch__hex-code">#f6f5ea</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--tan-200">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Tan 200</p>
                    <p class="color-swatch__var">$tan-200</p>
                    <p class="color-swatch__hex-code">#edebd5</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--tan-300">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Tan 300</p>
                    <p class="color-swatch__var">$tan-300</p>
                    <p class="color-swatch__hex-code">#d5d3c0</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--tan-400">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Tan 400</p>
                    <p class="color-swatch__var">$tan-400</p>
                    <p class="color-swatch__hex-code">#a6a495</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--tan-500">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Tan 500</p>
                    <p class="color-swatch__var">$tan-500</p>
                    <p class="color-swatch__hex-code">#77756b</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--tan-600">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Tan 600</p>
                    <p class="color-swatch__var">$tan-600</p>
                    <p class="color-swatch__hex-code">#474740</p>
                </figcaption>
            </figure>
        </div>
        
        <div class="section__column">
            <h3 class="section__topic__subhead">Oranges</h3>
            
            <figure class="color-swatch color-swatch--orange-100">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Orange 100</p>
                    <p class="color-swatch__var">$orange-100</p>
                    <p class="color-swatch__hex-code">#ffe4db</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--orange-200">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Orange 200</p>
                    <p class="color-swatch__var">$orange-200</p>
                    <p class="color-swatch__hex-code">#ffbea9</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--orange-300">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Orange 300</p>
                    <p class="color-swatch__var">$orange-300</p>
                    <p class="color-swatch__hex-code">#de6835</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--orange-400">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Orange 400</p>
                    <p class="color-swatch__var">$orange-400</p>
                    <p class="color-swatch__hex-code">#bd4d1f</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--orange-500">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Orange 500</p>
                    <p class="color-swatch__var">$orange-500</p>
                    <p class="color-swatch__hex-code">#992d00</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--orange-600">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Orange 600</p>
                    <p class="color-swatch__var">$orange-600</p>
                    <p class="color-swatch__hex-code">#611c00</p>
                </figcaption>
            </figure>
        </div>
        
        <div class="section__column">
            <h3 class="section__topic__subhead">Reds</h3>
            
            <figure class="color-swatch color-swatch--red-100">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Red 100</p>
                    <p class="color-swatch__var">$red-100</p>
                    <p class="color-swatch__hex-code">#ffecec</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--red-200">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Red 200</p>
                    <p class="color-swatch__var">$red-200</p>
                    <p class="color-swatch__hex-code">#ffc2c4</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--red-300">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Red 300</p>
                    <p class="color-swatch__var">$red-300</p>
                    <p class="color-swatch__hex-code">#ca4b4b</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--red-400">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Red 400</p>
                    <p class="color-swatch__var">$red-400</p>
                    <p class="color-swatch__hex-code">#900000</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--red-500">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Red 500</p>
                    <p class="color-swatch__var">$red-500</p>
                    <p class="color-swatch__hex-code">#6a0206</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--red-600">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Red 600</p>
                    <p class="color-swatch__var">$red-600</p>
                    <p class="color-swatch__hex-code">#470102</p>
                </figcaption>
            </figure>
        </div>

        <div class="section__column">
            <h3 class="section__topic__subhead">Blues</h3>
            
            <figure class="color-swatch color-swatch--blue-100">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Blue 100</p>
                    <p class="color-swatch__var">$blue-100</p>
                    <p class="color-swatch__hex-code">#e4f1fa</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--blue-200">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Blue 200</p>
                    <p class="color-swatch__var">$blue-200</p>
                    <p class="color-swatch__hex-code">#b2d5f0</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--blue-300">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Blue 300</p>
                    <p class="color-swatch__var">$blue-300</p>
                    <p class="color-swatch__hex-code">#65abe1</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--blue-400">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Blue 400</p>
                    <p class="color-swatch__var">$blue-400</p>
                    <p class="color-swatch__hex-code">#318fd7</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--blue-500">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Blue 500</p>
                    <p class="color-swatch__var">$blue-500</p>
                    <p class="color-swatch__hex-code">#1a5888</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--blue-600">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Blue 600</p>
                    <p class="color-swatch__var">$blue-600</p>
                    <p class="color-swatch__hex-code">#143650</p>
                </figcaption>
            </figure>
        </div>
        
        <div class="section__column">
            <h3 class="section__topic__subhead">Greens</h3>
            
            <figure class="color-swatch color-swatch--green-100">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Green 100</p>
                    <p class="color-swatch__var">$green-100</p>
                    <p class="color-swatch__hex-code">#ebf4e9</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--green-200">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Green 200</p>
                    <p class="color-swatch__var">$green-200</p>
                    <p class="color-swatch__hex-code">#b2cfa9</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--green-300">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Green 300</p>
                    <p class="color-swatch__var">$green-300</p>
                    <p class="color-swatch__hex-code">#6fab5d</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--green-400">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Green 400</p>
                    <p class="color-swatch__var">$green-400</p>
                    <p class="color-swatch__hex-code">#3f8f26</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--green-500">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Green 500</p>
                    <p class="color-swatch__var">$green-500</p>
                    <p class="color-swatch__hex-code">#2d671b</p>
                </figcaption>
            </figure>
            
            <figure class="color-swatch color-swatch--green-600">
                <figcaption class="color-swatch__description">
                    <p class="color-swatch__name">Green 600</p>
                    <p class="color-swatch__var">$green-600</p>
                    <p class="color-swatch__hex-code">#214716</p>
                </figcaption>
            </figure>
        </div>
    </div>
</div>

<div class="section__topic" id="accessible-combinations">
    <h2 class="section__topic__title">Accessible Combinations</h2>
        <p>In order to meet Mizzou&#8217;s Accessibility guidelines, color combinations must have a contrast ratio of at least <strong>4.5:1</strong> for small text and <strong>3:1</strong> for large/bold text.  For instance, there is <strong>no</strong> combination of gold and white that meets these guidelines. In most cases a contrast ratio of <strong>7:1</strong> if preferable. If you're unsure about a color combination, it can be tested using <a href="http://webaim.org/resources/contrastchecker/">WebAIM&#8217;s Color Contrast&#160;Checker</a>.</p>
        
        <?php /*
        <p>Here are some accessible&#160;combinations:</p>
        
        <ul class="accessible-color-combinations">
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--white">Grey 500 on White</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--white">Grey 600 on White</li>
            <li class="accessible-color accessible-color--warm-grey-400 accessible-color-background--white">Warm Grey 400 on White</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--white">Warm Grey 500 on White</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--white">Warm Grey 600 on White</li>
            <li class="accessible-color accessible-color--black accessible-color-background--white">Black on White</li>
            <li class="accessible-color accessible-color--orange-500 accessible-color-background--white">Orange 500 on White</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--white">Orange 600 on White</li>
            <li class="accessible-color accessible-color--red-400 accessible-color-background--white">Red 400 on White</li>
            <li class="accessible-color accessible-color--red-500 accessible-color-background--white">Red 500 on White</li>
            <li class="accessible-color accessible-color--red-600 accessible-color-background--white">Red 600 on White</li>
            <li class="accessible-color accessible-color--blue-500 accessible-color-background--white">Blue 500 on White</li>
            <li class="accessible-color accessible-color--blue-600 accessible-color-background--white">Blue 600 on White</li>
            <li class="accessible-color accessible-color--green-600 accessible-color-background--white">Green 600 on White</li>
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--gold-100">Grey 500 on Gold 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--gold-100">Grey 600 on Gold 100</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--gold-100">Warm Grey 500 on Gold 100</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--gold-100">Warm Grey 600 on Gold 100</li>
            <li class="accessible-color accessible-color--black accessible-color-background--gold-100">Black on Gold 100</li>
            <li class="accessible-color accessible-color--orange-500 accessible-color-background--gold-100">Orange 500 on Gold 100</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--gold-100">Orange 600 on Gold 100</li>
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--gold-200">Grey 500 on Gold 200</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--gold-200">Grey 600 on Gold 200</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--gold-200">Warm Grey 500 on Gold 200</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--gold-200">Warm Grey 600 on Gold 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--gold-200">Black on Gold 200</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--gold-200">Orange 600 on Gold 200</li>
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--gold-300">Grey 500 on Gold 300</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--gold-300">Grey 600 on Gold 300</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--gold-300">Warm Grey 500 on Gold 300</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--gold-300">Warm Grey 600 on Gold 300</li>
            <li class="accessible-color accessible-color--black accessible-color-background--gold-300">Black on Gold 300</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--gold-300">Orange 600 on Gold 300</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--gold-400">Grey 600 on Gold 400</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--gold-400">Warm Grey 500 on Gold 400</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--gold-400">Warm Grey 600 on Gold 400</li>
            <li class="accessible-color accessible-color--black accessible-color-background--gold-400">Black on Gold 400</li>
            <li class="accessible-color accessible-color--black accessible-color-background--gold-500">Black on Gold 500</li>
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--grey-100">Grey 500 on Grey 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--grey-100">Grey 600 on Grey 100</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--grey-100">Warm Grey 500 on Grey 100</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--grey-100">Warm Grey 600 on Grey 100</li>
            <li class="accessible-color accessible-color--black accessible-color-background--grey-100">Black on Grey 100</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--grey-100">Orange 600 on Grey 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--grey-200">Grey 600 on Grey 200</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--grey-200">Warm Grey 500 on Grey 200</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--grey-200">Warm Grey 600 on Grey 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--grey-200">Black on Grey 200</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--grey-200">Orange 600 on Grey 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--grey-300">Black on Grey 300</li>
            <li class="accessible-color accessible-color--white accessible-color-background--grey-500">White on Grey 500</li>
            <li class="accessible-color accessible-color--gold-100 accessible-color-background--grey-500">Gold 100 on Grey 500</li>
            <li class="accessible-color accessible-color--gold-200 accessible-color-background--grey-500">Gold 200 on Grey 500</li>
            <li class="accessible-color accessible-color--gold-300 accessible-color-background--grey-500">Gold 300 on Grey 500</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--grey-500">Grey 100 on Grey 500</li>
            <li class="accessible-color accessible-color--warm-grey-100 accessible-color-background--grey-500">Warm Grey 100 on Grey 500</li>
            <li class="accessible-color accessible-color--orange-100 accessible-color-background--grey-500">Orange 100 on Grey 500</li>
            <li class="accessible-color accessible-color--white accessible-color-background--grey-600">White on Grey 600</li>
            <li class="accessible-color accessible-color--gold-100 accessible-color-background--grey-600">Gold 100 on Grey 600</li>
            <li class="accessible-color accessible-color--gold-200 accessible-color-background--grey-600">Gold 200 on Grey 600</li>
            <li class="accessible-color accessible-color--gold-300 accessible-color-background--grey-600">Gold 300 on Grey 600</li>
            <li class="accessible-color accessible-color--gold-400 accessible-color-background--grey-600">Gold 400 on Grey 600</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--grey-600">Grey 100 on Grey 600</li>
            <li class="accessible-color accessible-color--grey-200 accessible-color-background--grey-600">Grey 200 on Grey 600</li>
            <li class="accessible-color accessible-color--warm-grey-100 accessible-color-background--grey-600">Warm Grey 100 on Grey 600</li>
            <li class="accessible-color accessible-color--warm-grey-200 accessible-color-background--grey-600">Warm Grey 200 on Grey 600</li>
            <li class="accessible-color accessible-color--orange-100 accessible-color-background--grey-600">Orange 100 on Grey 600</li>
            <li class="accessible-color accessible-color--orange-200 accessible-color-background--grey-600">Orange 200 on Grey 600</li>
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--warm-grey-100">Grey 500 on Warm Grey 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--warm-grey-100">Grey 600 on Warm Grey 100</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--warm-grey-100">Warm Grey 500 on Warm Grey 100</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--warm-grey-100">Warm Grey 600 on Warm Grey 100</li>
            <li class="accessible-color accessible-color--black accessible-color-background--warm-grey-100">Black on Warm Grey 100</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--warm-grey-100">Orange 600 on Warm Grey 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--warm-grey-200">Grey 600 on Warm Grey 200</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--warm-grey-200">Warm Grey 500 on Warm Grey 200</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--warm-grey-200">Warm Grey 600 on Warm Grey 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--warm-grey-200">Black on Warm Grey 200</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--warm-grey-200">Orange 600 on Warm Grey 200</li>
            <li class="accessible-color accessible-color--white accessible-color-background--warm-grey-400">White on Warm Grey 400</li>
            <li class="accessible-color accessible-color--white accessible-color-background--warm-grey-500">White on Warm Grey 500</li>
            <li class="accessible-color accessible-color--gold-100 accessible-color-background--warm-grey-500">Gold 100 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--gold-200 accessible-color-background--warm-grey-500">Gold 200 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--gold-300 accessible-color-background--warm-grey-500">Gold 300 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--gold-400 accessible-color-background--warm-grey-500">Gold 400 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--warm-grey-500">Grey 100 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--grey-200 accessible-color-background--warm-grey-500">Grey 200 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--warm-grey-100 accessible-color-background--warm-grey-500">Warm Grey 100 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--warm-grey-200 accessible-color-background--warm-grey-500">Warm Grey 200 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--orange-100 accessible-color-background--warm-grey-500">Orange 100 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--orange-200 accessible-color-background--warm-grey-500">Orange 200 on Warm Grey 500</li>
            <li class="accessible-color accessible-color--white accessible-color-background--warm-grey-600">White on Warm Grey 600</li>
            <li class="accessible-color accessible-color--gold-100 accessible-color-background--warm-grey-600">Gold 100 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--gold-200 accessible-color-background--warm-grey-600">Gold 200 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--gold-300 accessible-color-background--warm-grey-600">Gold 300 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--gold-400 accessible-color-background--warm-grey-600">Gold 400 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--warm-grey-600">Grey 100 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--grey-200 accessible-color-background--warm-grey-600">Grey 200 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--warm-grey-100 accessible-color-background--warm-grey-600">Warm Grey 100 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--warm-grey-200 accessible-color-background--warm-grey-600">Warm Grey 200 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--orange-100 accessible-color-background--warm-grey-600">Orange 100 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--orange-200 accessible-color-background--warm-grey-600">Orange 200 on Warm Grey 600</li>
            <li class="accessible-color accessible-color--white accessible-color-background--black">White on Black</li>
            <li class="accessible-color accessible-color--gold-100 accessible-color-background--black">Gold 100 on Black</li>
            <li class="accessible-color accessible-color--gold-200 accessible-color-background--black">Gold 200 on Black</li>
            <li class="accessible-color accessible-color--gold-300 accessible-color-background--black">Gold 300 on Black</li>
            <li class="accessible-color accessible-color--gold-400 accessible-color-background--black">Gold 400 on Black</li>
            <li class="accessible-color accessible-color--gold-500 accessible-color-background--black">Gold 500 on Black</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--black">Grey 100 on Black</li>
            <li class="accessible-color accessible-color--grey-200 accessible-color-background--black">Grey 200 on Black</li>
            <li class="accessible-color accessible-color--grey-300 accessible-color-background--black">Grey 300 on Black</li>
            <li class="accessible-color accessible-color--warm-grey-100 accessible-color-background--black">Warm Grey 100 on Black</li>
            <li class="accessible-color accessible-color--warm-grey-200 accessible-color-background--black">Warm Grey 200 on Black</li>
            <li class="accessible-color accessible-color--orange-100 accessible-color-background--black">Orange 100 on Black</li>
            <li class="accessible-color accessible-color--orange-200 accessible-color-background--black">Orange 200 on Black</li>
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--orange-100">Grey 500 on Orange 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--orange-100">Grey 600 on Orange 100</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--orange-100">Warm Grey 500 on Orange 100</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--orange-100">Warm Grey 600 on Orange 100</li>
            <li class="accessible-color accessible-color--black accessible-color-background--orange-100">Black on Orange 100</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--orange-100">Orange 600 on Orange 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--orange-200">Grey 600 on Orange 200</li>
            <li class="accessible-color accessible-color--warm-grey-500 accessible-color-background--orange-200">Warm Grey 500 on Orange 200</li>
            <li class="accessible-color accessible-color--warm-grey-600 accessible-color-background--orange-200">Warm Grey 600 on Orange 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--orange-200">Black on Orange 200</li>
            <li class="accessible-color accessible-color--orange-600 accessible-color-background--orange-200">Orange 600 on Orange 200</li>
            <li class="accessible-color accessible-color--white accessible-color-background--orange-500">White on Orange 500</li>
            <li class="accessible-color accessible-color--gold-100 accessible-color-background--orange-500">Gold 100 on Orange 500</li>
            <li class="accessible-color accessible-color--white accessible-color-background--orange-600">White on Orange 600</li>
            <li class="accessible-color accessible-color--gold-100 accessible-color-background--orange-600">Gold 100 on Orange 600</li>
            <li class="accessible-color accessible-color--gold-200 accessible-color-background--orange-600">Gold 200 on Orange 600</li>
            <li class="accessible-color accessible-color--gold-300 accessible-color-background--orange-600">Gold 300 on Orange 600</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--orange-600">Grey 100 on Orange 600</li>
            <li class="accessible-color accessible-color--grey-200 accessible-color-background--orange-600">Grey 200 on Orange 600</li>
            <li class="accessible-color accessible-color--warm-grey-100 accessible-color-background--orange-600">Warm Grey 100 on Orange 600</li>
            <li class="accessible-color accessible-color--warm-grey-200 accessible-color-background--orange-600">Warm Grey 200 on Orange 600</li>
            <li class="accessible-color accessible-color--orange-100 accessible-color-background--orange-600">Orange 100 on Orange 600</li>
            <li class="accessible-color accessible-color--orange-200 accessible-color-background--orange-600">Orange 200 on Orange 600</li>
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--red-100">Grey 500 on Red 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--red-100">Grey 600 on Red 100</li>
            <li class="accessible-color accessible-color--black accessible-color-background--red-100">Black on Red 100</li>
            <li class="accessible-color accessible-color--red-400 accessible-color-background--red-100">Red 400 on Red 100</li>
            <li class="accessible-color accessible-color--red-500 accessible-color-background--red-100">Red 500 on Red 100</li>
            <li class="accessible-color accessible-color--red-600 accessible-color-background--red-100">Red 600 on Red 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--red-200">Grey 600 on Red 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--red-200">Black on Red 200</li>
            <li class="accessible-color accessible-color--red-500 accessible-color-background--red-200">Red 500 on Red 200</li>
            <li class="accessible-color accessible-color--red-600 accessible-color-background--red-200">Red 600 on Red 200</li>
            <li class="accessible-color accessible-color--white accessible-color-background--red-400">White on Red 400</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--red-400">Grey 100 on Red 400</li>
            <li class="accessible-color accessible-color--red-100 accessible-color-background--red-400">Red 100 on Red 400</li>
            <li class="accessible-color accessible-color--white accessible-color-background--red-500">White on Red 500</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--red-500">Grey 100 on Red 500</li>
            <li class="accessible-color accessible-color--grey-200 accessible-color-background--red-500">Grey 200 on Red 500</li>
            <li class="accessible-color accessible-color--red-100 accessible-color-background--red-500">Red 100 on Red 500</li>
            <li class="accessible-color accessible-color--red-200 accessible-color-background--red-500">Red 200 on Red 500</li>
            <li class="accessible-color accessible-color--white accessible-color-background--red-600">White on Red 600</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--red-600">Grey 100 on Red 600</li>
            <li class="accessible-color accessible-color--grey-200 accessible-color-background--red-600">Grey 200 on Red 600</li>
            <li class="accessible-color accessible-color--red-100 accessible-color-background--red-600">Red 100 on Red 600</li>
            <li class="accessible-color accessible-color--red-200 accessible-color-background--red-600">Red 200 on Red 600</li>
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--blue-100">Grey 500 on Blue 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--blue-100">Grey 600 on Blue 100</li>
            <li class="accessible-color accessible-color--black accessible-color-background--blue-100">Black on Blue 100</li>
            <li class="accessible-color accessible-color--blue-600 accessible-color-background--blue-100">Blue 600 on Blue 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--blue-200">Grey 600 on Blue 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--blue-200">Black on Blue 200</li>
            <li class="accessible-color accessible-color--blue-600 accessible-color-background--blue-200">Blue 600 on Blue 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--blue-300">Black on Blue 300</li>
            <li class="accessible-color accessible-color--white accessible-color-background--blue-500">White on Blue 500</li>
            <li class="accessible-color accessible-color--white accessible-color-background--blue-600">White on Blue 600</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--blue-600">Grey 100 on Blue 600</li>
            <li class="accessible-color accessible-color--grey-200 accessible-color-background--blue-600">Grey 200 on Blue 600</li>
            <li class="accessible-color accessible-color--blue-100 accessible-color-background--blue-600">Blue 100 on Blue 600</li>
            <li class="accessible-color accessible-color--blue-200 accessible-color-background--blue-600">Blue 200 on Blue 600</li>
            <li class="accessible-color accessible-color--grey-500 accessible-color-background--green-100">Grey 500 on Green 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--green-100">Grey 600 on Green 100</li>
            <li class="accessible-color accessible-color--black accessible-color-background--green-100">Black on Green 100</li>
            <li class="accessible-color accessible-color--green-600 accessible-color-background--green-100">Green 600 on Green 100</li>
            <li class="accessible-color accessible-color--grey-600 accessible-color-background--green-200">Grey 600 on Green 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--green-200">Black on Green 200</li>
            <li class="accessible-color accessible-color--black accessible-color-background--green-300">Black on Green 300</li>
            <li class="accessible-color accessible-color--white accessible-color-background--green-600">White on Green 600</li>
            <li class="accessible-color accessible-color--grey-100 accessible-color-background--green-600">Grey 100 on Green 600</li>
            <li class="accessible-color accessible-color--green-100 accessible-color-background--green-600">Green 100 on Green 600</li>
        </ul>
   */?> 
</div>
<?php
// Get contents
$aryAttributes['page']['content'] = ob_get_clean();

// Load and setup Twig
require_once 'inc/twig-config.php';
require_once 'inc/twig-setup.php';
print $objTwig->render('site-template.html.twig', $aryAttributes);
?>