<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--BẠN ĐÃ SẴN SÀNG ĐỂ TRỞ THÀNH SINH VIÊN ĐẠI HỌC FPT?-->
<div class="home__dangky__section uk-position-relative uk-overflow-hidden uk-section uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/1x/bg1.png" uk-img>
    <div class="uk-container">

    </div>
    <img src="" alt="">
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