<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN VMCINEMA</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Favicon -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
     <link rel="shortcut icon" type="image/x-icon" href="assets/images/avatar/admin.png">
    <script src="https://www.gstatic.com/charts/loader.js"></script>

<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
<link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
<link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">
    <link rel="stylesheet" href="assets/css/ctve.css">
<link rel="stylesheet" href="assets/css/plugins/plugins.css">
<link rel="stylesheet" href="assets/css/helper.css">
<link rel="stylesheet" href="assets/css/style.css">
<link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

</head>

<body>

    <div class="main-wrapper">


        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="header-logo col-auto">
                        <a href="index.php">
                            <h3>Quản Trị VMCINEMA</h3>
                    </div>

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="row align-items-center">
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                </div>
                            </div>
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--Language-->
                                    <li class="adomx-dropdown position-relative col-auto">
                                        <a class="toggle" href="#"><img class="lang-flag" src="assets/images/flags/flag-6.jpg" alt="" style="border-radius: 5px"></a>

                                        <!-- Dropdown -->

                                    </li>

                                    

                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="assets/images/avatar/avt1.jpg" alt="">
                                            <span class="status"></span>
                                            </span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">

                                            <?php
                                            if (isset($_SESSION['user1'])) {
                                                extract($_SESSION['user1']);
                                                $roleLabel = '';
                                                if ($vai_tro == 1) {
                                                    $roleLabel = 'Nhân viên';
                                                } elseif ($vai_tro == 2) {
                                                    $roleLabel = 'Chủ';
                                                }
                                                echo '<div class="head">
                                                      <h5 class="name"><a href="#">' . $roleLabel . '-' . $name . ' </a></h5>
                                                      <a class="mail" href="#">' . $email . '</a>
                                                       </div>
                                                         <div class="body">
                                                             <ul>';

                                                if ($vai_tro == 1) {
                                                    // Nếu vai_tro là 1 (nhân viên), hiển thị các tùy chọn cho nhân viên
                                                    echo '<li><a href="index.php?act=dangxuat"><i class="zmdi zmdi-lock-open"></i>Đăng xuất</a></li>';
                                                    // Thêm các tùy chọn khác cho nhân viên nếu cần
                                                } elseif ($vai_tro == 2) {
                                                    // Nếu vai_tro là 2 (chủ shop), hiển thị các tùy chọn cho chủ shop
                                                    // ...
                                                    echo '<li><a href="index.php?act=dangxuat"><i class="zmdi zmdi-lock-open"></i>Đăng xuất</a></li>';
                                                }

                                                echo '</ul></div></div>';
                                            }
                                            ?>



                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->