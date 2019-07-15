<?php
$title = 'Portfolio - Look what I did';
ob_start();
?>
    <script>
    jQuery(document).ready(function($){
    'use strict';
        jQuery('body').backstretch([
            "./public/images/bg/bg4.jpg",
        ], {duration: 5000, fade: 500});

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
                            <h5>Webagency - Agence Web</h5>
                            <div class="overlay">
                            </div></a>
                        </div>
                    </li>
                    <li class="portfolio-item joomla website isotope-item">
                        <div class="item-inner">
                            <a data-toggle="modal" data-target="#strasbourg"><img src="./public/images/portfolio/Dev/strasbourg/strasbourgPrev.jpg" alt="Image de présentation Office de Tourisme de Strasbourg">
                            <h5>Ville de Strasbourg</h5>
                            <div class="overlay">
                            </div></a>
                        </div>
                    </li>
                    <li class="portfolio-item website isotope-item">
                        <div class="item-inner">
                            <a data-toggle="modal" data-target="#bicloo"><img src="./public/images/portfolio/Dev/bicloo/biclooPrev.jpg" alt="Image de présentation Bicloo">
                            <h5>Bicloo - Réservation de vélos</h5>
                            <div class="overlay">
                            </div></a>
                        </div>
                    </li>
                    <li class="portfolio-item joomla blog apps isotope-item">
                        <div class="item-inner">
                            <a data-toggle="modal" data-target="#forteroche"><img src="./public/images/portfolio/Dev/forteroche/forterochePrev.jpg" alt="Image de présentation Jean Forteroche">
                            <h5>Jean Forteroche - Ecrivain</h5>
                            <div class="overlay">
                            </div></a>
                        </div>
                    </li>
                    <li class="portfolio-item joomla webstore isotope-item">
                        <div class="item-inner">
                            <a data-toggle="modal" data-target="#qchc"><img src="./public/images/portfolio/Dev/qchc/qchcPrev.jpg" alt="Image de présentation Quality Control records">
                            <h5>Quality Control - Label</h5>
                            <div class="overlay">
                            </div></a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- FIXME : trouver un moyen de factoriser les modales ? ou les mettre dans des fichiers a part
    + revoir les alt=""-->

    <div class="modal fade" id="webAgency" tabindex="-1" role="dialog" aria-labelledby="myLargeModalWebAgency" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="modal-title">WEBAGENCY</h2>
                    <p class="modal-lead">Refonte d'un site vitrine - Intégration d'une maquette</p>
                </div>
                <hr>
                <div class="modal-body">
                    <div class="row">
                        <div class=" col-md-6 rightColPortfolio">
                            <img class="folioItemPic"src="./public/images/portfolio/Dev/webAgency/webAgency1.jpg" alt="Header Webagency">
                            <img class="folioItemPic"src="./public/images/portfolio/Dev/webAgency/webAgency3.jpg" alt="Nos Projets Webagency" ><br>
                        </div>
                        <div class="col-md-6 leftColPortfolio">
                            <div class="widget categories">
                                <h3 class="widget-title">Fonctionalités principales</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul>
                                            <li><span class="fas fa-chevron-right"></span> Slider</li>
                                            <li><span class="fas fa-chevron-right"></span> Portofolio interactif</li>
                                            <li><span class="fas fa-chevron-right"></span> Affichage par catégorie</li>
                                            <li><span class="fas fa-chevron-right"></span> Intégration Google Map</li>
                                            <li><span class="fas fa-chevron-right"></span> Site responsive</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget tags">
                                <h3 class="widget-title">Client</h3>
                                <p>Agence Web - <strong>Webagency</strong></p>
                                <p>Client fictif dans le cadre du projet 1 de la formation Developpeur Web Junior OPENCLASSROOMS</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-6 text-center">
                            <a href="http://ocr.straightandalert.com//WebAgency/WebAgency.html#"><span class="far fa-eye"></span> Voir le site</a>
                        </div>
                        <div class=" col-md-6 text-center">
                            <a href="index.php?action=portfolioItem&item=webagency"><span class="far fa-question-circle"></span> Cahier des charges</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="strasbourg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalstrasbourg" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h2 class="modal-title">OFFICE DE TOURISME DE STRASBOURG</h2>
                        <p class="modal-lead">Création d'un site Wordpress</p>
                    </div>
                    <hr>
                    <div class="modal-body">
                        <div class="row">
                            <div class=" col-md-6 rightColPortfolio">
                                <img class="folioItemPic"src="./public/images/portfolio/Dev/strasbourg/strasbourg1.jpg" alt="Header Strasbourg">
                                <img class="folioItemPic"src="./public/images/portfolio/Dev/strasbourg/strasbourg2.jpg" alt="Accueil Strasbourg" ><br>
                            </div>
                            <div class="col-md-6 leftColPortfolio">
                                <div class="widget categories">
                                    <h3 class="widget-title">Fonctionalités principales</h3>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul>
                                                <li><span class="fas fa-chevron-right"></span> Espace administration</li>
                                                <li><span class="fas fa-chevron-right"></span> Blog</li>
                                                <li><span class="fas fa-chevron-right"></span> Agenda interactif</li>
                                                <li><span class="fas fa-chevron-right"></span> Réservation de billets</li>
                                                <li><span class="fas fa-chevron-right"></span> Intégration Google Map</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget tags">
                                    <h3 class="widget-title">Client</h3>
                                    <p>Office de tourisme -  <strong>Ville de Strasbourg</strong></p>
                                    <p>Client fictif dans le cadre du projet 2 de la formation Developpeur Web Junior OPENCLASSROOMS</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-6 text-center">
                                <a href="http://ocr.straightandalert.com/Office-Strasbourg/"><span class="far fa-eye"></span> Voir le site</a>
                            </div>
                            <div class=" col-md-6 text-center">
                                <a href="index.php?action=portfolioItem&item=strasbourg"><span class="far fa-question-circle"></span> Cahier des charges</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="bicloo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalbicloo"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h2 class="modal-title">BICLOO - RESERVATION DE VÉLOS</h2>
                        <p class="modal-lead">Création d'une application web de réservation de vélos via API</p>
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
                                    <h3 class="widget-title">Fonctionalités principales</h3>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul>
                                                <li><span class="fas fa-chevron-right"></span> Slider</li>
                                                <li><span class="fas fa-chevron-right"></span> Réservation en ligne</li>
                                                <li><span class="fas fa-chevron-right"></span> Signature via Canvas</li>
                                                <li><span class="fas fa-chevron-right"></span> Compte à rebour dynamique</li>
                                                <li><span class="fas fa-chevron-right"></span> Intégration Open Street Map</li>
                                                <li><span class="fas fa-chevron-right"></span> Génération de carte Leaflet</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget tags">
                                    <h3 class="widget-title">Client</h3>
                                    <p>Bicloo -  <strong>Ville de Nantes</strong></p>
                                    <p>Client fictif dans le cadre du projet 3 de la formation Developpeur Web Junior OPENCLASSROOMS</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-6 text-center">
                                <a href="http://ocr.straightandalert.com/LocationVelo"><span
                                        class="far fa-eye"></span> Voir le site</a>
                            </div>
                            <div class=" col-md-6 text-center">
                                <a href="index.php?action=portfolioItem&item=bicloo"><span class="far fa-question-circle"></span>
                                    Cahier des charges</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="forteroche" tabindex="-1" role="dialog" aria-labelledby="myLargeModalforteroche"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h2 class="modal-title">JEAN FORTEROCHE - BLOG D'ÉCRIVAIN</h2>
                        <p class="modal-lead">Création d'un moteur de blog type Wordpress</p>
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
                                    <h3 class="widget-title">Fonctionalités principales</h3>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul>
                                                <li><span class="fas fa-chevron-right"></span> Blog</li>
                                                <li><span class="fas fa-chevron-right"></span> Publication / Edition d'articles</li>
                                                <li><span class="fas fa-chevron-right"></span> Publication / Edition de commentaires</li>
                                                <li><span class="fas fa-chevron-right"></span> Modération</li>
                                                <li><span class="fas fa-chevron-right"></span> Gestion des utilisateurs</li>
                                                <li><span class="fas fa-chevron-right"></span> Statistiques</li>
                                                <li><span class="fas fa-chevron-right"></span> Intéraction avec une base de données</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget tags">
                                    <h3 class="widget-title">Client</h3>
                                    <p>Ecrivain -  <strong>Jean Forteroche</strong></p>
                                    <p>Client fictif dans le cadre du projet 4 de la formation Developpeur Web Junior OPENCLASSROOMS</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-6 text-center">
                                <a href="http://ocr.straightandalert.com/jean-forteroche/"><span
                                        class="far fa-eye"></span> Voir le site</a>
                            </div>
                            <div class=" col-md-6 text-center">
                                <a href="index.php?action=portfolioItem&item=forteroche"><span class="far fa-question-circle"></span>
                                    Cahier des charges</a>
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
