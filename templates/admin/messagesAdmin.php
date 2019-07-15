<?php
        $title = 'Alexis Gautier - Messages';
        ob_start();
        ?>
        <div class="container noHeaderImg">
                <!-- NEW MESSAGES -->
                <section id="sectionReported sectionNewMessages">
                        <div class="row manageComBtns newMessagesBtns">
                                <div class="col-md-12">
                                <a class="manageComBtn newMessagesBtn js-scrollTo" href="#sectionArchivedMessages"><span class="fas fa-anchor"></span> View archived messages</a>
                                </div>
                        </div>
                        <h2 class="titleManageCom titleMessages">New Messages</h2>
                        <hr>
                        <form action="index.php?action=manageAllSelectedComments" method="post">
                                <input type="checkbox" id="checkAllReported" checked>
                                <label for="checkAllReported"> Select / Deselect All </label>
                                <input type="submit" class="btn btn-danger btn-sm" name="deleteSelectedComments[]" value="Delete" onclick="return confirm('Delete tous ces commentaires ?')">
                                <input type="submit" class="btn btn-successs btn-sm" name="approveSelectedComments[]" value="Archive" onclick="return confirm('Archive tous ces commentaires ?')">

                                <?php
                                //arrayComments will stock every new message's id
                                $arrayMessages = array();
                                if (!empty($newMessages)) { //needed otherwise gives an error on the commentsView.php when no comments reported
                                        for ($i = 0 ; $i < sizeof($newMessages) ; $i++) {
                                                $messageId = $newMessages[$i]->id();
                                                $firstName = $newMessages[$i]->firstName();
                                                $lastName = $newMessages[$i]->lastName();
                                                $contactEmail = $newMessages[$i]->contactEmail();
                                                $topic = $newMessages[$i]->topic();
                                                $messageContent = $newMessages[$i]->messageContent();
                                                $messageDate = $newMessages[$i]->messageDate();
                                                $flag = $newMessages[$i]->flag(); ?>







                                                <div class="reportedComments">
                                                        <p class="commentHead"><input type="checkbox" id="messageId" name="selectComments[]" value="<?= $messageId?>" checked >
                                                        Sent by <strong><?= $firstName . ' ' . $lastName ?></strong> on <?= $messageDate ?></p>

                                                        <p><Strong>Message ID : </Strong><?= $messageId?></p> <!--FIXME : remove me-->

                                                        <p><Strong>Email : </Strong><?= $contactEmail?></p>
                                                        <p><Strong>Topic : </Strong><?= $topic?></p>
                                                        <!-- transform non html links in messageContent into clickable links-->
                                                        <p><strong>Message content :</strong> <?= nl2br($messageContent = preg_replace('#http[s]?://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $messageContent)) ?></p>
                                                        <div class="manageComIcons">
                                                                <div class="approvDelComs">
                                                                <!-- solution comme pour le P4
                                                                <a class="far fa-edit editBtns< ?=$messageId ?> editCommentBtn< ?=$messageId ?>">Answer</a></a>-->

                                                                <!-- solution avec modal-->

                                                                <a data-toggle="modal" data-target="#answerModal<?= $messageId ?>"><span class="far fa-edit editBtns"></span> Answer</a>


                                                                <a href="index.php?action=deleteMessage&amp;messageId=<?= $messageId ?>" onclick="return confirm('Delete this message ?')"><span class="far fa-trash-alt"></span> Delete</a>

                                                                <a href="index.php?action=archiveMessage&amp;messageId=<?= $messageId ?>"  onclick="return confirm('Archive this message ?')" ><span class="far fa-check-square"></span>  Archive</a>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!-- Answer message -->

                                                <!-- solution comme pour le P4 

                                                < !-- $messageId['id'] in class name to display only the form of the selected comment -- >
                                                <div class="editCommentForm< ?=$messageId ?>">
                                                        <form action="index.php?action=answerMessage&amp;commentId=< ?= $messageId ?>" method="post" id="editCommentForm< ?=$messageId ?>">
                                                                <div>
                                                                        <br>
                                                                        <textarea id="comment" name="comment" cols="80" rows="5" maxlength="700" required></textarea>
                                                                </div>
                                                                <div>
                                                                <button type="submit" form="editCommentForm< ?=$messageId ?>" class="btn-success" value="Send my answer"> Send my answer </button>

                                                                < !-- <input type="submit" form="editCommentForm< ?=$messageId ?>" class="btn-success" value="Send my answer"/> -- >

                                                                <p id="cancelBtns"class="cancelBtns< ?=$messageId ?> cancelAnswerBtn< ?=$messageId ?>"><span class="far fa-window-close"></span> Cancel</p>

                                                                </div>
                                                        </form>
                                                </div>
                                                -->


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
                                                                <!-- Used to count how many characters there is left -->
                                                                <div class="form-group">
                                                                        <input type="submit" class="btn btn-primary"  value="Answer"/>
                                                                </div>
                                                                </form>
                                                        </div>
                                                        </div>
                                                </div>
                                                </div>
                                                
                                                <!-- this script stays here because it uses PHP variables and can't work in Main.js -->
                                                <script>
                                                /*$(".editBtns< ?=$messageId?>, .cancelBtns< ?=$messageId ?>").on("click", function(){
                                                        $(".editCommentForm< ?=$messageId?>, .editCommentBtn< ?=$messageId ?>").toggle("slow")
                                                })
                                                </script>


                                                

                                                <?php
                                                //for each message, its id is added to $arrayMessages
                                                array_push($arrayMessages, $messageId);
                                        }
                                }
                                ?>
                        </form>
                        <!-- displays a message if no new message -->
                        <div class="noReportedComments">There is no new message</div>
                </section>
        </div>



        


        <?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>



