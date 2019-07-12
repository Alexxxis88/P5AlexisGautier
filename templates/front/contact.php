<?php
$title = 'Contact Me';
ob_start();
?>
<div id="content-wrapper">
    <section id="contact" class="white">
        <div class="row">
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">Get in touch</h2>
                <hr>
                <p>Any question? I'm here to help!</p>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 fade-up">
                    <h3>Contact Information</h3>
                    <p><span class="fas fa-home contactIcons"></span> Nantes - France<br/>
                        <span class="fas fa-phone contactIcons"></span> +33 679165242<br/>
                        <span class="fas fa-mobile-alt contactIcons"></span>+33 679165242<br/>
                        <span class="far fa-envelope contactIcons"></span> <a href="mailto:alexisxgautier@gmail.com"> alexisxgautier@gmail.com</a> <br/>
                        <span class="fab fa-skype contactIcons"></span> <a href="#"> alexisxgautier</a> <br/>
                        <span class="fab fa-facebook contactIcons"></span> <a href="https://facebook.com"> Alexis Gautier</a> <br/>
                    </p>
                </div>
                <div class="col-md-8 fade-up">
                    <br>
                    <div id="message"></div>
                    <form method="post" action="sendemail.php" id="contactform">
                        <input type="text" name="name" id="name" placeholder="Name*" required />
                        <input type="text" name="email" id="email" placeholder="Email*" required/>
                        <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                        <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Send a message" required />
                    </form>
                </div>
            </div>
            <div class="gap"></div>
        </div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>