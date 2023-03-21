<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThichDocSach</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Icons-->
    <link rel="stylesheet" href="./fonts/fontawesome-free-6.3.0-web/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/listbook.css">


    <script>
        const $ = document.querySelector.bind(document);
    </script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <!-- Include Model -->
    <?php
    include("model/sach/Sach.php");
    ?>
    <!-- Header -->
    <?php
    // if
    include("view/header/header.php");
    ?>

    <!-- Nav bar -->
    <?php
    include("view/header/navbar.php");
    ?>

    <!-- Body -->
    <div id="body" class="body row">
        <!-- Slider -->
        <?php
        include("view/body/slider.php");
        ?>

        <!-- Hot book -->
        <div class="row">
            <div class="col-11 hot-book ms-5 mt-2 pt-2 pb-3 rounded">
                <div class="row ">
                    <div class="hot-book__name mb-2">
                        <img src="images/miniLogo/icon.svg" alt="">
                        Sách HOT tuần qua
                    </div>
                    <!-- List HOT Books -->
                    <?php
                        include("config/hotBooks.php");                        
                    ?>
                    <!-- End list HOT Book -->
                </div>
            </div>
        </div>

        <!-- recommended book -->
        <div class="row mt-3">
            <div class="col-11 hot-book ms-5 mt-2 pt-2 pb-3 rounded">
                <div class="row ">
                    <div class="hot-book__name mb-2">
                        <img src="images/miniLogo/icon.svg" alt="">
                        TOP sách được yêu thích
                    </div>
                    <?php
                    $sachs = Sach::getAllBooks();
                    for ($i = 0; $i < 2; $i++) {
                        $sach = $sachs[$i];
                        include("view/book/recommendBooks.php");
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- New books -->
        <div class="row mt-3">
            <div class="col-1"></div>
            <div class="col-11 hot-book ms-5 mt-2 pt-2 pb-3 rounded">
                <div class="row ">
                    <div class="hot-book__name mb-2">
                        <img src="images/miniLogo/icon.svg" alt="">
                        Sách mới ra mắt
                    </div>
                    <?php
                    $sachs = Sach::getAllBooks();
                    for ($i = 2; $i < 4; $i++) {
                        $sach = $sachs[$i];
                        include("view/book/newBooks.php");
                    }
                    ?>
                </div>
            </div>
        </div>


        <!-- LTWeb Recommend -->
        <div class="row mt-4 mb-4">
            <div class="col-1"></div>
            <div class="col-11 hot-book ms-5 pb-3 rounded">
                <div class="admin-recommend pt-2 rounded row">
                    <div class="hot-book__name mb-2 ms-2">
                        <img src="images/miniLogo/icon.svg" alt="">
                        Sách đề cử
                    </div>
                    <div class="row">
                        <div class="mt-3 col-3">
                            <a href="" class="no-decoration">
                                <img src="<?= $sach->URLbiaSach ?>" alt="" class="col-12 rounded">
                            </a>
                        </div>

                        <div class="col-9">
                            <div class="row">
                                <a href="../web_sachtruyen/view/detail/index.php?id=<?= $sach->id ?>" class="row fw-bold mt-5 fs-4 no-decoration color-waka_hover"><?= $sach->ten ?></a>
                                <div class="row mt-3">
                                    <div class="col-3">Tác giả: <?= $sach->tacGia ?></div>
                                    <div class="col-3">Số chương: <?= $sach->soChuong ?></div>
                                    <div class="col-3">Trạng thái: <?= $sach->trangThai ?></div>
                                </div>
                                <div class="row mt-3">
                                    <?= $sach->moTa ?><br>
                                    Mọi người thường nói họ chỉ được sống một lần trong đời, đó là câu nói trước khi họ chưa từng đọc sách.
                                    Cuốn sách này đã khẳng định được giá trị qua thời gian và được bạn đọc mọi thời đại cũng như khắp nơi trên thế giới đón nhận.
                                    Chắc chắn nó sẽ giúp bạn cải thiện mọi kĩ năng và tìm ra một góc nhìn hoàn thiện hơn về mọi vấn đề trong cuộc sống.
                                    <br>Chúc bạn có những phút giây đọc sách vui vẻ cùng Sách hay.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Footer -->
    <?php
    include("view/footer/footer.php");
    ?>
    <div class="notifi">
        <span><i id="sussecc" class="bi bi-check-lg"></i><span class="mess">Thêm vào tủ sách thành công</span></span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <!-- <script>
        $(document).ready(function(){
            $("a.nav-link").click(function(){
                alert(this.href);
                return false;
            });
        });
    </script> -->
    <script src="notifi.js"></script>
</body>

</html>