<?php
$title = 'Log In';
ob_start();
?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="logInForm" action="index.php?action=logInCheck" method="post">
                            <h1 class="text-center">Please login</h1>
                            <hr>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email Address*</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="passLog" class="col-form-label">Password*</label>
                                <input type="password" class="form-control" id="passLog" name="pass" required>
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


