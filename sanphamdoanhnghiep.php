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

<!--Bảo hiểm sức khỏe cho nhân viên-->
<div class="uk-section sanphamdoanhnghiep__bhchonhanvien__section">
    <div class="uk-container">
        <div class="item__32">
            <div class="item__24">
                <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Bảo hiểm sức khỏe cho nhân viên</h2>
            </div>
            <div class="item__24 uk-text-center">
                <div class="sanphamdoanhnghiep__bhchonhanvien__txt">
                    VBI An Phát là sản phẩm bảo hiểm chăm sóc sức khỏe toàn diện với <br class="uk-visible@m">
                    các quyền lợi bảo hiểm bảo hiểm thiết thực và là giải pháp hỗ trợ quản <br class="uk-visible@m">
                    lý nguồn nhân lực và tài chính cho doanh nghiệp
                </div>
            </div>
        </div>
        <div class="item__32 uk-text-center">
            <div class="item__16">
                <a href="" class="sanphamdoanhnghiep__dacdiemuuviet__btn sanphamdoanhnghiep__dacdiemuuviet__btn--c1 uk-border-pill uk-button uk-button-default"><span>Chi tiết quyền lợi sản phẩm</span></a>
            </div>
            <div class="item__16">
                <a href="" class="sanphamdoanhnghiep__dacdiemuuviet__btn uk-border-pill uk-button uk-button-default"><span>Nhận báo giá</span></a>
            </div>
        </div>
    </div>
</div>
<!--/Bảo hiểm sức khỏe cho nhân viên-->

<!--Điểm ưu việt của sản phẩm này là gì?-->
<div class="uk-section sanphamdoanhnghiep__dacdiemuuviet__section uk-background-muted">
    <div class="uk-container">
        <div class="item__32">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Điểm ưu việt của sản phẩm này là gì?</h2>
        </div>
        <div class="item__32">
            <div class="item__52">
                <div class="uk-child-width-1-3@m uk-grid-row-medium uk-grid-small uk-flex-center" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/sanphamdoanhnghiep/uuviet1.png',
                            'txt' => 'QUYỀN LỢI BẢO HIỂM TOÀN DIỆN',
                        ),
                        array(
                            'src' => 'images/sanphamdoanhnghiep/uuviet2.png',
                            'txt' => 'CHI PHÍ ƯU ĐÃI SO VỚI QUYỀN LỢI',
                        ),
                        array(
                            'src' => 'images/sanphamdoanhnghiep/uuviet3.png',
                            'txt' => 'BỒI THƯỜNG NHANH QUA APP MYVBI',
                        ),
                        array(
                            'src' => 'images/sanphamdoanhnghiep/uuviet4.png',
                            'txt' => 'KHÁM CHỮA BỆNH TẠI CÁC CƠ SỞ Y TẾ HÀNG ĐẦU',
                        ),
                        array(
                            'src' => 'images/sanphamdoanhnghiep/uuviet5.png',
                            'txt' => 'THỜI GIAN CHỜ NGẮN, BẢO VỆ NHỮNG BỆNH CÓ SẴN',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div class="sanphamdoanhnghiep__dacdiemuuviet__column">
                        <div class="item__16">
                            <div class="uk-cover-container sanphamdoanhnghiep__dacdiemuuviet__boxImg">
                                <canvas width="390" height="207"></canvas>
                                <div class="uk-position-cover uk-flex uk-flex-center uk-flex-bottom">
                                    <img src="<?= $v['src'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item__16 uk-text-center">
                            <div class="sanphamdoanhnghiep__dacdiemuuviet__txt"><?= $v['txt'] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="item__52 uk-text-center">
                <a href="" class="sanphamdoanhnghiep__dacdiemuuviet__btn uk-border-pill uk-button uk-button-default"><span>Nhận báo giá</span></a>
            </div>
        </div>
    </div>
</div>
<!--/Điểm ưu việt của sản phẩm này là gì?-->

<!--VBI luôn sẵn sàng giải thích và tư vấn cho bạn-->
<div class="uk-section sanphamdoanhnghiep__luonsansang__section">
    <div class="uk-container">
        <div class="item__32">
            <div class="item__14">
                <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">VBI luôn sẵn sàng giải thích và tư vấn cho bạn</h2>
            </div>
            <div class="item__14 uk-text-center">
                <div class="sanphamdoanhnghiep__luonsansang__txt">
                    Mọi thắc mắc của bạn sẽ đều được VBI giải thích và hỗ trợ 24/7 <br class="uk-visible@m">
                    Vui lòng để lại tên và số điện thoại để chúng tôi liên lạc với bạn.
                </div>
            </div>
        </div>
        <div class="item__32">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-auto@m sanphamdoanhnghiep__luonsansang__boxForm">
                    <div class="">
                        <div class="item__16">
                            <input class="uk-input sanphamdoanhnghiep__luonsansang__boxForm__input" type="text" placeholder="Họ và tên">
                        </div>
                        <div class="item__16">
                            <input class="uk-input sanphamdoanhnghiep__luonsansang__boxForm__input" type="text" placeholder="Số điện thoại">
                        </div>
                        <div class="item__16 uk-text-center">
                            <a href="" class="sanphamdoanhnghiep__dacdiemuuviet__btn uk-border-pill uk-button uk-button-default"><span>Gửi thông tin</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/VBI luôn sẵn sàng giải thích và tư vấn cho bạn-->

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