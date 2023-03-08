<?php
include "../model/sach/Sach.php";
try {
    $order = new OrderBook(1, $_GET['id'], date_format(date_create(), "Y/m/d"));
    $order->addItem($order);
    // User::setPoint(1, $_GET['id']);
} catch (Exception $e) {
    header('HTTP/1.0 403 Forbidden');
    throw $e;
    // die($e->getMessage());
}
