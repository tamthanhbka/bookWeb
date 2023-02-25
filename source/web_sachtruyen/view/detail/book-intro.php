<div class="row book-intro">
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 book-intro-main">
        <div class="row book-intro-content">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 book-cover">
                <img src="../../images/biasach/<?php echo $sach->URLbiaSach; ?>" alt="cover-book1">
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 book-info">
                <div class="row book-name">
                    <h3><a href="#"><?php echo $sach->ten; ?></a></h3>
                </div>
                <div class="row book-author-status">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 author">
                        <p>Tác giả : <a href="#"> <?= $sach->tacGia ?> </a></p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                        <p class="status <?php if ($sach->trangThai == 'Đang ra') echo "status-dangra";
                                            else echo "status-hoanthanh"; ?>"><?= $sach->trangThai; ?></p>
                    </div>
                </div>
                <div class="row book-type">
                    <a href=""><?= $sach->theLoai; ?></a>
                </div>
                <div class="row book-desc">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 book-chap">
                        <div class="row"><i class="bi bi-list-ul icon-book-desc"></i>Chương</div>
                        <div class="row number"><?php echo $sach->soChuong; ?></div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="row"><i class="bi bi-suit-heart icon-book-desc"></i>Theo dõi</div>
                        <div class="row number">102</div>
                    </div>

                </div>
                <div class="row book-control">
                    <div class="row control">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <a class="btn-green" href="<?= "/web_sachtruyen/view/chapter?id=" . $sach->id . "&chapId=" . $chuongs[0]->chiSo ?>">Đọc sách</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <a class="btn-green" href="#">Thêm vào tủ sách</a>
                        </div>
                    </div>

                    <!-- <div class="row add-bookcase">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="#"></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>