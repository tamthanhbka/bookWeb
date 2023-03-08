<?php
include "../model/sach/Sach.php";
try {
    $item = new BookCase(1, $_GET['id'], date_format(date_create(), "Y/m/d"));
    $item->addItem($item);
} catch (Exception $e) {
    header('HTTP/1.0 403 Forbidden');
}
