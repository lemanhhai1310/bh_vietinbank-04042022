<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảo hiểm VietinBank - <?= /** @var TYPE_NAME  */
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
<body class="<?= (isset($home) && $home)?'':'not_home' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<div id="offcanvas-flip-menu" class="menuMobile" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar menuMobile__bar">
        <button class="uk-offcanvas-close menuMobile__close" type="button" uk-close></button>
        <ul class="menuMobile__nav uk-nav-default uk-nav-parent-icon uk-nav-divider" uk-nav="multiple: true;toggle: .menuMobile__nav__icon" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
            <li class="uk-active"><a href="#">Trang chủ</a></li>
            <li><a href="congty_about.php">Công ty</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="boithuong.php">Bồi thường</a></li>
            <li><a href="#">Gia hạn hợp đồng</a></li>
            <li><a href="#" class="header__bottom__txtUnderline">Trở thành đại lý</a></li>
        </ul>
    </div>
</div>
<?php if (isset($home) && $home): ?>
    <div class="header__top uk-visible@m">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item header__top__hotline">
                        <div>Hotline: 1900.1566</div>
                    </div>
                    <div class="uk-navbar-item">
                        <div class="uk-position-relative">
                            <div class="header__top__flag" style="--background:url('images/vn31.png')">
                                <span>Tiếng Việt</span>
                            </div>
                            <div class="uk-padding-small header__top__dropFlag" uk-dropdown="mode: click">
                                <ul class="uk-nav">
                                    <li class="uk-active"><a href="" style="--background: url('images/230px-Flag_of_North_Vietnam_(1955–1976).png')">Vietnamese</a></li>
                                    <li><a href="" style="--background: url('https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Flag_of_the_United_States_%281847%E2%80%931848%29.svg/1200px-Flag_of_the_United_States_%281847%E2%80%931848%29.svg.png')">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="" class="uk-navbar-item">
                        <span class="header__top__cartIcon"></span>
                    </a>
                    <div class="uk-navbar-item">
                        <a href="" class="header__top__btnLogin uk-button uk-button-default uk-border-pill"><span>Đăng nhập</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
<?php endif; ?>
<div class="header__bottom" uk-sticky>
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#offcanvas-flip-menu" uk-toggle></a>
                <a href="." class="uk-navbar-item uk-logo uk-visible@m"><img class="header__bottom__logoImg" src="images/logo.png" alt=""></a>
                <a href="." class="uk-navbar-item uk-logo uk-hidden@m"><img class="header__bottom__logoImg" src="images/Logo_m.png" alt=""></a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li class="uk-active"><a href="#">Trang chủ</a></li>
                    <li><a href="congty_about.php">Công ty</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="boithuong.php">Bồi thường</a></li>
                    <li><a href="#">Gia hạn hợp đồng</a></li>
                </ul>
                <div class="uk-navbar-item uk-visible@m">
                    <a href="#" class="header__bottom__txtUnderline">Trở thành đại lý</a>
                </div>
                <?php if (isset($home) && $home): ?>
                    <a href="" class="uk-navbar-item uk-hidden@m">
                        <span class="header__top__cartIcon"></span>
                    </a>
                    <div class="uk-navbar-item uk-hidden@m">
                        <a href="" class="header__top__btnLogin uk-button uk-button-default uk-border-pill"><span>Đăng nhập</span></a>
                    </div>
                <?php else: ?>
                    <a href="" class="uk-navbar-item">
                        <span class="header__top__cartIcon"></span>
                    </a>
                    <div class="uk-navbar-item">
                        <a href="" class="header__top__btnLogin uk-button uk-button-default uk-border-pill"><span>Đăng nhập</span></a>
                    </div>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</div>
