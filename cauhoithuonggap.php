<?php $data["title"] = "01. Câu hỏi thường gặp"; ?>
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
        'txt' => 'Câu hỏi thường gặp',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section cauhoithuonggap__section">
    <div class="uk-container">
        <div class="item__32">
            <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Câu hỏi thường gặp</h2>
        </div>
        <div class="item__32">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-4@m">
                    <nav class="cauhoithuonggap__nav">
                        <ul class="cauhoithuonggap__nav__ul uk-nav-default uk-nav-parent-icon" uk-nav>
                            <li class="cauhoithuonggap__nav__li uk-parent uk-open">
                                <a href="#" class="cauhoithuonggap__nav__a">Bảo hiểm sức khỏe</a>
                                <ul class="uk-nav-sub cauhoithuonggap__nav__subnav">
                                    <li class="uk-active"><a href="#">Quyền lợi</a></li>
                                    <li><a href="#">Phí bảo hiểm</a></li>
                                    <li><a href="#">Loại trừ bảo hiểm</a></li>
                                    <li><a href="#">Bồi thường</a></li>
                                    <li><a href="#">Tái tục</a></li>
                                </ul>
                            </li>
                            <li class="cauhoithuonggap__nav__li uk-parent">
                                <a href="#" class="cauhoithuonggap__nav__a">Bảo hiểm ung thư</a>
                                <ul class="uk-nav-sub cauhoithuonggap__nav__subnav">
                                    <li><a href="#">Sub item</a></li>
                                    <li><a href="#">Sub item</a></li>
                                </ul>
                            </li>
                            <li class="cauhoithuonggap__nav__li uk-parent">
                                <a href="#" class="cauhoithuonggap__nav__a">Bảo hiểm vật chất xe</a>
                                <ul class="uk-nav-sub cauhoithuonggap__nav__subnav">
                                    <li><a href="#">Sub item</a></li>
                                    <li><a href="#">Sub item</a></li>
                                </ul>
                            </li>
                            <li class="cauhoithuonggap__nav__li uk-parent">
                                <a href="#" class="cauhoithuonggap__nav__a">Bảo hiểm TNDS</a>
                                <ul class="uk-nav-sub cauhoithuonggap__nav__subnav">
                                    <li><a href="#">Sub item</a></li>
                                    <li><a href="#">Sub item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="uk-width-expand">
                    <div class="cauhoithuonggap__boxContent">
                        <div class="item__16">
                            <div class="cauhoithuonggap__boxContent__title">Bảo hiểm sức khỏe</div>
                        </div>
                        <article class="uk-article">
                            Content
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>