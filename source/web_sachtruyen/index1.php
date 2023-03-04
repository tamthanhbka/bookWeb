<html>
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
        <!-- <base href="web_sachtruyen"> -->
    </head>

    <body>
        <header>
            <div class="row header">
                <!-- Logo -->
                <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 logo">
                    <a href="index.php">
                        <img class="col-9" src="images/logo/main-logo.jpg" alt="main-logo">
                    </a>
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
                            <a href="#" class="color-waka upgrade-author">
                                <img src="images/header/upgrade-author.png" alt="">
                                Trở thành tác giả
                            </a>
                        </div>
                        <div class="col mt-4">
                            <a href="" class="color-waka header-signin">
                                <img src="images/header/icon-user.svg" alt="">
                                Đăng nhập
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nav bar -->
            <div class="header-nav">
                <ul class="nav nav-tabs border border-success border-end-0 border-bottom-0 border-start-0 border-2 mb-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-waka" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Thể loại</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item color-waka" href="#">Truyện dài</a></li>
                            <li><a class="dropdown-item color-waka" href="#">Truyện ngắn</a></li>
                            <li><a class="dropdown-item color-waka" href="#">Chuyện chữa lành</a></li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link color-waka" href="index1.php">Tất cả các truyện</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link color-waka" href="#">Truyện dài</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link color-waka" href="#">Truyện ngắn</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link color-waka" href="#">Truyện chữa lành</a>
                    </li>
                </ul>
            </div>
        </header> 
        
        <div class="row body">
            <!-- NAV Tree -->
            <div class="row mt-2">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="my-4 breadcrumb">
                    <li class="breadcrumb-item"><a class="color-waka" href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active color-waka" aria-current="page">Danh sách truyện</li>
                </ol>
                </nav>
            </div>

            <!-- SELECTOR -->
            <div class="row">
                <!-- Left -->
                <div class="col-3 selector">
                    <div class="row">
                        <div class="selector-header col-12 color-waka fs-4 pt-3 pb-2 bc-category">
                            THỂ LOẠI <br>
                            <img src="https://sangtac.waka.vn/cdv-assets/img/line-header-filter.81a6f8e.svg" alt="">
                        </div>
                    </div>
                    <div class="selector-body text-start">
                        <!-- Dropdown1 -->
                        <div class="dropdown bc-white">
                            <button class="bc-waka-hover col-12 bc-white text-black border border-light btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                TẤT CẢ TRUYỆN
                            </button>
                        </div>
                        <!-- Dropdown2 -->
                        <div class="dropdown bc-white">
                            <button class="bc-waka-hover col-12 bc-white text-black border border-light btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                TRUYỆN DÀI
                            </button>
                        </div>
                        <!-- Dropdown 3 -->
                        <div class="dropdown bc-white">
                            <button class="bc-waka-hover col-12 bc-white text-black border border-light btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                TRUYỆN NGẮN
                            </button>
                        </div>        
                    </div>
                </div>
                <!-- Right -->
                <div class="col-9">
                    <!-- Category -->
                    <div class="row">
                        <div class="hot-book__name my-2"> 
                        <img src="images/miniLogo/icon.svg" alt="">
                        Tất cả truyện
                        </div>  
                    </div>
                    <!-- sort-box -->
                    <div class="row">
                        <div class="storybooks-sort-book">
                            <div class="inline-block title-sort text-uppercase">Sắp xếp</div>
                            <div class="sort-action-box inline-block">
                                <span class="sort-action-item is-active">Mới nhất</span>
                                <span class="sort-action-item mx-7 px-1">Cũ nhất</span>
                                <span class="sort-action-item el-dropdown-link px-1">
                                    <div class="btn-group">
                                        <button type="button" class="border-none sort-action-item dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Lượt đọc
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><button class="dropdown-item" type="button">Lượt đọc nhiều nhất</button></li>
                                            <li><button class="dropdown-item" type="button">Lượt đọc ít nhất</button></li>
                                        </ul>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
 
                    <!-- Storybook -->
                    <div class="row">
                        <?php
                            include("model/sach/Sach.php");
                            $sachs = Sach::getAllBooks();
                            foreach ($sachs as $sach) {
                                include("view/book/categoryAllBooks.php");
                            }
                        ?>                    
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