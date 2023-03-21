<!DOCTYPE html>
<?php
// session_start();
include "../../model/nguoidung/Nguoidung.php";
// $id = $_SESSION['id'];
$user = Nguoidung::findById('1');




?>
<head>
    <title>profile</title>
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/profile.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <!-- <link rel="stylesheet" href="../../css/listbook.css"> -->
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
    include("../../view/header/header.php");
    // echo $_SESSION['id'];
    // $user = Nguoidung::findById($_SESSION['id']);    
    ?>
    <!-- Nav bar -->
    <?php
    include("../../view/header/navbar.php");
    ?>
    </div>
    <div class="bg-container py-2-5 mx-auto">
        <div class="w-full flex-row-center">
            <div class="flex-row-center mr-1-5 last:mr-0">
                <a href="http://127.0.0.1/web_sachtruyen/index.php" class="text-xs-12-14 lg:text-sm-14-16 font-normal nuxt-link-active text-black-153">Trang chủ</a> 
                <img src="../../images/icon/triangle-right.svg" alt="" class="w-1-5 h-1-5 lg:w-2 lg:h-2 ml-1-5">
            </div>
            <div class="flex-row-center mr-1-5 last:mr-0">
                <a aria-current="page" class="text-xs-12-14 lg:text-sm-14-16 font-normal nuxt-link-exact-active nuxt-link-active text-cdv">Thông tin cá nhân</a> 
                <!----></div>
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
                                <p class="text-lg-18-21 mt-2-25 text-black-222 font-bold"><?php if($user->diemtichluy != NULL) echo $user->diemtichluy ; else echo '0' ; echo " Điểm"?></p>
                            </div>
                        </div>
                    </div> 
                    <div class="w-full flex flex-col px-5 py-4 2xl:px-7-5 2xl:py-6">
                        <div class="w-full mb-4-5 option flex flex-row items-center justify-between">
                            <img src="../../images/icon/icon-info.svg" alt="" class="w-6 h-6 mr-3"> 
                            <div class="flex flex-1">
                                <a class="text-sm-15-24 cursor-pointer hover:text-cdv hover:font-bold fm-t-ellipsis-1 text-cdv font-bold" href="profile.php">Thông tin cá nhân</a>
                            </div> 
                            <img src="../../images/icon/icon-view-more-active.svg" alt="" class="w-6 h-6 ml-3">
                        </div>
            
                        <div class="w-full mb-4-5 option flex flex-row items-center justify-between">
                            <img src="../../images/icon/icon-bookcase.svg" alt="" class="w-6 h-6 mr-3"> 
                            <div class="flex flex-1">
                                <a class="text-sm-15-24 cursor-pointer hover:text-cdv hover:font-bold fm-t-ellipsis-1 text-black-222 font-normal" href="bookcase.php">Tủ sách</a>
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
                <div class="w-full bg-white-default rounded-xl px-7-5 py-6" user-info="[object Object]">
                    <div class="w-full">
                        <div class="w-full flex-row-center">
                
                            <h3 class="text-2xl-24-28 text-black-222 font-bold">Cập nhật mật khẩu</h3>
                        </div> <div class="w-full ml-7-5 max-w-195 mt-6">
                            <div class="w-full flex flex-row mb-3">
                                <div class="w-60 flex-row-center h-10">
                                    <p class="text-sm-15-24 text-black-102">Mật khẩu cũ</p>
                                </div> 
                                <div class="flex flex-1 flex flex-col">
                                    <input type="password" maxlength="40" autocomplete="new-password" placeholder="Nhập mật khẩu cũ" class="w-full outline-0 h-10 border-0 bg-white-241 px-4-5 rounded-full placeholder-black-153 text-black-222 text-sm-15-24">
                                </div>
                            </div> 
                            <div class="w-full flex flex-row mb-3">
                                <div class="w-60 flex-row-center h-10">
                                    <p class="text-sm-15-24 text-black-102">Mật khẩu mới</p>
                                </div> 
                                <div class="flex flex-1 flex flex-col">
                                    <input type="password" maxlength="40" autocomplete="new-password" placeholder="Nhập mật khẩu mới" class="w-full outline-0 h-10 border-0 bg-white-241 px-4-5 rounded-full placeholder-black-153 text-black-222 text-sm-15-24">
                                </div>
                            </div> 
                            <div class="w-full flex flex-row mb-3">
                                <div class="w-60 flex-row-center h-10">
                                    <p class="text-sm-15-24 text-black-102">Nhập lại mật khẩu</p>
                                </div> 
                                <div class="flex flex-1 flex flex-col">
                                    <input type="password" maxlength="40" autocomplete="new-password" placeholder="Nhập lại mật khẩu mới" class="w-full outline-0 h-10 border-0 bg-white-241 px-4-5 rounded-full placeholder-black-153 text-black-222 text-sm-15-24">
                                </div>
                            </div> 
                            <div class="w-full flex flex-row">
                                <div class="w-60 flex-row-center h-4"></div> 
                                <div class="flex flex-1 flex flex-col">
                                    <div class="w-full min-h-4 mt-3"><!---->
                                </div>
                            </div>
                        </div> 
                        <div class="w-full mt-3 flex flex-row justify-end">
                            <button class="bg-white border border-cdv rounded-full h-10 w-30 text-sm-14-16 text-cdv uppercase">Hủy</button> 
                            <button class="bg-gradient-cdv ml-3 rounded-full h-10 w-30 text-sm-14-16 text-white-default uppercase">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
        include("../../view/footer/footer.php");
    ?>
</body>
</html>