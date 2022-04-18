<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--SINH VIÊN, PHỤ HUYNH, DOANH NGHIỆP NÓI GÌ?-->
<div class="uk-section home__sinhvien__section uk-light">
    <div class="uk-container">
        <div class="item__30">
            <h3 class="uk-text-center home__trainghiem__title">SINH VIÊN, PHỤ HUYNH, DOANH NGHIỆP NÓI GÌ?</h3>
        </div>
        <div class="item__30">
            <div uk-slider>

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/doingu/1x/img1.png',
                                    'txt1' => 'Hồ Nguyên Lý',
                                    'txt2' => 'Sinh viên ngành Ngôn ngữ Hàn',
                                    'desc' => '“Chương trình đào tạo chất lượng sát với thực tế, giáo trình chuẩn Seoul, mình nghĩ là vừa sức với nhịp độ học tập của mình. Giảng viên chủ yếu dạy thực tiễn, truyền thụ cho tụi mình rất nhiều kinh nghiệm. Nếu được chọn thêm lần nữa mình vẫn chọn chuyên ngành này vì mình rất yêu tiếng Hàn và đất nước Hàn Quốc”.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img2.png',
                                    'txt1' => 'Nguyễn Thị Quỳnh Hoa',
                                    'txt2' => 'Sinh viên ngành Ngôn ngữ Nhật',
                                    'desc' => '“Giáo trình của trường FPT phải nói là rất xịn Xò, vừa đầy đủ lại vừa hay, nếu học tập chăm chỉ ba quyển chính thì có thể thi đỗ N2. Về giảng viên thì được học cả người Nhật lẫn người Việt.  Các thầy cô ngành ngôn ngữ cực thân thiện và tâm lý, chia sẻ không chỉ kiến thức học mà còn cả cuộc sống bên Nhật. Nói chung để đánh giá về giảng viên ngành ngôn ngữ Nhật thì 10/10 luôn, vừa thân thiện vừa gần gũi và siêu đáng yêu”.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img3.png',
                                    'txt1' => 'Lê Phạm Thế Vũ',
                                    'txt2' => 'Sinh viên ngành Ngôn ngữ Anh',
                                    'desc' => '“Trường Đại học FPT chính là chiếc nôi, giúp bạn phát triển những thế mạnh của bản thân, có thể tự tin nói trước công chúng, khả năng giao tiếp tiếng anh, nuôi dưỡng tài năng Thể thao và Nghệ thuật. Những thầy cô đều là cha mẹ của mình, những người bạn đều xem mình như người anh em”.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img1.png',
                                    'txt1' => 'Hồ Nguyên Lý',
                                    'txt2' => 'Sinh viên ngành Ngôn ngữ Hàn',
                                    'desc' => '“Chương trình đào tạo chất lượng sát với thực tế, giáo trình chuẩn Seoul, mình nghĩ là vừa sức với nhịp độ học tập của mình. Giảng viên chủ yếu dạy thực tiễn, truyền thụ cho tụi mình rất nhiều kinh nghiệm. Nếu được chọn thêm lần nữa mình vẫn chọn chuyên ngành này vì mình rất yêu tiếng Hàn và đất nước Hàn Quốc”.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img2.png',
                                    'txt1' => 'Nguyễn Thị Quỳnh Hoa',
                                    'txt2' => 'Sinh viên ngành Ngôn ngữ Nhật',
                                    'desc' => '“Giáo trình của trường FPT phải nói là rất xịn Xò, vừa đầy đủ lại vừa hay, nếu học tập chăm chỉ ba quyển chính thì có thể thi đỗ N2. Về giảng viên thì được học cả người Nhật lẫn người Việt.  Các thầy cô ngành ngôn ngữ cực thân thiện và tâm lý, chia sẻ không chỉ kiến thức học mà còn cả cuộc sống bên Nhật. Nói chung để đánh giá về giảng viên ngành ngôn ngữ Nhật thì 10/10 luôn, vừa thân thiện vừa gần gũi và siêu đáng yêu”.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img3.png',
                                    'txt1' => 'Lê Phạm Thế Vũ',
                                    'txt2' => 'Sinh viên ngành Ngôn ngữ Anh',
                                    'desc' => '“Trường Đại học FPT chính là chiếc nôi, giúp bạn phát triển những thế mạnh của bản thân, có thể tự tin nói trước công chúng, khả năng giao tiếp tiếng anh, nuôi dưỡng tài năng Thể thao và Nghệ thuật. Những thầy cô đều là cha mẹ của mình, những người bạn đều xem mình như người anh em”.',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                                <li>
                                    <div class="uk-card uk-card-default home__sinhvien__card uk-flex uk-flex-column">
                                        <div class="uk-card-body home__sinhvien__card__body uk-flex-auto">
                                            <div class="home__sinhvien__card__desc"><?= $v['desc'] ?></div>
                                        </div>
                                        <div class="uk-card-footer home__sinhvien__card__footer">
                                            <div class="home__sinhvien__card__box">
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="uk-cover-container uk-border-circle">
                                                            <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                            <canvas width="76" height="76"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <div class="home__doingu__card__txt uk-text-uppercase"><?= $v['txt1'] ?></div>
                                                        <div class="home__doingu__card__txt"><?= $v['txt2'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small home__doingu__slidenav home__doingu__slidenav--prev" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small home__doingu__slidenav home__doingu__slidenav--next" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
        </div>
    </div>
</div>
<!--/SINH VIÊN, PHỤ HUYNH, DOANH NGHIỆP NÓI GÌ?-->

<!--ĐỘI NGŨ GIẢNG VIÊN-->
<div class="uk-section home__doingu__section">
    <div class="uk-container">
        <div class="item__30">
            <div class="uk-text-center home__trainghiem__title">ĐỘI NGŨ GIẢNG VIÊN</div>
        </div>
        <div class="item__30">
            <div uk-slider>

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/doingu/1x/img1.png',
                                    'txt1' => 'Cô Kuriko Shinozaki',
                                    'txt2' => 'Giảng viên ngành Ngôn ngữ Nhật',
                                    'desc' => 'FPT là trường ĐH khác biệt, mới mẻ, tôi bị ấn tượng bởi các bạn sinh viên dễ mến, chân thật, cũng có em cá tính. Mối quan hệ giữa giảng viên và sinh viên rất thân thiện, cởi mở. Việc giảng dạy và tổ chức hoạt động ngoại khoá khá vất vả nhưng tôi cảm thấy vui vì năng lực tiếng Nhật, sự tự tin trong giao tiếp của SV ngày trở nên tốt hơn.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img2.png',
                                    'txt1' => 'Cô Karen Cheer Badong',
                                    'txt2' => 'Giảng viên ngành Ngôn ngữ Anh',
                                    'desc' => 'Sinh viên FPTU có tư duy cởi mở, kiên trì và khiêm tốn. Các em đều có cách riêng và độc đáo để thể hiện cá tính của mình. Tuy nhiên, trong những điểm khác biệt đó, một điểm chung ở họ là cảm giác háo hức muốn thành công trong bất cứ con đường sự nghiệp nào họ đã chọn. Các em cũng rất chăm chỉ và đề cao tình yêu thương vô điều kiện mà cha mẹ dành cho mình.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img3.png',
                                    'txt1' => 'Thầy Lyndon Britanico Badong',
                                    'txt2' => 'Giảng viên ngành Ngôn ngữ Anh',
                                    'desc' => 'Tôi rất hài lòng khi được làm việc tại FPTU. Đầu tiên phải kể đến không gian làm việc xanh, thiên nhiên xung quanh trong lành và thanh bình. Có những lúc trong giờ giải lao, chúng tôi đi dạo quanh khuôn viên trường chỉ để giải tỏa đầu óc và F5 một chút. Thứ hai, đồng nghiệp và sinh viên ở FPTU tôn trọng sự khác biệt chúng tôi. Những giảng viên nước ngoài như chúng tôi đều đặt mục tiêu cao nhất để làm tốt việc của mình.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img1.png',
                                    'txt1' => 'Cô Kuriko Shinozaki',
                                    'txt2' => 'Giảng viên ngành Ngôn ngữ Nhật',
                                    'desc' => 'FPT là trường ĐH khác biệt, mới mẻ, tôi bị ấn tượng bởi các bạn sinh viên dễ mến, chân thật, cũng có em cá tính. Mối quan hệ giữa giảng viên và sinh viên rất thân thiện, cởi mở. Việc giảng dạy và tổ chức hoạt động ngoại khoá khá vất vả nhưng tôi cảm thấy vui vì năng lực tiếng Nhật, sự tự tin trong giao tiếp của SV ngày trở nên tốt hơn.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img2.png',
                                    'txt1' => 'Cô Karen Cheer Badong',
                                    'txt2' => 'Giảng viên ngành Ngôn ngữ Anh',
                                    'desc' => 'Sinh viên FPTU có tư duy cởi mở, kiên trì và khiêm tốn. Các em đều có cách riêng và độc đáo để thể hiện cá tính của mình. Tuy nhiên, trong những điểm khác biệt đó, một điểm chung ở họ là cảm giác háo hức muốn thành công trong bất cứ con đường sự nghiệp nào họ đã chọn. Các em cũng rất chăm chỉ và đề cao tình yêu thương vô điều kiện mà cha mẹ dành cho mình.',
                                ),
                                array(
                                    'src' => 'images/doingu/1x/img3.png',
                                    'txt1' => 'Thầy Lyndon Britanico Badong',
                                    'txt2' => 'Giảng viên ngành Ngôn ngữ Anh',
                                    'desc' => 'Tôi rất hài lòng khi được làm việc tại FPTU. Đầu tiên phải kể đến không gian làm việc xanh, thiên nhiên xung quanh trong lành và thanh bình. Có những lúc trong giờ giải lao, chúng tôi đi dạo quanh khuôn viên trường chỉ để giải tỏa đầu óc và F5 một chút. Thứ hai, đồng nghiệp và sinh viên ở FPTU tôn trọng sự khác biệt chúng tôi. Những giảng viên nước ngoài như chúng tôi đều đặt mục tiêu cao nhất để làm tốt việc của mình.',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                            <li>
                                <div class="home__doingu__card uk-card uk-card-body">
                                    <div class="item__25 home__doingu__card__box1">
                                        <div class="uk-text-center">
                                            <div class="uk-cover-container uk-flex-inline uk-border-circle">
                                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                <canvas width="129" height="129"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-text-center">
                                            <div class="home__doingu__card__txt"><?= $v['txt1'] ?></div>
                                            <div class="home__doingu__card__txt"><?= $v['txt2'] ?></div>
                                        </div>
                                    </div>
                                    <div class="item__25">
                                        <div class="home__doingu__card__desc"><?= $v['desc'] ?></div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small home__doingu__slidenav home__doingu__slidenav--prev" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small home__doingu__slidenav home__doingu__slidenav--next" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
        </div>
    </div>
</div>
<!--/ĐỘI NGŨ GIẢNG VIÊN-->

<!--BẠN ĐÃ SẴN SÀNG ĐỂ TRỞ THÀNH SINH VIÊN ĐẠI HỌC FPT?-->
<div class="home__dangky__section uk-position-relative uk-overflow-hidden uk-section-large uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/1x/bg2.png" uk-img uk-parallax="bgy: -150">
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