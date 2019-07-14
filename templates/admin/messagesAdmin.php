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
                                                        Le message de <strong><?= $firstName . ' ' . $lastName ?></strong> du <?= $messageDate ?></p>

                                                        <!-- transform non html links in messageContent into clickable links-->
                                                        <p><?= nl2br($messageContent = preg_replace('#http[s]?://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $messageContent)) ?></p>
                                                        <div class="manageComIcons">
                                                                
                                                                <div class="approvDelComs">
                                                                <a href="index.php?action=approveComment&amp;messageId=<?= $idMessage ?>"  onclick="return confirm('Archive ce commentaire ?')" ><span class="far fa-check-square"></span>  Archive</a>

                                                                <a href="index.php?action=deleteComment&amp;messageId=<?= $idMessage ?>" onclick="return confirm('Delete ce commentaire ?')"><span class="far fa-trash-alt"></span> Delete</a>
                                                                </div>
                                                        </div>
                                                </div>
                                                <?php
                                                //for each comment, its id is added to $arrayMessages
                                                array_push($arrayMessages, $idMessage);
                                        }
                                }
                                ?>
                        </form>
                        <!-- displays a message if no reported comments -->
                        <div class="noReportedComments">There is no new message</div>
                </section>

                
        </div>
        <?php
$content = ob_get_clean();
require('templates/baseAdmin.php');
?>



