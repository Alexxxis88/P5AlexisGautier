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
                                    <span><span class="far fa-clock"></span> January 2019</span>
                                </div>
                                <p class="lead">Redesign of a showcase site - Integration of a mockup</p>

                                <p> As part of my Junior Web Developer training at Openclassrooms, I completed this <strong> web integration </strong> project. The mission was to make a complete redesign of a site and propose a static mockup before validation of the design by the end customer. </p>
                                <p> The goal of the project was to discover the basic languages ​​of web development <strong> HTML5 </strong> and <strong> CSS3 </strong>. </p>
                                <hr>
                                <h4> Specifications: </h4>
                                <ul>
                                    <li> The site must fit on a page with a menu that remains visible, at the top of the page, even when one moves in the page </li>
                                    <li> The different expected sections are </li>
                                    <li> A first welcome home screen, very visual </li>
                                    <li> The list of services offered by the agency </li>
                                    <li> Examples of projects already completed </li>
                                    <li> A card with a contact form (we do not ask the form to be working, just display it). </li>
                                    <li> Content writing optimized for SEO (SEO). </li>
                                </ul>
                                <hr>
                                <h4>Mockup :</h4>
                                <a href="./public/images/portfolio/Dev/webAgency/webAgency1.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/webAgency/webAgency1.jpg" alt="Header Webagency" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/webAgency/webAgency2.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/webAgency/webAgency2.jpg" alt="Nos Services Webagency" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/webAgency/webAgency3.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/webAgency/webAgency3.jpg" alt="Nos Projets Webagency" ></a>
                                <hr>
                                <a href="./public/images/portfolio/Dev/webAgency/webAgency4.jpg" ><img class="folioItemPic" src="./public/images/portfolio/Dev/webAgency/webAgency4.jpg" alt="Google map et formulaire de contact Webagency" ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-sm-4 col-sm-8">
                    <div class="widget tags widget-resp bounce-in">
                        <a href="http://ocr.straightandalert.com//WebAgency/WebAgency.html#"><img class="responsiveMockup" src="./public/images/portfolio/Dev/webAgency/webAgencyResp.png" style="width:250px" alt="Responsive WebAgency"><br><span class="far fa-eye"></span> View website</a>
                    </div>
                    <div class="widget tags">
                        <h3 class="widget-title">Technologies</h3>
                        <ul class="tag-cloud tech">
                            <li><img src="./public/images/languages/html5.png" alt="HTML5 Logo"> HTML5 </li>
                            <li><img src="./public/images/languages/css3.png" alt="CSS3 Logo"> CSS3 </li>
                        </ul>
                    </div>
                    <div class="widget categories">
                        <h3 class="widget-title">Main features</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul>
                                    <li><span class="fas fa-chevron-right"></span> Slider</li>
                                    <li><span class="fas fa-chevron-right"></span> Interactive Portfolio</li>
                                    <li><span class="fas fa-chevron-right"></span> View by category</li>
                                    <li><span class="fas fa-chevron-right"></span> Google Map integration</li>
                                    <li><span class="fas fa-chevron-right"></span> Responsive design</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget tags">
                        <h3 class="widget-title">Client</h3>
                        <p>Web Agency - <strong>Webagency</strong></p>
                        <p>Fictitious client as part of Junior Web Developer Training Project 1</p>
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