<?php
//  $href_docsach = link den chi tiet sach
    $href_docsach = "../web_sachtruyen/view/detail/index.php?id=$sach->id";
?>

<div class="recommended-book col-6 py-3 rounded position-relative">
    <div class="row">
        <div class="recommend-book1__header col-4">
            <a href="<?php echo $href_docsach; ?>">
                <img src="<?php echo $sach->URLbiaSach; ?>" class="card-img-top rounded" alt="...">
            </a>
        </div>
        <div class="recommend-book1__header__title col-8">
            <div class="fs-3">
                <a href="<?php echo $href_docsach; ?>" class="no-decoration name">
                    <?php echo $sach->ten; ?>
                </a>
            </div>
            <div class="fs-6 mt-3">
                <a href="http://127.0.0.1/web_sachtruyen/index1.php?TL=<?php echo $sach->theLoai; ?>" class="no-decoration color-9 name">
                    <?php echo $sach->theLoai; ?>
                </a>
            </div>

            <div class="row fs-6 mt-3">
                <div class="col-3 ">
                    <i></i>
                    Chương <br>
                    <div class="fw-bold"><?php echo $sach->soChuong; ?></div>
                </div>
                <div class="col-3">
                    <i></i>
                    Theo dõi<br>
                    <div class="fw-bold">100</div>
                </div>
                <div class="col-3">
                    <i></i>
                    Điểm<br>
                    <div class="fw-bold"><?php echo $sach->giaSach; ?></div>
                </div>
            </div>
            <div class="row position-absolute bottom-0 end-0" >
                <div class="col-5 mb-2">
                    <a href="" class="add-book icon ">
                        <i class="fa-solid fa-circle-plus fa-2x"></i>
                    </a>        
                </div>
                <div class="col-5 mb-2">
                    <a href="" class="order-book icon">
                        <i class="fa-solid fa-cart-shopping fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>