<?php
$title = 'Portfolio - Look what I did';
ob_start();
?>
<script>
jQuery(document).ready(function($){
'use strict';
    jQuery('body').backstretch([
        "./public/images/bg/bg1.jpg",
    ]);
});
</script>
<section id="single-page-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center gap fade-down section-heading">
                                <h2 class="main-title">From your head to the web</h2>
                                <hr>
                                <p>Here is a selection of projects and web applications I developed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="content-wrapper">
    <section id="portfolio" class="white">
        <div class="container">
            <div class="gap"></div>
            <ul class="portfolio-filter fade-down center">
                <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">All</a></li>
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".website">Website</a></li>
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".webstore">Webstore</a></li>
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".blog">Blog</a></li>
            </ul>
            <ul class="portfolio-items col-3 isotope fade-up">
                <li class="portfolio-item website isotope-item">
                    <div class="item-inner">
                        <a data-toggle="modal" data-target="#webAgency"><img src="./public/images/portfolio/Dev/webAgency/webAgencyPrev.jpg" alt="Image de présentation Webagency">
                        <h3>Webagency - Web Agency</h3>
                        <div class="overlay">
                        </div></a>
                    </div>
                </li>
                <li class="portfolio-item joomla website isotope-item">
                    <div class="item-inner">
                        <a data-toggle="modal" data-target="#strasbourg"><img src="./public/images/portfolio/Dev/strasbourg/strasbourgPrev.jpg" alt="Image de présentation Office de Tourisme de Strasbourg">
                        <h3>Strasbourg City</h3>
                        <div class="overlay">
                        </div></a>
                    </div>
                </li>
                <li class="portfolio-item website isotope-item">
                    <div class="item-inner">
                        <a data-toggle="modal" data-target="#bicloo"><img src="./public/images/portfolio/Dev/bicloo/biclooPrev.jpg" alt="Image de présentation Bicloo">
                        <h3>Bicloo - Bike reservation</h3>
                        <div class="overlay">
                        </div></a>
                    </div>
                </li>
                <li class="portfolio-item joomla blog apps isotope-item">
                    <div class="item-inner">
                        <a data-toggle="modal" data-target="#forteroche"><img src="./public/images/portfolio/Dev/forteroche/forterochePrev.jpg" alt="Image de présentation Jean Forteroche">
                        <h3>Jean Forteroche - Writer</h3>
                        <div class="overlay">
                        </div></a>
                    </div>
                </li>
                <li class="portfolio-item joomla webstore isotope-item">
                    <div class="item-inner">
                        <a data-toggle="modal" data-target="#qchc"><img src="./public/images/portfolio/Dev/qchc/qchcPrev.jpg" alt="Image de présentation Quality Control records">
                        <h3>Quality Control - Label</h3>
                        <div class="overlay">
                        </div></a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</div>

<!-- FIXME : trouver un moyen de factoriser les modales ? ou les mettre dans des fichiers a part-->

