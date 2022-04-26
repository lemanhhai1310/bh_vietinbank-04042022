<?php $data["title"] = "01. Bồi thường"; ?>
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
        'txt' => 'Bồi thường',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="about__section1 boithuong__bg uk-background-norepeat uk-flex uk-background-bottom-center" uk-toggle="cls: uk-flex-middle; mode: media; media: @s">
    <div class="uk-width-1-1 uk-section-xsmall">
        <div class="uk-container">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Khai báo online, bồi thường siêu tốc</h2>
        </div>
    </div>
</div>
<!--Bồi thường siêu tốc qua App MYVBI -->
<div class="uk-section boithuong__blockSieutoc__section">
    <div class="uk-container">
        <div class="item__40">
            <div class="item__56">
                <div class="uk-child-width-auto uk-flex-center" uk-grid>
                    <div>
                        <div class="uk-cover-container about__section2__boxVideo">
                            <canvas width="543" height="325"></canvas>
                            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                <img src="images/boithuong/video.png" alt="">
                            </div>
                            <a href="#modal-media-youtube" uk-toggle class="about__section2__boxVideo__iconPlay uk-position-center"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item__56">
                <div class="item__12">
                    <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Bồi thường siêu tốc qua App MYVBI </h2>
                </div>
                <div class="item__12 uk-text-center">
                    <div class="boithuong__blockSieutoc__txt1">
                        Là doanh nghiệp bảo hiểm số hàng đầu Việt Nam, Bảo hiểm VietinBank (VBI) đem đến cho khách hàng
                        <br class="uk-visible@m">
                        những trải nghiệm bồi thường thuận tiện nhất thông qua MyVBI - Ứng dụng bảo hiểm đầu tiên trên thị trường.
                    </div>
                </div>
            </div>
        </div>
        <div class="item__40">
            <div class="uk-child-width-1-2@s uk-flex-center uk-grid-small uk-child-width-1-3@m uk-grid-18-m" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/boithuong/sieutoc1.png',
                        'txt' => 'Nhận phương án bồi thường trong vòng 30 phút sau khi khai báo xong',
                    ),
                    array(
                        'src' => 'images/boithuong/sieutoc2.png',
                        'txt' => 'Nhận tiền bồi thường trong vòng 1 phút sau khi đồng ý phương án',
                    ),
                    array(
                        'src' => 'images/boithuong/sieutoc3.png',
                        'txt' => '99.6% khách hàng hài lòng với dịch vụ bồi thường của VBI',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="item__16">
                        <div class="uk-cover-container boithuong__blockSieutoc__boxImg">
                            <canvas width="390" height="289"></canvas>
                            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                <img src="<?= $v['src'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item__16 uk-text-center">
                        <div class="boithuong__blockSieutoc__txt"><?= $v['txt'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Bồi thường siêu tốc qua App MYVBI -->
<!--3 bước khai báo bồi thường-->
<div class="boithuong__blockStep__section uk-section uk-background-muted">
    <div class="uk-container">
        <div class="item__32">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">3 bước khai báo bồi thường</h2>
        </div>
        <div class="item__32">
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-116-m uk-grid-small uk-flex-center" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/boithuong/step1.png',
                        'txt' => 'Tải App MyVBI
và đăng nhập ngay',
                    ),
                    array(
                        'src' => 'images/boithuong/step2.png',
                        'txt' => 'Chọn “Yêu cầu bồi thường”
và khai báo thông tin, hồ sơ',
                    ),
                    array(
                        'src' => 'images/boithuong/step3.png',
                        'txt' => 'Nhận bồi thường 
chỉ từ 3+ ngày làm việc.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="item__24">
                        <div class="uk-cover-container boithuong__blockStep__boxImg">
                            <span class="boithuong__blockStep__badge uk-position-top-left">0<?= $k+1 ?></span>
                            <canvas width="275" height="183"></canvas>
                            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                <img src="<?= $v['src'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item__24 uk-text-center">
                        <div class="boithuong__blockStep__txt"><?= $v['txt'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/3 bước khai báo bồi thường-->
<!--Câu hỏi thường gặp-->
<div class="uk-section boithuong__blockCauhoithuonggap__section">
    <div class="uk-container">
        <div class="item__38">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Câu hỏi thường gặp</h2>
        </div>
        <div class="item__38">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-4-5@m">
                    <ul uk-accordion="">
                        <li class="block_cauhoithuonggap__accordion__li uk-open">
                            <a class="uk-accordion-title block_cauhoithuonggap__accordion__title" href="#">1. Hợp đồng bảo hiểm sẽ được gửi đến khách hàng như thế nào</a>
                            <div class="uk-accordion-content block_cauhoithuonggap__accordion__content">
                                <div class="block_cauhoithuonggap__accordion__box">
                                    <p>"Khi mua và thanh toán thành công sản phẩm bảo hiểm sức khỏe, khách hàng sẽ được cấp giấy chứng nhận bảo hiểm điện tử do VBI phát hành qua email đã đăng ký.</p>
                                    <p>Giấy chứng nhận điện tử có đầy đủ giá trị pháp lý theo quy định tại Nghị định 52/2013/NĐ-CP ngày 16/05/2013 của Chính phủ về Thương mại điện tử. Khách hàng cũng có thể truy cập về thông tin giấy chứng nhận và quyền lợi bảo hiểm trên App My VBI."</p>
                                </div>
                            </div>
                        </li>
                        <li class="block_cauhoithuonggap__accordion__li">
                            <a class="uk-accordion-title block_cauhoithuonggap__accordion__title" href="#">2. Ưu điểm của bảo hiểm sức khỏe VBI care là gì?</a>
                            <div class="uk-accordion-content block_cauhoithuonggap__accordion__content">
                                <div class="block_cauhoithuonggap__accordion__box">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                </div>
                            </div>
                        </li>
                        <li class="block_cauhoithuonggap__accordion__li">
                            <a class="uk-accordion-title block_cauhoithuonggap__accordion__title" href="#">3. Tại sao nên mua bảo hiểm online?</a>
                            <div class="uk-accordion-content block_cauhoithuonggap__accordion__content">
                                <div class="block_cauhoithuonggap__accordion__box">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                </div>
                            </div>
                        </li>
                        <li class="block_cauhoithuonggap__accordion__li">
                            <a class="uk-accordion-title block_cauhoithuonggap__accordion__title" href="#">4. Bảo hiểm VBI care cho phép khám chữa bệnh ở những bệnh viện nào?</a>
                            <div class="uk-accordion-content block_cauhoithuonggap__accordion__content">
                                <div class="block_cauhoithuonggap__accordion__box">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                </div>
                            </div>
                        </li>
                        <li class="block_cauhoithuonggap__accordion__li">
                            <a class="uk-accordion-title block_cauhoithuonggap__accordion__title" href="#">5. Thời gian chờ là gì?</a>
                            <div class="uk-accordion-content block_cauhoithuonggap__accordion__content">
                                <div class="block_cauhoithuonggap__accordion__box">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                </div>
                            </div>
                        </li>
                        <li class="block_cauhoithuonggap__accordion__li">
                            <a class="uk-accordion-title block_cauhoithuonggap__accordion__title" href="#">6. Bệnh có sẵn là gì?</a>
                            <div class="uk-accordion-content block_cauhoithuonggap__accordion__content">
                                <div class="block_cauhoithuonggap__accordion__box">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Câu hỏi thường gặp-->
<?php require "template-parts/layouts/block_taiapp.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>