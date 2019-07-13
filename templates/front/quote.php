<?php
$title = 'Custom Quote - So, how much?';
ob_start();
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
                <form id="customQuoteForm" action="index.php?action=sendMessage" method="post">
                    <section id="yourWebsite">
                        <div class="row">
                            <div class="col-md-12 center gap fade-down section-heading">
                                <p>What kind of website ?</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="structure">Structure*</label>
                                <select id="structure" name="structure" class="form-control" required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="" disabled selected hidden> </option>
                                    <option value="individual">Individual</option>
                                    <option value="professional">Professional</option>
                                    <option value="association">Association</option>
                                    <option value="professional">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="siteType">Type of Website*</label>
                                <select id="siteType" name="siteType" class="form-control"
                                    onchange="getSelectValue(), myFunction4(), getTotal()" required>
                                    <!-- I need de empty option line to respect W3C rules + i need the &nbsp; not to have an empty option without label (W3C error) and i need the Please Choose.. line with value at 0 for my total function to work fine -->
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="500">Showcase Website</option>
                                    <option value="800">Webstore</option>
                                    <option value="1000">Showcase Website + Webstore</option>
                                    <option value="300">Redesign (Showcase Website)</option>
                                    <option value="300">Redesign (Webstore)</option>
                                    <option value="300">Redesign (Showcase Website + Webstore)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="btn-group ">
                                    <p class="checkboxLabel">I want my website to be written in*</p><br>
                                    <button data-toggle="dropdown" class="btn dropdown-toggle"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="getTotal()">
                                        <li><input type="checkbox" id="french" name="french" class="checkBoxValue"
                                                value="0"><label for="french">French</label></li>
                                        <li><input type="checkbox" id="english" name="english" class="checkBoxValue"
                                                value="50"><label for="english">English</label></li>
                                        <li><input type="checkbox" id="bulgarian" name="bulgarian"
                                                class="checkBoxValue" value="100"><label
                                                for="bulgarian">Bulgarian</label></li>
                                        <li><input type="checkbox" id="croatian" name="croatian"
                                                class="checkBoxValue" value="100"><label
                                                for="croatian">Croatian</label></li>
                                        <li><input type="checkbox" id="czech" name="czech" class="checkBoxValue"
                                                value="100"><label for="czech">Czech</label></li>
                                        <li><input type="checkbox" id="danish" name="danish" class="checkBoxValue"
                                                value="100"><label for="danish">Danish</label></li>
                                        <li><input type="checkbox" id="dutch" name="dutch" class="checkBoxValue"
                                                value="100"><label for="dutch">Dutch</label></li>
                                        <li><input type="checkbox" id="estonian" name="estonian"
                                                class="checkBoxValue" value="100"><label
                                                for="estonian">Estonian</label></li>
                                        <li><input type="checkbox" id="finnish" name="finnish" class="checkBoxValue"
                                                value="100"><label for="finnish">Finnish</label></li>
                                        <li><input type="checkbox" id="german" name="german" class="checkBoxValue"
                                                value="100"><label for="german">German</label></li>
                                        <li><input type="checkbox" id="greek" name="greek" class="checkBoxValue"
                                                value="100"><label for="greek">Greek</label></li>
                                        <li><input type="checkbox" id="hungarian" name="hungarian"
                                                class="checkBoxValue" value="100"><label
                                                for="hungarian">Hungarian</label></li>
                                        <li><input type="checkbox" id="italian" name="italian" class="checkBoxValue"
                                                value="100"><label for="italian">Italian</label></li>
                                        <li><input type="checkbox" id="latvian" name="latvian" class="checkBoxValue"
                                                value="100"><label for="latvian">Latvian</label></li>
                                        <li><input type="checkbox" id="lithuanian" name="lithuanian"
                                                class="checkBoxValue" value="100"><label
                                                for="lithuanian">Lithuanian</label></li>
                                        <li><input type="checkbox" id="norwegian" name="norwegian"
                                                class="checkBoxValue" value="100"><label
                                                for="norwegian">Norwegian</label></li>
                                        <li><input type="checkbox" id="portuguese" name="portuguese"
                                                class="checkBoxValue" value="100"><label
                                                for="portuguese">Portuguese</label></li>
                                        <li><input type="checkbox" id="russian" name="russian" class="checkBoxValue"
                                                value="100"><label for="russian">Russian</label></li>
                                        <li><input type="checkbox" id="serbian" name="serbian" class="checkBoxValue"
                                                value="100"><label for="serbian">Serbian</label></li>
                                        <li><input type="checkbox" id="slovak" name="slovak" class="checkBoxValue"
                                                value="100"><label for="slovak">Slovak</label></li>
                                        <li><input type="checkbox" id="slovene" name="slovene" class="checkBoxValue"
                                                value="100"><label for="slovene">Slovene</label></li>
                                        <li><input type="checkbox" id="spanish" name="spanish" class="checkBoxValue"
                                                value="100"><label for="spanish">Spanish</label></li>
                                        <li><input type="checkbox" id="swedish" name="swedish" class="checkBoxValue"
                                                value="100"><label for="swedish">Swedish</label></li>
                                        <li><input type="checkbox" id="swissGerman" name="swissGerman"
                                                class="checkBoxValue" value="100"><label for="swissGerman">Swiss
                                                German</label></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="design">I want a Design*</label>
                                <select id="design" name="design" class="form-control"
                                    onchange="getSelectValue(), getTotal()" required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="100">Standard : nice, simple and efficient (you don't have a
                                        visual
                                        identity guide)</option>
                                    <option value="50">Custom : according to your visual identity guide</option>
                                    <option value="300">Custom + : Top of the range design. 100% tailor-made for you
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="writingContent">I need writing content(descriptions,
                                    articles...)*</label>
                                <select id="writingContent" name="writingContent" class="form-control"
                                    onchange="getSelectValue(), getTotal()" required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="200">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="visualContent">I need visual content (pictures...)*</label>
                                <select id="visualContent" name="visualContent" class="form-control"
                                    onchange="getSelectValue(), getTotal()" required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="100">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="maintenance">Maintenance / updates*</label>
                                <select id="maintenance" name="maintenance" class="form-control"
                                    onchange="getSelectValue(), getTotal()" required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="0">I will do it myself</option>
                                    <option value="100">I want a minimal plan (mininum maintance, no updates)
                                    </option>
                                    <option value="200">I want a regular plan (minimum maintenance, updated every
                                        year)</option>
                                    <option value="400">I want a premium plan (regular maintenance, updated every 3
                                        months)</option>
                                    <option value="1500">I want a gold plan (priority maintenance, updated every
                                        months)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="host">Host*</label>
                                <select id="host" name="host" class="form-control"
                                    onchange="getSelectValue(), getTotal()" required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="0">I will handle that myself </option>
                                    <option value="50">I want a standard host</option>
                                    <option value="100">I want a premium host (high traffic website)</option>
                                </select>
                                <small>Hosting will be handled by a professional third party. I will not host your
                                    website(s) on my personal server for logistical reasons.</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="domainYN">Domain name*</label>
                                <select id="domainYN" name="domainYN" class="form-control" onchange="myFunction5()"
                                    required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="No" disabled selected hidden> </option>
                                    <option value="No">I already have one </option>
                                    <option value="No">I will get one myself </option>
                                    <option value="Yes">I need one - Choose one or several extensions (.com, .fr
                                        etc)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6" id="extensionBlock">
                                <div class="btn-group">
                                    <p class="checkboxLabel">Extentions</p><br>
                                    <button data-toggle="dropdown" class="btn dropdown-toggle"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="getTotal()">
                                        <li><input type="checkbox" id="dotCom" name="dotCom" class="checkBoxValue"
                                                value="20"><label for="dotCom">.com</label></li>
                                        <li><input type="checkbox" id="dotFr" name="dotFr" class="checkBoxValue"
                                                value="10"><label for="dotFr">.fr</label></li>
                                        <li><input type="checkbox" id="dotUk" name="dotUk" class="checkBoxValue"
                                                value="10"><label for="dotUk">.uk</label></li>
                                        <li><input type="checkbox" id="dotDe" name="dotDe" class="checkBoxValue"
                                                value="10"><label for="dotDe">.de</label></li>
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
                                    onchange="getSelectValue(), getTotal(), myFunction3()" required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="No">No</option>
                                    <option value="1000">Less than 1 month (Express +)</option>
                                    <option value="800">Less than 2 months (Express)</option>
                                    <option value="400">Less than 4 months (Fast)</option>
                                    <option value="50">Less than 6 months (Regular)</option>
                                    <option value="0">More than 6 months (Slow)</option>
                                </select>
                                <small>From today to your deadline</small>
                            </div>
                            <div class="form-group col-md-6" id="deadlineBlock">
                                <label for="deadline">Specify exact deadline</label>
                                <input type="date" class="form-control" id="deadline" name="deadline">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="btn-group">
                                    <p class="checkboxLabel">Optional features</p><br>
                                    <button data-toggle="dropdown" class="btn dropdown-toggle"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="getTotal()">
                                        <li><input type="checkbox" id="blogOpt" name="blogOpt" class="checkBoxValue"
                                                value="200"><label for="blogOpt">Blog</label></li>
                                        <li><input type="checkbox" id="chatOpt" name="chatOpt" class="checkBoxValue"
                                                value="150"><label for="chatOpt">Chat Box</label></li>
                                        <li><input type="checkbox" id="contactFormOpt" name="contactFormOpt"
                                                class="checkBoxValue" value="150"><label
                                                for="contactFormOpt">Contact Form</label></li>
                                        <li><input type="checkbox" id="newsletterOpt" name="newsletterOpt"
                                                class="checkBoxValue" value="70"><label
                                                for="newsletterOpt">Newsletter</label></li>
                                        <li><input type="checkbox" id="appointOpt" name="appointOpt"
                                                class="checkBoxValue" value="150"><label
                                                for="appointOpt">Appointment plugin</label></li>
                                        <li><input type="checkbox" id="searchOpt" name="searchOpt"
                                                class="checkBoxValue" value="150"><label for="searchOpt">Search
                                                engine</label></li>
                                        <li><input type="checkbox" id="quoteOpt" name="quoteOpt"
                                                class="checkBoxValue" value="150"><label for="quoteOpt">Automatic
                                                quote plugin</label></li>
                                        <li><input type="checkbox" id="invoiceOpt" name="invoiceOpt"
                                                class="checkBoxValue" value="150"><label for="invoiceOpt">Invoice
                                                plugin</label></li>
                                        <li><input type="checkbox" id="socialOpt" name="socialOpt"
                                                class="checkBoxValue" value="150"><label for="socialOpt">Social
                                                Networks plugin</label></li>
                                        <li><input type="checkbox" id="statsOpt" name="statsOpt"
                                                class="checkBoxValue" value="150"><label
                                                for="statsOpt">Statistics</label></li>
                                        <li><input type="checkbox" id="calendarOpt" name="calendarOpt"
                                                class="checkBoxValue" value="150"><label
                                                for="calendarOpt">Calendar</label></li>
                                        <li><input type="checkbox" id="newOpt" name="newOpt" class="checkBoxValue"
                                                value="150"><label for="newOpt">News plugin</label></li>
                                        <li><input type="checkbox" id="adminPannelOpt" name="adminPannelOpt"
                                                class="checkBoxValue" value="150"><label
                                                for="adminPannelOpt">Administration pannel</label></li>
                                        <li><input type="checkbox" id="ratingsOpt" name="ratingsOpt"
                                                class="checkBoxValue" value="150"><label for="ratingsOpt">Customer
                                                ratings</label></li>
                                        <li><input type="checkbox" id="surveyOpt" name="surveyOpt"
                                                class="checkBoxValue" value="150"><label for="surveyOpt">Survey
                                                plugin</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="form-group col-md-6">
                                <label for="deadlineYN">I have a specific deadline*</label>
                                <select id="deadlineYN" name="deadlineYN" class="form-control"
                                    onchange="myFunction3()" required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6" id="deadlineBlock">
                                <label for="deadline">Deadline</label>
                                <input type="date" class="form-control" id="deadline" name="deadline">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <ul id="urgentProject" onchange="getTotal()">
                                    <li><label for="urgentCheck">Urgent project (Express treatment)</label>
                                        <input type="checkbox" id="urgentCheck" name="urgentCheck"
                                            class="checkBoxValue" value="300"></li>
                                </ul>
                            </div>
                        </div>-->
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
                                    onchange="getSelectValue(), getTotal()">
                                    <!-- add required only if whole section displayed -->
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="0">- 10</option>
                                    <option value="20">10 - 50</option>
                                    <option value="30">50 - 100</option>
                                    <option value="40">100 - 200</option>
                                    <option value="50">200 - 500</option>
                                    <option value="60">+ 500</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="loginShowcaseYN">I want my user to be able to log in (Showcase
                                    Website)*</label>
                                <select id="loginShowcaseYN" name="loginShowcaseYN" class="form-control"
                                    onchange="getSelectValue(), getTotal()">
                                    <!-- add required only if whole section displayed -->
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="100">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="paymentShowcaseYN">I need payment methods for my Showcase
                                    Website*</label>
                                <select id="paymentShowcaseYN" name="paymentShowcaseYN" class="form-control"
                                    onchange="myFunction2()">
                                    <!-- add required only if whole section displayed -->
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6" id="paymentMethShowcase">
                                <div class="btn-group">
                                    <p class="checkboxLabel">Payment methods (Showcase Website)</p><br>
                                    <!-- add required only if whole section AND yes on the previous select displayed -->
                                    <button data-toggle="dropdown" class="btn dropdown-toggle"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="getTotal()">
                                        <li><input type="checkbox" id="2CheckoutShow" name="2CheckoutShow"
                                                class="checkBoxValue" value="50"><label
                                                for="2CheckoutShow">2Checkout</label></li>
                                        <li><input type="checkbox" id="authorizeShow" name="authorizeShow"
                                                class="checkBoxValue" value="50"><label
                                                for="authorizeShow">Authorize.Net</label></li>
                                        <li><input type="checkbox" id="amazonShow" name="amazonShow"
                                                class="checkBoxValue" value="50"><label for="amazonShow">Amazon
                                                Payment</label></li>
                                        <li><input type="checkbox" id="bankWireShow" name="bankWireShow"
                                                class="checkBoxValue" value="50"><label for="bankWireShow">Bank
                                                Wire</label></li>
                                        <li><input type="checkbox" id="checkShow" name="checkShow"
                                                class="checkBoxValue" value="50"><label
                                                for="checkShow">Check</label></li>
                                        <li><input type="checkbox" id="creditCardPPShow" name="creditCardPPShow"
                                                class="checkBoxValue" value="50"><label
                                                for="creditCardPPShow">Credit Card (Through Paypal)</label></li>
                                        <li><input type="checkbox" id="creditCardBkShow" name="creditCardBkShow"
                                                class="checkBoxValue" value="50"><label
                                                for="creditCardBkShow">Credit Card (Through Bank Api)</label></li>
                                        <li><input type="checkbox" id="paypalShow" name="paypalShow"
                                                class="checkBoxValue" value="50"><label
                                                for="paypalShow">Paypal</label></li>
                                        <li><input type="checkbox" id="paypalProShow" name="paypalProShow"
                                                class="checkBoxValue" value="50"><label for="paypalProShow">PayPal
                                                Payments Pro</label></li>
                                        <li><input type="checkbox" id="sagePayShow" name="sagePayShow"
                                                class="checkBoxValue" value="50"><label
                                                for="sagePayShow">SagePay</label></li>
                                        <li><input type="checkbox" id="skrillShow" name="skrillShow"
                                                class="checkBoxValue" value="50"><label
                                                for="skrillShow">Skrill</label></li>
                                        <li><input type="checkbox" id="squareShow" name="squareShow"
                                                class="checkBoxValue" value="50"><label
                                                for="squareShow">Square</label></li>
                                        <li><input type="checkbox" id="stripeShow" name="stripeShow"
                                                class="checkBoxValue" value="50"><label
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
                                    onchange="getSelectValue(), getTotal()">
                                    <!-- add required only if whole section displayed -->
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="0" disabled selected hidden> </option>
                                    <option value="0">- 10</option>
                                    <option value="20">10 - 100</option>
                                    <option value="30">100 - 200</option>
                                    <option value="40">200 - 500</option>
                                    <option value="50">+ 500</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="btn-group ">
                                    <p class="checkboxLabel">Payment methods (Webstore)*</p><br>
                                    <!-- add required only if whole section displayed -->
                                    <button data-toggle="dropdown" class="btn dropdown-toggle"
                                        data-placeholder="Please select">Please select <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu noclose" onchange="getTotal()">
                                        <li><input type="checkbox" id="2CheckoutStore" name="2CheckoutStore"
                                                class="checkBoxValue" value="50"><label
                                                for="2CheckoutStore">2Checkout</label></li>
                                        <li><input type="checkbox" id="authorizeStore" name="authorizeStore"
                                                class="checkBoxValue" value="50"><label
                                                for="authorizeStore">Authorize.Net</label></li>
                                        <li><input type="checkbox" id="amazonStore" name="amazonStore"
                                                class="checkBoxValue" value="50"><label for="amazonStore">Amazon
                                                Payment</label></li>
                                        <li><input type="checkbox" id="bankWireStore" name="bankWireStore"
                                                class="checkBoxValue" value="50"><label for="bankWireStore">Bank
                                                Wire</label></li>
                                        <li><input type="checkbox" id="checkStore" name="checkStore"
                                                class="checkBoxValue" value="50"><label
                                                for="checkStore">Check</label></li>
                                        <li><input type="checkbox" id="creditCardPPStore" name="creditCardPPStore"
                                                class="checkBoxValue" value="50"><label
                                                for="creditCardPPStore">Credit Card (Through Paypal)</label></li>
                                        <li><input type="checkbox" id="creditCardBkStore" name="creditCardBkStore"
                                                class="checkBoxValue" value="50"><label
                                                for="creditCardBkStore">Credit Card (Through Bank Api)</label></li>
                                        <li><input type="checkbox" id="paypalStore" name="paypalStore"
                                                class="checkBoxValue" value="50"><label
                                                for="paypalStore">Paypal</label></li>
                                        <li><input type="checkbox" id="paypalProStore" name="paypalProStore"
                                                class="checkBoxValue" value="50"><label for="paypalProStore">PayPal
                                                Payments Pro</label></li>
                                        <li><input type="checkbox" id="sagePayStore" name="sagePayStore"
                                                class="checkBoxValue" value="50"><label
                                                for="sagePayStore">SagePay</label></li>
                                        <li><input type="checkbox" id="skrillStore" name="skrillStore"
                                                class="checkBoxValue" value="50"><label
                                                for="skrillStore">Skrill</label></li>
                                        <li><input type="checkbox" id="squareStore" name="squareStore"
                                                class="checkBoxValue" value="50"><label
                                                for="squareStore">Square</label></li>
                                        <li><input type="checkbox" id="stripeStore" name="stripeStore"
                                                class="checkBoxValue" value="50"><label
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
                                <label for="project">Projet name*</label>
                                <input type="text" class="form-control" id="project" name="project" maxlength="40"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="company">Company Name</label>
                                <input type="text" class="form-control" id="company" name="company" maxlength="100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name*</label>
                                <input type="text" class="form-control" id="firstName" name="firstName"
                                    maxlength="40" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name*</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" maxlength="40"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="contactEmail">Email*</label>
                                <input type="text" class="form-control" id="contactEmail" name="contactEmail"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone Number*</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <!-- FIXME ; rajouter un pattern avec une REGEX -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="postalAddress">Address*</label>
                                <input type="text" class="form-control" id="postalAddress" name="postalAddress" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="postCode">Post Code*</label>
                                <input type="text" class="form-control" id="postCode" name="postCode" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="city">City*</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="country">Country*</label>
                                <select id="country" name="country" class="form-control" required>
                                    <option disabled hidden value="">&nbsp;</option>
                                    <option label="Please choose..." value="" disabled selected hidden> </option>
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
                    </section>
                </form>
            </div>
            <div class="col-md-3 fade-up quotePrice">
                <div class="pricing_item">
                    <div class="pricing_top_border"></div>
                    <div class="pricing_head p-top-30 p-bottom-100 text-center ">
                        <h3 class="text-uppercase">How much?</h3>
                    </div>
                    <div class="pricing_price_border text-center bounce-in">
                        <div class="pricing_price">
                            <h3 id="text-customQuote"> 0 €</h3>
                        </div>
                    </div>
                    <div class="pricing_body bg-white p-top-110 p-bottom-60">
                        <p class="priceRecap">After submiting this <strong>custom quote</strong> you will
                            automatically recieve a detailled recap to the email address you provided.</p>
                        <div class="text-center">
                            <label><input type="checkbox" form="customQuoteForm" id="acceptTerms" required> <small>I accept <a href="index.php?action=terms">Terms & Conditions</a> and <a href="index.php?action=privacy">Privacy Policy.</a></small></label><br>
                            <button type="submit" form="customQuoteForm" class="btn btn-princing">I want this!</button>
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





