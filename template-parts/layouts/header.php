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
<?php if (isset($home) && $home): ?>
    <div class="header__top">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item header__top__hotline">
                        <div>Hotline: 1900.1566</div>
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
                <a href="." class="uk-navbar-item uk-logo"><img class="header__bottom__logoImg" src="images/logo.png" alt=""></a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Trang chủ</a></li>
                    <li><a href="#">Công ty</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Bồi thường</a></li>
                    <li><a href="#">Gia hạn hợp đồng</a></li>
                </ul>
                <div class="uk-navbar-item">
                    <a href="#" class="header__bottom__txtUnderline">Trở thành đại lý</a>
                </div>
                <?php if (isset($home) && $home): ?>

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
