<?php
$title = 'Custom Quote - So, how much?';
ob_start();
require('customPriceList.php');
?>
<div id="content-wrapper" class="noHeaderImg">
    <div class="row">
        <div class="col-md-10 center gap fade-down section-heading">
            <h2 class="main-title">Custom Quote</h2>
            <hr>
            <small>I also have all included packs if you fancy take a look <a href="index.php?action=services#pricing"><strong>here</strong></a></small>
        </div>
    </div>
    <div class="container">
        <div class="row " id="quoteForm">
            <div class="col-md-9 fade-up">
                <form id="customQuoteForm" action="index.php?action=sendCustomQuote" method="post" enctype="multipart/form-data">
                    <section id="yourWebsite">
                        <div class="row">
                            <div class="col-md-12 center gap fade-down section-heading">
                                <p>What kind of website ?</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="siteType">Type of Website*</label>
                                <select id="siteType" name="siteType" class="form-control" required
                                    onchange="fillArray(), getSelectValue(), myFunction4(), getTotal(), deselectAll(), disableSubmit()" >
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $showcase ?>" value="Showcase Website" >Showcase Website</option>
                                    <option data-price="<?= $webstore ?>" value="Webstore">Webstore</option>
                                    <option data-price="<?= $showcaseWebstore ?>" value="Showcase Website + Webstore">Showcase Website + Webstore</option>
                                    <option data-price="<?= $redesignShowcase ?>" value="Redesign - Showcase Website">Redesign (Showcase Website)</option>
                                    <option data-price="<?= $redesignWebstore ?>" value="Redesign - Webstore">Redesign (Webstore)</option>
                                    <option data-price="<?= $redesignShowcaseWebstore ?>" value="Redesign - Showcase Website + Webstore">Redesign (Showcase Website + Webstore)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="btn-group">
                                    <p class="checkboxLabel">Optional features</p><br>
                                    <button data-toggle="dropdown" class="btn dropdown-toggle menuPlaceholder"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="fillArray(), getTotal(), disableSubmit()">
                                        <li><input type="checkbox" id="blogOpt" name="options[]" class="checkBoxValue"
                                                data-price="<?= $blog ?>" value="blog"><label for="blogOpt">Blog</label></li>
                                        <li><input type="checkbox" id="chatOpt" name="options[]" class="checkBoxValue"
                                                data-price="<?= $chat ?>" value="chat"><label for="chatOpt">Chat Box</label></li>
                                        <li><input type="checkbox" id="contactFormOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $contactForm ?>" value="contact form"><label
                                                for="contactFormOpt">Contact Form</label></li>
                                        <li><input type="checkbox" id="newsletterOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $newsletter ?>" value="newsletter"><label
                                                for="newsletterOpt">Newsletter</label></li>
                                        <li><input type="checkbox" id="appointOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $appointment ?>" value="appointment plugin"><label
                                                for="appointOpt">Appointment plugin</label></li>
                                        <li><input type="checkbox" id="searchOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $searchPlug ?>" value="search plugin"><label for="searchOpt">Search
                                                engine</label></li>
                                        <li><input type="checkbox" id="quoteOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $autoQuote ?>" value="autoQuote plugin"><label for="quoteOpt">Automatic
                                                quote plugin</label></li>
                                        <li><input type="checkbox" id="invoiceOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $invoicePlug ?>" value="invoice plugin"><label for="invoiceOpt">Invoice
                                                plugin</label></li>
                                        <li><input type="checkbox" id="socialOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $socialNetwork ?>" value="social Network"><label for="socialOpt">Social
                                                Networks plugin</label></li>
                                        <li><input type="checkbox" id="statsOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $statsPlug ?>" value="stats plugin"><label
                                                for="statsOpt">Statistics</label></li>
                                        <li><input type="checkbox" id="calendarOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $calendar ?>" value="calendar"><label
                                                for="calendarOpt">Calendar</label></li>
                                        <li><input type="checkbox" id="newsOpt" name="options[]" class="checkBoxValue"
                                                data-price="<?= $news ?>" value="news plugin"><label for="newsOpt">News plugin</label></li>
                                        <li><input type="checkbox" id="adminPannelOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $adminPannel ?>" value="admin pannel"><label
                                                for="adminPannelOpt">Administration pannel</label></li>
                                        <li><input type="checkbox" id="ratingsOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $ratings ?>" value="customer ratings"><label for="ratingsOpt">Customer
                                                ratings</label></li>
                                        <li><input type="checkbox" id="surveyOpt" name="options[]"
                                                class="checkBoxValue" data-price="<?= $survey ?>" value="survey plugin"><label for="surveyOpt">Survey
                                                plugin</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="btn-group ">
                                    <p class="checkboxLabel">I want my website to be written in*</p><br>
                                    <button data-toggle="dropdown" class="btn dropdown-toggle menuPlaceholder btnlanguage"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="fillArray(), getTotal(), disableSubmit()">
                                        <li><input type="checkbox" id="french" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $french ?>" value="french"><label for="french">French</label></li>
                                        <li><input type="checkbox" id="english" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $english ?>" value="english"><label for="english">English</label></li>
                                        <li><input type="checkbox" id="bulgarian" name="language[]"
                                                class="checkBoxValue languagecheck" data-price="<?= $bulgarian ?>" value="bulgarian"><label
                                                for="bulgarian">Bulgarian</label></li>
                                        <li><input type="checkbox" id="croatian" name="language[]"
                                                class="checkBoxValue languagecheck" data-price="<?= $croatian ?>" value="croatian"><label
                                                for="croatian">Croatian</label></li>
                                        <li><input type="checkbox" id="czech" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $czech ?>" value="czech"><label for="czech">Czech</label></li>
                                        <li><input type="checkbox" id="danish" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $danish ?>" value="danish"><label for="danish">Danish</label></li>
                                        <li><input type="checkbox" id="dutch" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $dutch ?>" value="dutch"><label for="dutch">Dutch</label></li>
                                        <li><input type="checkbox" id="estonian" name="language[]"
                                                class="checkBoxValue languagecheck" data-price="<?= $estonian ?>" value="estonian"><label
                                                for="estonian">Estonian</label></li>
                                        <li><input type="checkbox" id="finnish" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $finnish ?>" value="finnish"><label for="finnish">Finnish</label></li>
                                        <li><input type="checkbox" id="german" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $german ?>" value="german"><label for="german">German</label></li>
                                        <li><input type="checkbox" id="greek" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $greek ?>" value="greek"><label for="greek">Greek</label></li>
                                        <li><input type="checkbox" id="hungarian" name="language[]"
                                                class="checkBoxValue languagecheck" data-price="<?= $hungarian ?>" value="hungarian"><label
                                                for="hungarian">Hungarian</label></li>
                                        <li><input type="checkbox" id="italian" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $italian ?>" value="italian"><label for="italian">Italian</label></li>
                                        <li><input type="checkbox" id="latvian" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $latvian ?>" value="latvian"><label for="latvian">Latvian</label></li>
                                        <li><input type="checkbox" id="lithuanian" name="language[]"
                                                class="checkBoxValue languagecheck" data-price="<?= $lithuanian ?>" value="lithuanian"><label
                                                for="lithuanian">Lithuanian</label></li>
                                        <li><input type="checkbox" id="norwegian" name="language[]"
                                                class="checkBoxValue languagecheck" data-price="<?= $norwegian ?>" value="norwegian"><label
                                                for="norwegian">Norwegian</label></li>
                                        <li><input type="checkbox" id="portuguese" name="language[]"
                                                class="checkBoxValue languagecheck" data-price="<?= $portuguese ?>" value="portuguese"><label
                                                for="portuguese">Portuguese</label></li>
                                        <li><input type="checkbox" id="russian" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $russian ?>" value="russian"><label for="russian">Russian</label></li>
                                        <li><input type="checkbox" id="serbian" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $serbian ?>" value="serbian"><label for="serbian">Serbian</label></li>
                                        <li><input type="checkbox" id="slovak" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $slovak ?>" value="slovak"><label for="slovak">Slovak</label></li>
                                        <li><input type="checkbox" id="slovene" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $slovene ?>" value="slovene"><label for="slovene">Slovene</label></li>
                                        <li><input type="checkbox" id="spanish" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $spanish ?>" value="spanish"><label for="spanish">Spanish</label></li>
                                        <li><input type="checkbox" id="swedish" name="language[]" class="checkBoxValue languagecheck"
                                                data-price="<?= $swedish ?>" value="swedish"><label for="swedish">Swedish</label></li>
                                        <li><input type="checkbox" id="swissGerman" name="language[]"
                                                class="checkBoxValue languagecheck" data-price="<?= $swissGerman ?>" value="swissGerman"><label for="swissGerman">Swiss
                                                German</label></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="design">I want a Design*</label>
                                <select id="design" name="design" class="form-control"
                                    onchange="fillArray(), getSelectValue(), getTotal(), disableSubmit()" required>
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $standardDesign ?>" value="Standard Design">Standard : nice, simple and efficient (I don't have a
                                        visual identity guide)</option>
                                    <option data-price="<?= $customDesign ?>" value="Custom Design">Custom : according to my visual identity guide</option>
                                    <option data-price="<?= $customPlusDesign ?>" value="Custom + Design">Custom + : Top of the range design. 100% tailor-made for me
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="writingContent">I need writing content(descriptions,
                                    articles...)*</label>
                                <select id="writingContent" name="writingContent" class="form-control"
                                    onchange="fillArray(), getSelectValue(), getTotal(), disableSubmit()" required>
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $yesWriting ?>" value="YesWriting">Yes</option>
                                    <option data-price="<?= $noWriting ?>" value="NoWriting">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="visualContent">I need visual content (pictures...)*</label>
                                <select id="visualContent" name="visualContent" class="form-control"
                                    onchange="fillArray(), getSelectValue(), getTotal(), disableSubmit()" required>
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $yesVisual ?>" value="YesVisual">Yes</option>
                                    <option data-price="<?= $noVisual ?>" value="NoVisual">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="maintenance">Maintenance / updates*</label>
                                <select id="maintenance" name="maintenance" class="form-control"
                                    onchange="fillArray(), getSelectValue(), getTotal(), disableSubmit()" required>
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $noMaintenance ?>" value="No Maintenance">I will do it myself</option>
                                    <option data-price="<?= $minimalMaintenance ?>" value="Minimal Maintenance">I want a minimal plan (mininum maintance, no updates)
                                    </option>
                                    <option data-price="<?= $regularMaintenance ?>" value="Regular Maintenance">I want a regular plan (minimum maintenance, updated every
                                        year)</option>
                                    <option data-price="<?= $premiumMaintenance ?>" value="Premium Maintenance">I want a premium plan (regular maintenance, updated every 3
                                        months)</option>
                                    <option data-price="<?= $goldMaintenance ?>" value="Gold Maintenance">I want a gold plan (priority maintenance, updated every
                                        months)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="host">Host*</label>
                                <select id="host" name="host" class="form-control"
                                    onchange="fillArray(), getSelectValue(), getTotal(), disableSubmit()" required>
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $noHost ?>" value="No Host">I will handle that myself </option>
                                    <option data-price="<?= $standardHost ?>" value="Standard Host">I want a standard host</option>
                                    <option data-price="<?= $premiumHost ?>" value="Premium Host">I want a premium host (high traffic website)</option>
                                </select>
                                <small>Hosting will be handled by a professional third party. I will not host your
                                    website(s) on my personal server for logistical reasons.</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="domainYN">Domain name*</label>
                                <select id="domainYN" name="domainYN" class="form-control" onchange="myFunction5(), disableSubmit()"
                                    required>
                                    <option label="Please choose..."> </option>
                                    <option value="No">I already have one </option>
                                    <option value="No">I will get one myself </option>
                                    <option value="Yes">I need one - Choose one or several extensions (.com, .fr
                                        etc)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6" id="extensionBlock">
                                <div class="btn-group">
                                    <p class="checkboxLabel">Extensions</p><br>
                                    <button data-toggle="dropdown" class="btn dropdown-toggle menuPlaceholder"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="fillArray(), getTotal(), disableSubmit()">
                                        <li><input type="checkbox" id="dotCom" name="extensions[]" class="checkBoxValue extensioncheck"
                                                data-price="<?= $dotCom ?>" value=".com"><label for="dotCom">.com</label></li>
                                        <li><input type="checkbox" id="dotFr" name="extensions[]" class="checkBoxValue extensioncheck"
                                                data-price="<?= $dotFr ?>" value=".fr"><label for="dotFr">.fr</label></li>
                                        <li><input type="checkbox" id="dotUk" name="extensions[]" class="checkBoxValue extensioncheck"
                                                data-price="<?= $dotUk ?>" value=".uk"><label for="dotUk">.uk</label></li>
                                        <li><input type="checkbox" id="dotDe" name="extensions[]" class="checkBoxValue extensioncheck"
                                                data-price="<?= $dotDe ?>" value=".de"><label for="dotDe">.de</label></li>
                                    </ul><br><br>
                                    <small>Check the full list of available extensions <a
                                            href="https://iwantmyname.com/domains"><strong>here</strong></a></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="deadlineSelect">I have a specific deadline*</label>
                                <select id="deadlineSelect" name="deadlineSelect" class="form-control"
                                    onchange="fillArray(), getSelectValue(), getTotal(), myFunction3(), disableSubmit()" required>
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $noDeadline ?>" value="No Deadline">No</option>
                                    <option data-price="<?= $expressPlus ?>" value="Express +">Less than 1 month (Express +)</option>
                                    <option data-price="<?= $express ?>" value="Express">Less than 2 months (Express)</option>
                                    <option data-price="<?= $fast ?>" value="Fast">Less than 4 months (Fast)</option>
                                    <option data-price="<?= $regular ?>" value="Regular">Less than 6 months (Regular)</option>
                                    <option data-price="<?= $slow ?>" value="Slow">More than 6 months (Slow)</option>
                                </select>
                                <small>From today to your deadline</small>
                            </div>
                            <div class="form-group col-md-6" id="deadlineBlock">
                                <label for="deadline">Specify exact deadline</label>
                                <input type="date" class="form-control" id="deadline" name="deadline" min="<?= date("Y-m-d"); ?>">
                            </div>
                        </div>
                    </section>
                    <section id="showcaseSection">
                        <div class="row">
                            <div class="col-md-12 center fade-down section-heading">
                                <p>Showcase Website</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="pageNb">Number of pages on my showcase website*</label>
                                <select id="pageNb" name="pageNb" class="form-control"
                                    onchange="fillArray(), getSelectValue(), getTotal(), disableSubmit()">
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $minusTenPage ?>" value="- 10 pages">- 10</option>
                                    <option data-price="<?= $tenPage ?>" value="10 - 50 pages">10 - 50</option>
                                    <option data-price="<?= $fiftyPage ?>" value="50 - 100 pages">50 - 100</option>
                                    <option data-price="<?= $undredPage ?>" value="100 - 200 pages">100 - 200</option>
                                    <option data-price="<?= $twoUndredPage ?>" value="200 - 500 pages">200 - 500</option>
                                    <option data-price="<?= $fiveUndredPage ?>" value="+ 500 pages">+ 500</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="loginShowcaseYN">I want my user to be able to log in (Showcase
                                    Website)*</label>
                                <select id="loginShowcaseYN" name="loginShowcaseYN" class="form-control"
                                    onchange="fillArray(), getSelectValue(), getTotal(), disableSubmit()">
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $yesLogin ?>" value="Yes Login">Yes</option>
                                    <option data-price="<?= $noLogin ?>" value="No Login">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="paymentShowcaseYN">I need payment methods for my Showcase
                                    Website*</label>
                                <select id="paymentShowcaseYN" name="paymentShowcaseYN" class="form-control"
                                    onchange="myFunction2(), disableSubmit()">
                                    <option label="Please choose..."> </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6" id="paymentMethShowcase">
                                <div class="btn-group">
                                    <p class="checkboxLabel">Payment methods (Showcase Website)</p><br>
                                    <button data-toggle="dropdown" class="btn dropdown-toggle menuPlaceholder"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="fillArray(), getTotal(), disableSubmit()">
                                        <li><input type="checkbox" id="2CheckoutShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $twoCheckoutShow ?>" value="2Checkout (Showcase)"><label
                                                for="2CheckoutShow">2Checkout</label></li>
                                        <li><input type="checkbox" id="authorizeShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $authorizeShow ?>" value="Authorize.Ne (Showcase)"><label
                                                for="authorizeShow">Authorize.Net</label></li>
                                        <li><input type="checkbox" id="amazonShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $amazonShow ?>" value="Amazon Payment (Showcase)"><label for="amazonShow">Amazon
                                                Payment</label></li>
                                        <li><input type="checkbox" id="bankWireShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $wireShow ?>" value="Bank Wire (Showcase)"><label for="bankWireShow">Bank
                                                Wire</label></li>
                                        <li><input type="checkbox" id="checkShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $checkShow ?>" value="Check (Showcase)"><label
                                                for="checkShow">Check</label></li>
                                        <li><input type="checkbox" id="creditCardPPShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $creditPaypalShow ?>" value="Credit Card (Through Paypal) (Showcase)"><label
                                                for="creditCardPPShow">Credit Card (Through Paypal)</label></li>
                                        <li><input type="checkbox" id="creditCardBkShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $creditBankShow ?>" value="Credit Card (Through Bank Api) (Showcase)"><label
                                                for="creditCardBkShow">Credit Card (Through Bank Api)</label></li>
                                        <li><input type="checkbox" id="paypalShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $paypalShow ?>" value="Paypal (Showcase)"><label
                                                for="paypalShow">Paypal</label></li>
                                        <li><input type="checkbox" id="paypalProShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $paypalProShow ?>" value="PayPal Payments Pro (Showcase)"><label for="paypalProShow">PayPal
                                                Payments Pro</label></li>
                                        <li><input type="checkbox" id="sagePayShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $sagePayShow ?>" value="SagePay (Showcase)"><label
                                                for="sagePayShow">SagePay</label></li>
                                        <li><input type="checkbox" id="skrillShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $skrillShow ?>" value="Skrill (Showcase)"><label
                                                for="skrillShow">Skrill</label></li>
                                        <li><input type="checkbox" id="squareShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $squareShow ?>" value="Square (Showcase)"><label
                                                for="squareShow">Square</label></li>
                                        <li><input type="checkbox" id="stripeShow" name="paymentMtdShowcase[]"
                                                class="checkBoxValue payShowcheck" data-price="<?= $stripeShow ?>" value="Stripe (Showcase)"><label
                                                for="stripeShow">Stripe</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="webstoreSection">
                        <div class="row">
                            <div class="col-md-12 center gap fade-down section-heading">
                                <div class="gap"></div>
                                <p>Webstore</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="productNb">Number of products to sell*</label>
                                <select id="productNb" name="productNb" class="form-control"
                                    onchange="fillArray(), getSelectValue(), getTotal(), disableSubmit()">
                                    <option data-price="0" label="Please choose..."> </option>
                                    <option data-price="<?= $minusTenProd ?>" value="- 10 products">- 10</option>
                                    <option data-price="<?= $tenProd ?>" value="10 - 100 products">10 - 100</option>
                                    <option data-price="<?= $undredProd ?>" value="100 - 200 products">100 - 200</option>
                                    <option data-price="<?= $twoUndredProd ?>" value="200 - 500 products">200 - 500</option>
                                    <option data-price="<?= $fiveUndredProd ?>" value="+ 500 products">+ 500</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6" id="paymentMethStore">
                                <div class="btn-group">
                                    <p class="checkboxLabel">Payment methods (Webstore)*</p><br>
                                    <button data-toggle="dropdown" class="btn dropdown-toggle menuPlaceholder"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="fillArray(), getTotal(), disableSubmit()">
                                    <li><input type="checkbox" id="2CheckoutStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $twoCheckoutStore ?>" value="2Checkout (Store)"><label
                                                for="2CheckoutStore">2Checkout</label></li>
                                        <li><input type="checkbox" id="authorizeStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $authorizeStore ?>" value="Authorize.Ne (Store)"><label
                                                for="authorizeStore">Authorize.Net</label></li>
                                        <li><input type="checkbox" id="amazonStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $amazonStore ?>" value="Amazon Payment (Store)"><label for="amazonStore">Amazon
                                                Payment</label></li>
                                        <li><input type="checkbox" id="bankWireStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $wireStore ?>" value="Bank Wire (Store)"><label for="bankWireStore">Bank
                                                Wire</label></li>
                                        <li><input type="checkbox" id="checkStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $checkStore ?>" value="Check (Store)"><label
                                                for="checkStore">Check</label></li>
                                        <li><input type="checkbox" id="creditCardPPStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $creditPaypalStore ?>" value="Credit Card (Through Paypal) (Store)"><label
                                                for="creditCardPPStore">Credit Card (Through Paypal)</label></li>
                                        <li><input type="checkbox" id="creditCardBkStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $creditBankStore ?>" value="Credit Card (Through Bank Api) (Store)"><label
                                                for="creditCardBkStore">Credit Card (Through Bank Api)</label></li>
                                        <li><input type="checkbox" id="paypalStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $paypalStore ?>" value="Paypal (Store)"><label
                                                for="paypalStore">Paypal</label></li>
                                        <li><input type="checkbox" id="paypalProStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $paypalProStore ?>" value="PayPal Payments Pro (Store)"><label for="paypalProStore">PayPal
                                                Payments Pro</label></li>
                                        <li><input type="checkbox" id="sagePayStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $sagePayStore ?>" value="SagePay (Store)"><label
                                                for="sagePayStore">SagePay</label></li>
                                        <li><input type="checkbox" id="skrillStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $skrillStore ?>" value="Skrill (Store)"><label
                                                for="skrillStore">Skrill</label></li>
                                        <li><input type="checkbox" id="squareStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $squareStore ?>" value="Square (Store)"><label
                                                for="squareStore">Square</label></li>
                                        <li><input type="checkbox" id="stripeStore" name="paymentMtdStore[]"
                                                class="checkBoxValue payStorecheck" data-price="<?= $stripeStore ?>" value="Stripe (Store)"><label
                                                for="stripeStore">Stripe</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="aboutYou">
                        <div class="row">
                            <div class="col-md-12 center gap fade-down section-heading">
                                <p>About you</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="project">Project name*</label>
                                <input type="text" class="form-control" id="project" name="project" maxlength="40"
                                    required pattern="^[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]{1,}[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]*[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]+$">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="structure">Structure*</label>
                                <select id="structure" name="structure" class="form-control" required>
                                    <option label="Please choose..."> </option>
                                    <option value="individual">Individual</option>
                                    <option value="professional">Professional</option>
                                    <option value="association">Association</option>
                                    <option value="professional">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="company">Company Name</label>
                                <input type="text" class="form-control" id="company" name="company" maxlength="100" pattern="^[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]{1,}[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]*[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]+$">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name*</label>
                                <input type="text" class="form-control" id="firstName" name="firstName"
                                    maxlength="40" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+[' -]?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+$">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name*</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" maxlength="40"
                                    required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+[' -]?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+$">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="contactEmail">Email*</label>
                                <input type="email" class="form-control" id="contactEmail" name="contactEmail" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9\.+_ -]*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="postalAddress">Address*</label>
                                <input type="text" class="form-control" id="postalAddress" name="postalAddress" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9,:;/\(\)'&+%\._ -]+$">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="postCode">Post Code*</label>
                                <input type="text" class="form-control" id="postCode" name="postCode" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9,:;/\(\)'&+%\._ -]+$">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="city">City*</label>
                                <input type="text" class="form-control" id="city" name="city" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9,:;/\(\)'&+%\._ -]+$">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="country">Country*</label>
                                <select id="country" name="country" class="form-control" required>
                                    <option label="Please choose..."> </option>
                                    <option value="AFG">Afghanistan</option>
                                    <option value="ALA">Åland Islands</option>
                                    <option value="ALB">Albania</option>
                                    <option value="DZA">Algeria</option>
                                    <option value="ASM">American Samoa</option>
                                    <option value="AND">Andorra</option>
                                    <option value="AGO">Angola</option>
                                    <option value="AIA">Anguilla</option>
                                    <option value="ATA">Antarctica</option>
                                    <option value="ATG">Antigua and Barbuda</option>
                                    <option value="ARG">Argentina</option>
                                    <option value="ARM">Armenia</option>
                                    <option value="ABW">Aruba</option>
                                    <option value="AUS">Australia</option>
                                    <option value="AUT">Austria</option>
                                    <option value="AZE">Azerbaijan</option>
                                    <option value="BHS">Bahamas</option>
                                    <option value="BHR">Bahrain</option>
                                    <option value="BGD">Bangladesh</option>
                                    <option value="BRB">Barbados</option>
                                    <option value="BLR">Belarus</option>
                                    <option value="BEL">Belgium</option>
                                    <option value="BLZ">Belize</option>
                                    <option value="BEN">Benin</option>
                                    <option value="BMU">Bermuda</option>
                                    <option value="BTN">Bhutan</option>
                                    <option value="BOL">Bolivia, Plurinational State of</option>
                                    <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BIH">Bosnia and Herzegovina</option>
                                    <option value="BWA">Botswana</option>
                                    <option value="BVT">Bouvet Island</option>
                                    <option value="BRA">Brazil</option>
                                    <option value="IOT">British Indian Ocean Territory</option>
                                    <option value="BRN">Brunei Darussalam</option>
                                    <option value="BGR">Bulgaria</option>
                                    <option value="BFA">Burkina Faso</option>
                                    <option value="BDI">Burundi</option>
                                    <option value="KHM">Cambodia</option>
                                    <option value="CMR">Cameroon</option>
                                    <option value="CAN">Canada</option>
                                    <option value="CPV">Cape Verde</option>
                                    <option value="CYM">Cayman Islands</option>
                                    <option value="CAF">Central African Republic</option>
                                    <option value="TCD">Chad</option>
                                    <option value="CHL">Chile</option>
                                    <option value="CHN">China</option>
                                    <option value="CXR">Christmas Island</option>
                                    <option value="CCK">Cocos (Keeling) Islands</option>
                                    <option value="COL">Colombia</option>
                                    <option value="COM">Comoros</option>
                                    <option value="COG">Congo</option>
                                    <option value="COD">Congo, the Democratic Republic of the</option>
                                    <option value="COK">Cook Islands</option>
                                    <option value="CRI">Costa Rica</option>
                                    <option value="CIV">Côte d'Ivoire</option>
                                    <option value="HRV">Croatia</option>
                                    <option value="CUB">Cuba</option>
                                    <option value="CUW">Curaçao</option>
                                    <option value="CYP">Cyprus</option>
                                    <option value="CZE">Czech Republic</option>
                                    <option value="DNK">Denmark</option>
                                    <option value="DJI">Djibouti</option>
                                    <option value="DMA">Dominica</option>
                                    <option value="DOM">Dominican Republic</option>
                                    <option value="ECU">Ecuador</option>
                                    <option value="EGY">Egypt</option>
                                    <option value="SLV">El Salvador</option>
                                    <option value="GNQ">Equatorial Guinea</option>
                                    <option value="ERI">Eritrea</option>
                                    <option value="EST">Estonia</option>
                                    <option value="ETH">Ethiopia</option>
                                    <option value="FLK">Falkland Islands (Malvinas)</option>
                                    <option value="FRO">Faroe Islands</option>
                                    <option value="FJI">Fiji</option>
                                    <option value="FIN">Finland</option>
                                    <option value="FRA">France</option>
                                    <option value="GUF">French Guiana</option>
                                    <option value="PYF">French Polynesia</option>
                                    <option value="ATF">French Southern Territories</option>
                                    <option value="GAB">Gabon</option>
                                    <option value="GMB">Gambia</option>
                                    <option value="GEO">Georgia</option>
                                    <option value="DEU">Germany</option>
                                    <option value="GHA">Ghana</option>
                                    <option value="GIB">Gibraltar</option>
                                    <option value="GRC">Greece</option>
                                    <option value="GRL">Greenland</option>
                                    <option value="GRD">Grenada</option>
                                    <option value="GLP">Guadeloupe</option>
                                    <option value="GUM">Guam</option>
                                    <option value="GTM">Guatemala</option>
                                    <option value="GGY">Guernsey</option>
                                    <option value="GIN">Guinea</option>
                                    <option value="GNB">Guinea-Bissau</option>
                                    <option value="GUY">Guyana</option>
                                    <option value="HTI">Haiti</option>
                                    <option value="HMD">Heard Island and McDonald Islands</option>
                                    <option value="VAT">Holy See (Vatican City State)</option>
                                    <option value="HND">Honduras</option>
                                    <option value="HKG">Hong Kong</option>
                                    <option value="HUN">Hungary</option>
                                    <option value="ISL">Iceland</option>
                                    <option value="IND">India</option>
                                    <option value="IDN">Indonesia</option>
                                    <option value="IRN">Iran, Islamic Republic of</option>
                                    <option value="IRQ">Iraq</option>
                                    <option value="IRL">Ireland</option>
                                    <option value="IMN">Isle of Man</option>
                                    <option value="ISR">Israel</option>
                                    <option value="ITA">Italy</option>
                                    <option value="JAM">Jamaica</option>
                                    <option value="JPN">Japan</option>
                                    <option value="JEY">Jersey</option>
                                    <option value="JOR">Jordan</option>
                                    <option value="KAZ">Kazakhstan</option>
                                    <option value="KEN">Kenya</option>
                                    <option value="KIR">Kiribati</option>
                                    <option value="PRK">Korea, Democratic People's Republic of</option>
                                    <option value="KOR">Korea, Republic of</option>
                                    <option value="KWT">Kuwait</option>
                                    <option value="KGZ">Kyrgyzstan</option>
                                    <option value="LAO">Lao People's Democratic Republic</option>
                                    <option value="LVA">Latvia</option>
                                    <option value="LBN">Lebanon</option>
                                    <option value="LSO">Lesotho</option>
                                    <option value="LBR">Liberia</option>
                                    <option value="LBY">Libya</option>
                                    <option value="LIE">Liechtenstein</option>
                                    <option value="LTU">Lithuania</option>
                                    <option value="LUX">Luxembourg</option>
                                    <option value="MAC">Macao</option>
                                    <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MDG">Madagascar</option>
                                    <option value="MWI">Malawi</option>
                                    <option value="MYS">Malaysia</option>
                                    <option value="MDV">Maldives</option>
                                    <option value="MLI">Mali</option>
                                    <option value="MLT">Malta</option>
                                    <option value="MHL">Marshall Islands</option>
                                    <option value="MTQ">Martinique</option>
                                    <option value="MRT">Mauritania</option>
                                    <option value="MUS">Mauritius</option>
                                    <option value="MYT">Mayotte</option>
                                    <option value="MEX">Mexico</option>
                                    <option value="FSM">Micronesia, Federated States of</option>
                                    <option value="MDA">Moldova, Republic of</option>
                                    <option value="MCO">Monaco</option>
                                    <option value="MNG">Mongolia</option>
                                    <option value="MNE">Montenegro</option>
                                    <option value="MSR">Montserrat</option>
                                    <option value="MAR">Morocco</option>
                                    <option value="MOZ">Mozambique</option>
                                    <option value="MMR">Myanmar</option>
                                    <option value="NAM">Namibia</option>
                                    <option value="NRU">Nauru</option>
                                    <option value="NPL">Nepal</option>
                                    <option value="NLD">Netherlands</option>
                                    <option value="NCL">New Caledonia</option>
                                    <option value="NZL">New Zealand</option>
                                    <option value="NIC">Nicaragua</option>
                                    <option value="NER">Niger</option>
                                    <option value="NGA">Nigeria</option>
                                    <option value="NIU">Niue</option>
                                    <option value="NFK">Norfolk Island</option>
                                    <option value="MNP">Northern Mariana Islands</option>
                                    <option value="NOR">Norway</option>
                                    <option value="OMN">Oman</option>
                                    <option value="PAK">Pakistan</option>
                                    <option value="PLW">Palau</option>
                                    <option value="PSE">Palestinian Territory, Occupied</option>
                                    <option value="PAN">Panama</option>
                                    <option value="PNG">Papua New Guinea</option>
                                    <option value="PRY">Paraguay</option>
                                    <option value="PER">Peru</option>
                                    <option value="PHL">Philippines</option>
                                    <option value="PCN">Pitcairn</option>
                                    <option value="POL">Poland</option>
                                    <option value="PRT">Portugal</option>
                                    <option value="PRI">Puerto Rico</option>
                                    <option value="QAT">Qatar</option>
                                    <option value="REU">Réunion</option>
                                    <option value="ROU">Romania</option>
                                    <option value="RUS">Russian Federation</option>
                                    <option value="RWA">Rwanda</option>
                                    <option value="BLM">Saint Barthélemy</option>
                                    <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KNA">Saint Kitts and Nevis</option>
                                    <option value="LCA">Saint Lucia</option>
                                    <option value="MAF">Saint Martin (French part)</option>
                                    <option value="SPM">Saint Pierre and Miquelon</option>
                                    <option value="VCT">Saint Vincent and the Grenadines</option>
                                    <option value="WSM">Samoa</option>
                                    <option value="SMR">San Marino</option>
                                    <option value="STP">Sao Tome and Principe</option>
                                    <option value="SAU">Saudi Arabia</option>
                                    <option value="SEN">Senegal</option>
                                    <option value="SRB">Serbia</option>
                                    <option value="SYC">Seychelles</option>
                                    <option value="SLE">Sierra Leone</option>
                                    <option value="SGP">Singapore</option>
                                    <option value="SXM">Sint Maarten (Dutch part)</option>
                                    <option value="SVK">Slovakia</option>
                                    <option value="SVN">Slovenia</option>
                                    <option value="SLB">Solomon Islands</option>
                                    <option value="SOM">Somalia</option>
                                    <option value="ZAF">South Africa</option>
                                    <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SSD">South Sudan</option>
                                    <option value="ESP">Spain</option>
                                    <option value="LKA">Sri Lanka</option>
                                    <option value="SDN">Sudan</option>
                                    <option value="SUR">Suriname</option>
                                    <option value="SJM">Svalbard and Jan Mayen</option>
                                    <option value="SWZ">Swaziland</option>
                                    <option value="SWE">Sweden</option>
                                    <option value="CHE">Switzerland</option>
                                    <option value="SYR">Syrian Arab Republic</option>
                                    <option value="TWN">Taiwan, Province of China</option>
                                    <option value="TJK">Tajikistan</option>
                                    <option value="TZA">Tanzania, United Republic of</option>
                                    <option value="THA">Thailand</option>
                                    <option value="TLS">Timor-Leste</option>
                                    <option value="TGO">Togo</option>
                                    <option value="TKL">Tokelau</option>
                                    <option value="TON">Tonga</option>
                                    <option value="TTO">Trinidad and Tobago</option>
                                    <option value="TUN">Tunisia</option>
                                    <option value="TUR">Turkey</option>
                                    <option value="TKM">Turkmenistan</option>
                                    <option value="TCA">Turks and Caicos Islands</option>
                                    <option value="TUV">Tuvalu</option>
                                    <option value="UGA">Uganda</option>
                                    <option value="UKR">Ukraine</option>
                                    <option value="ARE">United Arab Emirates</option>
                                    <option value="GBR">United Kingdom</option>
                                    <option value="USA">United States</option>
                                    <option value="UMI">United States Minor Outlying Islands</option>
                                    <option value="URY">Uruguay</option>
                                    <option value="UZB">Uzbekistan</option>
                                    <option value="VUT">Vanuatu</option>
                                    <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                    <option value="VNM">Viet Nam</option>
                                    <option value="VGB">Virgin Islands, British</option>
                                    <option value="VIR">Virgin Islands, U.S.</option>
                                    <option value="WLF">Wallis and Futuna</option>
                                    <option value="ESH">Western Sahara</option>
                                    <option value="YEM">Yemen</option>
                                    <option value="ZMB">Zambia</option>
                                    <option value="ZWE">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="attachedFileCust"><small>Add a mockup(7Mo max)</small></label>
                                <input type="file" class="form-control" id="attachedFileCust" name="attachedFile" accept=".png, .jpg, .jpeg" >
                                <small>Format .pgn, .jpg, .jpeg</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="messageContent" class="col-form-label">Describe your project*</label>
                                <textarea class="form-control" rows="5" id="messageContent"
                                    name="messageContent" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <small>Any extra requests mentioned in the text area above is subject to approval and can cause extra
                                    fees.</small>
                            </div>
                        </div>
                        <div class="row customQuotePriceField">
                            <div class="form-group col-md-6">
                                <label for="arrayServices" class="col-form-label">arrayServices</label>
                                <input type="text" class="form-control" id="arrayServices" name="arrayServices" readonly="readonly"                          required>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
            <div class="col-md-3 fade-up quotePrice">
                <div class="pricing_item">
                    <div class="pricing_top_border"></div>
                    <div class="pricing_head p-top-30 p-bottom-60 text-center ">
                        <h3 class="text-uppercase">How much?</h3>
                    </div>
                    <div class="pricing_price_border text-center bounce-in">
                        <div class="pricing_price">
                            <h3 id="text-customQuote"> 0 €</h3>
                        </div>
                    </div>
                    <div class="pricing_body bg-white p-top-90 p-bottom-60">
                        <p class="priceRecap">After submiting this <strong>custom quote</strong> you will
                            automatically recieve a detailled recap to the email address you provided.</p>
                        <div class="text-center">
                            <input type="checkbox" form="customQuoteForm" id="acceptTerms" required>&nbsp;
                            <label for="acceptTerms" class="col-form-label"><small>I accept <a href="index.php?action=termsAndCondition">Terms & Conditions</a> and <a href="index.php?action=privacyPolicy">Privacy Policy.</a></small></label><br>
                            <button id="customSubmitBtn" type="submit" form="customQuoteForm" class="btn btn-princing" disabled>I want this!</button>
                        </div>
                        <div class="row" id="alertBlock">
                            <p><small id="langAlert"> At least one language must be selected</small></p>
                            <p><small id="extensionAlert"> At least one extension must be selected</small></p>
                            <p><small id="payShowAlert"> At least one payment opt (Showcase) must be selected</small></p>
                            <p><small id="payStoreAlert"> At least one payment opt (Webstore) must be selected</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Responsive Custom Quote Price Widget-->
            <div class="pricing_price_border_resp text-center bounce-in" id="customQuoteWidget">
                <div class="pricing_price_resp">
                    <h3 id="text-customQuoteWidget"> 0 €</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>