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
    <script>
        const $ = document.querySelector.bind(document);
    </script>
    <!-- <base href="web_sachtruyen"> -->
</head>

<body>
    <?php 
        include("header.php");
    ?>

    <!-- Body -->
    <div class="body">
        <!-- Slider -->
        <div id="carouselExampleFade" class="mt-3 mb-3 carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/Slider/1.jpg" class="image d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/Slider/2.jpg" class="image d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/Slider/3.jpg" class="image d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/Slider/4.png" class="image d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- EndSlider -->

        <div class="hot-book__name my-2"> 
                    <img src="images/miniLogo/icon.svg" alt="">
                    Truyện HOT tuần qua 
                </div>
        <!-- Hot book -->
        <div class="hot-book py-3">
            <div class="row">
                <!-- List HOT Books -->
                <?php
                    // include("config/config.php");
                    include("model/sach/Sach.php");
                    
                    $sachs = Sach::getAllBooks();
                    foreach ($sachs as $sach) {
                        include("view/book/hotBooks.php");
                    }
                ?>
                <!-- End list HOT Book -->
            </div>
        </div>

        <!-- recommended book -->
        <div class="mt-3 pb-3">
            <div class="row">
                <div class="hot-book__name my-2"> 
                    <img src="images/miniLogo/icon.svg" alt="">
                    TOP truyện đề cử 
                </div>
                
                <?php
                    $sachs = Sach::getAllBooks();
                    for ($i=0; $i<2; $i++) {
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
                    for ($i=2; $i<4; $i++) {
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
        <div class="admin-recommend pt-2">
            <div class="row">
                <div class="mt-3 col-3">
                    <a href="" class="no-decoration">
                        <img src="images/hotBooks/3.jpg" alt="" class="col-12">
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
        include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>