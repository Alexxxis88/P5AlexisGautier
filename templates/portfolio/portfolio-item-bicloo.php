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
                    <a href="index.php?action=portfolio"><i class="fas fa-undo"></i>&ensp; Back to Portfolio</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="blog">
                        <div class="blog-item">
                            <div class="blog-content">
                                <h3 class="main-title">Bicloo - Bike reservation</h3>
                                <div class="entry-meta">
                                    <span><i class="far fa-clock"></i> April 2019</span>
                                </div>
                                <p class="lead">Creating a bicycle booking web application via API</p>

                                <p> For this third project it was necessary to create a web application allowing the booking of a bike in a given city according to information retrieved in real time from the <strong> API </strong> JCDecaux.
                                <p> This project aimed at finding the <strong> JAVASCRIPT </strong> language and <strong> OBJECT-ORIENTED PROGRAMMING </strong>. </p>
                                <hr>
                                <h4> Specifications: </h4>
                                <ul>
                                    <li> Single page Application page simulating bicycle booking in a city </li>
                                    <li> The user must be able to book a bike from his browser </li>
                                    <li> The reservation is then temporarily saved on the visitor's browser </li>
                                    <li> This application should display a map with the list of bike rental stations available in the city </li>
                                    <li> <strong> Slideshow: </strong>
                                    <ul>
                                        <li> Show photos and text explaining how the application works </li>
                                        <li> Auto Scroll </li>
                                        <li> Function play / pause / next / preview </li>
                                    </ul>
                                    <li> <strong> Bike Map: </strong>
                                    <ul>
                                        <li> Displays in real time the list of bike rental stations and their availability. </li>
                                        <li> The location of all bike stations is displayed using markers. </li>
                                        <li> Data comes from the real-time JCDecaux API </li>
                                        <li> The map must be generated dynamically via a mapping service </li>
                                    </ul>
                                    </li>
                                    <li> <strong> Booking a bike: </strong>
                                    <ul>
                                        <li> It must be possible to book an available bike at the selected station by entering its name and first name and signing into a free field implemented using the HTML5 Canvas API </li>
                                        <li> Reservation data will be stored in the browser using the Web Storage API and displayed below the panel </li>
                                        <li> The status of the booking is displayed with a dynamic count of the time remaining before the reservation expires </li>
                                        <li> A reservation expires automatically after 20 minutes and also when the web browser closes </li>
                                        <li> The surname and the first name are, however, retained by the browser to pre-fill the booking form for future use, even if the browser has been closed </li>
                                        <li> There can only be one reservation at a time. If a new reservation takes place, it replaces the previous one </li>
                                    </ul>
                                    </li>
                                </ul>
                                <hr>
                                <h4>Mockup :</h4>
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
                        <a href="http://ocr.straightandalert.com/LocationVelo/index.html"><img class="responsiveMockup" src="./public/images/portfolio/Dev/bicloo/biclooResp.png" style="width:250px" alt="Responsive Bicloo réservation de vélo"><br><i class="far fa-eye"></i> View website</a>
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
                </aside>
            </div>
        </div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>