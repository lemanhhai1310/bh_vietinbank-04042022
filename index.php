<?php $data["title"] = "01. Trang chủ"; ?>
<?php $home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Sản phẩm bảo hiểm được khách hàng quan tâm tại VBI-->
<div class="home__block01__bg uk-background-image@m uk-flex uk-flex-middle">
    <div class="uk-width-1-1 uk-section">
        <div class="uk-container uk-container-small">
            <div class="item__32">
                <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Sản phẩm bảo hiểm được khách hàng quan tâm tại VBI</h2>
            </div>
            <div class="item__32">
                <div class="uk-child-width-expand@m uk-grid-small" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/sanpham/family.png',
                            'txt' => 'Bảo hiểm Sức khỏe',
                        ),
                        array(
                            'src' => 'images/sanpham/trachnhiemdansu.png',
                            'txt' => 'Bảo hiểm TNDS xe máy',
                        ),
                        array(
                            'src' => 'images/sanpham/Group7766.png',
                            'txt' => 'Bảo hiểm TNDS ô tô',
                        ),
                        array(
                            'src' => 'images/sanpham/medical-report2.png',
                            'txt' => 'Bảo hiểm bệnh hiểm nghèo',
                        ),
                        array(
                            'src' => 'images/sanpham/Frame7288.png',
                            'txt' => 'Bảo hiểm nhà tư nhân',
                        ),
                        array(
                            'src' => 'images/sanpham/magnifying-glass1.png',
                            'txt' => 'Tìm sản phẩm khác',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="uk-text-center home__block01__box">
                            <div class="home__block01__box1 uk-cover-container item__16 uk-background-norepeat uk-background-center-center" data-src="<?= $v['src'] ?>" uk-img>
                                <canvas width="120" height="120"></canvas>
                                <?php if ($k == 3): ?>
                                <span class="uk-position-top-right home__block01__sale">-20%</span>
                                <?php endif; ?>
                            </div>
                            <div class="item__16">
                                <div class="home__block01__txt"><a href=""><?= $v['txt'] ?></a></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="item__32">
                <div uk-slider="autoplay: true">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-1">
                            <li>
                                <img src="images/banner1.png" alt="">
                            </li>
                            <li>
                                <img src="images/banner1.png" alt="">
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-small"></ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!--/Sản phẩm bảo hiểm được khách hàng quan tâm tại VBI-->
<!--Bạn muốn bảo vệ gì hôm nay ?-->
<div class="uk-section home__block02__section">
    <div class="uk-container">
        <div class="item__32">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Bạn muốn bảo vệ gì hôm nay ?</h2>
        </div>
        <div class="item__32">
            <div class="item__16">
                <div class="home__block02__title">Bảo vệ bạn và gia đình</div>
            </div>
            <div class="item__16">
                <div uk-slider>

                    <div class="uk-position-relative">

                        <div class="uk-slider-container">
                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-small" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'images/baovebanvagiadinh/heat.png',
                                        'txt' => 'Bảo vệ cho sức khỏe',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/xecogioi.png',
                                        'txt' => 'Bảo vệ xe cơ giới',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/medical-report1.png',
                                        'txt' => 'Bảo vệ trước bệnh hiểm nghèo',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/tainan.png',
                                        'txt' => 'Bảo vệ trước tai nạn',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/airplane1.png',
                                        'txt' => 'Bảo vệ khi đi du lịch',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/vaccine1.png',
                                        'txt' => 'Bảo vệ trước dịch bệnh',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/best-friend1.png',
                                        'txt' => 'Bảo vệ cho trẻ nhỏ',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/heat.png',
                                        'txt' => 'Bảo vệ cho sức khỏe',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/heat.png',
                                        'txt' => 'Bảo vệ cho sức khỏe',
                                    ),
                                );
                                foreach ($data as $k=>$v): ?>
                                <li class="home__block02__w7">
                                    <div class="uk-cover-container uk-padding-small home__block02__box">
                                        <canvas width="142" height="142"></canvas>
                                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-column uk-text-center">
                                            <div class="uk-flex-1 uk-flex uk-flex-middle uk-flex-center">
                                                <img src="<?= $v['src'] ?>" alt="">
                                            </div>
                                            <div class="uk-flex-1 home__block01__txt"><?= $v['txt'] ?></div>
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
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

                </div>
            </div>
        </div>
        <div class="item__32">
            <div class="item__16">
                <div class="home__block02__title">Bảo vệ doanh nghiệp của bạn</div>
            </div>
            <div class="item__16">
                <div uk-slider>

                    <div class="uk-position-relative">

                        <div class="uk-slider-container">
                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-small" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'images/baovebanvagiadinh/heat.png',
                                        'txt' => 'Bảo vệ cho sức khỏe',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/xecogioi.png',
                                        'txt' => 'Bảo vệ xe cơ giới',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/medical-report1.png',
                                        'txt' => 'Bảo vệ trước bệnh hiểm nghèo',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/tainan.png',
                                        'txt' => 'Bảo vệ trước tai nạn',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/airplane1.png',
                                        'txt' => 'Bảo vệ khi đi du lịch',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/vaccine1.png',
                                        'txt' => 'Bảo vệ trước dịch bệnh',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/best-friend1.png',
                                        'txt' => 'Bảo vệ cho trẻ nhỏ',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/heat.png',
                                        'txt' => 'Bảo vệ cho sức khỏe',
                                    ),
                                    array(
                                        'src' => 'images/baovebanvagiadinh/heat.png',
                                        'txt' => 'Bảo vệ cho sức khỏe',
                                    ),
                                );
                                foreach ($data as $k=>$v): ?>
                                    <li class="home__block02__w7">
                                        <div class="uk-cover-container uk-padding-small home__block02__box">
                                            <canvas width="142" height="142"></canvas>
                                            <div class="uk-position-cover uk-padding-small uk-flex uk-flex-column uk-text-center">
                                                <div class="uk-flex-1 uk-flex uk-flex-middle uk-flex-center">
                                                    <img src="<?= $v['src'] ?>" alt="">
                                                </div>
                                                <div class="uk-flex-1 home__block01__txt"><?= $v['txt'] ?></div>
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
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!--/Bạn muốn bảo vệ gì hôm nay ?-->
<!--Tiện ích 24/7-->
<div class="uk-section uk-background-muted">
    <div class="uk-container">
        <div class="item__32">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Tiện ích 24/7</h2>
        </div>
        <div class="item__32">
            <div uk-slider>

                <div class="uk-position-relative">

                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-small" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/baovebanvagiadinh/heat.png',
                                    'txt' => 'Bảo vệ cho sức khỏe',
                                ),
                                array(
                                    'src' => 'images/baovebanvagiadinh/xecogioi.png',
                                    'txt' => 'Bảo vệ xe cơ giới',
                                ),
                                array(
                                    'src' => 'images/baovebanvagiadinh/medical-report1.png',
                                    'txt' => 'Bảo vệ trước bệnh hiểm nghèo',
                                ),
                                array(
                                    'src' => 'images/baovebanvagiadinh/tainan.png',
                                    'txt' => 'Bảo vệ trước tai nạn',
                                ),
                                array(
                                    'src' => 'images/baovebanvagiadinh/airplane1.png',
                                    'txt' => 'Bảo vệ khi đi du lịch',
                                ),
                                array(
                                    'src' => 'images/baovebanvagiadinh/vaccine1.png',
                                    'txt' => 'Bảo vệ trước dịch bệnh',
                                ),
                                array(
                                    'src' => 'images/baovebanvagiadinh/best-friend1.png',
                                    'txt' => 'Bảo vệ cho trẻ nhỏ',
                                ),
                                array(
                                    'src' => 'images/baovebanvagiadinh/heat.png',
                                    'txt' => 'Bảo vệ cho sức khỏe',
                                ),
                                array(
                                    'src' => 'images/baovebanvagiadinh/heat.png',
                                    'txt' => 'Bảo vệ cho sức khỏe',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                                <li class="home__block02__w7">
                                    <div class="uk-cover-container uk-padding-small home__block02__box">
                                        <canvas width="142" height="142"></canvas>
                                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-column uk-text-center">
                                            <div class="uk-flex-1 uk-flex uk-flex-middle uk-flex-center">
                                                <img src="<?= $v['src'] ?>" alt="">
                                            </div>
                                            <div class="uk-flex-1 home__block01__txt"><?= $v['txt'] ?></div>
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
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

            </div>
        </div>
    </div>
</div>
<!--/Tiện ích 24/7-->
<!--Tin tức về VBI-->
<div class="uk-section home__blockNews__section">
    <div class="uk-container">
        <div class="home__blockNews__item">
            <div class="item__32">
                <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Tin tức về VBI</h2>
            </div>
            <div class="item__32">
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <?php for ($i=0;$i<=3;$i++): ?>
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
            <div class="item__32 uk-text-center">
                <button class="block_cauhoithuonggap__btn uk-button uk-button-default uk-border-pill"><span>Xem thêm</span></button>
            </div>
        </div>
        <div class="home__blockNews__item">
            <div class="item__32">
                <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Ưu đãi từ đối tác</h2>
            </div>
            <div class="item__32">
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <?php for ($i=0;$i<=3;$i++): ?>
                        <div>
                            <div class="home__blockNews__card uk-card uk-flex uk-flex-column">
                                <div class="uk-cover-container">
                                    <img src="https://znews-photo.zingcdn.me/w960/Uploaded/rotntv/2022_04_01/2600x_1_2.jpeg" alt="" uk-cover="">
                                    <canvas width="287" height="166"></canvas>
                                </div>
                                <div class="uk-flex-auto uk-padding-small">
                                    <div class="home__blockNews__card__title"><a href="">VBI Nghệ An Chi Trả 300 Triệu Đồng Bảo Hiểm Người Vay Vốn</a></div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="item__32 uk-text-center">
                <button class="block_cauhoithuonggap__btn uk-button uk-button-default uk-border-pill"><span>Xem thêm</span></button>
            </div>
        </div>
    </div>
</div>
<!--/Tin tức về VBI-->
<!--Vì sao chọn VBI?-->
<div class="uk-section uk-background-muted">
    <div class="uk-container">
        <div class="item__32">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Vì sao chọn VBI?</h2>
        </div>
        <div class="item__32">

        </div>
    </div>
</div>
<!--/Vì sao chọn VBI?-->
<?php require "template-parts/layouts/block_danhgiakhachhangdoitac.php"; ?>
<?php require "template-parts/layouts/block_taiapp.php"; ?>
<?php require "template-parts/layouts/block_cauhoithuonggap.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>