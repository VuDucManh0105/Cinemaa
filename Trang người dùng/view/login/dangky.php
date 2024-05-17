
<body>
<!-- Form without bootstrap -->
<div class="auth-wrapper" >
    <div class="auth-container" style="margin-top: 100px">
        <div class="auth-action-left">
            <div class="auth-form-outer">
                <h2 class="auth-form-title">
                    Đăng ký tài khoản
                </h2>
                <div class="auth-external-container">

                </div>
                <form class="login-form" method="post" action="index.php?act=dangky">
                    <input type="text" class="auth-form-input" placeholder="Họ và tên" name="name" >
                    <input type="text" class="auth-form-input" placeholder="Tên đăng nhập" name="user" >
                    <div class="input-icon">
                        <input type="password" class="auth-form-input" placeholder="Mật khẩu" name="pass" >
                        <i class="fa fa-eye show-password"></i>
                    </div>
                    <input type="text" class="auth-form-input" placeholder="Số diện thoại" name="phone" >
                    <input type="email" class="auth-form-input" placeholder="Email" name="email" >
                    <input type="text" class="auth-form-input" placeholder="Địa chỉ" name="dia_chi" >
                    <label class="btn active">
                        <input type="checkbox" name='email1' checked>
                        <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                        <span> Tôi đồng ý với các <a href="#">Điều khoản</a> và <a href="#">Chính sách bảo mật</a>.</span>
                    </label>
                    <div class="footer-action">
                        <input type="submit" value="Đăng ký" class="auth-submit" name="dangky">
                        <a href="index.php?act=dangnhap" class="auth-btn-direct">Đăng nhập</a>
                    </div>
                </form>
                <?php if(isset($thongbao)&&$thongbao !=""){
                echo '<p  style="color: red; "
                > '.$thongbao.' </p>';
            } ?>
            </div>
        </div>
        <div class="auth-action-right">
            <div class="auth-image">
                <img src="login-ui2/login-ui2/assets/movie_time_22.jpg" alt="login">
            </div>
        </div>
    </div>
</div>
</body>

