<div class="row">
    <?php
        // include("model/sach/Sach.php");
        // $sachs = Sach::getBooksByCategory("Truyện ngắn");
        // foreach ($sachs as $sach) {
        //     include("view/book/categoryAllBooks.php");
        // }
        include("model/sach/Sach.php");
        $categories = Sach::getAllCategory();
        foreach ($categories as $category) {
            echo"$category<br>";
        }
    ?>                    
</div>