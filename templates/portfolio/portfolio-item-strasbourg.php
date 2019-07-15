<?php
$title = 'Portfolio - Ville de Strasbourg ';
ob_start();
?>
<div id="content-wrapper">
    <section id="blog" class="white noHeaderImgPortfolio">
        <div class="container fade-up">
            <div class="gap"></div>
            <div class="row">
                <div class="col-sm-8">
                    <a href="index.php?action=portfolio"><span class="fas fa-undo"></span>&ensp; Back to Portfolio</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="blog">
                        <div class="blog-item">
                            <div class="blog-content">
                                <h3 class="main-title">Office de tourisme de Strasbourg</h3>
                                <div class="entry-meta">
                                    <span><span class="far fa-clock"></span> Février 2019</span>
                                </div>
                                <p class="lead">Création d'un site Wordpress</p>

                                <p>Le deuxième projet de ma formation de Developpeur Web Junior chez Openclassrooms m'a conduit à réaliser une site <strong>wordpress</strong> pour l'office de tourisme de Strasbourg.</p>
                                <p>Le but de ce projet était d'utiliser le CMS <strong>WORDPRESS</strong> afin de proposer un site vitrine complet et administrable depuis un <strong>back office</strong> sécurisé.</p>
                                <hr>
                                <h4>Cahier des charges :</h4>
                                <ul>
                                    <li>Création d'un thème enfant adapté au besoin du client</li>
                                    <li>Mise en page réalisée sans builder afin de se familiariser avec les bases de wordpress</li>
                                    <li>Page d’accueil avec texte et liens vers les autres pages</li>
                                    <li>Encart affichant un aperçu de la dernière actualité postée par la ville</li>
                                    <li>Menu de navigation fixe</li>
                                    <li>Champ de recherche (non fonctionel pour ce projet)</li>
                                    <li>Page « Actualités » affichant la liste des billets d’actualité</li>
                                    <li>Page « Plus d’infos »  présentant différents types d’activités organisées</li>
                                    <li>Page « Activités du mois » présentant un calendrier intéractif des activités à venir. Les lignes doivent se colorer au survol. Un bouton « Inscription » à droite de chaque ligne du tableau ouvre un formulaire permettant de saisir son nom.  L'envoi du formulaire n'a pas d'effet pour cet exercice.</li>
                                    <li>Page « Contact » affiche un formulaire de contact (non fonctionel pour ce projet)</li>
                                    <li>Site responsive</li>
                                    <li>Site optimisé pour le référencement naturel (SEO)</li>
                                    <li>Site conforme aux normes d'accessilité WCAG 2.0 niveau A</li>
                                </ul>
                                <hr>
                                <h4>Maquette :</h4>
                                <a href="./public/images/portfolio/Dev/strasbourg/strasbourg1.jpg" rel="prettyPhoto"><img class="folioItemPic"src="./public/images/portfolio/Dev/strasbourg/strasbourg1.jpg" alt="Header strasbourg" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/strasbourg/strasbourg2.jpg" rel="prettyPhoto"><img class="folioItemPic"src="./public/images/portfolio/Dev/strasbourg/strasbourg2.jpg" alt="Accueil strasbourg" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/strasbourg/strasbourg3.jpg" rel="prettyPhoto"><img class="folioItemPic"src="./public/images/portfolio/Dev/strasbourg/strasbourg3.jpg" alt="billets de blog strasbourg" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/strasbourg/strasbourg4.jpg" rel="prettyPhoto"><img class="folioItemPic"src="./public/images/portfolio/Dev/strasbourg/strasbourg4.jpg" alt="Formulaire de contact strasbourg" ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-sm-4 col-sm-8">
                    <div class="widget tags widget-resp bounce-in">
                        <a href="http://ocr.straightandalert.com/Office-Strasbourg/"><img class="responsiveMockup" src="./public/images/portfolio/Dev/strasbourg/strasbourgResp.png" style="width:250px"alt="Responsive Office de toursime de Strasbourg"><br><span class="far fa-eye"></span> Voir le site</a>
                    </div>
                    <div class="widget tags">
                        <h3 class="widget-title">Technologies</h3>
                        <ul class="tag-cloud tech">
                            <li><img src="./public/images/languages/html5.png" alt="HTML5 Logo"> HTML5 </li>
                            <li><img src="./public/images/languages/css3.png" alt="CSS3 Logo"> CSS3 </li>
                            <li><img src="./public/images/languages/wordpress.png" alt="WORDPRESS Logo"> WORDPRESS </li>
                        </ul>
                    </div>
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
                </aside>
            </div>
            <ul class="pagination pagination-lg">
                <li><a href="#"><span class="fa fa-angle-left"></span></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
            </ul>
        </div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>
