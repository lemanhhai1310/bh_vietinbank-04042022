<?php $data["title"] = "02. Tiện ích gần bạn"; ?>
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
        'txt' => 'Bệnh viện gần bạn',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section cauhoithuonggap__section">
    <div class="uk-container">
        <div class="item__32">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Bệnh viện gần bạn</h2>
        </div>
        <div class="item__32">
            <div class="uk-grid-small uk-grid-match" uk-grid>
                <div class="uk-width-1-4@m">
                    <div class="uk-flex uk-flex-column">
                        <div class="tienichganban__box item__15">
                            <div class="item__12">
                                <div class="uk-search uk-search-default uk-width-1-1">
                                    <span class="uk-search-icon-flip" uk-search-icon></span>
                                    <input class="tienichganban__box__input uk-search-input uk-width-1-1" type="search" placeholder="Tìm tên bệnh viện">
                                </div>
                            </div>
                            <div class="item__12">
                                <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <option value="">Thành phố</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="tienichganban__box__btn uk-width-1-1 uk-position-relative uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="item__12">
                                <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <option value="">Quận huyện</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="tienichganban__box__btn uk-width-1-1 uk-position-relative uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tienichganban__box item__15 uk-flex-auto uk-overflow-auto" style="max-height: 501px">
                            <?php for ($i=1;$i<=6;$i++): ?>
                                <div class="tienichganban__box__item">
                                    <div class="uk-grid-8" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="tienichganban__box1__img" src="images/tienichganban/icon1.png" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="tienichganban__box1__title">Bệnh viện đa khoa Việt Đức</div>
                                            <ul class="uk-list tienichganban__box1__list">
                                                <li>162A Tôn Đức Thắng, Hàng Bột</li>
                                                <li>0977788899</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-cover-container">
                        <canvas width="897" height="729"></canvas>
                        <iframe class="uk-position-cover" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29804.115456811083!2d105.9468519770752!3d20.972006242412082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1650201079644!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="uk-position-cover tienichganban__boxMap">
                            <div class="uk-grid-17" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="tienichganban__boxMap__title">Tiện ích trên VBI</div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-child-width-auto uk-grid-8" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'src' => 'images/tienichganban/icon1.png',
                                                'txt' => 'Bệnh viện',
                                            ),
                                            array(
                                                'src' => 'images/tienichganban/icon2.png',
                                                'txt' => 'Garage ô tô',
                                            ),
                                            array(
                                                'src' => 'images/tienichganban/icon3.png',
                                                'txt' => 'VBI thành viên',
                                            ),
                                            array(
                                                'src' => 'images/tienichganban/icon4.png',
                                                'txt' => 'Trung tâm đăng kiểm xe',
                                            ),
                                            array(
                                                'src' => 'images/tienichganban/icon5.png',
                                                'txt' => 'Trung tâm cứu hộ xe',
                                            ),
                                        );
                                        foreach ($data as $k=>$v): ?>
                                        <div>
                                            <a href="" class="<?= ($k==0)?'uk-active':'' ?> tienichganban__boxMap__btn uk-button uk-button-default uk-border-pill" data-src="<?= $v['src'] ?>" uk-img><span><?= $v['txt'] ?></span></a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>