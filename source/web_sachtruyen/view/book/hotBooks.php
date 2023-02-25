<?php
    // $href_docsach
    // if chua loggin 
    //$href_themVaoTuSach = link login
    // if đã loggin
    //$href_themVaoTuSach = link hien thi tu sach
    $href_docsach = "#";
?>
<div class="col-2">
    <div class="card">
        <a href="<?php echo $href; ?>" class="select-book">
            <img src="<?php echo $sach->URLbiaSach; ?>" class="card-img-top" alt="...">
            <div class="card-title mt-2 ms-3 mb-0"><?php echo $sach->ten; ?></div>
        </a>
        <div class="card-body">
            
            <a href="" class="btn btn-primary">Thêm vào tủ sách</a>
        </div>
    </div>
</div>

