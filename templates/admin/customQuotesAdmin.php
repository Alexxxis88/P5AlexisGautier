<?php
$title = 'Alexis Gautier - Custom Quotes';
ob_start();
?>
<div class="container noHeaderImg"> <!-- DO NOT add a fade-up/down/bounce/flip class or modal when answering won't display correctly-->
    <section>
        <p>Display by
        <a href="index.php?action=customQuotesAdmin&page=<?= $_GET['page'] ?>&sortBy=5"><button class="btn btn-info btn-sm"><strong>5</strong></button></a>
        <a href="index.php?action=customQuotesAdmin&page=<?= $_GET['page'] ?>&sortBy=10"><button class="btn btn-info btn-sm"><strong>10</strong></button></a>
        <a href="index.php?action=customQuotesAdmin&page=<?= $_GET['page'] ?>&sortBy=99999999999999999999"><button class="btn btn-info btn-sm"><strong>All</strong></button></a></p>
        <?php include('templates/pagination.php'); ?>

        <h2 class="titleManageCom titleMessages">Custom Quotes</h2>
        <hr>
        <?php
            if (!empty($customQuote)){ //needed otherwise gives an error on the customQuotesAdmin.php when no new message
                for ($i = 0 ; $i < sizeof($customQuote) ; $i++) {
                    $customQuoteId = $customQuote[$i]->id();
                    $siteType = $customQuote[$i]->siteType();
                    $price = $customQuote[$i]->price();
                    $requestDate = $customQuote[$i]->requestDate();
                    $project = $customQuote[$i]->project();
                    $structure = $customQuote[$i]->structure();
                    $company = $customQuote[$i]->company();
                    $firstName = $customQuote[$i]->firstName();
                    $lastName = $customQuote[$i]->lastName();
                    $contactEmail = $customQuote[$i]->contactEmail();
                    $phone = $customQuote[$i]->phone();
                    $postalAddress = $customQuote[$i]->postalAddress();
                    $postCode = $customQuote[$i]->postCode();
                    $city = $customQuote[$i]->city();
                    $country = $customQuote[$i]->country();
                    $deadline = $customQuote[$i]->deadline();
                    $messageContent = $customQuote[$i]->messageContent();
                    $imageName = $customQuote[$i]->imageName();
                    $languages = $customQuote[$i]->languages();
                    $design = $customQuote[$i]->design();
                    $writingContent = $customQuote[$i]->writingContent();
                    $visualContent = $customQuote[$i]->visualContent();
                    $maintenance = $customQuote[$i]->maintenance();
                    $host = $customQuote[$i]->host();
                    $domainYN = $customQuote[$i]->domainYN();
                    $extensions = $customQuote[$i]->extensions();
                    $deadlineSelect = $customQuote[$i]->deadlineSelect();
                    $pageNb = $customQuote[$i]->pageNb();
                    $loginShowcaseYN = $customQuote[$i]->loginShowcaseYN();
                    $paymentShowcaseYN = $customQuote[$i]->paymentShowcaseYN();
                    $paymentMtdShowcase = $customQuote[$i]->paymentMtdShowcase();
                    $options = $customQuote[$i]->options();
                    $productNb = $customQuote[$i]->productNb();
                    $paymentMtdStore = $customQuote[$i]->paymentMtdStore();
                    $quoteStatus = $customQuote[$i]->quoteStatus();
                    $accepted = $customQuote[$i]->accepted();
                    $clientStatus = $customQuote[$i]->clientStatus();
                    ?>
                    <div <?php if ($quoteStatus == 0 && $accepted != 2) : echo 'class="newCustomQuote"'; elseif ($accepted == 2) : echo 'class="refusedCustomQuote"'; else : echo 'class="customQuote"'; endif; ?> >
                        <p class="commentHead">Custom Quote n° <strong><?= $customQuoteId ?></strong>
                            <?php
                            //Status
                            if ($quoteStatus == 0 && $accepted == 1) : echo '&emsp; - &emsp; <span class="fas fa-history" style="color:white"> </span> Pending';
                            elseif ($quoteStatus == 1 && $accepted == 1) : echo '&emsp; - &emsp; <span class="fas fa-play" style="color:lightblue"> </span> In progress';
                            elseif ($quoteStatus == 2 && $accepted == 1) : echo '&emsp; - &emsp; <span class="fas fa-check" style="color:lightgreen"> </span> Done';
                            elseif ($quoteStatus == 3 && $accepted == 1) : echo '&emsp; - &emsp; <span class="far fa-folder-open" style="color:yellow"> </span> Archived';
                            endif;

                            //Accepted / Refused
                            if ($accepted == 0) : echo '&emsp; - &emsp; <span class="fas fa-history" style="color:white"> </span> Pending approval';
                            elseif ($accepted == 1) : echo '&emsp; - &emsp; <span class="fas fa-check-circle" style="color:lightgreen"> </span> Accepted';
                            elseif ($accepted == 2) : echo '&emsp; - &emsp; <span class="fas fa-times-circle" style="color:red"> </span> Refused';
                            endif;
                            ?>
                        </p>
                        <p><Strong>Website type : </Strong><?= $siteType?></p>
                        <p><Strong>Price : </Strong><?= $price?> €</p>
                        <p><Strong>Deadline : </Strong><?= $deadlineSelect?></p>
                        <p><Strong>Specific date : </Strong><?= $deadline?></p>
                        <p><Strong>Request sent on : </Strong><?= $requestDate?> </p>
                        <p><Strong>
                            <?php
                            if ($clientStatus == 0) : echo 'New';
                            elseif ($clientStatus == 1) : echo 'Returning';
                            endif;
                            ?>
                        </Strong>client</p>
                        <p><Strong>Project name : </Strong><?= $project?></p>
                        <p><Strong>Full name : </Strong><?= $firstName?> <?= $lastName?></p>

                        <!-- More information -->
                        <div class="quoteMoreInfo<?=$customQuoteId?>">
                            <h3>General information</h3>
                            <p><Strong>Languages : </Strong><?= $languages?></p>
                            <p><Strong>Design : </Strong><?= $design?></p>
                            <p><Strong>Writing Content : </Strong><?= $writingContent?></p>
                            <p><Strong>Visual Content : </Strong><?= $visualContent?></p>
                            <p><Strong>Maintenance / Updates : </Strong><?= $maintenance?></p>
                            <p><Strong>Host : </Strong><?= $host?></p>
                            <p><Strong>Domain name : </Strong><?= $domainYN?></p>
                            <p><Strong>Extensions : </Strong><?= $extensions?></p>
                            <p><Strong>Options : </Strong><?= $options?></p>

                            <h3>Showcase Website</h3>
                            <p><Strong>Number of pages : </Strong><?= $pageNb?></p>
                            <p><Strong>My users need to log in : </Strong><?= $loginShowcaseYN?></p>
                            <p><Strong>Payment options needed : </Strong><?= $paymentShowcaseYN?></p>
                            <p><Strong>Payment options : </Strong><?= $paymentMtdShowcase?></p>

                            <h3>Webstore</h3>
                            <p><Strong>Number of products for sale : </Strong><?= $productNb?></p>
                            <p><Strong>Payment options : </Strong><?= $paymentMtdStore?></p>

                            <h3>Client information</h3>
                            <p><Strong>Structure : </Strong><?= $structure?></p>
                            <p><Strong>Company : </Strong><?= $company?></p>
                            <p><Strong>Email : </Strong><?= $contactEmail?></p>
                            <p><Strong>Phone : </Strong><?= $phone?></p>
                            <p><Strong>Address : </Strong><?= $postalAddress?></p>
                            <p><Strong>Post Code : </Strong><?= $postCode?></p>
                            <p><Strong>City : </Strong><?= $city?></p>
                            <p><Strong>Country : </Strong><?= $country?></p>
                            <p><Strong>Description : </Strong><?= $messageContent?></p>
                            <p><Strong>Mockup : </Strong>
                            <?php if ($imageName != "") : echo '<a href="./uploads/' . $imageName . '" rel="prettyPhoto"> <img class="mockup" src="./uploads/' . $imageName . '" alt="Mockup' . $imageName . '" ></a>'; endif;?>
                                <hr>
                            </p>
                        </div>
                        <button class="fas fa-search quoteMoreInfoBtn<?=$customQuoteId ?>"> More ...</button>

                        <div class="manageComIcons">
                            <div class="approvDelComs">

                            <!-- this script stays here because it uses PHP variables and can't work in Main.js -->
                            <script>
                            $(".quoteMoreInfoBtn<?=$customQuoteId ?>").on("click", function(){
                                $(".quoteMoreInfo<?=$customQuoteId?>").toggle("slow")
                            })
                            </script>

                            <!-- Auto-email form for accepted quote requests-->
                            <div class="acceptForm">
                                <form id="acceptForm<?= $customQuoteId ?>" action="index.php?action=acceptCustomQuote&amp;customQuoteId=<?= $customQuoteId ?>&amp;acceptCustomQuote=1" method="post">
                                        <label for="myEmail" class="col-form-label">From : </label>
                                        <input type="text" class="form-control" id="myEmail" name="myEmail" value="alexisxgautier@gmail.com" readonly="readonly">
                                        <label for="clientEmail" class="col-form-label">to : </label>
                                        <input type="text" class="form-control" id="clientEmail" name="clientEmail" value="<?= $contactEmail ?>" readonly="readonly">
                                        <label for="answerTopic" class="col-form-label">Topic</label>
                                        <input type="text" class="form-control" id="answerTopic" name="answerTopic" value="Congralutations! Your project <?= $project ?> has been accepted" readonly="readonly">
                                        <label for="answerContent" class="col-form-label">My answer</label>
                                        <textarea class="form-control" rows="10" id="answerContent" name="answerContent" required>Hello <?= $firstName ?> <?= $lastName ?>. I am glad to inform you I accept to work with you on your project <?= $project ?>. I will be in touch very soon to discuss the next steps. Have a good day!</textarea>
                                </form>
                            </div>


                            <!-- bouton classique sans envoi de mail auto FIXME DELETE ME si ça marche avec le form-->
                            <!-- <a class="answerBtn" href="index.php?action=acceptCustomQuote&amp;customQuoteId=< ?= $customQuoteId ?>&amp;acceptCustomQuote=1"  onclick="return confirm('Accept this project ?')" ><span class="far fa-check-square"></span>  Ancien bouton fonctionel Accept</a>-->


                            <?php
                            //Accept / Refuse buttons
                            if ($accepted == 0 || $accepted == 2) : ?>
                            <!-- Accept button with an auto email function -->
                            <button type="submit" form="acceptForm<?= $customQuoteId ?>" class="acceptBtn" onclick="return confirm('Accept this project ?')"><span class="far fa-check-square"></span> Accept</button>
                            <?php
                            ;
                            endif;
                            if ($accepted == 0 || $accepted == 1) : ?>
                            <a class="deleteBtn" data-toggle="modal" data-target="#refuseModal<?= $customQuoteId ?>" ><span class="far fa-check-square"></span>  Refuse</a>
                            <?php
                            ;
                            endif;
                            ?>

                            <?php
                            if ( $accepted == 1) :?>
                                <form id="statusForm" action="index.php?action=updateCustomQuoteStatus&amp;customQuoteId=<?= $customQuoteId ?>" method="post">
                                    <label for="statusCustomQuote">Status :</label>
                                    <select id="statusCustomQuote" name="statusCustomQuote"
                                        onchange="submit()">
                                        <option disabled hidden value="">&nbsp;</option>
                                        <option label="Please choose..." value="0" disabled selected hidden> </option>
                                        <option value="0">Pending</option>
                                        <option value="1">In process</option>
                                        <option value="2">Done</option>
                                        <option value="3">Archived</option>
                                    </select>
                                </form>
                            <?php
                            ;
                            endif;
                            ?>
                                <br><a class="deleteBtn" href="index.php?action=deleteCustomQuote&amp;customQuoteId=<?= $customQuoteId ?>" onclick="return confirm('Delete this request ?')"><span class="far fa-trash-alt"></span> Delete this request</a>
                            </div>
                        </div>
                    </div>

                    <!-- Refuse project modal -->
                    <div class="modal fade" id="refuseModal<?= $customQuoteId ?>" tabindex="-1" role="dialog" aria-labelledby="refuseModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="refuseModalLabel">Why do I refuse this project? </h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="answerForm" action="index.php?action=refuseCustomQuote&amp;customQuoteId=<?= $customQuoteId ?>&amp;acceptCustomQuote=2" method="post">
                                        <div class="form-group">
                                            <label for="myEmail" class="col-form-label">From : </label>
                                            <input type="text" class="form-control" id="myEmail" name="myEmail" value="alexisxgautier@gmail.com" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label for="clientEmail" class="col-form-label">to : </label>
                                            <input type="text" class="form-control" id="clientEmail" name="clientEmail" value="<?= $contactEmail ?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label for="answerTopic" class="col-form-label">Topic</label>
                                            <input type="text" class="form-control" id="answerTopic" name="answerTopic" value="Sorry I won't be able to help you with <?= $project ?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label for="answerContent" class="col-form-label">My answer</label>
                                            <textarea class="form-control" rows="10" id="answerContent" name="answerContent" required>Hello <?= $firstName ?> <?= $lastName ?>. I'm sorry to inform you I will not be able to help you with your project because</textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary"  value="Answer"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }
            include('templates/pagination.php');
            ?>
        <!-- displays a message if no new message -->
        <div class="noCustomQuote">There is no custom quotes</div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>



