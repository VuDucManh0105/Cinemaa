<?php include "banner.php" ?>

<!--end slider -->
<!-- Main content -->
<div class="movie-best">
        <div class="col-sm-12  movie-best__rating">Phim hot nhất</div>
        <div class="container">
        <div class="col-sm-12 d-flex justify-content-between align-items-center list-movie__hot">
            <?php foreach ($loadphimhot as $hot) {
                extract($hot);
                $linkp = "index.php?act=ctphim&id=" . $id;
                $hinh = "imgavt/" . $img;
                echo '<div class="movie-beta__item ">
                <img alt="error" src="' . $hinh . '"  style="width: 190px;height: 285px">
                <span class="best-rate">5.0</span>

                <ul class="movie-beta__info">
                    <li><span class="best-voted">Đã có  vé đã đặt</span></li>
                    <li>
                        <p class="movie__time">' . $thoi_luong_phim . ' phút</p>
                        <p>' . $loaiphim . '</p>
                    </li>
                    <li class="last-block">
                        <a href="' . $linkp . '" class="slide__link">Chi tiết</a>
                    </li>
                </ul>
            </div>';
            } ?>


        </div>
        </div>
        <div class="col-sm-12  movie-best__check">KIỂM TRA TẤT CẢ CÁC PHIM ĐANG CHIẾU</div>
    </div>
<section class="container">
   


    <div class="clearfix"></div>

    <h2 id='target' class="page-heading">Phim mới nhất</h2>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12 col-md-12 d-flex list-movie">
                <?php foreach ($loadphimhome as $phim) {
                    extract($phim);
                    $hinh = "imgavt/" . $img;
                    $linkp = "index.php?act=ctphim&id=" . $id;
                    echo '<!-- Movie variant with time -->        
                <div class="movie movie--test col-sm-12 col-md-6 col-lg-3 d-flex " style="">
                    <div class="movie__images">
                        <a href="' . $linkp . '" class="movie-beta__link">
                            <img alt="Error" src="' . $hinh . '"  style="width: auto;height: 350px">
                        </a>
                    </div>

                    <div class="movie__info">
                        <a href="' . $linkp . '" class="movie__title">' . $tieu_de . '</a>

                        <p class="movie__time">Thời Lượng Phim : ' . $thoi_luong_phim . ' phút</p>

                        <p class="movie__option"><a href="">Thể Loại : ' . $name . '</a></p>
                    </div>
                    <div class="btn-dat">
                    <a href="' . $linkp . '" class="btn btn-md">Đặt vé ngay <i class="fa-solid fa-ticket"></i></a>
                    </div>
                </div>
                <!-- Movie variant with time -->';
                } ?>
            </div>
        </div>
    </div>
    <h2 id='target' class="page-heading-1 p-0 m-0"><i class="fa-solid fa-fire"></i> Thông tin hot</h2>
    <div class="col-sm-12">
        <div class="row">
            <div class="social-group des-new">
                <div class="col-sm-6 col-md-6">
                    <div class="facebook-group">

                        <img src="imgavt/lat-mat-7.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                   <div class="social-group__head">Lật mặt 7 <br>
                        <p style="padding: 5px;font-size: 2vw;">'Lật mặt 7' áp đảo bom tấn 'Hành tinh khỉ'</p>
                    </div>
                    <div class="social-group__content">"Lật mặt 7" của Lý Hải thu gần 50 tỷ đồng, gấp năm lần bom tấn Hollywood "Hành tinh khỉ", ở rạp Việt tuần qua. <br> Theo Box Office Vietnam - đơn vị quan sát phòng vé độc lập, dù ra mắt nửa tháng trước, Lặt mặt tiếp tục dẫn đầu bảng xếp hạng tuần, chiếm 60% doanh thu phòng vé. Ba ngày qua, phim của Lý Hải đạt hơn 530.000 lượt khán giả, gấp năm lần so với Hành tinh khỉ (98.000 vé), đồng thời bỏ xa nhiều đối thủ. Đến nay, phim đạt hơn 372 tỷ đồng với khoảng 4,2 triệu vé.</div>
                </div>
                

                <div class="clearfix visible-sm"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 d-flex justify-content-between">
        <div class="col-sm-6 des-new-small">
        <div class="row">
            <div class="social-group des-new">
                <div class="col-sm-6 col-md-6">
                    <div class="facebook-group facebook-group-limit">

                        <img src="imgavt/hanhtinhkhi.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                   <div class="social-group__head social-group__head--detail">Hành tinh khỉ <br>
                        <p style="padding: 5px;font-size: 2vw;">"Hành tinh khỉ" - bom tấn đột phá về kỹ xảo</p>
                    </div>
                </div>
                

                <div class="clearfix visible-sm"></div>
            </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="row">
            <div class="social-group des-new">
                <div class="col-sm-6 col-md-6">
                    <div class="facebook-group facebook-group-limit">

                        <img src="imgavt/nhabanu.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                   <div class="social-group__head social-group__head--detail">Nhà bà nữ <br>
                        <p style="padding: 5px;font-size: 2vw;">Bom tấn càn quét mọi phòng vé</p>
                    </div>
                </div>
                

                <div class="clearfix visible-sm"></div>
            </div>
        </div>
        </div>
    </div>
    <?php include "view/tintuc.php" ?>

</section>

<div class="clearfix"></div>