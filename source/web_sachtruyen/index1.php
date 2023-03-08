<html>

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
    <!-- <base href="web_sachtruyen"> -->
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
    // if
    include("view/header/navbar.php");
    ?>

    <div class="row body pb-5">
        <!-- NAV Tree -->
        <div class="row mt-2">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="my-4 breadcrumb">
                    <li class="breadcrumb-item"><a class="color-waka" href="index.php">Trang chủ</a></li>
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
                    <div class="dropdown bc-white text ">
                        <a class="nav-link color-black text-uppercase text-center border-bottom py-1" href="http://127.0.0.1/web_sachtruyen/index1.php">
                            TẤT CẢ CÁC TRUYỆN
                        </a>
                    </div>
                    <?php
                    $categories = Sach::getAllCategory();
                    foreach ($categories as $category) {
                        echo "
                                    <div class=\"dropdown bc-white\">
                                        <a class=\"nav-link color-black text-uppercase text-center border-bottom text py-1\" href=\"http://127.0.0.1/web_sachtruyen/index1.php?TL=$category\">$category</a>
                                    </div>
                                ";
                    }
                    ?>
                </div>
            </div>
            <!-- Right -->
            <div class="col-9">
                <!-- Category -->
                <div class="row">
                    <div class="hot-book__name my-2">
                        <img src="images/miniLogo/icon.svg" alt="">
                        <?php
                        if (isset($_GET['TL']) == true)
                            $theLoai = $_GET['TL'];
                        else
                            $theLoai = null;
                        if ($theLoai == null)
                            echo "Tất cả các truyện";
                        else
                            echo "$theLoai";
                        ?>
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
                    if (isset($_GET['TL']) == true)
                        $theLoai = $_GET['TL'];
                    else
                        $theLoai = null;

                    if ($theLoai == null)
                        $sachs = Sach::getAllBooks();
                    else
                        $sachs = Sach::getBooksByCategory($theLoai);
                    foreach ($sachs as $sach) {
                        include("view/book/categoryAllBooks.php");
                    }
                    ?>
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
    <script src="notifi.js"></script>
</body>

</html>