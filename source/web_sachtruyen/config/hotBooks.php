<?php
    $sachs = Sach::getAllBooks();
    for($i = 0; $i < 6; $i++) {
        $sach = $sachs[$i];
        include("view/book/hotBooks.php");
    }
?>