<?php
try {
    //code...
    $chuong = Chuong::findById($_GET['id'], $_GET['chapId']);
} catch (\Throwable $th) {
    die('Chương này không tồn tại!');
}
?>
<div class="row main-chapter">
    <div class="row header-chapter">
        <div class="book-name">
            <a href="<?= "/web_sachtruyen/view/detail?id=" . $_GET['id'] ?>">
                <h3><?= $sach->ten ?></h3>
            </a>
        </div>
        <div class="row control-chapter">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-chapter-item">
                <?php
                if ($_GET['chapId'] > 1) {
                ?>
                    <a class="btn-white" href="<?= "/web_sachtruyen/view/chapter?id=" . $sach->id . "&chapId=" . $_GET['chapId'] - 1 ?>"> <i class="bi bi-arrow-left-short icon-chapter"></i>Chương trước</a>
                <?php
                }
                ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-chapter-item ">
                <p class="btn-green btn-show-list-chap">Chương <?= $_GET['chapId'] ?><i class="bi bi-chevron-compact-down icon-show-list-chap"></i></p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-chapter-item">
                <?php
                if ($_GET['chapId'] < $sach->soChuong) {
                ?>
                    <a class="btn-white" href="<?= "/web_sachtruyen/view/chapter?id=" . $sach->id . "&chapId=" . $_GET['chapId'] + 1 ?>">Chương sau <i class="bi bi-arrow-right-short icon-chapter"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="chap-name">
            <h4><?= $chuong->tenChuong ?></h4>
        </div>
        <div class="chap-desc"></div>
    </div>
    <div class="row content-chapter">
        <p><?= str_replace("\n", "</p><p>", $chuong->noiDung) ?></p>
    </div>

    <div class="row control-chapter">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-chapter-item">
            <?php
            if ($_GET['chapId'] > 1) {
            ?>
                <a class="btn-white" href="<?= "/web_sachtruyen/view/chapter?id=" . $sach->id . "&chapId=" . $_GET['chapId'] - 1 ?>"> <i class="bi bi-arrow-left-short icon-chapter"></i>Chương trước</a>
            <?php
            }
            ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-chapter-item ">
            <p class="btn-green btn-show-list-chap">Chương <?= $_GET['chapId'] ?><i class="bi bi-chevron-compact-down icon-show-list-chap"></i></p>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 control-chapter-item">
            <?php
            if ($_GET['chapId'] < $sach->soChuong) {
            ?>
                <a class="btn-white" href="<?= "/web_sachtruyen/view/chapter?id=" . $sach->id . "&chapId=" . $_GET['chapId'] + 1 ?>">Chương sau <i class="bi bi-arrow-right-short icon-chapter"></i></a>
            <?php
            }
            ?>
        </div>
    </div>


</div>