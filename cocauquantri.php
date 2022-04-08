<?php $data["title"] = "03. Cơ cấu quản trị HĐQT"; ?>
<?php $body = '' ?>
<?php $home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php
$databreadcrumb = array(
    array(
        'txt' => 'Trang chủ',
        'link' => '.',
    ),
    array(
        'txt' => 'Công ty',
        'link' => '',
    ),
    array(
        'txt' => 'Cơ cấu quản trị',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall cocauquantri__section1">
    <div class="uk-container">
        <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Cơ cấu quản trị</h2>
    </div>
</div>
<nav class="uk-navbar-container cocauquantri__navbar" uk-navbar>
    <div class="uk-navbar-left">
        <a href="" class="uk-navbar-item"></a>
    </div>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li><a href="#">Giới thiệu VBI</a></li>
            <li><a href="#">Nhà đầu tư</a></li>
            <li class="uk-active"><a href="#">Cơ cấu quản trị</a></li>
            <li><a href="#">Giải thưởng</a></li>
        </ul>
    </div>
</nav>
<div class="uk-section-small cocauquantri__section2">
    <div class="uk-container">

    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>