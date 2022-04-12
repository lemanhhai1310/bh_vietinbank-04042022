<?php $data["title"] = "1. Sản phẩm doanh nghiệp"; ?>
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
        'txt' => 'Bảo hiểm cho doanh nghiệp',
        'link' => '',
    ),
    array(
        'txt' => 'Bảo hiểm sức khoẻ An Phát',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="about__section1 sanphamdoanhnghiep__bg uk-background-norepeat uk-flex uk-flex-middle uk-background-bottom-center">
    <div class="uk-width-1-1 uk-section-xsmall">
        <div class="uk-container">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Bảo hiểm sức khỏe <br class="uk-visible@m">
                cho nhân viên VBI An Phát</h2>
        </div>
    </div>
</div>

<!--Câu hỏi thường gặp-->
<div class="uk-section uk-background-muted boithuong__blockCauhoithuonggap__section">
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