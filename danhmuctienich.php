<?php $data["title"] = "01. Danh mục tiện ích"; ?>
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
        'txt' => 'Danh mục tiện ích',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section cauhoithuonggap__section">
    <div class="uk-container">
        <div class="item__32">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Danh mục tiện ích</h2>
        </div>
        <div class="item__32">
            <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-small" uk-grid>
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
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>