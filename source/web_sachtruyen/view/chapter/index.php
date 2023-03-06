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
    <!-- <base href="web_sachtruyen"> -->
</head>

<body>

    <header>
        <div class="row header">
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 logo">
                <img src="../../images/logo/main-logo.jpg" alt="main-logo">
            </div>

            <div class="col-xs-4 col-sm-4 col-md-6 col-lg-6 search">
                <form action="" method="post">
                    <input class="form-control" type="text" name="search" id="search" placeholder="Nhập tên tác giả, sách...">
                </form>

            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

            </div>
        </div>
        </div>
        <div class="row nav">
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 list-type">
                <a href="#">Thể loại</a>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-10 col-lg-10 type">
                <ul>
                    <li>
                        <a href="#">Tất cả</a>
                    </li>
                    <li>
                        <a href="#">Sách tuổi trẻ</a>
                    </li>
                    <li>
                        <a href="#">Truyện ngôn tình</a>
                    </li>
                    <li>
                        <a href="#">Sách kinh tế</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

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

    <footer>
        <p>Day la footer</p>
    </footer>
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