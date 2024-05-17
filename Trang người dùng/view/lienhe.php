<?php include "view/search.php"?>


<!-- Main content -->
<section class="container">
    <h2 class="page-heading heading--outcontainer">Liên hệ </h2>
    <div class="contact">
        <p class="contact__title">Bạn có thắc mắc hoặc cần trợ giúp, <br><span class="contact__describe">đừng ngại ngùng và liên hệ với chúng tôi</span></p>
        <span class="contact__mail">vmcinema@amovie.com</span>
        <span class="contact__tel">vmcinema@amovie.com</span>
    </div>
</section>

<div class="contact-form-wrapper">
    <div class="container">
        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <form id='contact-form' class="form row" method='post' novalidate="" action="https://amovie.gozha.net/send.php">
                <p class="form__title col-sm-12">Liên hệ với chúng tôi </p>
                <div class="col-sm-6">
                    <input type='text' placeholder='Tên của bạn' name='user-name' class="form__name">
                </div>
                <div class="col-sm-6">
                    <input type='email' placeholder='Email của bạn' name='user-email' class="form__mail">
                </div>
                <div class="col-sm-12">
                    <textarea placeholder="Lời nhắn" name="user-message" class="form__message"></textarea>
                </div>
                <button type="submit" class='btn btn-md btn--danger btn-send'>Gửi tin nhắn</button>
            </form>
        </div>
    </div>
</div>

<section class="container">
    <div class="contact">
        <p class="contact__title">Bạn muốn tìm địa chỉ của chúng tôi ?<br> <span class="contact__describe">Chúng tôi ở đây</span></p>
    </div>
</section>
<div id='location-map' class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.288929519091!2d105.79900567510497!3d21.02112218062628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5cf41b6bad%3A0x3f3e85261a9aabd4!2zODk4IMSQLiBMw6FuZywgTMOhbmcgVGjGsOG7o25nLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1715799359441!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="clearfix"></div>


