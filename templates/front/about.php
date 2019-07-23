<?php
$title = 'About - Who Am I?';
ob_start();
?>
<div id="content-wrapper">
    <section id="about-me" class="white noHeaderImg">
        <div class="row">
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">About me</h2>
                <hr>
                <p>Breaking down the walls</p>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <div class="row" id="aboutMeText">
                    <div class="col-md-3">
                            <div class="center team-member">
                                <img class="img-responsive img-thumbnail bounce-in" src="./public/images/about/alexis.jpg" alt="Portrait Alexis Gautier">
                                <div class="team-content fade-up">
                                    <h3>Alexis Gautier<br><small class="role muted">Web Developer</small></h3>
                                    <p>Nantes - France</p>
                                    <div class="flagsBlock">
                                        <p><img src="./public/images/about/frenchFlag.png" alt="French Flag"> Je parle français</p>
                                        <p><img src="./public/images/about/englishFlag.png" alt="English Flag"> I speak english</p>
                                        <p><img src="./public/images/about/spanishFlag.png" alt="Spanish Flag"> Hablo español</p>
                                    </div>
                                    <a class="btn btn-social btn-email" href="mailto:alexisxgautier@gmail.com"><i class="far fa-envelope"></i></a> <a class="btn btn-social btn-facebook" href="#"><i class="fab fa-facebook-f"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fab fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                <div class="col-md-9 fade-up bioText">
                <p> My name is Alexis, I am 31 years old and I am Web Developer since September 2019. I was fortunate to have a path outside the box that allowed me to forge strong skills of adaptability and responsiveness, allowing me to apprehend each new project with serenity and determination. I can be honest when I need to and reconcile when necessary.</p>

                <p>After a normal schooling and a scientific baccalaureate, I didn't follow the classic path most people do. My aspirations were different. After a few unsuccessful attempts to study different subjects, what I really wanted was obvious : follow my instinct and create my music label as I have been dreaming for years. It was the beginning of the STRAIGHT & ALERT Records, Label and Online Shop dedicated to Hardcore / Metal and Punk music, which will last 6 years.</p>

                <p>It was during this period that the taste for learning, as an autodidact, came to me. I have thus touched on various fields, ranging from communication, marketing to the tour booking, but also customer relations, design or the one that got me into digital world: running an online shop </p>

                <p> And that gives me a real advantage: I have been where you're at! I too have been a customer and had to trust a Web Developer, hoping he understands all my expectations. So, I think I can understand yours.</p>

                <p> In 2018 the feeling of having gone around my job and the desire to gain new skills pushed me to call it quits with my label to start learning about Web Developing. 7 months later and a Junior Web Developer degree from Openclassrooms, a new chapter begins.</p>

                <p>Music also runs most of my life: bass, guitar, drums, vocals ... I like to try everything. It gave me the opportunity to tour in Europe, USA and Japan. And I do not forget my first love: Skateboarding.</p>
                </div>
            </div>
            <div class="gap"></div>
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">What they say</h2>
                <hr>
                <p>A few words from people I worked with</p>
            </div>
            <div class="row fade-up">
                <div class="col-md-6">
                    <div class="testimonial-list-item">
                    <img class="pull-left img-responsive quote-author-list" src="./public/images/about/opinion1.jpg" alt="Portrait Mélanie Petiot">
                        <blockquote>
                            <p>An oral fluency that made his defense a pleasant moment to listen to. All the elements could be presented allowing a 360 ° presentation! Project & presentation of very good quality: bravo!</p>
                            <small>Mélanie Petiot | Examiner at <cite title="Source Title">Openclassrooms</cite></small>
                        </blockquote>
                    </div>
                    <div class="testimonial-list-item">
                    <img class="pull-left img-responsive quote-author-list" src="./public/images/about/opinion2.jpg" alt="Portrait Fabien Rahaingomanana">
                        <blockquote>
                            <p>The project is well done, witness the answers to the subsidiary questions as well as the explanations provided throughout the defense.</p>
                            <small>Fabien Rahaingomanana | Examiner at <cite title="Source Title">Openclassrooms</cite></small>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-list-item">
                    <img class="pull-left img-responsive quote-author-list" src="./public/images/about/opinion4.jpg" alt="Portrait Aurélien Antonio">
                        <blockquote>
                            <p>Very good work both at the code level and at the presentation level. Alexis did a great job, going beyond what was asked. Good reflection on the areas of improvement.</p>
                            <small>Aurélien Antonio | Examiner at <cite title="Source Title">Openclassrooms</cite></small>
                        </blockquote>
                    </div>
                    <div class="testimonial-list-item">
                    <img class="pull-left img-responsive quote-author-list" src="./public/images/about/opinion3.jpg" alt="Portrait Cédric Law-Dune">
                        <blockquote>
                            <p>Very good contextualization and explanation of the code. His oral was structured and professional. When to his code, it is optimized and commented.</p>
                            <small>Cédric Law-Dune | Examiner at <cite title="Source Title">Openclassrooms</cite></small>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>