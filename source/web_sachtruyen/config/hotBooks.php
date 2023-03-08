<?php
// include("config/config.php");                        
$sachs = Sach::getAllBooks();
for ($i = 0; $i < 5; $i++) {
    $sach = $sachs[$i];
    include("view/book/hotBooks.php");
}
?>