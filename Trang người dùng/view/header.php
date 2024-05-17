<!doctype html>
<html>

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Rạp chiếu phim VM Cinema</title>
    <meta name="description" content="A Template by Gozha.net">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Gozha.net">

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <link rel="shortcut icon" type="image/x-icon" href="../images/movie-img1.jpg">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
    <!-- Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="login-ui2/login-ui2/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <!-- Mobile menu -->
    <link href="css/gozha-nav.css" rel="stylesheet" />
    <!-- Select -->
    <link href="css/external/jquery.selectbox.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- Custom -->
    <link href="css/style3860.css?v=1" rel="stylesheet" />
    <link rel="stylesheet" href="css/dv.css">
    <!-- Modernizr -->
    <script src="js/external/modernizr.custom.js"></script>
</head>

<body>
<div class="wrapper">
   <!-- Header section -->
    <header class="header-wrapper header-wrapper--home">
        <div class="container d-flex align-items-center justify-content-between">
            <a href='index.php' class="logo">
                <img alt='logo' src="imgavt/logo2024.png">
            </a>
            <nav id="navigation-box">
                <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                </a>
                <div class="navigation">
                 <ul id="navigation">
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php">Trang chủ</a>

                    </li>
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php?act=dsphim1&sotrang=1">Phim</a>
                        <ul>
                            <li class="menu__nav-item"><a href="index.php?act=phimdangchieu" >Phim đang chiếu</a></li>
                            <li class="menu__nav-item"><a href="index.php?act=phimsapchieu" >Phim sắp chiếu</a></li>
                        </ul>
                    </li>

                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="">Thể loại</a>
                        <ul>
                            <?php foreach ($loadloai as $loaip){
                                extract($loaip);
                                $linkloaip = 'index.php?act=theloai&id_loai='.$id;
                                echo '<li class="menu__nav-item"><a href="'.$linkloaip.'" >'.$name.'</a></li>';
                            } ?>

                        </ul>
                    </li>
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php?act=rapchieu">Rạp chiếu</a>

                    </li>
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php?act=lienhe">Liên hệ</a>

                    </li>
                    <li>
                        <span class="sub-nav-toggle plus"></span>
                        <a href="index.php?act=tintuc">Tin tức</a>

                    </li>
                </ul>
                </div>
            </nav>
            <div class="control-panel">
                           <?php if (isset($_SESSION['user'])){
                                  extract($_SESSION['user']);
                                  echo '<a href="index.php?act=dangnhap" class="btn btn-md btn--warning btn--book ">'.$name.'</a>';
                                  }else{
                               echo '<a href="index.php?act=dangnhap" class="btn btn-md btn--warning btn--book ">Đăng nhập</a>';
                                  }?>

            </div>

        </div>
    </header>




