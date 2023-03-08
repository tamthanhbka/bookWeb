<div class="view-book-comment">

    <?php
    $binhluans = BinhLuan::getCmtBySach($_GET['id']);

    foreach ($binhluans as $cmt) {
        $user = User::getUserById($cmt->idNguoiDung); //);
    ?>
        <div class="row item-cmt">
            <div class="avatar">
                <img src="../../images/icon/icon-avt.png" alt="ảnh người dùng">
            </div>
            <div class="comment">
                <h6><?= $user->tenDN ?></h6>
                <p><?= $cmt->noidung ?></p>
                <?php
                ?>
            </div>
            <div class="row detail-cmt">
                <span class="date"><?= $cmt->ngay ?></span>
                <?php
                if (isset($cmt->idChuong)) {
                ?>
                    <span class="chap">Bình luận ở chương <?= $cmt->idChuong ?></span>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>


</div>