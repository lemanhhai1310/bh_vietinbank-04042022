<div class="uk-section block_danhgiakhachhangdoitac__section">
    <div class="item__60">
        <div class="uk-container">
            <div class="item__32">
                <div class="item__14">
                    <h2 class="uk-h2 uk-text-center block_cauhoithuonggap__title">Đánh giá của khách hàng và đối tác</h2>
                </div>
                <div class="item__14 uk-text-center">
                    <div class="block_danhgiakhachhangdoitac__txt">VBI liên tục nằm trong top 7 ngành Bảo hiểm phi nhân thọ Việt Nam. <br class="uk-visible@m">
                        App MyVBI được khách hàng yêu thích với 4.8 sao trên Google Play và Appstore</div>
                </div>
            </div>
            <div class="item__32">
                <div class="uk-child-width-1-2 uk-child-width-auto@m uk-grid-collapse uk-flex-center uk-flex-middle" uk-grid>
                    <div>
                        <img src="images/image7.png" alt="">
                    </div>
                    <div>
                        <img src="images/image8.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item__60">
        <div class="uk-container uk-padding-remove">
            <div class="uk-grid-small uk-grid-match uk-overflow-auto uk-flex-nowrap block_danhgiakhachhangdoitac__grid" uk-grid>
                <?php
                $data = array(
                    'images/khachhang_doitac/vietinbank.png',
                    'images/khachhang_doitac/shopee.png',
                    'images/khachhang_doitac/lazada.png',
                    'images/khachhang_doitac/grab.png',
                    'images/khachhang_doitac/mailinh.png',
                    'images/khachhang_doitac/vinasun.png',
                    'images/khachhang_doitac/vinaconex.png',
                    'images/khachhang_doitac/momo.png',
                    'images/khachhang_doitac/vnpay.png',
                );
                foreach ($data as $k=>$v): ?>
                <div class="uk-width-expand@m block_danhgiakhachhangdoitac__column">
                    <div class="block_danhgiakhachhangdoitac__boxBrand uk-background-norepeat uk-background-center-center" data-src="<?= $v ?>" uk-img>

                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>