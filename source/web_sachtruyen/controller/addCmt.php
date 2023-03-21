<?php
include "../model/sach/Sach.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['id'])) {
        header("Location:http://127.0.0.1/web_sachtruyen/view/login/login.php");
        die();
    }
    $noiDung = $_POST["comment"];
    if (!isset($_GET['chapId']) || !$_GET['chapId'] || !is_numeric($_GET['chapId'])) {
        BinhLuan::addCmtBySach($_GET['id'], $noiDung, 1);
    } else {
        echo $_GET['chapId'];
        BinhLuan::addCmtByChuong($_GET['id'], $_GET['chapId'], $noiDung, 1);
    }
    $previous = "javascript:history.go(-1)";
    if (isset($_SERVER['HTTP_REFERER'])) {
        $previous = $_SERVER['HTTP_REFERER'] . "#cmt";
    }
    header("Location:$previous");
}
