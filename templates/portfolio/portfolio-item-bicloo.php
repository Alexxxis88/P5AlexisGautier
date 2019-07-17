<?php
$title = 'Portfolio - Bicloo ';
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
                                <h3 class="main-title">Bicloo - Reservation de vélos</h3>
                                <div class="entry-meta">
                                    <span><span class="far fa-clock"></span> Avril 2019</span>
                                </div>
                                <p class="lead">Création d'une application web de réservation de vélos via API</p>

                                <p>Pour ce troisième projet il fallait créer une application web permettant la réservation d'un vélo dans une ville donnée selon les informations récupérées en temps réelle despuis l'<strong>API</strong> JCDecaux.
                                <p>Ce projet avait pour but la découverte du langage <strong>JAVASCRIPT</strong> et la <strong>PROGRAMMATION ORIENTEE OBJET</strong>.</p>
                                <hr>
                                <h4>Cahier des charges :</h4>
                                <ul>
                                    <li>Page de type "Single page Application" simulant la réservation de vélos dans une ville</li>
                                    <li>L'utilisateur doit pouvoir réserver un vélo depuis son navigateur </li>
                                    <li>La réservation est alors temporairement enregistrée sur le navigateur du visiteur</li>
                                    <li>Cette application doit afficher une carte avec la liste des stations de location de vélos disponibles dans la ville</li>
                                    <li><strong>Diaporama :</strong>
                                        <ul>
                                            <li>Afficher photos et textes expliquant le fonctionnement de l'application</li>
                                            <li>Défilement automatique</li>
                                            <li>Fonction play/pause/next/preview</li>
                                        </ul><br>
                                    <li><strong>Carte des vélos :</strong>
                                        <ul>
                                            <li>Affiche en temps réel la liste des stations de location de vélos ainsi que leur disponibilité.</li>
                                            <li>La localisation de toutes les stations de vélos est affichée à l’aide de marqueurs.</li>
                                            <li>Les données proviennent de l'API JCDecaux en temps réel</li>
                                            <li>La carte doit être générée dynamiquement via un service de cartographie</li>
                                        </ul><br>
                                    <li><strong>Réservation d'un vélo :</strong>
                                        <ul>
                                            <li> Il doit être possible de réserver un vélo disponible à la station sélectionnée en indiquant son nom et son prénom et signant dans un champ libre implémenté à l’aide de l’API HTML5 Canvas</li>
                                            <li>Les données de réservation seront stockées dans le navigateur à l’aide de l’API Web Storage et affichées en dessous du panneau</li>
                                            <li>L'état de la réservation est affiché avec un décompte dynamique du temps restant avant expiration de la réservation</li>
                                            <li>Une réservation expire automatiquement au bout de 20 minutes et également lorsque le navigateur web se referme</li>
                                            <li>Le nom et le prénom sont toutefois conservés par le navigateur pour préremplir le formulaire de réservation lors d'un prochain usage, même si le navigateur a été fermé</li>
                                            <li>Il ne peut y avoir qu'une réservation à la fois. Si une nouvelle réservation a lieu, elle remplace la précédente</li>
                                        </ul>
                                    </li>
                                </ul>
                                <hr>
                                <h4>Maquette :</h4>
                                <a href="./public/images/portfolio/Dev/bicloo/bicloo1.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/bicloo/bicloo1.jpg" alt="Slider bicloo" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/bicloo/bicloo2.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/bicloo/bicloo2.jpg" alt="Carte et formulaire de réservation bicloo" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/bicloo/bicloo3.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/bicloo/bicloo3.jpg" alt="Timer et affichage de la réservation bicloo" ></a>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-md-8-->
                <aside class="col-sm-4 col-sm-8">
                    <div class="widget tags widget-resp bounce-in">
                        <a href="http://ocr.straightandalert.com/LocationVelo/index.html"><img class="responsiveMockup" src="./public/images/portfolio/Dev/bicloo/biclooResp.png" style="width:250px" alt="Responsive Bicloo réservation de vélo"><br><span class="far fa-eye"></span> Voir le site</a>
                    </div>
                    <div class="widget tags">
                        <h3 class="widget-title">Technologies</h3>
                        <ul class="tag-cloud tech">
                            <li><img src="./public/images/languages/html5.png" alt="HTML5 Logo"> HTML5 </li>
                            <li><img src="./public/images/languages/css3.png" alt="CSS3 Logo"> CSS3 </li>
                            <li><img src="./public/images/languages/bootstrap.png" alt="BOOTSTRAP Logo"> BOOTSTRAP </li>
                            <li><img src="./public/images/languages/javascript.png" alt="JAVASCRIPT Logo"> JAVASCRIPT </li>
                            <li><img src="./public/images/languages/jquery.png" alt="JQUERY Logo"> JQUERY </li>
                        </ul>
                    </div>
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
                </aside>
            </div>
        </div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>