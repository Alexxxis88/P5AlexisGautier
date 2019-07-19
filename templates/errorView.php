<?php
$title = 'Error - Something went wrong';
ob_start();
?>
<script>
    jQuery(document).ready(function ($) {
        'use strict';
        jQuery('body').backstretch([
            "./public/images/bg/bg2.jpg"
        ]);
    });
</script>
<section id="main-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="boxed animation animated-item-1 fade-down">Something went wrong</h2>
                                <p class="boxed animation animated-item-2 fade-up">The Page you are looking for doesn't exist or an other error occurred. Here is why : <strong><?= $errorMessage?> </strong></p>
                                <br>
                                <a class="btn btn-md animation bounce-in" href="index.php">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require('templates/base.php');
?>