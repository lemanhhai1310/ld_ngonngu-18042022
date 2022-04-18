<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--BẠN ĐÃ SẴN SÀNG ĐỂ TRỞ THÀNH SINH VIÊN ĐẠI HỌC FPT?-->
<div class="home__dangky__section uk-position-relative uk-overflow-hidden uk-section-large uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/1x/bg2.png" uk-img uk-parallax="bgy: -200">
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand">
                <div class="home__dangky__txt1">
                    BẠN ĐÃ SẴN SÀNG ĐỂ <br class="uk-visible@m">
                    TRỞ THÀNH SINH VIÊN <br class="uk-visible@m">
                    ĐẠI HỌC FPT?
                </div>
                <div class="home__dangky__txt2">Đăng ký tư vấn ngay!</div>
            </div>
            <div class="uk-width-1-3@m">
                <div class="home__dangky__card uk-card uk-card-default uk-card-body">
                    <div class="item__30">
                        <div class="uk-text-center home__dangky__card__title">ĐĂNG KÝ TƯ VẤN</div>
                    </div>
                    <div class="item__30">
                        <div class="item__16">
                            <input class="uk-input home__dangky__card__input" type="text" placeholder="Họ và tên">
                        </div>
                        <div class="item__16">
                            <input class="uk-input home__dangky__card__input" type="tel" placeholder="Điện thoại">
                        </div>
                        <div class="item__16">
                            <input class="uk-input home__dangky__card__input" type="email" placeholder="Email">
                        </div>
                        <div class="item__16">
                            <input class="uk-input home__dangky__card__input" type="text" placeholder="Tỉnh / Thành phố">
                        </div>
                    </div>
                    <div class="item__30 uk-text-center">
                        <button class="home__dangky__card__btn uk-button uk-button-default uk-border-pill"><span>ĐĂNG KÝ</span></button>
                    </div>
                </div>
            </div>
            <div class="uk-hidden@m">
                <div class="uk-flex-center" uk-grid>
                    <div class="uk-width-4-5">
                        <img class="home__dangky__imgBgm" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" src="images/2D1A4618.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-position-bottom-center uk-visible@m">
        <img uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" class="home__dangky__imgBg" src="images/2D1A4618.png" alt="">
    </div>
</div>
<!--/BẠN ĐÃ SẴN SÀNG ĐỂ TRỞ THÀNH SINH VIÊN ĐẠI HỌC FPT?-->

<!--TRƯỜNG HỌC TRẢI NGHIỆM-->
<div class="uk-section-small home__trainghiem__section">
    <div class="uk-container">
        <div class="item__30">
            <div class="uk-text-center home__trainghiem__title">TRƯỜNG HỌC TRẢI NGHIỆM</div>
        </div>
        <div class="item__30">
            <div class="uk-grid-small uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/trainghiem/img1.jpeg',
                    ),
                    array(
                        'src' => 'images/trainghiem/img2.jpeg',
                    ),
                    array(
                        'src' => 'images/trainghiem/img3.jpeg',
                    ),
                    array(
                        'src' => 'images/trainghiem/img4.JPG',
                    ),
                    array(
                        'src' => 'images/trainghiem/img5.jpeg',
                    ),
                    array(
                        'src' => 'images/trainghiem/img6.jpeg',
                    ),
                    array(
                        'src' => 'images/trainghiem/img7.jpg',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <?php if ($k==0): ?>
                <div class="uk-width-1-3@m">
                    <div class="uk-cover-container">
                        <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                        <canvas width="467" height="311"></canvas>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <?php else: ?>
                            <div>
                                <div class="uk-cover-container">
                                    <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                    <canvas width="219" height="151"></canvas>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/TRƯỜNG HỌC TRẢI NGHIỆM-->
<?php require "template-parts/layouts/footer.php"; ?>