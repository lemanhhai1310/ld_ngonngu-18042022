<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Landingpage Ngonngu FptU 2022 - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($body))?$body:'' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<div id="offcanvas-flip-menu" class="menuMobile" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar menuMobile__bar">
        <button class="uk-offcanvas-close menuMobile__close" type="button" uk-close></button>
        <ul class="menuMobile__nav uk-nav-default uk-nav-parent-icon uk-nav-divider" uk-nav="multiple: true;toggle: .menuMobile__nav__icon" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
            <li><a href="#">TRANG CHỦ</a></li>
            <li><a href="#">CON SỐ ẤN TƯỢNG</a></li>
            <li><a href="#">DOANH NGHIỆP</a></li>
            <li><a href="#">VÌ SAO CHỌN ĐẠI HỌC FPT?</a></li>
            <li><a href="#">THÔNG BÁO TUYỂN SINH</a></li>
            <li><a href="#">ĐỘI NGŨ GIẢNG VIÊN</a></li>
        </ul>
    </div>
</div>
<div class="uk-position-top uk-position-z-index header" uk-sticky>
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas-flip-menu" uk-toggle>
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
                <a href="" class="uk-navbar-item uk-logo uk-background-default uk-visible@m"><img src="images/1x/logo.png" alt=""></a>
            </div>

            <div class="uk-navbar-center">
                <a href="" class="uk-navbar-item uk-logo uk-background-default uk-hidden@m"><img src="images/1x/logo.png" alt=""></a>
            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav uk-visible@m" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
                    <li><a href="#">TRANG CHỦ</a></li>
                    <li><a href="#">CON SỐ ẤN TƯỢNG</a></li>
                    <li><a href="#">DOANH NGHIỆP</a></li>
                    <li><a href="#">VÌ SAO CHỌN ĐẠI HỌC FPT?</a></li>
                    <li><a href="#">THÔNG BÁO TUYỂN SINH</a></li>
                    <li><a href="#">ĐỘI NGŨ GIẢNG VIÊN</a></li>
                </ul>

            </div>

        </nav>
    </div>
</div>