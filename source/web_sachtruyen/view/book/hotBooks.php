<?php
// $href_docsach
// if chua loggin 
//$href_themVaoTuSach = link login
// if đã loggin
//$href_themVaoTuSach = link hien thi tu sach
$href_docsach = "#";
$href = "../web_sachtruyen/view/detail/index.php?id=$sach->id";
?>
<div class="col-2">
    <div class="card">
        <a href="<?php echo $href; ?>" class="select-book name">
            <img src="<?php echo $sach->URLbiaSach; ?>" class="card-img-top" alt="...">
            <div class="d-inline-block text-truncate card-title mt-2 ms-3 mb-0" style="max-width: 150px;">
                <?php echo $sach->ten; ?>
            </div>
        </a>
    </div>
</div>