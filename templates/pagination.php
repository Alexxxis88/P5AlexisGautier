<?php
echo '<p>Page : ';
for ($i=1; $i<=$nbOfPages; $i++) {
    if ($i==$currentPage) {
        echo ' [ '.$i.' ] ';
    } else {
        echo ' <a class="pagesLinks" href="index.php?action=' . $_GET['action'] . '&page='.$i.'&sortBy=' . $_GET['sortBy'] . '">'.$i.'</a> ';
    }
}
echo '</p>';
