<?php $data["title"] = "02. Nhà đầu tư"; ?>
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
        'txt' => 'Nhà đầu tư',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall cocauquantri__section1">
    <div class="uk-container">
        <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Nhà đầu tư</h2>
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
        'active' => true,
    ),
    array(
        'txt' => 'Cơ cấu quản trị',
        'link' => 'cocauquantri.php',
        'active' => false,
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
        <div class="item__21">
            <div class="uk-child-width-auto uk-grid-small" uk-grid>
                <div>
                    
                </div>
            </div>
        </div>
        <div class="item__21">
            <table class="nhadautu__section1__table uk-table uk-table-divider uk-table-small">
                <thead>
                <tr>
                    <th>Ngày</th>
                    <th>Loại thông tin</th>
                    <th>Tên tài liệu</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $data = array(
                    array(
                        'date' => '21/01/2021',
                        'txt1' => 'Đại hội cổ đông',
                        'txt2' => 'Nghị quyết của Đại hội cổ đông thường niên năm 2021',
                    ),
                    array(
                        'date' => '20/01/2021',
                        'txt1' => 'Công bố thông tin',
                        'txt2' => 'Báo cáo tình hình quản trị Công ty (6 tháng đầu năm 2021)',
                    ),
                    array(
                        'date' => '19/01/2021',
                        'txt1' => 'Báo cáo tài chính ',
                        'txt2' => 'Báo cáo tài chính Quý IV năm 2021',
                    ),
                    array(
                        'date' => '18/01/2021',
                        'txt1' => 'Báo cáo thường niên',
                        'txt2' => 'Báo cáo thường niên năm 2021',
                    ),
                    array(
                        'date' => '17/01/2021',
                        'txt1' => 'Đại hội cổ đông',
                        'txt2' => 'Tổng công ty cổ phần Bảo hiểm Ngân hàng TMCP Công Thương 
Việt Nam - Nghị quyết của Đại hội cổ đông thường niên năm 2021',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <tr>
                    <td>
                        <?= $v['date'] ?>
                    </td>
                    <td>
                        <?= $v['txt1'] ?>
                    </td>
                    <td>
                        <?= $v['txt2'] ?>
                    </td>
                    <td>
                        <a href="" class="nhadautu__section1__table__link nhadautu__section1__table__link--view">Xem</a>
                    </td>
                    <td>
                        <a href="" class="nhadautu__section1__table__link nhadautu__section1__table__link--download">Tải xuống</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>