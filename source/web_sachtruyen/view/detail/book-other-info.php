<div class="row gap-6 other-info">
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 book-desc">
        <div id="test" class="row book-detail">
            <div class="row book-detail-option">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 review">
                    <a id="intro" href="?id=<?= $sach->id ?>&activeTab=intro#test">Giới thiệu truyện</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 list-chap">
                    <a id="listchapter" href="?id=<?php echo $sach->id; ?>&activeTab=listchapter#test">Danh sách chương</a>
                </div>
            </div>
            <?php

            // if (isset($_GET['activeTab'])) {
            include("listchapter.php");
            include("intro-content.php");
            // }
            ?>
        </div>
        <?php
        include("add-book-comment.php");
        include("view-book-comment.php");
        ?>
    </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 book-recommend">
        <div class="row">
            <h3><i class="bi bi-bookmark-heart icon-title"></i>Có thể bạn thích</h3>
        </div>
        <?php
        include("book-recommend.php");
        ?>
    </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>

<script>
    const introBtn = $("#intro");
    const listchapterBtn = $("#listchapter");
    const contents = document.querySelectorAll(".content");
    introBtn.onclick = function onclick(e) {
        e.preventDefault();
        contents[1].classList.remove("disable");
        contents[0].classList.add("disable");
    }
    listchapterBtn.onclick = function onclick(e) {
        e.preventDefault();
        contents[0].classList.remove("disable");
        contents[1].classList.add("disable");
    }
</script>