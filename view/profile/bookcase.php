<?php
include "../../db/connectDB.php";
include "../../model/nguoidung/Nguoidung.php";
$user = Nguoidung::findById('1');
?>
<link href="../../css/bootstrap.css" rel="stylesheet">
<!-- <link href="../../css/register.css" rel="stylesheet">
<link href="../../css/resetpass.css" rel="stylesheet">
<link href="../../css/login.css" rel="stylesheet"> -->
<link href="../../css/profile.css" rel="stylesheet">
<div class="w-full min-h-screen bg-white-248">
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
                            <div class="w-max mr-6 flex flex-col items-center">
                                <img src="../../images/icon/icon-stories-read.svg" alt="" class="w-9 h-9 !cursor-default"> 
                                <p class="text-sm-14-18 mt-2-25 text-black-102 text-center">Số truyện đã đọc</p> 
                                <p class="text-lg-18-21 mt-2-25 text-black-222 font-bold">0 truyện</p>
                            </div> 
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
                            <a href="resetpass.php" class="text-sm-15-24 cursor-pointer hover:text-cdv hover:font-bold fm-t-ellipsis-1 text-black-222 font-normal">Thay đổi mật khẩu</a>
                            </div> 
                            <img src="../../images/icon/icon-view-more.svg" alt="" class="w-6 h-6 ml-3">
                        </div>
                        <div class="w-full mb-4-5 option flex flex-row items-center justify-between">
                            <img src="../../images/icon/icon-logout.svg" alt="" class="w-6 h-6 mr-3"> 
                            <div class="flex flex-1">
                                <span class="text-sm-15-24 cursor-pointer hover:text-cdv hover:font-bold fm-t-ellipsis-1 text-black-222 font-normal">Đăng xuất</span>
                            </div> <!---->
                        </div>
                    </div>
                </div> 
                <div class="ml-10 2xl:ml-14 flex flex-1 flex-col">
                    <div user-info="[object Object]" class="w-full">
                        <div class="w-full flex flex-row pb-3 border-b border-black-6">
                            <a href="http://127.0.0.1/web_sachtruyen/view/profile/bookcase.php" aria-current="page" class="w-max mr-7-5 flex flex-col items-center nuxt-link-exact-active nuxt-link-active text-cdv">
                                <h3 class="text-2xl-24-30 font-medium">Truyện đang đọc</h3> 
                                <div class="w-4-5 mt-1-5 h-1-5 rounded-full bg-cdv"></div>
                            </a>
                            <a href="http://127.0.0.1/web_sachtruyen/view/profile/followingbook.php"  class="w-max mr-7-5 flex flex-col items-center text-black-153">
                                <h3 class="text-2xl-24-30 font-medium">Đang theo dõi</h3> 
                                <div class="w-4-5 mt-1-5 h-1-5 rounded-full bg-transparent"></div>
                            </a>
                        </div> 
                        <div class="w-full mt-6">
                            <div class="w-full flex flex-row flex-wrap">
                                <div class="nth-2th-mr-7-5 pt-5">
                                    <div class="w-full flex flex-row h-35 bg-white-default px-5 pb-5 rounded-xl">
                                        <div class="w-24 mr-5">
                                            <div class="w-full block relative book-item">
                                                <div class="absolute w-full h-35 -top-5 border border-black-6 rounded-md">
                                                    <div class="storybook-view-3 w-full h-full">
                                                        <div class="storybook-image-box w-full h-full">
                                                            <div class="image">
                                                                <img src="https://307a0e78.vws.vegacdn.vn/view/v2/image/img.cdv_novel/0/0/0/279.jpg?v=1&amp;time=1677550601&amp;w=720&amp;h=720" alt="Áo cưới Thiên Đường" class="object-cover story-image lazyLoad isLoaded"></div> 
                                                                <div class="layer-view-detail-book">
                                                                    <div class="image-box inline-block">
                                                                        <img src="/cdv-assets/img/IconViewBook.f44b629.svg" alt="View book" class="image-read"> 
                                                                        <img src="/cdv-assets/img/IconSachActive.bae9791.svg" alt="View book" class="image-read-active">
                                                                    </div>
                                                                </div> 
                                                                <div class="el-dialog__wrapper dialog-read-novel-confirm" style="display:none;"><div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog" style="margin-top:15vh;width:480px;">
                                                                <div class="el-dialog__header">
                                                                    <span class="el-dialog__title"></span>
                                                                    <button type="button" aria-label="Close" class="el-dialog__headerbtn">
                                                                        <i class="el-dialog__close el-icon el-icon-close"></i>
                                                                    </button>
                                                                </div><!----><!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="flex flex-1 flex-col h-full pt-3"><a href="/storybook/detail/ao-cuoi-thien-duong-nv279" class="text-sm-15-18 text-black-222 hover:text-cdv">Áo cưới Thiên Đường</a> 
                                    <div class="w-full mt-2-25">
                                        <div class="flex flex-row items-center">
                                            <span class="text-sm-14-16 text-black-153 mr-1">Chương mới nhất: </span> 
                                            <div class="flex flex-1">
                                                <a href="/chapter/ao-cuoi-thien-duong-87-ct5031" class="text-sm-14-16 text-cdv font-bold fm-t-ellipsis-1">87</a>
                                            </div>
                                        </div> 
                                        <p class="text-xs-13-15 text-black-153 mt-2-25">Lúc 09:02 28/02/2023</p>
                                    </div> 
                                    <div class="w-full items-center justify-between">
                                        <div class="w-max">
                                            <p class="text-sm-14-16 text-black-222 font-bold">87 chương</p>
                                        </div>
                                        <br>
                                        <div class="w-max flex flex-row justify-end">
                                            <div class="px-4 w-max h-6 mr-3 !cursor-text text-xs-13-16 rounded-full grid-center bg-red-15 text-red-default">Hoàn thành</div> 
                                            <button class="px-4 w-max h-6 text-xs-13-16 text-black-102 bg-black-154 rounded-full">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>


