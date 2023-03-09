<?php
    session_start();
    $_SESSION['id'] = NULL;
    $_SESSION['username'] = NULL;
    header("Location:http://127.0.0.1/web_sachtruyen/index.php");
?>