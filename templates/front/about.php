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
        <div class="row fade-up opinionBlock">
        </div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>
<script src="./public/js/ajax.js"></script>
<script src="./public/js/opinions.js"></script>

