<?php
$title = 'Alexis Gautier - Update Password';
ob_start();

?>
<div class="container fade-up">
    <div class="row">
        <div class="col-md-12">
            <form class="updatePassForm" action="index.php?action=UpdatePass" method="post">
                <h1 class="text-center">Please update your password</h1>
                <hr>
                <div class="form-group">
                    <label for="emailNewPass" class="col-form-label">Your email address</label><br>
                    <input type="text" id="emailNewPass" name="emailNewPass" value="<?= $cookieOrSessionEmail ?>"  readonly="readonly" required/>
                </div>
                <div class="form-group">
                    <label for="currentPass" class="col-form-label">Current password*</label>
                    <input type="password" class="form-control" id="currentPass" name="currentPass" required>
                </div>
                <div class="form-group">
                    <label for="newPass" class="col-form-label">New password*<br><small><em>8 to 20 characters - Letters, numbers or special characters( . - _ ! ?) allowed</em></small></label>
                    <input type="password" class="form-control" id="newPass" name="newPass" required>
                </div>
                <input type="submit" class="btn btn-primary" id="changePassBtn" value="Update your password"/>
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>


