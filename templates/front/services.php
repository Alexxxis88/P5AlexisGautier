<?php
$title = 'Services - What can I do?';
ob_start();
?>
<script>
    jQuery(document).ready(function ($) {
        'use strict';
        jQuery('body').backstretch([
            "./public/images/bg/bg2.jpg"
        ]);
    });
</script>
<script src="./public/js/ajax.js"></script>

<section id="single-page-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center gap fade-down section-heading">
                                <h2 class="main-title">WEB DEVELOPMENT IS WHAT I DO</h2>
                                <hr>
                                <p>WEBSITE | WEBSTORE | BLOG</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="content-wrapper">
    <!-- FIXME : duplicate content entre page d'accueil et page Services-->

    <section id="services" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fa fas fa-laptop-code fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Website</h3>
                            <p>Need a brand new website or to revamp your old one ? Either for the brand you just
                                started, your company, local association or anything else : I can offer you the kind
                                of services you need. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fas fa-cart-arrow-down fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Webstore</h3>
                            <p>You want to sell your products online ? Only a few items or a very large catalogue,
                                it doesn't make a difference. I will create the webstore that suits your needs and
                                help you boost these sales!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fas fa-book-reader fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Blog</h3>
                            <p>Food enthusiast, sports maniac, music lover ? Yes, there are millions of people who
                                share your passion. I can develop the blog you dream of for all kinds of topics.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fas fa-question fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Consulting</h3>
                            <p>You have a business or personal idea but are lost with what solution you need?
                                I am here to help you make the right decision that will lead you to success!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fas fa-pencil-ruler fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Webdesign</h3>
                            <p>No idea about how you want your website to look like? I can help you with the whole
                                design, creating a logo or tips about new trends in webdesign.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fas fa-search-dollar fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">SEO Services</h3>
                            <p>I will make sure to enhance your website, webstore or blog with the right SEO
                                optimisations so it shows up in search engines' top results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">My Skills</h2>
                    <hr>
                    <p>My day to day tools to create everything you can think about</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- FIXME : trouver un moyen de factoriser l'affichage progressif des bars, voir fonction dans main.js-->
                <div class="col-md-3">
                    <div class="tile-progress tile-red bounce-in">
                        <div class="tile-header">
                            <h3>HTML5</h3>
                            <span>The absolute basic, this is how your website in structured</span>
                        </div>
                        <div class="tile-progressbar">
                            <div id="myBarHTML"></div>
                        </div>
                        <div class="tile-footer">
                            <h4>
                                <span class="pct-counter counter">90</span>%
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tile-progress tile-cyan bounce-in">
                        <div class="tile-header">
                            <h3>CSS3</h3>
                            <span>How about the look ? CSS3 handles that like no one else</span>
                        </div>
                        <div class="tile-progressbar">
                            <div id="myBarCSS"></div>
                        </div>
                        <div class="tile-footer">
                            <h4>
                                <span class="pct-counter counter">85</span>%
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tile-progress tile-primary bounce-in">
                        <div class="tile-header">
                            <h3>Javascript</h3>
                            <span>Wow, everything is interactive. Say thanks to Javascript</span>
                        </div>
                        <div class="tile-progressbar">
                            <div id="myBarJS"></div>
                        </div>
                        <div class="tile-footer">
                            <h4>
                                <span class="pct-counter counter">70</span>%
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tile-progress tile-pink bounce-in">
                        <div class="tile-header">
                            <h3>PHP/MYSLQ</h3>
                            <span>Storing and managing datas? This power couple does the job</span>
                        </div>
                        <div class="tile-progressbar">
                            <div id="myBarPHP"></div>
                        </div>
                        <div class="tile-footer">
                            <h4>
                                <span class="pct-counter counter">60</span>%
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="row">
                <!-- FIXME : trouver un moyen de factoriser l'affichage progressif des bars, voir fonction dans main.js-->
                <div class="col-md-3">
                    <div class="tile-progress tile-blue bounce-in">
                        <div class="tile-header">
                            <h3>Wordpress</h3>
                            <span>EVERYTHING you can think about can be made with it</span>
                        </div>
                        <div class="tile-progressbar">
                            <div id="myBarWP"></div>
                        </div>
                        <div class="tile-footer">
                            <h4>
                                <span class="pct-counter counter">65</span>%
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tile-progress tile-purple bounce-in">
                        <div class="tile-header">
                            <h3>Bootstrap</h3>
                            <span>Helps me creating your beautiful design in a blink of an eye</span>
                        </div>
                        <div class="tile-progressbar">
                            <div id="myBarBS"></div>
                        </div>
                        <div class="tile-footer">
                            <h4>
                                <span class="pct-counter counter">55</span>%
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tile-progress tile-lightblue bounce-in">
                        <div class="tile-header">
                            <h3>Photoshop</h3>
                            <span>I use #1 graphic design software to beautify your project</span>
                        </div>
                        <div class="tile-progressbar">
                            <div id="myBarPS"></div>
                        </div>
                        <div class="tile-footer">
                            <h4>
                                <span class="pct-counter counter">80</span>%
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tile-progress tile-orange bounce-in">
                        <div class="tile-header">
                            <h3>Illustrator</h3>
                            <span>The best tool and a great idea : all I need to create your logo</span>
                        </div>
                        <div class="tile-progressbar">
                            <div id="myBarAI"></div>
                        </div>
                        <div class="tile-footer">
                            <h4>
                                <span class="pct-counter counter">70</span>%
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="white">
        <div class="container">
            <div class="center fade-down section-heading">
                <h2 class="main-title">So, How Much?</h2>
                <hr>
                <p>I have several packs that should suit all your needs.
                    <bR>Otherwise, ask for a custom quote!</p>
            </div>
            <!--Pricing Section-->

            <?php  
                $packName1 = $allPacks[0]['packNameServices'];
                $packPrice1 = $allPacks[0]['packPriceServices'];
                $packName2 = $allPacks[1]['packNameServices'];
                $packPrice2 = $allPacks[1]['packPriceServices'];
                $packName3 = $allPacks[2]['packNameServices'];
                $packPrice3 = $allPacks[2]['packPriceServices'];
             ?>

            <script> 


    // // //FIXME a dégager si je zappe AJAX
    // //                

    //                     let url = './src/controller/DisplayController/getJsonServices';
    //                     // let url = './TESTAJAX/my-json.php';

    //             ajaxGet(url, function (data){

    //                     console.log(data);

    //                     // let test = '[{"idPack":"1","packNameServices":"Showcase Website","packPriceServices":"1000"},{"idPack":"2","packNameServices":"Webstore","packPriceServices":"2000"},{"idPack":"3","packNameServices":"Showcase Website + Webstore","packPriceServices":"2500"}]s';
    //                     // let testParse = JSON.parse(test);
    //                     // console.log(testParse);

    //                     let allPacks = JSON.parse(data);
    //                     console.log(allPacks);

    //                     // console.log(allPacks[0].packNameServices) ;
    //                     document.getElementById("pack1Name").innerHTML = allPacks[0].packNameServices;
    //                     document.getElementById("pack1Price").innerHTML = allPacks[0].packPriceServices + ' €';
    //                     // document.getElementById("pack2Name").innerHTML = allPacks[1].packNameServices;
    //                     // document.getElementById("pack2Price").innerHTML = allPacks[1].packPriceServices + ' €';
    //                     // document.getElementById("pack3Name").innerHTML = allPacks[2].packNameServices;
    //                     // document.getElementById("pack3Price").innerHTML = allPacks[2].packPriceServices + ' €';



    //                     // ne fonctionne pas avec une boucle car il faudrait que chacun de mes pack soit un objet ? 
    //                     // allPacks.forEach((pack) => {

    //                     //  console.log(pack.packNameServices) ;  
    //                     // document.getElementById("tesssst").innerHTML = pack.packNameServices;

    //                     // $('.tesssst').text(pack.packNameServices)

    //                     // });
    //                 });
            </script>



            <section id="pricing_body" class="pricing lightbg">
                <div class="container">
                    <div class="row">
                        <div class="main_pricing roomy-100">
                            <div class="col-md-3 col-sm-12 flip-in">
                                <div class="pricing_item">
                                    <div class="pricing_top_border"></div>
                                    <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                        <h3 class="text-uppercase" id="pack1Name"><?= $packName1 ?></h3>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <h3 class="text-white" id="pack1Price"> <?= $packPrice1 ?> €</h3>
                                            <p class="text-white">all included</p>
                                        </div>
                                    </div>
                                    <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                        <ul>
                                            <li><span class="text-princing"></span> <strong>Small to medium</strong>
                                                projects</li>
                                            <li><span class="text-princing"></span> Fast <strong>turnaround</strong>
                                            </li>
                                            <li><span class="text-princing"></span> <strong>Administration</strong>
                                                tools</li>
                                            <li><span class="text-princing"></span> <strong>Responsive</strong>
                                                design</li>
                                            <li><span class="text-princing"></span> <strong>W3C </strong>approved
                                            </li>
                                            <li><span class="text-princing"></span> <strong>User </strong>friendly
                                            </li>
                                            <li><span class="text-princing"></span> <strong>SEO</strong> optimised
                                            </li>
                                            <li><span class="text-princing"></span> Up to <strong>20</strong> pages
                                            </li>
                                        </ul>
                                        <div class="text-center">
                                            <a data-toggle="modal" data-target="#devPack1"
                                                class="btn btn-princing">I want this!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 flip-in">
                                <div class="pricing_item">
                                    <div class="pricing_top_border"></div>
                                    <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                        <h3 class="text-uppercase" id="pack2Name"><?= $packName2 ?></h3>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <h3 class="text-white" id="pack2Price"><?= $packPrice2 ?> €</h3>
                                            <p class="text-white">all included</p>
                                        </div>
                                    </div>
                                    <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                        <ul>
                                            <li><span class="text-princing"></span> <strong>Easy</strong> to use
                                            </li>
                                            <li><span class="text-princing"></span> Fast <strong>turnaround</strong>
                                            </li>
                                            <li><span class="text-princing"></span> <strong>Boost</strong> your
                                                sales</li>
                                            <li><span class="text-princing"></span> Various <strong>payments
                                                    options</strong></li>
                                            <li><span class="text-princing"></span> Configurable
                                                <strong>shipping</strong> system</li>
                                            <li><span class="text-princing"></span> <strong>Administration</strong>
                                                tools</li>
                                            <li><span class="text-princing"></span> <strong>Responsive</strong>
                                                design</li>
                                            <li><span class="text-princing"></span> Up to <strong>200</strong>
                                                products</li>
                                        </ul>
                                        <div class="text-center">
                                            <a data-toggle="modal" data-target="#devPack2"
                                                class="btn btn-princing">I want this!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 flip-in">
                                <div class="pricing_item">
                                    <div class="pricing_top_border"></div>
                                    <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                        <h3 class="text-uppercase" id="pack3Name"><?= $packName3 ?></h3>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <h3 class="text-white" id="pack3Price"><?= $packPrice3 ?> €</h3>
                                            <p class="text-white">all included</p>
                                        </div>
                                    </div>
                                    <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                        <ul>
                                            <li><span class="text-princing"></span> <strong>Website</strong> and
                                                <strong>Webstore</strong> <br>features included</li>
                                            <li><span class="text-princing"></span> Get your brand / compagny <br>a
                                                <strong>full online presence</strong></li>
                                            <li><span class="text-princing"></span> Complete customer
                                            <strong>database</strong></li>
                                            <li><span class="text-princing"></span> Website up to <strong>50</strong> pages
                                            </li>
                                            <li><span class="text-princing"></span> Website up to <strong>500</strong> products
                                            </li>
                                            <li><span class="text-princing"></span> <strong>Stat analysis</strong> tools
                                            </li>
                                            <li><span class="text-princing"></span> Choose between several <strong>designs</strong>
                                            </li>
                                        </ul>
                                        <div class="text-center">
                                            <a data-toggle="modal" data-target="#devPack3"
                                                class="btn btn-princing">I want this!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 flip-in">
                                <div class="pricing_item">
                                    <div class="pricing_top_border"></div>
                                    <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                        <h3 class="text-uppercase">Custom quote</h3>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <h3 class="text-quote">Ask for <br>a quote!</h3>
                                        </div>
                                    </div>
                                    <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                        <ul>
                                            <li><span class="text-princing"></span> <strong>Showcase Website | Webstore | Redesign</strong></li>
                                            <li><span class="text-princing"></span> I can do pretty much <br>
                                            <strong>everything you want</strong><br></li>
                                            <li><span class="text-princing"></span> Various <strong>options
                                            available</strong></li>
                                            <li><span class="text-princing"></span> <strong>Express</strong> treatment available
                                            </li>
                                            <li><span class="text-princing"></span> Use my automatic
                                                <strong>custom quote</strong> system
                                                to get an accurate price to fit with your needs<br></li>
                                            <li><span class="text-princing"></span> I got you covered!</li>
                                        </ul>
                                        <div class="text-center">
                                            <a href="index.php?action=quote" class="btn btn-princing">I want this!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>

