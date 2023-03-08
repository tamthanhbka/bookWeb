<?php
if (!isset($_GET['id']) || !$_GET['id'] || !is_numeric($_GET['id'])) {
    include("../notfound/403.php");
    die;
}
include("../../model/sach/Sach.php");
$sach = Sach::findById($_GET['id']);
$chuongs = Chuong::findBySachId($_GET['id']);
$like = BookCase::getLike($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThichDocSach</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/listbook.css">
    <script>
        const $ = document.querySelector.bind(document);
    </script>
    <!-- <base href="web_sachtruyen"> -->
</head>

<body>

    <!-- Header -->
    <?php
    // if
    include("../header/header.php");
    ?>

    <!-- Nav bar -->
    <?php
    include("../header/navbar.php");
    ?>

    <section>
        <?php
        include("link-page.php");
        include("book-intro.php");
        include("book-other-info.php");
        ?>


    </section>

    <!-- Footer -->
    <?php
    include("../footer/footer.php");
    ?>
    <div class="notifi">
        <span><i id="sussecc" class="bi bi-check-lg"></i><span class="mess">Thêm vào tủ sách thành công</span></span>
    </div>
    <script src="../../notifi.js"></script>

</body>

</html>