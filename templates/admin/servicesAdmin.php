<?php
$title = 'Alexis Gautier - Services List';
ob_start();
?>
<div class="container noHeaderImg"> <!-- DO NOT add a fade-up/down/bounce/flip class or modal when answering won't display correctly-->
    <section class="packServices">
        <h2 class="titleManageCom titleMessages">Pack Services</h2>
        <hr>
        <?php
        if (!empty($packServicesList)) { //needed otherwise gives an error on the messagesAdmin.php when no archived message
            for ($i = 0 ; $i < sizeof($packServicesList) ; $i++) {
                $idPack = $packServicesList[$i]->idPack();
                $packNameServices = $packServicesList[$i]->packNameServices();
                $packPriceServices = $packServicesList[$i]->packPriceServices();
        ?>
            <div class="row">
                <form class="servicesForm" action="index.php?action=updatePackPrice" method="post">
                    <div class="form-group col-md-7" style="display:none">
                        <label><?= $idPack ?> <input type="text" name="idPack" value="<?= $idPack ?>" readonly hidden></label>
                    </div>
                    <div class="form-group col-md-7">
                        <label><?= $packNameServices ?> <input type="text" class="priceServ" name="price" value="<?= $packPriceServices ?>"> € </label>
                        <input type="submit" class="btn btn-primary btn-sm btnService" value="Save" />
                    </div>
                </form>
            </div>
            <?php
            }
        }
        ?>
    </section>

    <section class="customServices">
        <h2 class="titleManageCom titleMessages">Custom Services</h2>
        <hr>
        <?php
        if (!empty($customServicesList)) { //needed otherwise gives an error on the messagesAdmin.php when no archived message
            for ($i = 0 ; $i < sizeof($customServicesList) ; $i++) {
                $idServ = $customServicesList[$i]->idServ();
                $serviceGroup = $customServicesList[$i]->serviceGroup();
                $serviceName = $customServicesList[$i]->serviceName();
                $price = $customServicesList[$i]->price();
        ?>
            <div class="row" id="<?= $idServ ?>"> <!-- Id added to send back to the last modified service anchor-->
                <form class="servicesForm" action="index.php?action=updateCustomPrice#<?= $idServ ?>" method="post">
                    <div class="form-group col-md-7" style="display:none">
                        <label><?= $idServ ?> <input type="text" name="idServ" value="<?= $idServ ?>" readonly hidden></label>
                    </div>
                    <div class="form-group col-md-7">
                        <label><small>(<?= $serviceGroup ?>) </small> <?= ucwords($serviceName) ?> <input type="text" class="priceServ" name="price" value="<?= $price ?>"> € </label>
                        <input type="submit" class="btn btn-primary btn-sm btnService" value="Save" />
                    </div>
                </form>
            </div>
            <?php
            }
        }
        ?>

    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>



