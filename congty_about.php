<?php $data["title"] = "01. Công ty - Giới thiệu"; ?>
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
        'txt' => 'Giới thiệu VBI',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="about__section1 uk-background-norepeat uk-flex uk-flex-middle uk-background-center-center">
    <div class="uk-width-1-1 uk-section-xsmall">
        <div class="uk-container">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Bảo toàn giá trị cuộc sống</h2>
        </div>
    </div>
</div>
<?php
$datamenu = array(
    array(
        'txt' => 'Giới thiệu VBI',
        'link' => 'congty_about.php',
        'active' => true,
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
        'link' => '',
        'active' => false,
    ),
);
require "template-parts/layouts/navbar-menu.php"; ?>
<div id="modal-media-youtube" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-3-5@m uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA" width="1920" height="1080" uk-video uk-responsive></iframe>
    </div>
</div>
<div class="uk-section-small about__section2">
    <div class="uk-container">
        <div class="about__section2__item">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <article class="about__section2__content uk-article">
                        <h3 class="uk-h3 about__section2__content__title">Tổng công ty cổ phần Bảo hiểm <br class="uk-visible@m">
                            Ngân hàng TMCP Công Thương Việt Nam</h3>
                        <p>Tổng công ty cổ phần Bảo hiểm Ngân hàng TMCP Công Thương Việt Nam (Bảo hiểm VietinBank) tiền thân là Công ty TNHH MTV Bảo hiểm Ngân hàng TMCP Công Thương Việt Nam.</p>
                        <p>Trải qua chặng đường 10 năm hình thành và phát triển (từ 2008 đến nay) với định hướng là một công ty bảo hiểm vì giá trị nhân văn và mục tiêu dẫn đầu phân khúc bán lẻ trên thị trường bảo hiểm Việt Nam, Bảo hiểm VietinBank được nhiều khách hàng tin dùng bởi những cam kết chiến lược: dịch vụ khách hàng tốt, tăng trưởng mạnh, mang lại giá trị tốt đẹp cho cộng đồng.</p>
                    </article>
                </div>
                <div class="uk-width-auto@m">
                    <div class="item__10 uk-cover-container about__section2__boxVideo">
                        <canvas width="532" height="355"></canvas>
                        <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                            <img src="images/about/bg_video.png" alt="">
                        </div>
                        <a href="#modal-media-youtube" uk-toggle class="about__section2__boxVideo__iconPlay uk-position-center"></a>
                    </div>
                    <div class="item__10 uk-text-center">Xem câu chuyện về VBI</div>
                </div>
            </div>
        </div>
        <div class="about__section2__item">
            <div class="item__32">
                <div class="about__section2__content__title uk-text-center">Lịch sử hình thành và phát triển</div>
            </div>
            <div class="item__32">
                <div class="about__section2__history__subtract">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-match uk-grid-row-large" uk-toggle="cls: uk-grid-75-s; mode: media; media: (max-width: 959px)" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/about/statistics1.png',
                                'year' => '2008 ',
                                'txt' => 'Chuyển đổi mô hình thành Công ty TNHH MTV Bảo hiểm Ngân hàng TMCP Công thương Việt Nam trực thuộc 100% vốn Ngân hàng TMCP Công thương Việt Nam.',
                            ),
                            array(
                                'src' => 'images/about/crosshair1.png',
                                'year' => '2013',
                                'txt' => 'Xây dựng thành công mô hình bảo hiểm ngân hàng, cung cấp các sản phẩm bảo hiểm qua mạng lưới ngân hàng (hơn 155 chi nhánh và hơn 1000 điểm giao dịch).',
                            ),
                            array(
                                'src' => 'images/about/badge11.png',
                                'year' => '2015',
                                'txt' => 'Lọt Top 500 công ty có tốc độ tăng trưởng nhanh nhất.',
                            ),
                            array(
                                'src' => 'images/about/certificate21.png',
                                'year' => '2016',
                                'txt' => 'Phát hành giấy chứng nhận điện tử và hóa đơn điện tử.',
                            ),
                            array(
                                'src' => 'images/about/teamwork1.png',
                                'year' => '2017',
                                'txt' => 'Chuyển đổi mô hình thành Tổng Công ty Cổ phần Bảo hiểm VietinBank, gia nhập câu lạc bộ những doanh nghiệp nghìn tỷ.',
                            ),
                            array(
                                'src' => 'images/about/partnership-handshake1.png',
                                'year' => '2018',
                                'txt' => 'Ký kết Hợp đồng bán 25% cổ phần cho Hyundai Marine & Fire Insurance Company Limited (HMFI) - Công ty Bảo hiểm Phi nhân thọ có thị phần lớn nhất Hàn Quốc.',
                            ),
                            array(
                                'src' => 'images/about/insurance41.png',
                                'year' => '2020',
                                'txt' => 'Ra mắt sản phẩm bảo hiểm chuyên biệt dành cho bệnh Ung thư vú đầu tiên trên thị trường và sản phẩm bảo hiểm quốc dân chuyên biệt cho bệnh Sốt xuất huyết.',
                            ),
                            array(
                                'src' => 'images/about/mobile1.png',
                                'year' => '2021',
                                'txt' => 'VBI tiên phong công nghệ, nâng cấp ứng dụng My VBI phiên bản 4.0 với nhiều tính năng ưu việt xứng danh doanh nghiệp bảo hiểm số hàng đầu.',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                            <div class="about__section2__history__column">
                                <div class="about__section2__history__box uk-text-center">
                                    <div class="item__24">
                                        <div class="about__section2__history__img uk-display-inline-block uk-cover-container uk-border-circle">
                                            <canvas width="104" height="104"></canvas>
                                            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                                <img src="<?= $v['src'] ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item__24">
                                        <div class="item__8">
                                            <div class="about__section2__history__year"><?= $v['year'] ?></div>
                                        </div>
                                        <div class="item__8">
                                            <div class="about__section2__history__txt"><?= $v['txt'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Sứ mệnh của VBI-->
<div class="uk-background-muted uk-section">
    <div class="uk-container">
        <div class="item__32">
            <div class="about__section2__content__title uk-text-center">Sứ mệnh của VBI</div>
        </div>
        <div class="item__32">
            <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/about/sumenh/img1.png',
                        'txt1' => 'Sứ mệnh của VBI với khách hàng',
                        'txt2' => 'Trở thành doanh nghiệp bảo hiểm hàng đầu nhờ sự sáng tạo và khác biệt, mang trong mình giá trị nhân văn sâu sắc',
                    ),
                    array(
                        'src' => 'images/about/sumenh/img2.png',
                        'txt1' => 'Sứ mệnh của VBI với đối tác',
                        'txt2' => 'Tạo dựng mối quan hệ tốt đẹp và bền vững, dựa trên sự giao kết bình đằng, hợp tác và cùng phát triển',
                    ),
                    array(
                        'src' => 'images/about/sumenh/img3.png',
                        'txt1' => 'Đối với xã hội',
                        'txt2' => 'Phát huy tinh thần chia sẻ và tương hỗ, vì sự thịnh vượng và hạnh phúc của người dân Việt Nam',
                    ),
                    array(
                        'src' => 'images/about/sumenh/img4.png',
                        'txt1' => 'Đối với người lao động',
                        'txt2' => 'Đánh thức giá trị phi thường trong mỗi con người, phát triển thương hiệu cá nhân nổi trội.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="item__16">
                            <div class="uk-cover-container about__section2__sumenh__boxImg">
                                <canvas width="288" height="173"></canvas>
                                <div class="uk-position-cover uk-flex uk-flex-center uk-flex-bottom">
                                    <img src="<?= $v['src'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item__16 uk-text-center">
                            <div class="item__12">
                                <div class="about__section2__sumenh__title"><?= $v['txt1'] ?></div>
                            </div>
                            <div class="item__12">
                                <div class="about__section2__sumenh__desc"><?= $v['txt2'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Sứ mệnh của VBI-->
<!--Tầm nhìn - Giá trị cốt lõi-->
<div class="uk-section">
    <div class="uk-container">
        <div class="item__32">
            <div class="about__section2__content__title uk-text-center">Tầm nhìn - Giá trị cốt lõi</div>
        </div>
        <div class="item__32">
            <div class="uk-child-width-1-2@s uk-flex-center uk-child-width-1-3@m uk-grid-small" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/about/tamnhin/img1.png',
                        'txt1' => 'Tầm nhìn',
                        'txt2' => 'Trở thành doanh nghiệp bảo hiểm hàng đầu nhờ sự sáng tạo và khác biệt, mang trong mình giá trị nhân văn sâu sắc',
                    ),
                    array(
                        'src' => 'images/about/tamnhin/img2.png',
                        'txt1' => 'Mục tiêu',
                        'txt2' => 'Bảo toàn giá trị cuộc sống',
                    ),
                    array(
                        'src' => 'images/about/tamnhin/img3.png',
                        'txt1' => 'Giá trị cốt lõi',
                        'txt2' => 'Quyết liệt – Sáng tạo – Đổi mới – Tin cậy – Chân thành – Trách nhiệm',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="item__16">
                            <div class="uk-cover-container about__section2__sumenh__boxImg">
                                <canvas width="390" height="173"></canvas>
                                <div class="uk-position-cover uk-flex uk-flex-center uk-flex-bottom">
                                    <img src="<?= $v['src'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item__16 uk-text-center">
                            <div class="item__12">
                                <div class="about__section2__sumenh__title"><?= $v['txt1'] ?></div>
                            </div>
                            <div class="item__12">
                                <div class="about__section2__sumenh__desc"><?= $v['txt2'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Tầm nhìn - Giá trị cốt lõi-->
<?php require "template-parts/layouts/footer.php"; ?>