<!-- FIXME : pas de conflit d'affichage quand je mets les modal en dehors de <div id="content-wrapper">
+ Essayer de factoriser l'affichage et l'envoi des forms. Peut être en remplacant les termes suivant par des variables :
devPack1
devPack1Label
I want the $XXX pack!
action="index.php?action=sendPackQuote pour que ça envoi le formulaire avec la bonne demande (website / store ou les 2)
ou alors utiliser un input caché (problème WCAG / W3C ?) avec le numéro du pack ?
-->
<div class="modal fade" id="devPack1" tabindex="-1" role="dialog" aria-labelledby="devPack1Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="devPack1Label">I want the Website pack!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <p class="textPackQuote">Submiting this form will send me a quote request along with a submission confirmation to your email address. I will get back to you shortly!</p>
                <form class="contactForm" action="index.php?action=sendPackQuote" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="packName">Pack</label>
                            <input type="text" class="form-control" id="packName" name="packName" value="<?= $packName1 ?>" readonly >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price">Price <small>(in €)</small></label>
                            <input type="text" class="form-control" id="price" name="price" value="<?= $packPrice1 ?>" readonly >
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
                                <!-- add required only if whole section displayed -->
                                <!-- old solution before trying to disable all inputs after changin site type-->
                                <!-- <option disabled hidden value="">&nbsp;</option>
                                <option label="Please choose..." value="0" disabled selected hidden> </option> -->

                                <option label="Please choose..."> </option>
                                <option value="individual">Individual</option>
                                <option value="professional">Professional</option>
                                <option value="association">Association</option>
                                <option value="other">Other</option>
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
                            <input type="text" class="form-control" id="firstName" name="firstName" maxlength="40"
                                required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+[' -]?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+$">
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
                                <!-- add required only if whole section displayed -->
                                <!-- old solution before trying to disable all inputs after changin site type-->
                                <!-- <option disabled hidden value="">&nbsp;</option>
                                <option label="Please choose..." value="0" disabled selected hidden> </option> -->

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
                            <label for="deadline">Deadline*</label>
                            <input type="date" class="form-control" id="deadline" name="deadline" min="<?= date("Y-m-d"); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="attachedFile"><small>Add a mockup(7Mo max)</small></label>
                            <input type="file" class="form-control" id="attachedFile" name="attachedFile" accept=".png, .jpg, .jpeg" >
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
                            <small>No extra requests mentioned in the text area above will be accepted.
                            <br>Need something not included in this pack ? Ask for a <a href="index.php?action=quote"><strong>custom quote</strong></a> !</small>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary formSendBtn" value="Send my request" />
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="devPack2" tabindex="-1" role="dialog" aria-labelledby="devPack2Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="devPack2Label">I want the Webstore pack!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <p class="textPackQuote">Submiting this form will send me a quote request along with a submission confirmation to your email address. I will get back to you shortly!</p>
                <form class="contactForm" action="index.php?action=sendPackQuote" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="packName2">Pack</label>
                            <input type="text" class="form-control" id="packName2" name="packName" value="<?= $packName2 ?>" readonly >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price2">Price <small>(in €)</small></label>
                            <input type="text" class="form-control" id="price2" name="price" value="<?= $packPrice2 ?>" readonly >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="project2">Project name*</label>
                            <input type="text" class="form-control" id="project2" name="project" maxlength="40"
                                required pattern="^[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]{1,}[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]*[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]+$">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="structure2">Structure*</label>
                            <select id="structure2" name="structure" class="form-control" required>
                                <!-- add required only if whole section displayed -->
                                <!-- old solution before trying to disable all inputs after changin site type-->
                                <!-- <option disabled hidden value="">&nbsp;</option>
                                <option label="Please choose..." value="0" disabled selected hidden> </option> -->

                                <option label="Please choose..."> </option>
                                <option value="individual">Individual</option>
                                <option value="professional">Professional</option>
                                <option value="association">Association</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="company2">Company Name</label>
                            <input type="text" class="form-control" id="company2" name="company" maxlength="100" pattern="^[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]{1,}[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]*[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]+$">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="firstName2">First Name*</label>
                            <input type="text" class="form-control" id="firstName2" name="firstName" maxlength="40"
                                required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+[' -]?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+$">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName2">Last Name*</label>
                            <input type="text" class="form-control" id="lastName2" name="lastName" maxlength="40"
                                required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+[' -]?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+$">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="contactEmail2">Email*</label>
                            <input type="email" class="form-control" id="contactEmail2" name="contactEmail" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone2">Phone Number</label>
                            <input type="tel" class="form-control" id="phone2" name="phone" pattern="[0-9\.+_ -]*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="postalAddress2">Address*</label>
                            <input type="text" class="form-control" id="postalAddress2" name="postalAddress" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9,:;/\(\)'&+%\._ -]+$">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="postCode2">Post Code*</label>
                            <input type="text" class="form-control" id="postCode2" name="postCode" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9,:;/\(\)'&+%\._ -]+$">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="city2">City*</label>
                            <input type="text" class="form-control" id="city2" name="city" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9,:;/\(\)'&+%\._ -]+$">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country2">Country*</label>
                            <select id="country2" name="country" class="form-control" required>
                                <!-- add required only if whole section displayed -->
                                <!-- old solution before trying to disable all inputs after changin site type-->
                                <!-- <option disabled hidden value="">&nbsp;</option>
                                <option label="Please choose..." value="0" disabled selected hidden> </option> -->

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
                            <label for="deadline2">Deadline*</label>
                            <input type="date" class="form-control" id="deadline2" name="deadline" min="<?= date("Y-m-d"); ?>" required >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="attachedFile"><small>Add a mockup(7Mo max)</small></label>
                            <input type="file" class="form-control" id="attachedFile" name="attachedFile" accept=".png, .jpg, .jpeg" >
                            <small>Format .pgn, .jpg, .jpeg</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="messageContent2" class="col-form-label">Describe your project*</label>
                            <textarea class="form-control" rows="5" id="messageContent2"
                                name="messageContent" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <small>No extra requests mentioned in the text area above will be accepted.
                            <br>Need something not included in this pack ? Ask for a <a href="index.php?action=quote"><strong>custom quote</strong></a> !</small>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary formSendBtn" value="Send my request" />
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="devPack3" tabindex="-1" role="dialog" aria-labelledby="devPack3Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="devPack3Label">I want the Website + Webstore pack!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <p class="textPackQuote">Submiting this form will send me a quote request along with a submission confirmation to your email address. I will get back to you shortly!</p>
                <form class="contactForm" action="index.php?action=sendPackQuote" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="packName3">Pack</label>
                            <input type="text" class="form-control" id="packName3" name="packName" value="<?= $packName3 ?>" readonly >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price3">Price <small>(in €)</small></label>
                            <input type="text" class="form-control" id="price3" name="price" value="<?= $packPrice3 ?>" readonly >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="project3">Project name*</label>
                            <input type="text" class="form-control" id="project3" name="project" maxlength="40"
                                required pattern="^[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]{1,}[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]*[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]+$">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="structure3">Structure*</label>
                            <select id="structure3" name="structure" class="form-control" required>
                                <!-- add required only if whole section displayed -->
                                <!-- old solution before trying to disable all inputs after changin site type-->
                                <!-- <option disabled hidden value="">&nbsp;</option>
                                <option label="Please choose..." value="0" disabled selected hidden> </option> -->

                                <option label="Please choose..."> </option>
                                <option value="individual">Individual</option>
                                <option value="professional">Professional</option>
                                <option value="association">Association</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="company3">Company Name</label>
                            <input type="text" class="form-control" id="company3" name="company" maxlength="100" pattern="^[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]{1,}[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]*[' -]?[a-z0-9A-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ'&+%_-]+$">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="firstName3">First Name*</label>
                            <input type="text" class="form-control" id="firstName3" name="firstName" maxlength="40"
                                required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+[' -]?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+$">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName3">Last Name*</label>
                            <input type="text" class="form-control" id="lastName3" name="lastName" maxlength="40"
                                required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+[' -]?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+$">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="contactEmail3">Email*</label>
                            <input type="email" class="form-control" id="contactEmail3" name="contactEmail" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone3">Phone Number</label>
                            <input type="tel" class="form-control" id="phone3" name="phone" pattern="[0-9\.+_ -]*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="postalAddress3">Address*</label>
                            <input type="text" class="form-control" id="postalAddress3" name="postalAddress" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9,:;/\(\)'&+%\._ -]+$">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="postCode3">Post Code*</label>
                            <input type="text" class="form-control" id="postCode3" name="postCode" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9,:;/\(\)'&+%\._ -]+$">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="city3">City*</label>
                            <input type="text" class="form-control" id="city3" name="city" required pattern="^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9,:;/\(\)'&+%\._ -]+$">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country3">Country*</label>
                            <select id="country3" name="country" class="form-control" required>
                                <!-- add required only if whole section displayed -->
                                <!-- old solution before trying to disable all inputs after changin site type-->
                                <!-- <option disabled hidden value="">&nbsp;</option>
                                <option label="Please choose..." value="0" disabled selected hidden> </option> -->

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
                            <label for="deadline3">Deadline*</label>
                            <input type="date" class="form-control" id="deadline3" name="deadline" min="<?= date("Y-m-d"); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="attachedFile3"><small>Add a mockup(7Mo max)</small></label>
                            <input type="file" class="form-control" id="attachedFile3" name="attachedFile" accept=".png, .jpg, .jpeg" >
                            <small>Format .pgn, .jpg, .jpeg</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="messageContent3" class="col-form-label">Describe your project*</label>
                            <textarea class="form-control" rows="5" id="messageContent3"
                                name="messageContent" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <small>No extra requests mentioned in the text area above will be accepted.
                            <br>Need something not included in this pack ? Ask for a <a href="index.php?action=quote"><strong>custom quote</strong></a> !</small>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary formSendBtn" value="Send my request" />
                </form>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>

<!-- Needs to stay here and not in base.php or functions included in main.js otherwise gives 567 console JS errors on quote.php --->
<script src="./public/js/services.js"></script>