<?php $data["title"] = "01. Tin tức VBI"; ?>
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
        'txt' => 'Tin tức',
        'link' => '',
    ),
    array(
        'txt' => 'Tin tức VBI',
        'link' => '',
    ),
    array(
        'txt' => 'VBI ra mắt bảo hiểm VBI vì cộng đồng',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section tintuc__sectionChitiet">
    <div class="item__40">
        <div class="uk-container uk-container-small">

        </div>
    </div>
    <div class="item__40">
        <div class="uk-container">

        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>