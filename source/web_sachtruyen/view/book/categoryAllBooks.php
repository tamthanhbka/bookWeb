<?php
// $href_docsach
// if chua loggin 
//$href_themVaoTuSach = link login
// if đã loggin
//$href_themVaoTuSach = link hien thi tu sach
$href_docsach = "../web_sachtruyen/view/detail/index.php?id=$sach->id";
?>
<div class="col-6 mt-3 mb-1">
    <div class="storybook-view-1 row">
        <div class="col-7 bc-white">
            <img class="story-img col-10 bc-cccc my-2" src="<?php echo $sach->URLbiaSach; ?>" alt="">
        </div>

        <div class="new-story__content col-5 bc-white pt-3 position-relative">
            <p>
                <a href="<?= $href_docsach ?>" class="name fw-bold text-decoration-none text-black" style="max-width: 150px;">
                    <?php echo $sach->ten; ?>
                </a>
            </p>
            <span class="auth"><?php echo $sach->tacGia; ?></span>
            <a href="http://127.0.0.1/web_sachtruyen/index1.php?TL=<?php echo $sach->theLoai; ?>" class="category no-decoration">
                <?php echo $sach->theLoai; ?>
            </a>
            <p class="description">
                <?php echo $sach->moTa; ?>
            </p>
            <div class="chapter">
                <?php echo $sach->soChuong; ?> Chương
            </div>



            <div class="pt-2 pb-4 status  <?php if ($sach->trangThai == 'Đang ra') echo "status-dangra";
                                            else echo "status-hoanthanh"; ?>">
                <?= $sach->trangThai ?>
            </div>


            <div class="row position-absolute bottom-0 end-0">
                <div class="col-5 mb-2">
                    <a class="icon ">
                        <i alt="Thêm vào tủ sách" href="controller/addToBookCase.php?id=<?= $sach->id ?>" class="submit-btn fa-solid fa-circle-plus fa-2x"></i>
                    </a>
                </div>
                <div class="col-5 mb-2">
                    <a class="icon">
                        <i alt="Mua sách" href="controller/orderBook.php?id=<?= $sach->id ?>" class="submit-btn fa-solid fa-cart-shopping fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>