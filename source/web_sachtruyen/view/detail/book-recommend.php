<?php
$sachs = Sach::getListBook($_GET['id']);
?>
<div class="row list-book">
    <?php
    foreach ($sachs as $sach) {
        if ($sach->id == $_GET['id']) continue;
    ?>
        <div class="row item-recommend">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="../../images/biasach/<?php echo $sach->URLbiaSach; ?>" alt="">
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="item-name">
                    <a href="<?= "/web_sachtruyen/view/detail?id=" . $sach->id ?>"><?php echo $sach->ten; ?></a>
                </div>
                <div class="status <?php if ($sach->trangThai == 'Đang ra') echo "status-dangra";
                                    else echo "status-hoanthanh"; ?>">
                    <?php echo $sach->trangThai; ?>
                </div>
            </div>
        </div>


    <?php
    }
    ?>

</div>