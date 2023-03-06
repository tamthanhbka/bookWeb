<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThichDocSach</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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

        <div class="hot-book__name my-2">
            <img src="images/miniLogo/icon.svg" alt="">
            Truyện HOT tuần qua
        </div>
        <!-- Hot book -->
        <div class="row ">
            <div class="hot-book py-3 rounded">
                <div class="row ">
                    <!-- List HOT Books -->
                    <?php
                    // include("config/config.php");                        
                    $sachs = Sach::getAllBooks();
                    foreach ($sachs as $sach) {
                        include("view/book/hotBooks.php");
                    }
                    ?>
                    <!-- End list HOT Book -->
                </div>
            </div>
        </div>

        <!-- recommended book -->
        <div class="mt-3 pb-3">
            <div class="row">
                <div class="hot-book__name my-2">
                    <img src="images/miniLogo/icon.svg" alt="">
                    TOP truyện được yêu thích
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

        <!-- New books -->
        <div class="new-book">
            <div class="row">
                <div class="hot-book__name my-2">
                    <img src="images/miniLogo/icon.svg" alt="">
                    Truyện mới ra mắt
                </div>
                <!-- List 2 -->

                <?php
                $sachs = Sach::getAllBooks();
                for ($i = 2; $i < 4; $i++) {
                    $sach = $sachs[$i];
                    include("view/book/newBooks.php");
                }
                ?>

            </div>
        </div>

        <div class="hot-book__name my-2">
            <img src="images/miniLogo/icon.svg" alt="">
            LTWeb đề cử
        </div>
        <!-- LTWeb Recommend -->
        <div class="admin-recommend pt-2 rounded">
            <div class="row">
                <div class="mt-3 col-3">
                    <a href="" class="no-decoration">
                        <img src="images/hotBooks/3.jpg" alt="" class="col-12 rounded">
                    </a>
                </div>

                <div class="col-9">
                    <div class="row">
                        <div class="row fw-bold mt-5 fs-4">Bắc vấn Nam Dương</div>
                        <div class="row mt-3">
                            <div class="col-3">Tác giả: Mộc Lan</div>
                            <div class="col-3">Số chương: 50</div>
                            <div class="col-3">Trạng thái: Đang ra</div>
                        </div>
                        <div class="row mt-3">Nhẫn cưới 5 năm tuổi. Bọn họ đã kết hôn được 5 năm. Dao nhớ ngày họ kết hôn, lúc đeo nhẫn vào tay của cô, Lâm đã nói:
                            “Chúng ta hãy sống hạnh phúc cả đời này.” Vậy mà hiện tại anh nói: “Chúng ta hãy làm khổ nhau cả đời đi.” Dao nhớ, trước đây Lâm và cô không phải như thế này. Cuộc hôn nhân của họ, không tối đen, lạnh ngắt và tuyệt vọng như thế này. Biến chất hết cả rồi. Từ người đàn ông mà cô yêu, tới cuộc hôn nhân của bọn họ và cả chính cô. Thế nhưng mọi thứ biến chất từ bao giờ, cô cũng không rõ nữa. Trong bóng đêm, không ai biết ai mới là người nếm trải bi thương...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
    include("view/footer/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <!-- <script>
        $(document).ready(function(){
            $("a.nav-link").click(function(){
                alert(this.href);
                return false;
            });
        });
    </script> -->
</body>

</html>