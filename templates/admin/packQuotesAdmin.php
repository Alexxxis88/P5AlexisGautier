<?php
$title = 'Alexis Gautier - Pack Quotes';
ob_start();
?>
<div class="container noHeaderImg fade-up">
    <section>
        <h2 class="titleManageCom titleMessages">Pack Quotes</h2>
        <hr>
        <?php
            if (!empty($packQuote)){ //needed otherwise gives an error on the messagesAdmin.php when no new message
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
                    $answered = $packQuote[$i]->answered();
                    $quoteStatus = $packQuote[$i]->quoteStatus();
                    $accepted = $packQuote[$i]->accepted();
                    $clientStatus = $packQuote[$i]->clientStatus();

                    ?>

                    <div <?php if ($quoteStatus == 0) : echo 'class="newPackQuote"'; else : echo 'class="packQuote"'; endif; ?> >
                        <p class="commentHead">Pack Quote n° <strong><?= $packQuoteId ?></strong>
                            <?php
                            //Answered / Not
                            if ($answered == 0) : echo '&emsp; - &emsp; <span class="fas fa-envelope" style="color:red"> </span> Not answered'; 
                            elseif ($answered == 1) : echo '&emsp; - &emsp; <span class="fas fa-envelope-open" style="color:lightgreen"> </span> Answered';
                            endif;

                            //Status
                            if ($quoteStatus == 0) : echo '&emsp; - &emsp; <span class="fas fa-history" style="color:white"> </span> Pending'; 
                            elseif ($quoteStatus == 1) : echo '&emsp; - &emsp; <span class="fas fa-play" style="color:lightblue"> </span> In progress';
                            elseif ($quoteStatus == 2) : echo '&emsp; - &emsp; <span class="fas fa-check" style="color:lightgreen"> </span> Done';
                            elseif ($quoteStatus == 3) : echo '&emsp; - &emsp; <span class="far fa-folder-open" style="color:yellow"> </span> Archived';
                            endif;

                            //Accepted / Refused
                            if ($accepted == 0) : echo '&emsp; - &emsp; <span class="fas fa-history" style="color:white"> </span> Pending approval';
                            elseif ($accepted == 1) : echo '&emsp; - &emsp; <span class="fas fa-check-circle" style="color:lightgreen"> </span> Accepted';
                            elseif ($accepted == 2) : echo '&emsp; - &emsp; <span class="fas fa-times-circle" style="color:red"> </span> Refused';
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
                        </div>
                        <button class="fas fa-search quoteMoreInfoBtn<?=$packQuoteId ?>"> More ...</button>

                        <div class="manageComIcons">
                            <div class="approvDelComs">

                            <!-- this script stays here because it uses PHP variables and can't work in Main.js -->
                            <script>
                            $(".quoteMoreInfoBtn<?=$packQuoteId ?>").on("click", function(){
                                $(".quoteMoreInfo<?=$packQuoteId?>").toggle("slow")
                            })
                            </script>


                            <?php if ($answered == 0) : ?>
                            <a class="answerBtn" data-toggle="modal" data-target="#answerModal<?= $packQuoteId ?>"><span class="far fa-edit editBtns"></span> Answer</a>
                            <?php endif; ?>

                            <a class="deleteBtn" href="index.php?action=deletePackQuote&amp;packQuoteId=<?= $packQuoteId ?>" onclick="return confirm('Delete this message ?')"><span class="far fa-trash-alt"></span> Delete</a>

                            <a class="archiveBtn" href="index.php?action=archiveMessage&amp;packQuoteId=<?= $packQuoteId ?>"  onclick="return confirm('Archive this message ?')" ><span class="far fa-check-square"></span>  Archive</a>
                            </div>
                        </div>
                    </div>

                    <!-- Answer message -->
                    <div class="modal fade" id="answerModal<?= $packQuoteId ?>" tabindex="-1" role="dialog" aria-labelledby="answerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="answerModalLabel">Answer to <?= $firstName ?> <?= $lastName ?> </h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="answerForm" action="index.php?action=answerMessage&amp;packQuoteId=<?= $packQuoteId ?>" method="post">
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
                                            <input type="text" class="form-control" id="answerTopic" name="answerTopic" value="RE : <?= $topic ?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label for="answerContent" class="col-form-label">My answer</label>
                                            <textarea class="form-control" rows="10" id="answerContent" name="answerContent" required></textarea>
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
            ?>
        <!-- displays a message if no new message -->
        <div class="noPackQuote">There is no pack quotes</div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>



