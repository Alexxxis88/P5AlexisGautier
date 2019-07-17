<?php
$title = 'Alexis Gautier - Log In';
ob_start();
?>
<div class="container fade-up">
    <div class="row">
        <div class="col-md-12">
            <form class="logInForm" action="index.php?action=logInCheck" method="post">
                <h1 class="text-center">Please login</h1>
                <hr>
                <div class="form-group">
                    <label for="email" class="col-form-label">Email Address*</label>
                    <input type="email" class="form-control" id="email" name="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$" required>
                </div>
                <div class="form-group">
                    <label for="passLog" class="col-form-label">Password*<br><small><em>8 to 20 characters - Letters, numbers or special characters( . - _ ! ?) allowed</em></small></label>
                    <input type="password" class="form-control" id="passLog" name="pass" pattern="[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ0-9._!?-]{8,20}" required>
                </div>
                <div class="form-group">
                    <label title="cookies will be created when autologin" for="autoLogIn" class="col-form-label">Auto login</label>
                    <input title="cookies will be created when autologin" type="checkbox" id="autoLogIn" name="autoLogIn">
                </div>
                <input type="submit" class="btn btn-primary" name="login" value="Log In"/>
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>