<div class="modal fade" id="webAgency" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title">WEBAGENCY</h2>
                <p class="modal-lead">Redesign of a showcase site - Integration of a mockup</p>
            </div>
            <hr>
            <div class="modal-body">
                <div class="row">
                    <div class=" col-md-6 rightColPortfolio">
                        <img class="folioItemPic" src="./public/images/portfolio/Dev/webAgency/webAgency1.jpg" alt="Header Webagency">
                        <img class="folioItemPic" src="./public/images/portfolio/Dev/webAgency/webAgency3.jpg" alt="Nos Projets Webagency" ><br>
                    </div>
                    <div class="col-md-6 leftColPortfolio">
                        <div class="widget categories">
                            <h3 class="widget-title">Main features</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><i class="fas fa-chevron-right"></i> Slider</li>
                                        <li><i class="fas fa-chevron-right"></i> Interactive Portfolio</li>
                                        <li><i class="fas fa-chevron-right"></i> View by category</li>
                                        <li><i class="fas fa-chevron-right"></i> Google Map integration</li>
                                        <li><i class="fas fa-chevron-right"></i> Responsive design</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget tags">
                            <h3 class="widget-title">Client</h3>
                            <p>Web Agency - <strong>Webagency</strong></p>
                            <p>Fictitious client as part of Junior Web Developer Training Project 1</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-6 text-center">
                        <a href="http://ocr.straightandalert.com//WebAgency/WebAgency.html#"><i class="far fa-eye"></i> View website</a>
                    </div>
                    <div class=" col-md-6 text-center">
                        <a href="index.php?action=portfolioItem&item=webagency"><i class="far fa-question-circle"></i> Specifications</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="strasbourg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title">TOURIST OFFICE OF STRASBOURG</h2>
                <p class="modal-lead">Creating a Wordpress Website</p>
            </div>
            <hr>
            <div class="modal-body">
                <div class="row">
                    <div class=" col-md-6 rightColPortfolio">
                        <img class="folioItemPic" src="./public/images/portfolio/Dev/strasbourg/strasbourg1.jpg" alt="Header Strasbourg">
                        <img class="folioItemPic" src="./public/images/portfolio/Dev/strasbourg/strasbourg2.jpg" alt="Accueil Strasbourg" ><br>
                    </div>
                    <div class="col-md-6 leftColPortfolio">
                        <div class="widget categories">
                            <h3 class="widget-title">Main features</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><i class="fas fa-chevron-right"></i> Administration pannel</li>
                                        <li><i class="fas fa-chevron-right"></i> Blog</li>
                                        <li><i class="fas fa-chevron-right"></i> Interactive Agenda</li>
                                        <li><i class="fas fa-chevron-right"></i> Tickets reservation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget tags">
                            <h3 class="widget-title">Client</h3>
                            <p>Tourist Office -  <strong>City of Strasbourg</strong></p>
                            <p>Fictitious client as part of Junior Web Developer Training Project 2 OPENCLASSROOMS</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-6 text-center">
                        <a href="http://ocr.straightandalert.com/Office-Strasbourg/"><i class="far fa-eye"></i> View website</a>
                    </div>
                    <div class=" col-md-6 text-center">
                        <a href="index.php?action=portfolioItem&item=strasbourg"><i class="far fa-question-circle"></i> Specifications</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bicloo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title">BICLOO - BIKE RESERVATION</h2>
                <p class="modal-lead">Creating a bicycle booking web application via API</p>
            </div>
            <hr>
            <div class="modal-body">
                <div class="row">
                    <div class=" col-md-6 rightColPortfolio">
                        <img class="folioItemPic" src="./public/images/portfolio/Dev/bicloo/bicloo1.jpg"
                            alt="Header Bicloo">
                        <img class="folioItemPic" src="./public/images/portfolio/Dev/bicloo/bicloo2.jpg"
                            alt="Carte de réservation Bicloo"><br>
                        <img class="folioItemPic" src="./public/images/portfolio/Dev/bicloo/bicloo3.jpg"
                            alt="Footer Bicloo"><br>
                    </div>
                    <div class="col-md-6 leftColPortfolio">
                        <div class="widget categories">
                            <h3 class="widget-title">Main features</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><i class="fas fa-chevron-right"></i> Slider</li>
                                        <li><i class="fas fa-chevron-right"></i> Online reservation</li>
                                        <li><i class="fas fa-chevron-right"></i> Sign with Canvas</li>
                                        <li><i class="fas fa-chevron-right"></i> Dynamic timer</li>
                                        <li><i class="fas fa-chevron-right"></i> Open Street Map integration</li>
                                        <li><i class="fas fa-chevron-right"></i> Map generated with Leaflet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget tags">
                            <h3 class="widget-title">Client</h3>
                            <p>Bicloo -  <strong>City of Nantes</strong></p>
                            <p>Fictitious client as part of Project 3 of Junior Web Developer Training OPENCLASSROOMS</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-6 text-center">
                        <a href="http://ocr.straightandalert.com/LocationVelo"><i
                                class="far fa-eye"></i> View website</a>
                    </div>
                    <div class=" col-md-6 text-center">
                        <a href="index.php?action=portfolioItem&item=bicloo"><i class="far fa-question-circle"></i>
                            Specifications</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="forteroche" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title">JEAN FORTEROCHE - WRITER'S BLOG</h2>
                <p class="modal-lead">Creating a Worpress alike blog engine</p>
            </div>
            <hr>
            <div class="modal-body">
                <div class="row">
                    <div class=" col-md-6 rightColPortfolio">
                        <img class="folioItemPic" src="./public/images/portfolio/Dev/forteroche/forteroche1.jpg"
                            alt="Accueil Blog Jean Forteroche">
                        <img class="folioItemPic" src="./public/images/portfolio/Dev/forteroche/forteroche2.jpg"
                            alt="Gestion des commentaires Blog Jean Forteroche"><br>
                    </div>
                    <div class="col-md-6 leftColPortfolio">
                        <div class="widget categories">
                            <h3 class="widget-title">Main features</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><i class="fas fa-chevron-right"></i> Blog</li>
                                        <li><i class="fas fa-chevron-right"></i> Publishing / Editing articles</li>
                                        <li><i class="fas fa-chevron-right"></i> Publishing / Editing comments</li>
                                        <li><i class="fas fa-chevron-right"></i> Blog moderation</li>
                                        <li><i class="fas fa-chevron-right"></i> User management</li>
                                        <li><i class="fas fa-chevron-right"></i> Statistics</li>
                                        <li><i class="fas fa-chevron-right"></i> Database integration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget tags">
                            <h3 class="widget-title">Client</h3>
                            <p>Writer -  <strong>Jean Forteroche</strong></p>
                            <p>Fictitious client as part of Project 4 of Junior Web Developer Training OPENCLASSROOMS</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-6 text-center">
                        <a href="http://ocr.straightandalert.com/jean-forteroche/"><i
                                class="far fa-eye"></i> View website</a>
                    </div>
                    <div class=" col-md-6 text-center">
                        <a href="index.php?action=portfolioItem&item=forteroche"><i class="far fa-question-circle"></i>
                            Specifications</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>
