<?php
if (!isset($_GET['id']) || !$_GET['id'] || !isset($_GET['chapId']) || !$_GET['chapId'] || !is_numeric($_GET['chapId'])) {
    include("../notfound/403.php");
    die;
}
include("../../model/sach/Sach.php");
$sach = Sach::findById($_GET['id']);
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
        <div class=" row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 chapter">
                <?php
                include("../detail/link-page.php");
                include("chap-content.php");
                include("../detail/add-book-comment.php");
                include("../detail/view-book-comment.php");
                ?>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        </div>




    </section>

    <!-- Footer -->
    <?php
    include("../footer/footer.php");
    ?>

    <?php
    $chuongs = Chuong::findBySachId($_GET['id']);
    ?>
    <div class=" row listchap disable">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 popup-listchap">
            <div class="popup-header">
                <h2> <i class="bi bi-list-stars"></i> Mục lục (<?= count($chuongs) ?> chương)</h2>
                <i id="closePopup" class="bi bi-x-lg close-icon"></i>
            </div>
            <div class="row content popup">
                <ul>
                    <?php
                    foreach ($chuongs as $chuong) { ?>
                        <li class="" chapter-item>
                            <a href="/web_sachtruyen/view/chapter?id=<?= $_GET['id'] ?>&chapId=<?= $chuong->chiSo ?>"><?= $chuong->tenChuong; ?></a>
                            <span><?php echo (int)(strlen($chuong->noiDung) / 6) . " chữ"; ?></span>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    </div>

</body>

</html>
<script defer>
    let openPopupBtns = document.querySelectorAll(".btn-show-list-chap");
    let popUp = document.querySelector(".listchap");
    openPopupBtns.forEach((openPopupBtn) => {
        openPopupBtn.addEventListener("click", (e) => {
            e.preventDefault();
            popUp.style.display = "flex";
        })
    })

    let closePopupBtn = document.getElementById("closePopup");
    closePopupBtn.addEventListener("click", (e) => {
        e.preventDefault();
        popUp.style.display = "none";
    })
</script>