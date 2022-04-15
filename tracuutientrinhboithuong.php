<?php $data["title"] = "3.1 Tra cứu tiến trình bồi thường"; ?>
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
        'txt' => 'Tra cứu',
        'link' => '',
    ),
    array(
        'txt' => 'Tiến trình bồi thường',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall cocauquantri__section1">
    <div class="uk-container">
        <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Tra cứu</h2>
    </div>
</div>
<?php
$datamenu = array(
    array(
        'txt' => 'Giấy chứng nhận điện tử',
        'link' => 'tracuugiaychungnhandientu.php',
        'active' => false,
    ),
    array(
        'txt' => 'Hóa đơn điện tử',
        'link' => '',
        'active' => false,
    ),
    array(
        'txt' => 'Tiến trình bồi thường',
        'link' => 'tracuutientrinhboithuong.php',
        'active' => true,
    ),
);
require "template-parts/layouts/navbar-menu.php"; ?>
<script>
    window.addEventListener("load", function (event) {

    });
</script>
<div class="uk-section-small cocauquantri__section2">
    <div class="uk-container">
        <div class="uk-grid-small uk-child-width-1-4@m uk-flex-middle" uk-grid>
            <div>
                <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                    <select>
                        <option value="">Bảo hiểm sức khỏe</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="tracuu__boxForm__btnSelect uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                        <span></span>
                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
            <div>
                <div class="uk-position-relative tracuu__boxForm inValid">
                    <input class="uk-input tracuu__boxForm__input" type="text" placeholder="" value="0123456789">
                    <label class="uk-form-label uk-position-center-left tracuu__boxForm__label">Nhập số CMND</label>
                </div>
            </div>
            <div>
                <div class="uk-position-relative tracuu__boxForm inValid">
                    <input class="uk-input tracuu__boxForm__input" type="text" placeholder="" value="19/09/1997">
                    <label class="uk-form-label uk-position-center-left tracuu__boxForm__label">Nhập ngày sinh</label>
                    <span class="tracuu__boxForm__icon tracuu__boxForm__icon--calendar uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                </div>
            </div>
            <div>
                <button type="button" class="tracuu__btnSubmit uk-button uk-button-default uk-width-1-1 uk-border-pill"><span>Tra cứu</span></button>
            </div>
        </div>
        <div class="tracuu__boxTop40">
            <div class="uk-child-width-1-3@m uk-grid-small" uk-grid>
                <?php for ($i=1;$i<=2;$i++): ?>
                <div>
                    <div class="tracuu__box1 uk-padding-small">
                        <div class="tracuu__box1__item">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="tracuu__box1__img" src="images/tracuu/family12.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="tracuu__box1__title">Bảo hiểm sức khỏe VBI</div>
                                </div>
                            </div>
                        </div>
                        <div class="tracuu__box1__item">
                            <div class="tracuu__box1__item2">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="tracuu__box1__txtLeft">Tên</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="tracuu__box1__txt1">Nguyễn Khắc Anh Quân</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tracuu__box1__item2">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="tracuu__box1__txtLeft">Số giấy chứng nhận</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="tracuu__box1__txt1">0201+22898727</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tracuu__box1__item2">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="tracuu__box1__txtLeft">Ngày yêu cầu</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="tracuu__box1__txt1">14/02/2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tracuu__box1__item2">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="tracuu__box1__txtLeft">Số tiền yêu cầu bồi thường</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="tracuu__box1__txt1">1.000.000đ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tracuu__box1__item2">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="tracuu__box1__txtLeft">Trạng thái</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="tracuu__box1__status <?= ($i==1)?'tracuu__box1__status--boithuong':'tracuu__box1__status--dangxuly' ?>"><?= ($i==1)?'Đã bồi thường':'Đang xử lý' ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tracuu__box1__item">
                            <div class="uk-child-width-1-2 uk-grid-small uk-flex-center" uk-grid>
                                <div>
                                    <button class="uk-button tracuu__box1__btn uk-button-primary uk-border-pill uk-width-1-1"><span>Xem chi tiết</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>