<?php
session_start();
$_SESSION["id"] = null;
$_SESSION['username'] = null;
$_SESSION['user'] = null;
header("Location:http://127.0.0.1/web_sachtruyen/index.php");
