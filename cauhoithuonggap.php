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
        'active' => true,
    ),
    array(
        'txt' => 'Giải thưởng',
        'link' => 'giaithuong.php',
        'active' => false,
    ),
);
require "template-parts/layouts/navbar-menu.php"; ?>
<div class="uk-section-small cocauquantri__section2">
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-1-4@m">
                <nav class="cocauquantri__section2__nav">
                    <ul class="uk-nav uk-nav-default">
                        <li class="uk-active"><a href="#">Hội đồng quản trị</a></li>
                        <li><a href="#">Ban điều hành</a></li>
                        <li><a href="#">Ban kiểm soát</a></li>
                    </ul>
                </nav>
            </div>
            <div class="uk-width-expand">
                <?php
                $data = array(
                    array(
                        'src' => 'images/cocauquantri/img1.png',
                        'name' => 'Ông Nguyễn Huy Quang',
                        'txt1' => 'Chủ tịch Hội đồng quản trị ',
                        'txt2' => 'Ông Nguyễn Huy Quang được Hội đồng Quản trị Tổng Công ty Cổ phần Bảo hiểm Ngân hàng TMCP Công Thương Việt Nam (VBI) tin tưởng bầu giữ chức Chủ tịch Hội đồng Quản trị VBI từ tháng 11/2021.
Trước khi được bầu làm Chủ tịch HĐQT VBI, ông Nguyễn Huy Quang từng đảm nhiệm nhiều vị trí quan trọng tại ngân hàng VietinBank...',
                    ),
                    array(
                        'src' => 'images/cocauquantri/img2.png',
                        'name' => 'Ông Lê Tuấn Dũng',
                        'txt1' => 'Thành viên HĐQT kiêm Tổng Giám đốc',
                        'txt2' => 'Ông Lê Tuấn Dũng là người giữ vai trò đặc biệt quan trọng trong chiến lược dẫn dắt VBI luôn tăng trưởng vượt bậc kể từ 2013 đến nay. Dưới sự điều hành của ông Dũng, nhiều năm liền VBI luôn nằm trong top Doanh nghiệp tăng trưởng nhanh nhất trong ngành Bảo hiểm. 
Là người nhạy bén với công nghệ mới, ông Dũng đã tạo nên những thay đổi...',
                    ),
                    array(
                        'src' => 'images/cocauquantri/img3.png',
                        'name' => 'Bà Trần Thị Hương Thủy',
                        'txt1' => 'Thành viên HĐQT kiêm Phó Tổng Giám đốc',
                        'txt2' => 'Bà Trần Thị Hương Thủy là người đặt dấu ấn mạnh mẽ và quan trọng trong việc phát triển mạng lưới của VBI tại Việt Nam, đưa VBI tăng trưởng từ 2 công ty thành viên lên tới 44 công ty thành viên và phòng giao dịch. 
Là một trong những người đặt viên gạch xây dựng VBI từ những ngày đầu, bà Thủy có vai trò quan trọng trong việc xây dựng, hoạch định nguồn nhân lực,...',
                    ),
                    array(
                        'src' => 'images/cocauquantri/img4.png',
                        'name' => 'Ông Hur Jung Hoe',
                        'txt1' => 'Thành viên HĐQT',
                        'txt2' => 'Ông Hur Jung Hoe là Cử nhân Đại học HanYang, Hàn Quốc. Từ tháng 7/2003, ông đảm nhiệm nhiều vị trí tại Công ty TNHH Hàng hải và Cháy nổ Hyundai. Năm 2017, ông được bổ nhiệm làm Phó Giám đốc Phòng Phát triển kinh doanh nước ngoài. Từ tháng 9/2020, ông là thành viên HĐQT Bảo hiểm VietinBank và Trưởng văn phòng đại diện của Công ty TNHH Hàng hải và Cháy nổ Hyundai.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div class="item__15 uk-overflow-hidden cocauquantri__section2__box">
                    <div class="uk-grid-collapse uk-grid-match" uk-grid>
                        <div class="uk-width-auto@m">
                            <div class="uk-cover-container">
                                <canvas width="285" height="340"></canvas>
                                <div class="uk-position-cover uk-flex uk-flex-center uk-flex-bottom">
                                    <img uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" src="<?= $v['src'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-padding-small uk-flex uk-flex-middle">
                                <div>
                                    <div class="item__24">
                                        <div class="item__12">
                                            <div class="item__8">
                                                <div class="cocauquantri__section2__box__name"><?= $v['name'] ?></div>
                                            </div>
                                            <div class="item__8">
                                                <div class="cocauquantri__section2__box__txt1"><?= $v['txt1'] ?></div>
                                            </div>
                                        </div>
                                        <div class="item__12">
                                            <div class="cocauquantri__section2__box__txt2"><?= $v['txt2'] ?></div>
                                        </div>
                                    </div>
                                    <div class="item__24">
                                        <a href="#modal-chitietquantri" uk-toggle class="cocauquantri__section2__box__btn uk-button uk-button-default uk-border-pill"><span>Xem chi tiết</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="cocauquantri__section3">
    <div class="uk-container">
        <div class="uk-grid-small uk-flex-middle uk-flex-center" uk-grid>
            <div class="uk-width-auto@m">
                <img src="images/cocauquantri/image7.png" alt="">
            </div>
            <div class="uk-width-auto">
                <div class="cocauquantri__section3__txt">
                    Trở thành doanh nghiệp bảo hiểm hàng đầu nhờ sự sáng tạo <br class="uk-visible@m"> và khác biệt, mang trong mình giá trị nhân văn sâu sắc
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-chitietquantri" class="cocauquantri__modal uk-flex-top" uk-modal>
    <div class="cocauquantri__modal__dialog uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-grid-32" uk-grid>
            <div class="uk-width-auto@m">
                <div class="uk-cover-container uk-border-circle">
                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                    <canvas width="248" height="248"></canvas>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="item__12">
                    <div class="item__8">
                        <div class="cocauquantri__section2__box__name"><?= $v['name'] ?></div>
                    </div>
                    <div class="item__8">
                        <div class="cocauquantri__section2__box__txt1"><?= $v['txt1'] ?></div>
                    </div>
                </div>
                <div class="item__12">
                    <div class="cocauquantri__section2__box__txt2"><?= $v['txt2'] ?></div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    UIkit.modal('#modal-chitietquantri').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>