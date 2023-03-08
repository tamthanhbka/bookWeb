<?php
if (!isset($_GET['id']) || !$_GET['id'] || !is_numeric($_GET['id'])) {
    include("../notfound/403.php");
    die;
}
include("../../model/sach/Sach.php");
$sach = Sach::findById($_GET['id']);
$chuongs = Chuong::findBySachId($_GET['id']);
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

</body>

</html>

<script>
    class Notifi {
        messElement;
        element;
        susseccIcon;
        constructor() {
            this.element = document.querySelector(".notifi");
            this.messElement = document.querySelector(".mess");
            this.susseccIcon = document.getElementById("sussecc");
        }
        show(mess, sussecc = true, sec = 4) {
            this.messElement.innerText = mess;
            this.element.style.right = "15px";
            this.element.style.opacity = "1";
            let element = this.element;
            let susseccIcon = this.susseccIcon;
            clearTimeout(
                setTimeout(() => {
                    element.style.right = "-200px";
                    this.element.style.opacity = "0";
                }, sec * 1000) - 1);
            if (sussecc) {
                susseccIcon.classList.remove("bi-info-circle");
                susseccIcon.classList.add("bi-check-lg");
                susseccIcon.style.color = "#6fc13c";
            } else {
                susseccIcon.classList.remove("bi-check-lg");
                susseccIcon.classList.add("bi-info-circle");
                susseccIcon.style.color = "orange";
            }
        }
    }
    const call = (url) => {
        return fetch(url).then((response) => response.status).then((status) => {
            if (status !== 200)
                return false;
            return true;
        });
    }
    let addBookBtn = document.getElementById("add-book");
    let orderBookBtn = document.getElementById("order-book");
    // orderBookBtn.classList.re
    addBookBtn.addEventListener("click", (e) => {
        e.preventDefault();
        call("../../controller/addToBookCase.php?id=<?= $_GET['id'] ?>").then(bool => {
            new Notifi().show("Thêm vào tủ sách thành công!");
        })
    })

    orderBookBtn.addEventListener("click", (e) => {
        e.preventDefault();
        call("../../controller/orderBook.php?id=<?= $_GET['id'] ?>").then(bool => {
            if (bool)
                new Notifi().show("Mua sách thành công!");
            else {
                new Notifi().show("Mua sách thất bại!", false);
            }
        })
    })
</script>