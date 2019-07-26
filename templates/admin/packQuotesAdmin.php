<?php
$title = 'Alexis Gautier - Pack Quotes';
ob_start();
?>
<div class="container noHeaderImg"> <!-- DO NOT add a fade-up/down/bounce/flip class or modal when answering won't display correctly-->
    <section>
        <p>Display by
        <a href="index.php?action=packQuotesAdmin&page=<?= $_GET['page'] ?>&sortBy=5"><button class="btn btn-info btn-sm"><strong>5</strong></button></a>
        <a href="index.php?action=packQuotesAdmin&page=<?= $_GET['page'] ?>&sortBy=10"><button class="btn btn-info btn-sm"><strong>10</strong></button></a>
        <a href="index.php?action=packQuotesAdmin&page=<?= $_GET['page'] ?>&sortBy=99999999999999999999"><button class="btn btn-info btn-sm"><strong>All</strong></button></a></p>
        <?php include('templates/pagination.php'); ?>

        <h2 class="titleMessages">Pack Quotes</h2>
        <hr>
        <?php
            if (!empty($packQuote)){ //needed otherwise gives an error on the packQuotesAdmin.php when no new message
                for ($i = 0 ; $i < sizeof($packQuote) ; $i++) {
                    $packQuoteId = $packQuote[$i]->id();
                    $packName = $packQuote[$i]->packName();
                    $price = $packQuote[$i]->price();
                    $requestDate = $packQuote[$i]->requestDate();
                    $project = $packQuote[$i]->project();
                    $structure = $packQuote[$i]->structure();
                    $company = $packQuote[$i]->company();
                    $firstName = $packQuote[$i]->firstName();
                    $lastName = $packQuote[$i]->lastName();
                    $contactEmail = $packQuote[$i]->contactEmail();
                    $phone = $packQuote[$i]->phone();
                    $postalAddress = $packQuote[$i]->postalAddress();
                    $postCode = $packQuote[$i]->postCode();
                    $city = $packQuote[$i]->city();
                    $country = $packQuote[$i]->country();
                    $deadline = $packQuote[$i]->deadline();
                    $messageContent = $packQuote[$i]->messageContent();
                    $imageName = $packQuote[$i]->imageName();
                    $quoteStatus = $packQuote[$i]->quoteStatus();
                    $accepted = $packQuote[$i]->accepted();
                    $clientStatus = $packQuote[$i]->clientStatus();
                    ?>
                    <div <?php if ($quoteStatus == 0 && $accepted != 2) : echo 'class="newPackQuote"'; elseif ($accepted == 2) : echo 'class="refusedPackQuote"'; else : echo 'class="packQuote"'; endif; ?> >
                        <p class="blockHead">Pack Quote n° <strong><?= $packQuoteId ?></strong>
                            <?php
                            //Status
                            if ($quoteStatus == 0 && $accepted == 1) : echo '&emsp; - &emsp; <i class="fas fa-history" style="color:white"> </i> Pending';
                            elseif ($quoteStatus == 1 && $accepted == 1) : echo '&emsp; - &emsp; <i class="fas fa-play" style="color:lightblue"> </i> In progress';
                            elseif ($quoteStatus == 2 && $accepted == 1) : echo '&emsp; - &emsp; <i class="fas fa-check" style="color:lightgreen"> </i> Done';
                            elseif ($quoteStatus == 3 && $accepted == 1) : echo '&emsp; - &emsp; <i class="far fa-folder-open" style="color:yellow"> </i> Archived';
                            endif;

                            //Accepted / Refused
                            if ($accepted == 0) : echo '&emsp; - &emsp; <i class="fas fa-history" style="color:white"> </i> Pending approval';
                            elseif ($accepted == 1) : echo '&emsp; - &emsp; <i class="fas fa-check-circle" style="color:lightgreen"> </i> Accepted';
                            elseif ($accepted == 2) : echo '&emsp; - &emsp; <i class="fas fa-times-circle" style="color:red"> </i> Refused';
                            endif;
                            ?>
                        </p>
                        <p><Strong>Website type : </Strong><?= $packName?></p>
                        <p><Strong>Price : </Strong><?= $price?> €</p>
                        <p><Strong>Deadline : </Strong><?= $deadline?></p>
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
                        <div class="quoteMoreInfo<?=$packQuoteId?>">
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
                        <button class="fas fa-search quoteMoreInfoBtn<?=$packQuoteId ?>"> More ...</button>

                        <div class="manageIcons">
                            <div class="AnsDelRef">

                            <!-- this script stays here because it uses PHP variables and can't work in Main.js -->
                            <script>
                            $(".quoteMoreInfoBtn<?=$packQuoteId ?>").on("click", function(){
                                $(".quoteMoreInfo<?=$packQuoteId?>").toggle("slow")
                            })
                            </script>

                            <!-- Auto-email form for accepted quote requests-->
                            <div class="acceptForm">
                                <form id="acceptForm<?= $packQuoteId ?>" action="index.php?action=acceptPackQuote&amp;packQuoteId=<?= $packQuoteId ?>&amp;acceptPackQuote=1" method="post">
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
                            <?php
                            //Accept / Refuse buttons
                            if ($accepted == 0 || $accepted == 2) : ?>
                            <!-- Accept button with an auto email function -->
                            <button type="submit" form="acceptForm<?= $packQuoteId ?>" class="acceptBtn" onclick="return confirm('Accept this project ?')"><i class="far fa-check-square"></i> Accept</button>
                            <?php
                            ;
                            endif;
                            if ($accepted == 0 || $accepted == 1) : ?>
                            <a class="deleteBtn" data-toggle="modal" data-target="#refuseModal<?= $packQuoteId ?>" ><i class="far fa-check-square"></i>  Refuse</a>
                            <?php
                            ;
                            endif;
                            ?>

                            <?php
                            if ( $accepted == 1) :?>
                                <form id="statusForm" action="index.php?action=updateQuoteStatus&amp;packQuoteId=<?= $packQuoteId ?>" method="post">
                                    <label for="statusPackQuote">Status :</label>
                                    <select id="statusPackQuote" name="statusPackQuote"
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
                                <br><a class="deleteBtn" href="index.php?action=deletePackQuote&amp;packQuoteId=<?= $packQuoteId ?>" onclick="return confirm('Delete this request ?')"><i class="far fa-trash-alt"></i> Delete this request</a>
                            </div>
                        </div>
                    </div>

                    <!-- Refuse project modal -->
                    <div class="modal fade" id="refuseModal<?= $packQuoteId ?>" tabindex="-1" role="dialog" aria-labelledby="refuseModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="refuseModalLabel">Why do I refuse this project? </h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="answerForm" action="index.php?action=refusePackQuote&amp;packQuoteId=<?= $packQuoteId ?>&amp;acceptPackQuote=2" method="post">
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
        <div class="noPackQuote">There is no pack quotes</div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>



