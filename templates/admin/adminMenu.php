<!-- Desktop Menu -->
<div class="menuAdmin fade-down">
    <a href="index.php"><span class="fas fa-home"></span></a>
    <div class="menuBtns" id="menuDesktop" >
        <nav class="adminMenu">
            <ul>
            <li><a class="adminMenuLink" href="index.php?action=quotesAdmin"><span class="fas fa-file-invoice-dollar quoteAlert"></span>Quotes</a></li>
            <li><a class="adminMenuLink" href="index.php?action=messagesAdmin&page=1&sortBy=10"><span class="fas fa-comments msgAlert"></span>Messages</a></li>
            </ul>
        </nav>

        <?php //if there is cookies or session information, they are used to display user name
        if (isset($_COOKIE['email']) or isset($_SESSION['email'])) {
            if (isset($_COOKIE['email'])) {
                $username = $_COOKIE['email'];
            } elseif (isset($_SESSION['email'])) {
                $username = $_SESSION['email'];
            } ?>
            <!-- Log Out button -->
            <a href="index.php?action=logOutCheck"><button type="button" class="btn btn-info ">Log Out</button></a>

            <!-- Change Password button -->
            <a href="index.php?action=displayUpdatePass"><button type="button" class="btn btn-info ">Update Password</button></a>
        <?php
        }
        ?>
    </div>
</div>

<!-- Burger Menu Icon -->
<div id="burgerMenu">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
</div>

<!-- Burger Menu Navigation -->
<nav class="navMenu"  id="burgerNav">
    <ul>
        <li><a class="adminMenuLink" href="index.php?action=quotesAdmin"><span class="fas fa-file-invoice-dollar quoteAlert"></span>Quotes</a></li>
        <li><a class="adminMenuLink" href="index.php?action=messagesAdmin&page=1&sortBy=10"><span class="fas fa-comment-alt msgAlert"></span>Messages</a></li>
        <?php //if there is cookies or session information, they are used to display user name
        if (isset($_COOKIE['email']) or isset($_SESSION['email'])) {
            if (isset($_COOKIE['email'])) {
                $username = $_COOKIE['email'];
            } elseif (isset($_SESSION['email'])) {
                $username = $_SESSION['email'];
            } ?>
            <!-- Log Out button -->
            <li><a href="index.php?action=logOutCheck"><span class="fas fa-sign-out-alt"></span>Log Out</a></li>

            <!-- Change Password button -->
            <li><a href="index.php?action=displayUpdatePass"><span class="fas fa-unlock-alt"></span>Update Password</a></li>
        <?php
        }
        ?>
    </ul>
</nav>

<!-- Display new message alert -->
<?php
if ($isThereNewMessages == true ) { ?>
    <script>$('.msgAlert').css("color", "rgb(233, 45, 45)");</script>
<?php }
?>

<!-- Display new quote request alert 
< ?php
if ($isThereNewQuotes == true ) { ?>
    <script>$('.quoteAlert').css("color", "rgb(233, 45, 45)");</script>
< ?php }
?>-->


