<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__timhieu uk-background-norepeat uk-background-center-center uk-background-cover uk-position-relative" data-src="images/1x/bg1_2.png" uk-img>
    <img class="uk-position-bottom-center uk-visible@m" src="images/1x/img1_1.png" alt="">
    <div class="home__timhieu__section uk-flex uk-flex-middle">
        <div class="uk-section uk-width-1-1">
            <div class="uk-container">
                <div uk-grid>
                    <div class="uk-width-expand">
                        <div class="home__timhieu__title">
                            TÌM HIỂU CÁC <br>
                            NGÀNH  NGÔN NGỮ <br>
                            TẠI ĐẠI HỌC FPT
                        </div>
                        <ul class="uk-list home__timhieu__list">
                            <li>• Ngôn ngữ Nhật</li>
                            <li>• Ngôn ngữ Anh</li>
                            <li>• Ngôn ngữ Hàn</li>
                        </ul>
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
                                <img class="" src="images/1x/img1_1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--DOANH NGHIỆP TUYỂN DỤNG SINH VIÊN ĐẠI HỌC FPT-->
<div class="uk-section home__doanhnghiep__section">
    <div class="uk-container">
        <div class="home__doanhnghiep__item">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__doanhnghiep__item1 uk-text-center">
                        <div class="home__doanhnghiep__txt1">5<i class="fa fa-star" aria-hidden="true"></i></div>
                        <div class="home__doanhnghiep__txt2">CHẤT LƯỢNG ĐÀO TẠO</div>
                    </div>
                    <div class="home__doanhnghiep__item1 uk-text-center">
                        <div class="home__doanhnghiep__txt1">100%</div>
                        <div class="home__doanhnghiep__txt2">sinh viên được <br>
                            nhà tuyển dụng chào đón</div>
                    </div>
                    <div class="home__doanhnghiep__item1 uk-text-center">
                        <div class="home__doanhnghiep__txt1">100%</div>
                        <div class="home__doanhnghiep__txt2">sinh viên có học kỳ nước ngoài <br>
                            và trải nghiệm quốc tế</div>
                    </div>
                    <div class="home__doanhnghiep__item1 uk-text-center">
                        <div class="home__doanhnghiep__txt1">98%</div>
                        <div class="home__doanhnghiep__txt2">sinh viên <br>
                            có việc làm ngay</div>
                    </div>
                    <div class="home__doanhnghiep__item1 uk-text-center">
                        <div class="home__doanhnghiep__txt1">19%</div>
                        <div class="home__doanhnghiep__txt2">sinh viên làm việc <br>
                            tại nước ngoài</div>
                    </div>
                </div>
                <div class="uk-width-auto@m">
                    <img src="images/doanhnghiep/1x/bg1_1.png" alt="">
                </div>
            </div>
        </div>
        <div class="home__doanhnghiep__item">
            <div class="item__30">
                <h3 class="uk-text-center home__trainghiem__title">DOANH NGHIỆP TUYỂN DỤNG SINH VIÊN ĐẠI HỌC FPT</h3>
            </div>
            <div class="item__30">
                <img src="images/doanhnghiep/1x/logo1.png" alt="">
            </div>
        </div>
    </div>
</div>
<!--/DOANH NGHIỆP TUYỂN DỤNG SINH VIÊN ĐẠI HỌC FPT-->

