<?php $data["title"] = "03. Danh bạ CSGT"; ?>
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
        'txt' => 'Danh bạ cảnh sát giao thông',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section cauhoithuonggap__section danhbacsgt__section">
    <div class="uk-container">
        <div class="item__32">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Danh bạ cảnh sát giao thông</h2>
        </div>
        <div class="item__32">
            <div class="item__40">
                <div class="uk-grid-small uk-child-width-auto uk-flex-center" uk-grid>
                    <div class="uk-width-1-3@m">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Chọn thành phố</option>
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
                        <button type="button" class="tracuu__btnSubmit uk-button uk-button-default uk-width-1-1 uk-border-pill"><span>Tìm kiếm</span></button>
                    </div>
                </div>
            </div>
            <div class="item__40">
                <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <?php for ($i=1;$i<=16;$i++): ?>
                    <div>
                        <div class="danhbacsgt__box">
                            <div class="item__16">
                                <div class="danhbacsgt__box__item">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="danhbacsgt__box__txt1">Thành phố</div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="danhbacsgt__box__txt2">Hà Nội</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="danhbacsgt__box__item">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="danhbacsgt__box__txt1">Số điện thoại</div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="danhbacsgt__box__txt2">0936495559</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item__16 uk-text-center">
                                <a href="" class="danhbacsgt__box__btn uk-button uk-button-default"><span>Gọi ngay</span></a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>