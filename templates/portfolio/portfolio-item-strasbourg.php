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
                                <h3 class="main-title">Tourist Office of Strasbourg</h3>
                                <div class="entry-meta">
                                    <span><span class="far fa-clock"></span> February 2019</span>
                                </div>
                                <p class="lead">Creating a Wordpress Website</p>

                                <p> The second project of my Junior Web Developer training at Openclassrooms led me to create a <strong> wordpress </strong> site for the Strasbourg tourist office. </p>
                                <p> The purpose of this project was to use the CMS <strong> WORDPRESS </strong> to provide a complete and manageable portal site from a secure <strong> back office </strong>. </p>
                                <hr>
                                <h4> Specifications: </h4>
                                <ul>
                                    <li> Creating a child theme adapted to the customer's needs </li>
                                    <li> Layout done without builder to become familiar with the basics of wordpress </li>
                                    <li> Home page with text and links to other pages </li>
                                    <li> Inset showing an overview of the latest news posted by the city </li>
                                    <li> Fixed navigation menu </li>
                                    <li> Search field (non-functional for this project) </li>
                                    <li> News page displaying the list of news items </li>
                                    <li> "More info" page presenting different types of organized activities </li>
                                    <li> "Activities of the month" page presenting an interactive calendar of upcoming activities. The lines must be colored on the flyover. A button "Inscription" on the right of each line of the table opens a form allowing to enter its name. Sending the form has no effect for this exercise. </li>
                                    <li> Contact page displays a contact form (non-functional for this project) </li>
                                    <li> Responsive site </li>
                                    <li> Site optimized for natural referencing (SEO) </li>
                                    <li> Site compliant WCAG 2.0 Level A Accessibility Standards </li>
                                </ul>
                                <hr>
                                <h4>Mockup :</h4>
                                <a href="./public/images/portfolio/Dev/strasbourg/strasbourg1.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/strasbourg/strasbourg1.jpg" alt="Header strasbourg" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/strasbourg/strasbourg2.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/strasbourg/strasbourg2.jpg" alt="Accueil strasbourg" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/strasbourg/strasbourg3.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/strasbourg/strasbourg3.jpg" alt="billets de blog strasbourg" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/strasbourg/strasbourg4.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/strasbourg/strasbourg4.jpg" alt="Formulaire de contact strasbourg" ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-sm-4 col-sm-8">
                    <div class="widget tags widget-resp bounce-in">
                        <a href="http://ocr.straightandalert.com/Office-Strasbourg/"><img class="responsiveMockup" src="./public/images/portfolio/Dev/strasbourg/strasbourgResp.png" style="width:250px" alt="Responsive Office de toursime de Strasbourg"><br><span class="far fa-eye"></span> View website</a>
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
                        <h3 class="widget-title">Main features</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul>
                                    <li><span class="fas fa-chevron-right"></span> Administration pannel</li>
                                    <li><span class="fas fa-chevron-right"></span> Blog</li>
                                    <li><span class="fas fa-chevron-right"></span> Interactive Agenda</li>
                                    <li><span class="fas fa-chevron-right"></span> Tickets reservation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget tags">
                        <h3 class="widget-title">Client</h3>
                        <p>Tourist Office -  <strong>City of Strasbourg</strong></p>
                        <p>Fictitious client as part of Junior Web Developer Training Project 2 OPENCLASSROOMS</p>
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
