<?php
$title = 'Portfolio - WebAgency ';
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
                                <h3 class="main-title">Webagency</h3>
                                <div class="entry-meta">
                                    <span><span class="far fa-clock"></span> Janvier 2019</span>
                                </div>
                                <p class="lead">Refonte d'un site vitrine - Intégration d'une maquette</p>

                                <p>Dans le cadre de ma formation de Developpeur Web Junior chez Openclassrooms, j'ai mené à bien ce projet d'<strong>intégration web</strong>. La mission conssitait à faire une refonte complète d'un site et de proposer une maquette statique avant validation du design par le client final.</p>
                                <p>L'objectif du projet était la découverte des langages de base du développement web que sont <strong>HTML5</strong> et <strong>CSS3</strong>.  </p>
                                <hr>
                                <h4>Cahier des charges :</h4>
                                <ul>
                                    <li>le site doit tenir sur une page avec un menu qui reste visible, en haut de la page, même lorsque l'on se déplace dans la page</li>
                                    <li>les différentes sections attendues sont</li>
                                    <li>un premier écran d'accueil de bienvenue, très visuel</li>
                                    <li>la liste des services offerts par l'agence</li>
                                    <li>des exemples de projets déjà réalisés</li>
                                    <li>une carte avec un formulaire de contact (on ne vous demande pas de faire marcher le formulaire, juste de l'afficher).</li>
                                    <li>rédaction de contenu optimisé pour le référencement naturel (SEO).</li>
                                </ul>
                                <hr>
                                <h4>Maquette :</h4>
                                <a href="./public/images/portfolio/Dev/webAgency/webAgency1.jpg" rel="prettyPhoto"><img class="folioItemPic"src="./public/images/portfolio/Dev/webAgency/webAgency1.jpg" alt="Header Webagency" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/webAgency/webAgency2.jpg" rel="prettyPhoto"><img class="folioItemPic"src="./public/images/portfolio/Dev/webAgency/webAgency2.jpg" alt="Nos Services Webagency" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/webAgency/webAgency3.jpg" rel="prettyPhoto"><img class="folioItemPic"src="./public/images/portfolio/Dev/webAgency/webAgency3.jpg" alt="Nos Projets Webagency" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/webAgency/webAgency4.jpg" rel="prettyPhoto"><img class="folioItemPic"src="./public/images/portfolio/Dev/webAgency/webAgency4.jpg" alt="Google map et formulaire de contact Webagency" ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-sm-4 col-sm-8">
                    <div class="widget tags widget-resp bounce-in">
                        <a href="http://ocr.straightandalert.com//WebAgency/WebAgency.html#"><img class="responsiveMockup" src="./public/images/portfolio/Dev/webAgency/webAgencyResp.png" style="width:250px"alt="Responsive WebAgency"><br><span class="far fa-eye"></span> Voir le site</a>
                    </div>
                    <div class="widget tags">
                        <h3 class="widget-title">Technologies</h3>
                        <ul class="tag-cloud tech">
                            <li><img src="./public/images/languages/html5.png" alt="HTML5 Logo"> HTML5 </li>
                            <li><img src="./public/images/languages/css3.png" alt="CSS3 Logo"> CSS3 </li>
                        </ul>
                    </div>
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