<!--VÌ SAO HƠN 50,000 SINH VIÊN CHỌN ĐẠI HỌC FPT?-->
<div class="uk-section-large home__visao__section uk-light">
    <div class="uk-container">
        <div class="item__30">
            <h3 class="uk-text-center home__trainghiem__title">VÌ SAO HƠN 50,000 SINH VIÊN CHỌN ĐẠI HỌC FPT?</h3>
        </div>
        <div class="item__30">
            <div class="uk-child-width-1-2@m" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/visao/1x/icon1.png',
                        'txt' => 'CHẤT LƯỢNG ĐÀO TẠO QUỐC TẾ',
                        'desc' => '100% giáo trình bằng tiếng Anh được nhập khẩu trực tiếp từ các nhà xuất bản nổi tiếng trên thế giới và các quốc gia phát triển để dạy sinh viên. Sinh viên không chỉ được học về nền tảng ngôn ngữ, văn hóa và văn học mà còn được trang bị các kiến thức chuyên sâu và thuật ngữ chuyên ngành của cả hai khối ngành CNTT và Kinh tế.',
                    ),
                    array(
                        'src' => 'images/visao/1x/icon2.png',
                        'txt' => 'CƠ SỞ VẬT CHẤT HIỆN ĐẠI',
                        'desc' => 'Không chỉ sở hữu phòng Lab hiện đại, Đại học FPT còn nổi tiếng với các phòng học và khuôn viên đẹp như resort 5 sao. Giảng đường được phân chia thành các phòng học nhỏ với diện tích trung bình 50m2. Trong mỗi phòng học đều có điều hòa, wifi, máy chiếu, với quy mô tối đa 25-30 sinh viên/lớp nhằm tăng cường sự tương tác giữa giảng viên và sinh viên.',
                    ),
                    array(
                        'src' => 'images/visao/1x/icon3.png',
                        'txt' => 'DU HỌC NGẮN HẠN VÀ THỰC TẬP NƯỚC NGOÀI',
                        'desc' => 'Sinh viên các ngành ngôn ngữ sẽ có 1 – 2 học kỳ chuyên ngành tại các quốc gia như Singapore, Philippines, Anh, Mỹ, Nhật, Singapore, Thái Lan… với mức phí tương đương học kỳ trong nước. Năm thứ 3, sinh viên làm việc thực tế từ 4 – 8 tháng tại các doanh nghiệp trong và ngoài nước trong học kỳ Thực tập tại doanh nghiệp (On the Job Training). ',
                    ),
                    array(
                        'src' => 'images/visao/1x/icon4.png',
                        'txt' => 'MÔI TRƯỜNG HỌC TẬP NĂNG ĐỘNG',
                        'desc' => 'Không chỉ giúp sinh viên vững vàng về tri thức, ngoại ngữ, ĐH FPT còn chú trọng phát triển cá nhân. Với nhiều hoạt động ngoại khoá, sự kiện dày đặc cùng hơn 40 CLB nhằm tạo cơ hội để sinh viên phát triển một cách toàn diện, nâng cao hiểu biết văn hoá, xã hội, trách nhiệm cộng đồng, năng lực cảm xúc...',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="home__visao__item uk-text-center">
                        <div class="home__visao__boxImg uk-cover-container uk-border-circle uk-flex-inline" data-src="<?= $v['src'] ?>" uk-img>
                            <canvas width="142" height="142"></canvas>
                        </div>
                    </div>
                    <div class="home__visao__item">
                        <div class="home__visao__title"><?= $v['txt'] ?></div>
                    </div>
                    <div class="home__visao__item">
                        <div class="home__visao__desc"><?= $v['desc'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="uk-width-1-1 uk-text-center">
                    <a href="" class="uk-button uk-button-default home__visao__btn uk-border-pill"><span>ĐĂNG KÝ</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/VÌ SAO HƠN 50,000 SINH VIÊN CHỌN ĐẠI HỌC FPT?-->

<!--Thông báo tuyển sinh hệ đại học chính quy Đại học FPT năm 2022-->
<div class="uk-section home__thongbao__section">
    <div class="uk-container">
        <div class="item__30">
            <h3 class="uk-text-center home__trainghiem__title">Thông báo tuyển sinh <br class="uk-visible@m">
                hệ đại học chính quy Đại học FPT năm 2022</h3>
        </div>
        <div class="item__30">
            <ul class="uk-child-width-expand home__thongbao__tab uk-flex-bottom" uk-tab>
                <li class="uk-active"><a href="#">PHƯƠNG THỨC TUYỂN SINH</a></li>
                <li><a href="#">THỦ TỤC XÉT TUYỂN</a></li>
                <li><a href="#">ĐĂNG KÝ & NỘP PHÍ</a></li>
            </ul>
            <ul class="uk-switcher home__thongbao__switch">
                <li>
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-1">
                            <div class="uk-text-center home__thongbao__txt">
                                Đối tượng tuyển sinh Các thí sinh tốt nghiệp THPT hoặc tương đương tính đến thời điểm nhập học
                                <br class="uk-visible@m">
                                Điều kiện xét tuyển Đáp ứng một trong các điều kiện sau
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-20-m" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'txt' => 'Thuộc diện được tuyển thẳng theo Quy chế tuyển sinh Đại học, Cao đẳng hệ đại học chính quy của Bộ GD&ĐT.',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Điểm học bạ thuộc Top50 THPT toàn quốc',
                                        'note' => '(chứng nhận thực hiện trên trang http://SchoolRank.fpt.edu.vn)',
                                    ),
                                    array(
                                        'txt' => 'Điểm các môn thi trong kỳ thi THPT 2020 thuộc Top50 THPT toàn quốc (theo số liệu Đại học FPT tổng hợp và công bố sau kỳ thi THPT 2020) và điểm theo khối xét tuyển đạt từ trung bình trở lên (15/30 điểm).',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Ngành Ngôn Ngữ Anh: Có chứng chỉ tiếng Anh TOEFL iBT từ 80 hoặc IELTS (Học thuật) từ 6.0 hoặc quy đổi tương đương.',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Ngành Ngôn Ngữ Nhật: Có chứng chỉ tiếng Nhật JLPT từ N3 trở lên.',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Tốt nghiệp Chương trình APTECH HDSE.',
                                        'note' => '(áp dụng đối với ngành CNTT)',
                                    ),
                                    array(
                                        'txt' => 'Ngành Ngôn Ngữ Hàn: <br/> Chứng chỉ Topik cấp độ 4 trong kỳ thi TOPIK II',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Tốt nghiệp Chương trình ARENA ADIM.',
                                        'note' => '(áp dụng đối với chuyên ngành Thiết kế Mỹ thuật số)',
                                    ),
                                    array(
                                        'txt' => 'Đã tốt nghiệp Đại học.',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Thí sinh tốt nghiệp THPT ở nước ngoài',
                                        'note' => '',
                                    ),
                                );
                                $count = ceil(count($data)/2); ?>
                                <div>
                                    <div class="uk-child-width-1-1@m uk-grid-match uk-grid-small uk-grid-20-m" uk-grid>
                                        <?php foreach ($data as $k=>$v): ?>
                                            <?php if (($k+1)<= $count): ?>
                                                <div>
                                                    <div class="home__thongbao__card" data-count="<?= $k+1 ?>">
                                                        <div class="home__thongbao__card__txt"><?= $v['txt'] ?></div>
                                                        <?php if (!empty($v['note'])): ?>
                                                            <div class="home__thongbao__card__note"><?= $v['note'] ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php else: ?>

                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-child-width-1-1@m uk-grid-match uk-grid-small uk-grid-20-m" uk-grid>
                                        <?php foreach ($data as $k=>$v): ?>
                                            <?php if (($k+1)<= $count): ?>

                                            <?php else: ?>
                                                <div>
                                                    <div class="home__thongbao__card" data-count="<?= $k+1 ?>">
                                                        <div class="home__thongbao__card__txt"><?= $v['txt'] ?></div>
                                                        <?php if (!empty($v['note'])): ?>
                                                            <div class="home__thongbao__card__note"><?= $v['note'] ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
            </ul>
        </div>
    </div>
</div>
<!--/Thông báo tuyển sinh hệ đại học chính quy Đại học FPT năm 2022-->

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