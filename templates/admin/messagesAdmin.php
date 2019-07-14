<?php
        $title = 'Alexis Gautier - Log In';
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
                                                $idMessage = $newMessages[$i]->id(); //gets the id of the post to use in buttons "View comment" & "View related post" urls
                                                $messageId = $newMessages[$i]->id();
                                                $firstName = $newMessages[$i]->firstName();
                                                $lastName = $newMessages[$i]->lastName();
                                                $contactEmail = $newMessages[$i]->contactEmail();
                                                $topic = $newMessages[$i]->topic();
                                                $messageContent = $newMessages[$i]->messageContent();
                                                $messageDate = $newMessages[$i]->messageDate();
                                                $flag = $newMessages[$i]->flag(); ?>
                                                <div class="reportedComments">
                                                        <p class="commentHead"><input type="checkbox" id="messageId" name="selectComments[]" value="<?= $idMessage?>" checked >
                                                        <strong><?= $topic?></strong> sent by <strong><?= $firstName . ' ' . $lastName ?></strong> on <?= $messageDate ?></p>

                                                        <!-- transform non html links in messageContent into clickable links-->
                                                        <p><strong>Message content :</strong> <?= nl2br($messageContent = preg_replace('#http[s]?://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $messageContent)) ?></p>
                                                        <div class="manageComIcons">
                                                                <div class="approvDelComs">
                                                                <a class="far fa-edit editBtns<?=$idMessage ?> editCommentBtn<?=$idMessage ?>">Answer</a></a>

                                                                <a href="index.php?action=deleteMessage&amp;messageId=<?= $idMessage ?>" onclick="return confirm('Delete this message ?')"><span class="far fa-trash-alt"></span> Delete</a>

                                                                <a href="index.php?action=archiveMessage&amp;messageId=<?= $idMessage ?>"  onclick="return confirm('Archive this message ?')" ><span class="far fa-check-square"></span>  Archive</a>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!-- Answer message -->
                                                <!-- $idMessage['id'] in class name to display only the form of the selected comment -->
                                                <div class="editCommentForm<?=$idMessage ?>">
                                                        <form action="index.php?action=answerMessage&amp;commentId=<?= $idMessage ?>" method="post" id="editCommentForm<?=$idMessage ?>">
                                                                <div>
                                                                        <br>
                                                                        <textarea id="comment" name="comment" cols="80" rows="5" maxlength="700" required></textarea>
                                                                </div>
                                                                <div>
                                                                <button type="submit" form="editCommentForm<?=$idMessage ?>" class="btn-success" value="Send my answer"> Send my answer </button>

                                                                <!-- <input type="submit" form="editCommentForm< ?=$idMessage ?>" class="btn-success" value="Send my answer"/> -->

                                                                <p id="cancelBtns"class="cancelBtns<?=$idMessage ?> cancelAnswerBtn<?=$idMessage ?>"><span class="far fa-window-close"></span> Cancel</p>

                                                                </div>
                                                        </form>
                                                </div>


                                                <!-- this script stays here because it uses PHP variables and can't work in Main.js -->
                                                <script>
                                                $(".editBtns<?=$idMessage?>, .cancelBtns<?=$idMessage ?>").on("click", function(){
                                                        $(".editCommentForm<?=$idMessage?>, .editCommentBtn<?=$idMessage ?>").toggle("slow")
                                                })
                                                </script>


                                                <?php
                                                //for each message, its id is added to $arrayMessages
                                                array_push($arrayMessages, $idMessage);
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



