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
    <header>
        <div class="row header">
            <!-- Logo -->
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 logo">
                <img src="images/logo/main-logo.jpg" alt="main-logo">
            </div>
            <!-- Search -->
            <div class="col-md-6"> 
                <div class="search-box mt-4"> 
                    <div class="row">
                        <form class="search-form" action="#"> 
                            <input class="form-control input col-5" placeholder="Nhập tên sách, tác giả.." type="text"> 
                            <button class="btn btn-link search-btn col-1"> 
                                <i class="bi bi-search"></i> 
                            </button> 
                        </form> 
                    </div>
                </div> 
            </div> 
            <!-- Đăng nhập -->
            <div class="header-button col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="row">
                    <div class=" col mt-4">
                        <a href="#" class="upgrade-author">
                            <img src="images/header/upgrade-author.png" alt="">
                            Trở thành tác giả
                        </a>
                    </div>
                    <div class="col mt-4">
                        <a href="" class="header-signin">
                            <img src="images/header/icon-user.svg" alt="">
                            Đăng nhập
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav bar -->
        <div class="header-nav">
            <ul class="nav nav-tabs border border-success border-end-0 border-bottom-0 border-start-0 border-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Thể loại</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Truyện dài</a></li>
                        <li><a class="dropdown-item" href="#">Truyện ngắn</a></li>
                        <li><a class="dropdown-item" href="#">Truyện chữa lành</a></li>
                        <!-- <li><hr class="dropdown-divider"></li> -->
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index1.php">Tất cả các truyện</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Truyện dài</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Truyện ngắn</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Truyện chữa lành</a>
                </li>
            </ul>
        </div>
    </header>

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
    <footer class="mt-5 mt-5 bg-light border border-success border-end-0 border-bottom-0 border-start-0 border-5">
        <div class="row .text-secondary-emphasis">
            <div class="col-6">
                <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 logo">
                    <img src="images/logo/main-logo.jpg" alt="main-logo">
                </div>
                <div class="font-weight-medium">
                    Cơ quan chủ quản: <span class="fw-bolder">Tanhoang845 Development</span><br>
                    Địa chỉ: D5-305 HUST, Việt Nam <br> 
                    Email: tanhoang845@gmail.com | Tel: 023456789
                </div>
            </div>
            <!-- Huu Ich -->
            <div class="col-2">
                <div class="footer-right footer-menu-list-wrap mt-5">
                    <div class="title fw-bold text-center">HỮU ÍCH</div>
                    <div class="content">
                        <ul class="footer-menu-list">
                            <li class="footer-menu-list-item">Chính sách bảo mật</li> 
                            <li class="footer-menu-list-item">Điều khoản sử dụng</li> 
                            <li class="footer-menu-list-item">
                                <a href="" class="">
                                    Quy định về nội dung
                                </a>
                            </li> 
                            <li class="footer-menu-list-item">Vấn đề bản quyền</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Lien he -->
            <div class="col-2">
                <div class="footer-right footer-social-contact mt-5">
                    <div class="title fw-bold">Liên hệ</div> 
                    <div class="content">
                        <div class="button-facebook-social">
                            <a class="text-center" href="https://www.facebook.com/mangvanhocso1/" target="_blank">
                                <!-- <img src="/cdv-assets/img/IconFacebook.ac66021.svg" class="icon-face"> -->
                                Fanpage Cộng đồng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- QR -->
            <div class="col-2 mt-5">
                <div class="el-col el-col-4" style="padding-left:15px;padding-right:15px;">
                    <div class="footer-right footer-app-contact">
                        <div class="title fw-bold">Tải app</div> 
                        <div class="content">
                            <div class="title-qr-app">Quét mã QR để cài APP</div> 
                        <div class="qr-code-app">
                            <!-- <img src="/cdv-assets/QR.png?v=1677035874671" class="lazyLoad isLoading"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>