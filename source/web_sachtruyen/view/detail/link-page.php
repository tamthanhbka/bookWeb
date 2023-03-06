<div class="row path-web">
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <a class="cl-grey" href="../../">Trang chủ</a>
        <span class="bi bi-chevron-right icon-path-web"></span>
        <a class="cl-grey" href="#"><?= $sach->theLoai ?></a>
        <?php if (isset($_GET['id'])) {
        ?>
            <span class="bi bi-chevron-right icon-path-web"></span>
            <a class="cl-green" href="/web_sachtruyen/view/detail?id=<?= $_GET['id'] ?>"><?= $sach->ten ?></a>
        <?php
        }
        ?>
    </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>