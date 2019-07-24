
    <?php
    $title = 'Alexis Gautier | Web Solutions';
    ob_start();
    ?>
    <script>
    jQuery(document).ready(function($){
    'use strict';
        jQuery('body').backstretch([
            "./public/images/bg/bg1.jpg",
            "./public/images/bg/bg2.jpg",
            "./public/images/bg/bg3.jpg"
        ], {duration: 4000, fade: 500, centeredY: true });

    });
    </script>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center ">
                                    <h3 class="boxed animation animated-item-1 fade-down ">I WILL HELP YOU MAKE AN IMPACT</h3>
                                    <p class="boxed animation animated-item-2 fade-up">My expertise will guide you to success. Without Fail</p>
                                    <br>
                                    <a class="btn btn-md animation bounce-in homeBtn" href="#services">I need more info</a>
                                    <a class="btn btn-md animation bounce-in homeBtn" href="index.php?action=services#pricing">I have a project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="content-wrapper">
        <section id="services" class="white">
            <div class="container">
            <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h3 class="main-title">How can I help you ?</h3>
                            <hr>
                            <div class="gap"></div>
                            <h4 class="serviceSubtitle">You need a Website | Webstore | Blog ?</h4>
                        </div>
                    </div>
                </div>
                <!-- FIXME : duplicate content entre page d'accueil et page Services-->
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fas fa-laptop-code fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Website</h3>
                                <p>Need a brand new website or to revamp your old one ? Either for the brand you just started, your company, local association or anything else : I can offer you the kind of services you need.  </p>
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
                                <p>You want to sell your products online ? Only a few items or a very large catalogue, it doesn't make a difference. I will create the webstore that suits your needs and help you boost these sales!</p>
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
                                <p>Food enthusiast, sports maniac, music lover ? Yes, there are millions of people who share your passion. I can develop the blog you dream of for all kinds of topics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h3 class="main-title">My Skills</h3>
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
                        <div class="tile-progress tile-red bounce-in">
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
                        <div class="tile-progress tile-red bounce-in">
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
                        <div class="tile-progress tile-red bounce-in">
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
                        <div class="tile-progress tile-lightblue bounce-in">
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
                        <div class="tile-progress tile-lightblue bounce-in">
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
                        <div class="tile-progress tile-lightblue bounce-in">
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

        <section id="stats" class="divider-section">
                <div class="gap"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="center bounce-in">
                                <span class="stat-icon"><span class="pe-7s-timer bounce-in"></span></span>
                                <h2><span class="counter">2460</span></h2>
                                <h3>HOURS SAVED</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="center bounce-in">
                                <span class="stat-icon"><span class="pe-7s-light bounce-in"></span></span>
                                <h2><span class="counter">675</span></h2>
                                <h3>FRESH IDEAS</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="center bounce-in">
                                <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                                <h2><span class="counter">100</span> %</h2>
                                <h3>SALES BOOST</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="center bounce-in">
                                <span class="stat-icon"><span class="pe-7s-box2 bounce-in"></span></span>
                                <h2><span class="counter">5</span></h2>
                                <h3>HAPPY CUSTOMERS</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
            </section>
        </div>
        <!-- Needs to stay here and not in base.php or functions included in main.js otherwise gives 567 console JS errors on quote.php -->
        <script src="./public/js/services.js"></script>
        <?php
$content = ob_get_clean();
require('templates/base.php');
?>

