<?php $data["title"] = "04. Giải thưởng và danh hiệu"; ?>
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
        'txt' => 'Giải thưởng',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall cocauquantri__section1">
    <div class="uk-container">
        <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Giải thưởng</h2>
    </div>
</div>
<?php
$datamenu = array(
    array(
        'txt' => 'Giới thiệu VBI',
        'link' => 'congty_about.php',
        'active' => false,
    ),
    array(
        'txt' => 'Nhà đầu tư',
        'link' => 'nhadautu.php',
        'active' => false,
    ),
    array(
        'txt' => 'Cơ cấu quản trị',
        'link' => 'cocauquantri.php',
        'active' => false,
    ),
    array(
        'txt' => 'Giải thưởng',
        'link' => 'giaithuong.php',
        'active' => true,
    ),
);
require "template-parts/layouts/navbar-menu.php"; ?>
<div class="uk-section-small cocauquantri__section2">
    <div class="uk-container">
        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-row-large" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/giaithuong/img1.png',
                    'txt' => 'TOP 10 Doanh nghiệp Bảo hiểm phi nhân thọ uy tín nhất Việt Nam',
                ),
                array(
                    'src' => 'images/giaithuong/img2.png',
                    'txt' => 'VBI vinh dự đón nhận chỉ số hài lòng đạt chuẩn quốc tế',
                ),
                array(
                    'src' => 'images/giaithuong/img3.png',
                    'txt' => 'VBI vinh dự đón nhận chỉ số hài lòng đạt chuẩn quốc tế',
                ),
                array(
                    'src' => 'images/giaithuong/img4.png',
                    'txt' => 'TOP 100 – Sản phẩm, dịch vụ tốt nhất cho gia đình, trẻ em',
                ),
                array(
                    'src' => 'images/giaithuong/img5.png',
                    'txt' => 'TOP 10 Công Ty Bảo hiểm uy tín nhất năm 2018',
                ),
                array(
                    'src' => 'images/giaithuong/img6.png',
                    'txt' => 'Bảo hiểm VietinBank đạt TOP 100 Giải thưởng Sao Vàng',
                ),
                array(
                    'src' => 'images/giaithuong/img7.png',
                    'txt' => 'TOP 1 tăng trưởng nhanh nhất Ngành Bảo hiểm',
                ),
                array(
                    'src' => 'images/giaithuong/img8.png',
                    'txt' => 'TOP 1000 doanh nghiệp nộp thuế lớn nhất việt nam',
                ),
            );
            foreach ($data as $k=>$v):?>
            <div>
                <div class="item__16">
                    <div class="uk-cover-container giaithuong__section1__box__img">
                        <canvas width="288" height="288"></canvas>
                        <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                            <img src="<?= $v['src'] ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="item__16 uk-text-center">
                    <div class="giaithuong__section1__box__txt"><?= $v['txt'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>