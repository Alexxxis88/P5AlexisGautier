<?php
$title = 'Alexis Gautier - Services List';
ob_start();
?>
<div class="container noHeaderImg"> <!-- DO NOT add a fade-up/down/bounce/flip class or modal when answering won't display correctly-->
    <section class="packServices">

                <?php
                $packPrice1 = $allPacksServices[0]['packPriceServices'];
                $packPrice2 = $allPacksServices[1]['packPriceServices'];
                $packPrice3 = $allPacksServices[2]['packPriceServices'];
                ?>

                <h2 class="titleManageCom titleMessages">Pack Services</h2>
                <hr>
                <div class="row">
                    <form class="servicesFrom" action="index.php?action=updatePackPrice" method="post">
                        <div class="form-group col-md-6" style="display:none">
                            <label>idPack <input type="text" name="idPack" value="1" readonly hidden></label>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Showcase Website <input type="text" class="priceServ" name="price" value="<?= $packPrice1 ?>"> € </label>
                            <input type="submit" class="btn btn-primary btn-sm btnService" value="Save" />
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form class="servicesFrom" action="index.php?action=updatePackPrice" method="post">
                        <div class="form-group col-md-6" style="display:none">
                            <label>idPack <input type="text" name="idPack" value="2" readonly hidden></label>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Webstore <input type="text" class="priceServ" name="price" value="<?= $packPrice2 ?>"> € </label>
                            <input type="submit" class="btn btn-primary btn-sm btnService" value="Save" />
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form class="servicesFrom" action="index.php?action=updatePackPrice" method="post">
                        <div class="form-group col-md-6" style="display:none">
                            <label>idPack <input type="text" name="idPack" value="3" readonly hidden></label>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Showcase Website + Webstore <input type="text" class="priceServ" name="price" value="<?= $packPrice3 ?>"> € </label>
                            <input type="submit" class="btn btn-primary btn-sm btnService" value="Save" />
                        </div>
                    </form>
                </div>

    </section>
    <section class="customServices">
            <h2 class="titleManageCom titleMessages">Custom Services</h2>
            <hr>

            <h3 class="">Type of Website</h3>
            <div class="row">
                <form class="servicesFrom" action="index.php?action=updateCustomPrice" method="post">
                    <div class="form-group col-md-6" style="display:none">
                        <label>idPack <input type="text" name="idServ" value="1" readonly hidden></label>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Showcase Website + Webstore <input type="text" class="priceServ" name="price" value=""> € </label>
                        <input type="submit" class="btn btn-primary btn-sm btnService" value="Save" />
                    </div>
                </form>
            </div>
            
          

    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>



