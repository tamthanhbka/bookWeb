<?php
<<<<<<< HEAD
// if(1)$href_docsach = link den trang doc sach;
$href_docsach = "../web_sachtruyen/view/detail/index.php?id=$sach->id";
// 
=======
    // if(1)$href_docsach = link den trang doc sach;
    $href_docsach = "../web_sachtruyen/view/detail/index.php?id=$sach->id";
    // 
>>>>>>> main
?>
<div class="recommended-book col-6 py-3 rounded">
    <div class="row">
        <div class="recommend-book1__header col-4">
<<<<<<< HEAD
            <a href="<?php echo $href_docsach; ?>">
                <img src="<?php echo $sach->URLbiaSach; ?>" class="card-img-top rounded" alt="...">
            </a>
        </div>
=======
            <a href="<?php echo$href_docsach; ?>">
                <img src="<?php echo $sach->URLbiaSach; ?>" class="card-img-top rounded" alt="...">
            </a>
        </div> 
>>>>>>> main
        <div class="recommend-book1__header__title col-8">
            <div class="fs-5 mt-4">
                <a href="<?php echo $href_docsach; ?>" class="no-decoration name">
                    <?php echo $sach->ten; ?>
                </a>
            </div>
            <div class="fs-6 mt-3">
                <a href="<?php echo $href_docsach; ?>" class="no-decoration color-9 name">
                    <?php echo $sach->tacGia; ?>
                </a>
            </div>

            <div class="fs-6 mt-3">
                <a href="<?php echo $href_docsach; ?>" class="no-decoration color-9 name">
                    <?php echo $sach->theLoai; ?>
                </a>
            </div>
            <div class="fs-6 mt-3">
                <?php echo $sach->moTa; ?>
            </div>
        </div>
    </div>
</div>