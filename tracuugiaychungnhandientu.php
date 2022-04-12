<?php $data["title"] = "1. Tra cứu Giấy chứng nhận điện tử"; ?>
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
        'txt' => 'Giấy chứng nhận điện tử',
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
        'active' => true,
    ),
    array(
        'txt' => 'Hóa đơn điện tử',
        'link' => '',
        'active' => false,
    ),
    array(
        'txt' => 'Tiến trình bồi thường',
        'link' => '',
        'active' => false,
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
                <div class="uk-position-relative tracuu__boxForm">
                    <input class="uk-input tracuu__boxForm__input" type="text" placeholder="" value="">
                    <label class="uk-form-label uk-position-center-left tracuu__boxForm__label">Nhập số CMND</label>
                </div>
            </div>
            <div>
                <div class="uk-position-relative tracuu__boxForm">
                    <input class="uk-input tracuu__boxForm__input" type="text" placeholder="" value="">
                    <label class="uk-form-label uk-position-center-left tracuu__boxForm__label">Nhập ngày sinh</label>
                    <span class="tracuu__boxForm__icon tracuu__boxForm__icon--calendar uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                </div>
            </div>
            <div>
                <button type="button" class="tracuu__btnSubmit uk-button uk-button-default uk-width-1-1 uk-border-pill"><span>Tra cứu</span></button>
            </div>
        </div>
        <div class="uk-text-center tracuu__boxTop80">
            <img src="images/tracuu/chungnhandientu.png" alt="">
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>