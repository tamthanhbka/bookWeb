<?php
include "../../model/nguoidung/Nguoidung.php";
include("../../view/header/header.php");

// session_start();
$id = $_SESSION['id'];
$user = Nguoidung::findById($_SESSION['id']);
?>

<head>
    <title>profile</title>
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/profile.css" rel="stylesheet">
    <!-- 
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/listbook.css"> -->
</head>

<body>
    <div>
        <!-- Include Model -->
        <?php
        include("../../model/sach/Sach.php");
        ?>
        <!-- Header -->
        <?php
        // if
        ?>
        <!-- Nav bar -->
        <?php
        include("../../view/header/navbar.php");
        ?>
    </div>
    <div class="w-full min-h-screen bg-white-248">
        <div class="bg-container py-2-5 mx-auto">
            <div class="w-full flex-row-center">
                <div class="flex-row-center mr-1-5 last:mr-0">
                    <a href="http://127.0.0.1/web_sachtruyen/index.php" class="text-xs-12-14 lg:text-sm-14-16 font-normal nuxt-link-active text-black-153">Trang chủ</a>
                    <img src="../../images/icon/triangle-right.svg" alt="" class="w-1-5 h-1-5 lg:w-2 lg:h-2 ml-1-5">
                </div>
                <div class="flex-row-center mr-1-5 last:mr-0">
                    <a aria-current="page" class="text-xs-12-14 lg:text-sm-14-16 font-normal nuxt-link-exact-active nuxt-link-active text-cdv">Thông tin cá nhân</a>
                    <!---->
                </div>
            </div>
            <div class="content w-full  flex flex-row">
                <div class="bg-sidebar-left bg-white-default rounded-xl">
                    <div class="w-full flex flex-col items-center p-4 2xl:p-6 border-b border-black-6">
                        <div class="w-50 h-50">
                            <div class="overflow-hidden w-full h-full rounded-full">
                                <img src="https://cdn.vegaid.vn/cU0spbfh3B/20230228013704/204/d1a/c67/204d1ac678502b88ad53f1c1e103d8ac.jpg" alt="" class="object-cover wh-full lazyLoad isLoaded">
                            </div>
                        </div>
                        <h1 class="text-2xl-24-28 text-center text-black-222 font-bold mt-3"><?php echo $user->tenDN; ?></h1>
                        <a href="" class="w-max px-2-5 h-6 bg-cdv-15 grid-center mt-3 text-cdv text-xs-13-16 rounded-full">Xem trang cá nhân</a>
                        <div class="w-max mt-4-5 justify-center flex-row-center">
                            <div class="w-max flex flex-col items-center">
                                <img src="../../images/icon/icon-stories-score.svg" alt="" class="w-9 h-9 !cursor-default">
                                <p class="text-sm-14-18 mt-2-25 text-black-102 text-center">Số điểm khả dụng</p>
                                <p class="text-lg-18-21 mt-2-25 text-black-222 font-bold"><?php if ($user->diemtichluy != NULL) echo $user->diemtichluy;
                                                                                            else echo '0';
                                                                                            echo " Điểm" ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col px-5 py-4 2xl:px-7-5 2xl:py-6">
                        <div class="w-full mb-4-5 option flex flex-row items-center justify-between">
                            <img src="../../images/icon/icon-info.svg" alt="" class="w-6 h-6 mr-3">
                            <div class="flex flex-1">
                                <a class="text-sm-15-24 cursor-pointer hover:text-cdv hover:font-bold fm-t-ellipsis-1 text-cdv font-normal" href="profile.php">Thông tin cá nhân</a>
                            </div>
                            <img src="../../images/icon/icon-view-more-active.svg" alt="" class="w-6 h-6 ml-3">
                        </div>
                        <div class="w-full mb-4-5 option flex flex-row items-center justify-between">
                            <img src="../../images/icon/icon-setting.svg" alt="" class="w-6 h-6 mr-3">
                            <div class="flex flex-1">
                                <span class="text-sm-15-24 cursor-pointer hover:text-cdv hover:font-bold fm-t-ellipsis-1 text-black-222 font-normal">Cài đặt hiển thị</span>
                            </div>
                            <img src="../../images/icon/icon-view-more.svg" alt="" class="w-6 h-6 ml-3">
                        </div>
                        <div class="w-full mb-4-5 option flex flex-row items-center justify-between">
                            <img src="../../images/icon/icon-bookcase.svg" alt="" class="w-6 h-6 mr-3">
                            <div class="flex flex-1">
                                <span class="text-sm-15-24 cursor-pointer hover:text-cdv hover:font-bold fm-t-ellipsis-1 text-black-222 font-bold">Tủ sách</span>
                            </div>
                            <img src="../../images/icon/icon-view-more.svg" alt="" class="w-6 h-6 ml-3">
                        </div>
                        <div class="w-full mb-4-5 option flex flex-row items-center justify-between">
                            <img src="../../images/icon/icon-change-password.svg" alt="" class="w-6 h-6 mr-3">
                            <div class="flex flex-1">
                                <a href="../../view/login/resetpass.php" class="text-sm-15-24 cursor-pointer hover:text-cdv hover:font-bold fm-t-ellipsis-1 text-black-222 font-normal">Thay đổi mật khẩu</a>
                            </div>
                            <img src="../../images/icon/icon-view-more.svg" alt="" class="w-6 h-6 ml-3">
                        </div>
                        <div class="w-full mb-4-5 option flex flex-row items-center justify-between">
                            <img src="../../images/icon/icon-logout.svg" alt="" class="w-6 h-6 mr-3">
                            <div class="flex flex-1">
                                <a href="../../view/login/logout.php" class="text-sm-15-24 cursor-pointer hover:text-cdv hover:font-bold fm-t-ellipsis-1 text-black-222 font-normal">Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-10 2xl:ml-14 flex flex-1 flex-col">
                    <div user-info="[object Object]" class="w-full">
                        <div class="w-full flex flex-row pb-3 border-b border-black-6">
                            <a href="http://127.0.0.1/web_sachtruyen/view/profile/bookcase.php" aria-current="page" class="w-max mr-7-5 flex flex-col items-center nuxt-link-exact-active nuxt-link-active text-cdv">
                                <h3 class="text-2xl-24-30 font-medium">Đã sở hữu</h3>
                                <div class="w-4-5 mt-1-5 h-1-5 rounded-full bg-cdv"></div>
                            </a>
                            <a href="http://127.0.0.1/web_sachtruyen/view/profile/followingbook.php" class="w-max mr-7-5 flex flex-col items-center text-black-153">
                                <h3 class="text-2xl-24-30 font-medium">Đang theo dõi</h3>
                                <div class="w-4-5 mt-1-5 h-1-5 rounded-full bg-transparent"></div>
                            </a>
                        </div>
                        <?php 
                        $listBooks = BookCase::getListFBooks($_SESSION['id']);
                            foreach ($listBooks as $sach) {    
                            echo'
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                '.$sach->ten.'
                                <div class="image-parent img-thumbnail">
                                    <img src="'.$sach->URLbiaSach.'" class="img-fluid" alt="quixote">
                                </div>
                                
                            </li>';
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>