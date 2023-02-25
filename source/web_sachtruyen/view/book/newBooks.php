<?php
    // if(1)$href_docsach = link den trang doc sach;
    $href_docsach = "#";
    // 
?>
<div class="recommended-book col-6 py-3">
    <div class="row">
        <div class="recommend-book1__header col-4">
            <a href="<?php echo$href_docsach; ?>">
                <img src="<?php echo $sach->URLbiaSach; ?>" class="card-img-top" alt="...">
            </a>
        </div> 
        <div class="recommend-book1__header__title col-8">
            <div class="fs-5 mt-4">
                <a href="<?php echo $href_docsach; ?>" class="no-decoration">
                    <?php echo $sach->ten; ?>
                </a>
            </div>
            <div class="fs-6 mt-3">
                <a href="<?php echo $href_docsach; ?>" class="no-decoration color-9">
                    <?php echo $sach->tacGia; ?>
                </a>
            </div>

            <div class="fs-6 mt-3">
                <a href="<?php echo $href_docsach; ?>" class="no-decoration color-9">
                    <?php echo $sach->theLoai; ?>
                </a>
            </div>
            <div class="fs-6 mt-3">
                <?php echo $sach->moTa; ?>
            </div>
        </div>
    </div>
</div>