<?php $data["title"] = "01. Tin tức VBI"; ?>
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
        'txt' => 'Tin tức',
        'link' => '',
    ),
    array(
        'txt' => 'Tin tức VBI',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="tintuc__block01 uk-flex uk-flex-middle">
    <div class="uk-section uk-width-1-1">
        <div class="uk-container">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Tin tức về bảo hiểm VBI,
                Sức khỏe xã hội, <br class="uk-visible@m">
                Những phát triển công nghệ trong bảo hiểm</h2>
        </div>
    </div>
</div>
<nav class="uk-navbar-container cocauquantri__navbar" uk-navbar>
    <div class="uk-navbar-left">
        <a href="" class="uk-navbar-item"></a>
    </div>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Tin tức VBI</a></li>
            <li><a href="#">Tin khuyến mãi</a></li>
            <li><a href="#">Tin doanh nghiệp</a></li>
        </ul>
    </div>
</nav>
<div class="uk-section-small cocauquantri__section2">
    <div class="uk-container">
        <div class="item__40">
            <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                <?php for ($i=0;$i<=23;$i++): ?>
                    <div>
                        <div class="home__blockNews__card uk-card uk-flex uk-flex-column">
                            <div class="uk-cover-container">
                                <img src="https://znews-photo.zingcdn.me/w960/Uploaded/rotntv/2022_04_01/2600x_1_2.jpeg" alt="" uk-cover="">
                                <canvas width="287" height="166"></canvas>
                            </div>
                            <div class="uk-flex-auto uk-padding-small">
                                <div class="home__blockNews__card__title"><a href="">VBI Nghệ An Chi Trả 300 Triệu Đồng Bảo Hiểm Người Vay Vốn</a></div>
                                <div class="home__blockNews__card__time">09:03 20/01/2022</div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="item__40">
            <ul class="uk-pagination uk-flex-center" uk-margin>
                <li><a href="#"><span uk-pagination-previous></span></a></li>
                <li><a href="#">1</a></li>
                <li class="uk-disabled"><span>...</span></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class="uk-active"><span>7</span></li>
                <li><a href="#">8</a></li>
                <li><a href="#"><span uk-pagination-next></span></a></li>
            </ul>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>