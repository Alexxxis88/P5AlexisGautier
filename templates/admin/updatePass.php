<?php
$title = 'Log In';
ob_start();

//FIXME Needed here because I can't call the $sessionController->checkSession(); in the routeur because there is no action to dislplay the changePassView.php as it's opened in a modal box and not a proper view

//Get user's ID using COOKIE or SESSION
if (isset($_COOKIE['id'])) {
    $cookieOrSessionID = $_COOKIE['id'];
} elseif (isset($_SESSION['id'])) {
        $cookieOrSessionID = $_SESSION['id'];
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?= var_dump($cookieOrSessionID);?>
            <form class="updatePassForm" action="index.php?action=UpdatePass" method="post">
                <div class="form-group">
                    <label for="idNewPass" class="col-form-label">Votre numéro de session</label><br>
                    <input type="text" id="idNewPass" name="idNewPass" value="<?= $cookieOrSessionID ?>"  readonly="readonly" required/>
                </div><br><br>
                <div class="form-group">
                    <label for="currentPass" class="col-form-label">Current password*</label>
                    <input type="password" class="form-control" id="currentPass" name="currentPass" required>
                </div><br><br>
                <div class="form-group">
                    <label for="newPass" class="col-form-label"><em>8 to 20 characters - Letters, numbers or special characters( . - _ ! ?) allowed</em><br><br>New password*</label>
                    <input type="password" class="form-control" id="newPass" name="newPass" required>
                </div><br><br>
                <input type="submit" class="btn btn-primary" id="changePassBtn" value="Mettre à jour le password"/>
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>


