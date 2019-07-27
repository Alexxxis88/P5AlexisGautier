<!-- Desktop Menu -->
<div class="menuAdmin fade-down">
    <a href="index.php"><i class="fas fa-home"></i></a>
    <div class="menuBtns" id="menuDesktop" >

        <?php //if there is cookies or session information, they are used to display user name
        if (isset($_COOKIE['email']) or isset($_SESSION['email'])) {
            if (isset($_COOKIE['email'])) {
                $username = $_COOKIE['email'];
            } elseif (isset($_SESSION['email'])) {
                $username = $_SESSION['email'];
            } ?>

            <nav class="adminMenu">
                <ul>
                <li><a class="adminMenuLink" href="index.php?action=servicesList"><i class="fas fa-list"></i>Services</a></li>
                <li><a class="adminMenuLink" href="index.php?action=packQuotesAdmin&page=1&sortBy=5"><i class="fas fa-file-invoice packQuoteAlert"></i>Pack Quotes</a></li>
                <li><a class="adminMenuLink" href="index.php?action=customQuotesAdmin&page=1&sortBy=5"><i class="fas fa-file-invoice-dollar customQuoteAlert"></i>Custom Quotes</a></li>
                <li><a class="adminMenuLink" href="index.php?action=messagesAdmin&page=1&sortBy=5"><i class="fas fa-comments msgAlert"></i>Messages</a></li>
                </ul>
            </nav>
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
        <li><a class="adminMenuLink" href="index.php?action=servicesList"><i class="fas fa-list"></i>Services</a></li>
        <li><a class="adminMenuLink" href="index.php?action=packQuotesAdmin&page=1&sortBy=5"><i class="fas fa-file-invoice packQuoteAlert"></i>Pack Quotes</a></li>
        <li><a class="adminMenuLink" href="index.php?action=customQuotesAdmin&page=1&sortBy=5"><i class="fas fa-file-invoice-dollar customQuoteAlert"></i>Custom Quotes</a></li>
        <li><a class="adminMenuLink" href="index.php?action=messagesAdmin&page&page=1&sortBy=5"><i class="fas fa-comment-alt msgAlert"></i>Messages</a></li>
        <?php //if there is cookies or session information, they are used to display user name
        if (isset($_COOKIE['email']) or isset($_SESSION['email'])) {
            if (isset($_COOKIE['email'])) {
                $username = $_COOKIE['email'];
            } elseif (isset($_SESSION['email'])) {
                $username = $_SESSION['email'];
            } ?>
            <!-- Log Out button -->
            <li><a href="index.php?action=logOutCheck"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>

            <!-- Change Password button -->
            <li><a href="index.php?action=displayUpdatePass"><i class="fas fa-unlock-alt"></i>Update Password</a></li>
        <?php
        }
        ?>
    </ul>
</nav>

<!-- This script stays here because it uses PHP variables and can't work in Main.js -->
<!-- Display new message alert -->
<?php
if ($arrayAlert[0] == true ) { ?>
    <script>$('.msgAlert').css("color", "rgb(223, 57, 57)");</script>
<?php }
?>

<!-- Display pack quote request alert-->
<?php
if ($arrayAlert[1] == true ) { ?>
    <script>$('.packQuoteAlert').css("color", "rgb(223, 57, 57)");</script>
<?php }
?>

<!-- Display custom quote request alert-->
<?php
if ($arrayAlert[2] == true ) { ?>
    <script>$('.customQuoteAlert').css("color", "rgb(223, 57, 57)");</script>
<?php }
?>



