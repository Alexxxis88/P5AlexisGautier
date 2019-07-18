<?php
$title = 'Alexis Gautier - Messages';
ob_start();
?>
<div class="container noHeaderImg"> <!-- DO NOT add a fade-up/down/bounce/flip class or modal when answering won't display correctly-->
    <!-- NEW MESSAGES -->
    <section id="sectionNewMessages">
        <div class="row manageComBtns newMessagesBtns">
            <div class="col-md-12">
            <a class="manageComBtn newMessagesBtn js-scrollTo" href="#sectionArchivedMessages"><span class="fas fa-anchor"></span> View archived messages</a>
            </div>
        </div>
        <p>Display by
            <a href="index.php?action=messagesAdmin&page=<?= $_GET['page'] ?>&sortBy=2"><button class="btn btn-info btn-sm"><strong>2</strong></button></a>
            <a href="index.php?action=messagesAdmin&page=<?= $_GET['page'] ?>&sortBy=5"><button class="btn btn-info btn-sm"><strong>5</strong></button></a>
            <a href="index.php?action=messagesAdmin&page=<?= $_GET['page'] ?>&sortBy=99999999999999999999"><button class="btn btn-info btn-sm"><strong>All</strong></button></a></p>
            <?php include('templates/pagination.php'); ?>
        <h2 class="titleManageCom titleMessages">New Messages</h2>
        <hr>
        <?php
            if (!empty($newMessages)){ //needed otherwise gives an error on the messagesAdmin.php when no new message
                for ($i = 0 ; $i < sizeof($newMessages) ; $i++) {
                    $messageId = $newMessages[$i]->id();
                    $firstName = $newMessages[$i]->firstName();
                    $lastName = $newMessages[$i]->lastName();
                    $contactEmail = $newMessages[$i]->contactEmail();
                    $topic = $newMessages[$i]->topic();
                    $messageContent = $newMessages[$i]->messageContent();
                    $messageDate = $newMessages[$i]->messageDate();
                    $flag = $newMessages[$i]->flag(); ?>

                    <div <?php if ($flag == 0) : echo 'class="newMesssage"'; else : echo 'class="answeredMessage"'; endif; ?> >
                        <p class="commentHead">Sent by <strong><?= $firstName . ' ' . $lastName ?></strong> on <?= $messageDate ?>
                        <?php if ($flag == 1) : echo '&emsp; - &emsp; <span class="fas fa-check" style="color:lightgreen"> </span> Answered'; endif; ?></p>

                        <p><Strong>Message ID : </Strong><?= $messageId?></p> <!--FIXME : remove me-->
                        <p><Strong>Email : </Strong><?= $contactEmail?></p>
                        <p><Strong>Topic : </Strong><?= $topic?></p>
                        <!-- transform non html links in messageContent into clickable links-->
                        <p><strong>Message content :</strong> <?= nl2br($messageContent = preg_replace('#http[s]?://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $messageContent)) ?></p>
                        <div class="manageComIcons">
                            <div class="approvDelComs">

                            <?php if ($flag == 0) : ?>
                            <a class="answerBtn" data-toggle="modal" data-target="#answerModal<?= $messageId ?>"><span class="far fa-edit editBtns"></span> Answer</a>
                            <?php endif; ?>

                            <a class="deleteBtn" href="index.php?action=deleteMessage&amp;messageId=<?= $messageId ?>" onclick="return confirm('Delete this message ?')"><span class="far fa-trash-alt"></span> Delete</a>

                            <a class="archiveBtn" href="index.php?action=archiveMessage&amp;messageId=<?= $messageId ?>"  onclick="return confirm('Archive this message ?')" ><span class="far fa-check-square"></span>  Archive</a>
                            </div>
                        </div>
                    </div>
                    <!-- Answer message -->
                    <div class="modal fade" id="answerModal<?= $messageId ?>" tabindex="-1" role="dialog" aria-labelledby="answerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="answerModalLabel">Answer to <?= $firstName ?> <?= $lastName ?> </h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="answerForm" action="index.php?action=answerMessage&amp;messageId=<?= $messageId ?>" method="post">
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
        <div class="noNewMessage">There is no new message</div>
    </section>

    <!-- ARCHIVED MESSAGES -->
    <section id="sectionArchivedMessages">
        <div class="row manageComBtns archivedMessagesBtns">
            <div class="col-md-12">
            <a class="manageComBtn archivedMessagesBtn js-scrollTo" href="#sectionNewMessages"><span class="fas fa-anchor"></span> View new messages</a>
            </div>
        </div>
        <h2 class="titleManageCom titleMessages">Archived Messages</h2>
        <hr>
        <?php
            if (!empty($archivedMessages)) { //needed otherwise gives an error on the messagesAdmin.php when no archived message
                for ($i = 0 ; $i < sizeof($archivedMessages) ; $i++) {
                    $messageId = $archivedMessages[$i]->id();
                    $firstName = $archivedMessages[$i]->firstName();
                    $lastName = $archivedMessages[$i]->lastName();
                    $contactEmail = $archivedMessages[$i]->contactEmail();
                    $topic = $archivedMessages[$i]->topic();
                    $messageContent = $archivedMessages[$i]->messageContent();
                    $messageDate = $archivedMessages[$i]->messageDate();
                    $flag = $archivedMessages[$i]->flag(); ?>

                    <div class="archivedMessage" >
                        <p class="commentHead">Sent by <strong><?= $firstName . ' ' . $lastName ?></strong> on <?= $messageDate ?>
                        <?php if ($flag == 1) : echo '&emsp; - &emsp; <span class="fas fa-check" style="color:lightgreen"> </span> Answered'; endif; ?>
                        </p>

                        <p><Strong>Message ID : </Strong><?= $messageId?></p> <!--FIXME : remove me-->
                        <p><Strong>Email : </Strong><?= $contactEmail?></p>
                        <p><Strong>Topic : </Strong><?= $topic?></p>
                        <!-- transform non html links in messageContent into clickable links-->
                        <p><strong>Message content :</strong> <?= nl2br($messageContent = preg_replace('#http[s]?://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $messageContent)) ?></p>
                        <div class="manageComIcons">
                            <a class="deleteBtn" href="index.php?action=deleteMessage&amp;messageId=<?= $messageId ?>" onclick="return confirm('Delete this message ?')"><span class="far fa-trash-alt"></span> Delete</a>
                        </div>
                    </div>
                <?php
                }
            }
            ?>
        <!-- displays a message if no new message -->
        <div class="noArchiveMessage">There is no archived message</div>
    </section>
</div>
<?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>



