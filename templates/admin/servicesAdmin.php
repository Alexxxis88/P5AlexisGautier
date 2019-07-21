<?php
$title = 'Alexis Gautier - Services List';
ob_start();
?>
<div class="container noHeaderImg"> <!-- DO NOT add a fade-up/down/bounce/flip class or modal when answering won't display correctly-->
    <section class="servicesList">
            <form class="servicesFrom" action="index.php?action=updatePackPrice" method="post">
                <h2 class="titleManageCom titleMessages">Pack Services</h2>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="showcaseWebsitePack">Showcase Website</label>
                        <input type="text" id="showcaseWebsitePack" name="ShowcaseWebsite" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="webstorePack">Webstore</label>
                        <input type="text" id="webstorePack" name="Webstore"  >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="showcaseAndWebstorePack">Showcase Website + Webstore</label>
                        <input type="text" id="showcaseAndWebstorePack" name="ShowcaseAndWebstore" >
                    </div>
                </div>
                <input type="submit" class="btn btn-primary formSendBtn" value="Update prices" />
            </form>




            <h3 class="">Type of Website</h3>
            <hr>
            <h2 class="titleManageCom titleMessages">Custom Services</h2>

            <form class="servicesFrom" action="index.php?action=updateCustomPrice" method="post">
                <div class="row">
                    <div class="form-group col-md-6" style="display:none">
                        <label>idServ <input type="text" name="idServ" value="1" readonly hidden></label>
                    </div>
                    <div class="form-group col-md-6">
                     <label>Showcase Website <input type="text" name="price" value=""></label>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary formSendBtn" value="Update prices" />
            </form>

    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>



