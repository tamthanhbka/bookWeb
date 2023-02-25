<?php
    // $href_docsach
    // if chua loggin 
    //$href_themVaoTuSach = link login
    // if đã loggin
    //$href_themVaoTuSach = link hien thi tu sach
    $href_docsach = "#";
?>
<div class="col-6 mt-3">
    <div class="storybook-view-1 row">
        <div class="col-7">
            <img class="story-img col-10 bc-cccc" src="<?php echo $sach->URLbiaSach; ?>" alt="">
        </div>
        <div class="new-story__content col-5 ml--5 mt-3">
            <p>
                <a href="$href_docsach" class="name fw-bold text-decoration-none text-black"><?php echo $sach->ten; ?></a>    
            </p>
            <span class="auth"><?php echo $sach->tacGia; ?></span>
            <span class="category"><?php echo $sach->theLoai; ?></span>
            <p class="description">
                <?php echo $sach->moTa; ?>
            </p>
            <div class="chapter">
                <?php echo $sach->soChuong; ?> Chương
            </div>
            <span class="status status-2"><?php echo $sach->trangThai; ?></span>
            <span class="addbook">Thêm vào tủ sách</span>
        </div>
    </div>
</div>