<script>
    let grandTotal = "";
    let totalInput = "";
    let totalCheckboxe = "";

    //get the total of all SELECT inputs
    function getSelectValue() {
        let siteType = parseInt(document.getElementById("siteType").value);
        let design = parseInt(document.getElementById("design").value);
        let writingContent = parseInt(document.getElementById("writingContent").value);
        let visualContent = parseInt(document.getElementById("visualContent").value);
        let maintenance = parseInt(document.getElementById("maintenance").value);
        let host = parseInt(document.getElementById("host").value);
        let deadlineSelect = parseInt(document.getElementById("deadlineSelect").value);
        let pageNb = parseInt(document.getElementById("pageNb").value);
        let loginShowcaseYN = parseInt(document.getElementById("loginShowcaseYN").value);
        let productNb = parseInt(document.getElementById("productNb").value);

        totalInput = Number(siteType + design + writingContent + visualContent + maintenance + host + deadlineSelect +
            pageNb + loginShowcaseYN + productNb);
    };

    //get the total of all CHECKBOXES inputs
    $(".checkBoxValue").change(function () {
        let languages = [];
        $("input:checkbox:checked").each(function () {
            languages.push($(this).val());
        });
        totalCheckboxe = 0;
        for (i = 0; i < languages.length; i++) {
            totalCheckboxe = Number(totalCheckboxe += parseInt(languages[i]));
        }
    });

    //display the grand total //FIXME : use Jquerry to factor the function
    function getTotal() {
        grandTotal = totalInput + totalCheckboxe;
        document.getElementById("text-customQuote").innerHTML = grandTotal + " € ";
        document.getElementById("text-customQuoteWidget").innerHTML = grandTotal + " € ";
    }



    //display / hide Payment options for Showcase website
    function myFunction2() {
        let paymentShowcaseYN = document.getElementById("paymentShowcaseYN").value;
        if (paymentShowcaseYN == "Yes") {
            document.getElementById("paymentMethShowcase").style.display = "block";
            //document.getElementById("paymentMethShowcase").required = true; //FIXME : ne marche pas ? https://www.w3schools.com/jsref/prop_checkbox_required.asp

        } else if (paymentShowcaseYN == "No") {
            document.getElementById("paymentMethShowcase").style.display = "none";
        }
    }

    //display / hide calendar for deadline
    function myFunction3() {
        let deadlineSelect = document.getElementById("deadlineSelect").value;
        if (deadlineSelect == "No") {
            document.getElementById("deadlineBlock").style.display = "none";
        } else {
            document.getElementById("deadlineBlock").style.display = "block";
        }
    }


    /*function myFunction3() {
        let deadlineYN = document.getElementById("deadlineYN").value;
        if (deadlineYN == "Yes") {
            document.getElementById("deadlineBlock").style.display = "block";
        } else if (deadlineYN == "No") {
            document.getElementById("deadlineBlock").style.display = "none";
        }
    }*/

    //display / hide extensions list for Showcase website
    function myFunction5() {
        let domainYN = document.getElementById("domainYN").value;
        if (domainYN == "Yes") {
            document.getElementById("extensionBlock").style.display = "block";
        } else if (domainYN == "No") {
            document.getElementById("extensionBlock").style.display = "none";
        }
    }

    //display / hide Showcase website / Webstore sections
    function myFunction4() {
        let siteTypeDisplay = document.getElementById("siteType")
            .value; //FIXME, pourquoi ça ne marche pas avec innerHTML ? tester en Jquery?
        if (siteTypeDisplay == 500) {
            document.getElementById("showcaseSection").style.display = "block";
            document.getElementById("webstoreSection").style.display = "none";
        } else if (siteTypeDisplay == 800) {
            document.getElementById("showcaseSection").style.display = "none";
            document.getElementById("webstoreSection").style.display = "block";
        } else if (siteTypeDisplay == 1000) {
            document.getElementById("showcaseSection").style.display = "block";
            document.getElementById("webstoreSection").style.display = "block";
        } else {
            document.getElementById("showcaseSection").style.display = "none";
            document.getElementById("webstoreSection").style.display = "none";
        }
    }


    //display / hide the customQuote Price widget
    $(window).scroll(function() {
        if ($(this).scrollTop()>1800)
        {
            $('#customQuoteWidget').fadeOut("fast");
        }
        else
        {
        $('#customQuoteWidget').fadeIn("fast");
        }
    });


</script>

<?php
$content = ob_get_clean();
require('templates/base.php');
?>