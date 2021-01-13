<?php

use app\models\FunPub;
use yii\helpers\ArrayHelper;
use yii\web\View;

FunPub::createMeta([
    'title' => $data['data']['seo']['title'],
    'description' => $data['data']['seo']['description'],
    'keywords' => $data['data']['seo']['keywords'],
    'image' => '',
    'url' => Yii::$app->params['ssl'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
]);

$this->params['advert_top'] = $data['data']['advert_top'];
$this->params['advert_popup'] = $data['data']['advert_popup'];

?>
<div class="home-main">
    <picture>
        <source srcset="assets/images/baner-fx-02.jpg" media="(min-width: 768px)">
        <img srcset="assets/images/banner-mobile.png" alt="Chuyên trang tìm kiếm, đánh giá, so sánh sàn Forex hàng đầu Việt Nam" class="w-100">
    </picture>
    <div class="home-search-mobile d-md-none pt-4">
        <div class="d-flex search-with-icon" data-toggle="modal" data-target="#home-filter">
            <input type="text" class="form-control" placeholder="Tìm kiếm sàn ...">
            <button type="button" class="btn btn-icon-search"><i class="icon-search-primary"></i></button>
        </div>
    </div>

</div>
<!-- Filter Mobile -->
<div class="modal fade modal-full" id="home-filter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog m-0 mx-md-auto">
        <div class="modal-content border-0 rounded-0">
            <div class="modal-body bg-gray">
                <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                    <h2 class="modal-title">Tìm kiếm sàn</h2>
                    <button type="button" class="btn btn-close p-0" data-dismiss="modal"><img src="assets/images/icons/icon-close.svg" alt="Close"></button>
                </div>
                <form action="/tim-kiem-san-forex" method="get">
                    <div class="d-flex search-with-icon no-boxshadow mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Tìm kiếm sàn ...">
                        <button type="submit" class="btn btn-icon-search"><i class="icon-search-primary"></i></button>
                    </div>
                    <div class="modal-search-item accordion">
                        <h3 class="modal-search-item__ttl">Xuất xứ</h3>
                        <div class="mt-3">
                            <select class="form-control selectpicker" multiple name="contry[]" data-live-search="true" title="Xuất Xứ" data-selected-text-format="count" data-size="10" data-header="Xuất Xứ">
                                <?php
                                foreach ($data['data']['search']['contries'] as $country) {
                                    echo '<option data-tokens="' . $country['name'] . '" value="' . $country['name'] . '">' . $country['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-search-item">
                        <div class="d-flex align-items-start justify-content-between">
                            <h3 class="modal-search-item__ttl">Min Deposit</h3>
                            <span class="modal-search-result">0 - 1000</span>
                        </div>
                        <div class="form-row d-none">
                            <div class="col"><input type="text" name="deposit-min" id="min-deposit-min-mobile" class="form-control form-control--small range-min" placeholder="Từ"></div>
                            -
                            <div class="col"><input type="text" name="deposit-max" id="min-deposit-max-mobile" class="form-control form-control--small range-max" placeholder="Đến"></div>
                        </div>
                        <div id="deposit-range-slider-mobile" class="range-slider" data-min="0" data-max="500"></div>
                    </div>
                    <div class="modal-search-item">
                        <div class="d-flex align-items-start justify-content-between">
                            <h3 class="modal-search-item__ttl">Đòn Bẩy</h3>
                            <span class="modal-search-result">1 : 0 - 1 : 1000</span>
                        </div>
                        <div class="form-row d-none">
                            <div class="col"><input type="text" name="leverage-min" id="leverage-min-mobile" class="form-control form-control--small range-min" placeholder="Từ"></div>
                            -
                            <div class="col"><input type="text" name="leverage-max" id="leverage-max-mobile" class="form-control form-control--small range-max" placeholder="Đến"></div>
                        </div>
                        <div id="leverage-range-slider-mobile" class="range-slider" data-min="0" data-max="500"></div>
                    </div>
                    <div class="modal-search-item">
                        <h3 class="modal-search-item__ttl">Sản Phẩm Giao Dịch</h3>
                        <ul class="modal-search-list">
                            <li><label class="checkbox-rect"><input type="checkbox" name="product[]" value="Forex"><span>Forex</span></label></li>
                            <li><label class="checkbox-rect"><input type="checkbox" name="product[]" value="Stock"><span>Stock</span></label></li>
                            <li><label class="checkbox-rect"><input type="checkbox" name="product[]" value="CFDs"><span>CFDs</span></label></li>
                        </ul>
                    </div>

                    <div class="modal-search-item">
                        <h3 class="modal-search-item__ttl">Tài Khoản Giao Dịch</h3>
                        <ul class="modal-search-list">
                            <li><label class="checkbox-rect"><input type="checkbox" name="account[]" value="Demo"><span>Demo</span></label></li>
                            <li><label class="checkbox-rect"><input type="checkbox" name="account[]" value="Standard"><span>Standard</span></label></li>
                            <li><label class="checkbox-rect"><input type="checkbox" name="account[]" value="VIP"><span>VIP</span></label></li>
                            <li><label class="checkbox-rect"><input type="checkbox" name="account[]" value="ENC"><span>ENC</span></label></li>
                            <li><label class="checkbox-rect"><input type="checkbox" name="account[]" value=""><span>Khác</span></label></li>
                        </ul>
                    </div>

                    <div class="modal-search-item">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="modal-search-item__ttl mb-0"><label class="mb-0" for="isVietnamMobile">Hỗ Trợ Tiếng Việt</label></h3>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="isVietnamMobile" name="language" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="isVietnamMobile"></label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-search-item">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="modal-search-item__ttl mb-0"><label class="mb-0" for="copyTradeMobile">Copy Giao Dịch</label></h3>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="copyTradeMobile" name="trade" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="copyTradeMobile"></label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-search-item">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="modal-search-item__ttl mb-0"><label class="mb-0" for="promotionMobile">Tin Khuyến Mãi</label></h3>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="promotionMobile" name="promotion" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="promotionMobile"></label>
                            </div>
                        </div>
                    </div>

                    <p><button type="reset" name="reset-home-search" class="btn btn-link cl-red"><i class="fa fa-repeat mr-2" aria-hidden="true"></i> Đặt lại</button></p>
                    <p class="mb-0"><button type="submit" class="btn btn-primary btn-modal-search w-100"><i class="icon-search-white mr-2 text-uppercase"></i> Tìm kiếm</button></p>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="d-md-none pt-3 pb-3">
    <!-- TradingView Widget BEGIN -->
    <div id="tradingview-mobile" class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
    </div>
    <!-- TradingView Widget END -->
</div>

<div class="section bg-gray pb-md-5">
    <div class="container">
        <div class="home-search d-none d-md-block">
            <form action="/tim-kiem-san-forex" method="get">
                <div class="d-flex">
                    <input type="text" name="name" id="pc-filter-input" class="form-control form-control--search" placeholder="Tìm kiếm sàn ...">
                    <button type="submit" class="btn btn-primary btn-search"><i class="icon-search-white mr-3"></i>Tìm kiếm</button>
                </div>

                <div class="home-filter-1 slideClose">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="home-search__left form-row">
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle dropdown-toggle--small w-100" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reset="Min Deposit">
                                        Min Deposit
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="popover-header">Min Deposit</div>
                                        <div class="form-row mb-3 mt-3">
                                            <div class="col"><input type="text" name="deposit-min" id="min-deposit-min" class="form-control form-control--small range-min" placeholder="Từ"></div>
                                            -
                                            <div class="col"><input type="text" name="deposit-max" id="min-deposit-max" class="form-control form-control--small range-max" placeholder="Đến"></div>
                                        </div>
                                        <div id="deposit-range-slider" class="range-slider mb-3" data-min="0" data-max="1000"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle dropdown-toggle--small w-100" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reset="Đòn Bẩy">
                                        Đòn Bẩy
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="popover-header">Đòn Bẩy</div>
                                        <div class="form-row mb-3 mt-3">
                                            <div class="col"><input type="text" name="leverage-min" id="leverage-min" class="form-control form-control--small range-min" placeholder="Từ"></div>
                                            -
                                            <div class="col"><input type="text" name="leverage-max" id="leverage-max" class="form-control form-control--small range-max" placeholder="Đến"></div>
                                        </div>
                                        <div id="leverage-range-slider" class="range-slider mb-3" data-min="0" data-max="1000"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control selectpicker" multiple name="product[]" title="Sản Phẩm Giao Dịch" data-header="Sản Phẩm Giao Dịch" data-selected-text-format="count" data-size="10">
                                    <option data-tokens="Forex" value="Forex">Forex</option>
                                    <option data-tokens="Stock" value="Stock">Stock</option>
                                    <option data-tokens="CFDs" value="CFDs">CFDs</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control selectpicker" multiple name="account[]" title="Tài Khoản Giao Dịch" data-header="Tài Khoản Giao Dịch" data-selected-text-format="count" data-size="10">
                                    <option data-tokens="Demo" value="Demo">Demo</option>
                                    <option data-tokens="Standard" value="Standard">Standard</option>
                                    <option data-tokens="VIP" value="VIP">VIP</option>
                                    <option data-tokens="ENC" value="ENC">ENC</option>
                                    <option data-tokens="Khác" value="">Khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="home-search__right">
                            <button id="home-filter-more" type="button" class="btn btn-link mr-3"><i class="fa fa-chevron-down mr-1" aria-hidden="true"></i> Mở rộng</button>
                            <button type="reset" name="reset-home-search" class="btn btn-link cl-red px-0"><i class="fa fa-repeat mr-1" aria-hidden="true"></i> Đặt lại</button>
                        </div>
                    </div>
                </div>
                <div class="home-filter-2 mt-2 slideClose">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="home-search__left form-row">
                            <div class="col-md-3">
                                <select class="form-control selectpicker" name="trade" title="Copy Giao Dịch" data-header="Copy Giao Dịch" multiple data-max-options="1">
                                    <option data-tokens="Có" value="1">Có</option>
                                    <option data-tokens="Không" value="0">Không</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control selectpicker" name="promotion" title="Tin Khuyến Mãi" data-header="Tin Khuyến Mãi" multiple data-max-options="1">
                                    <option data-tokens="Có" value="1">Có</option>
                                    <option data-tokens="Không" value="0">Không</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control selectpicker" multiple name="contry[]" data-live-search="true" title="Xuất Xứ" data-selected-text-format="count" data-size="10" data-header="Xuất Xứ">
                                    <?php
                                    foreach ($data['data']['search']['contries'] as $country) {
                                        echo '<option data-tokens="' . $country['name'] . '" value="' . $country['name'] . '">' . $country['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control selectpicker" name="language" title="Hỗ Trợ Tiếng Việt" data-header="Hỗ Trợ Tiếng Việt" multiple data-max-options="1">
                                    <option data-tokens="Có" value="1">Có</option>
                                    <option data-tokens="Không" value="0">Không</option>
                                </select>
                            </div>
                        </div>
                        <div class="home-search__right">
                            <button id="home-filter-less" type="button" class="btn btn-link mr-3"><i class="fa fa-chevron-up mr-1" aria-hidden="true"></i> Thu gọn</button>
                            <button type="reset" name="reset-home-search" class="btn btn-link cl-red px-0"><i class="fa fa-repeat mr-1" aria-hidden="true"></i> Đặt lại</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="d-none d-md-block mb-5 mt-1 pb-2 pt-3">
            <!-- TradingView Widget BEGIN -->
            <div id="tradingview-pc" class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
            </div>
            <!-- TradingView Widget END -->
        </div>

        <div class="row">
            <div class="col-md-7 col-lg-7 col-xl-9 home-content mb-5 mb-md-0">
                <h2 class="title-h2">Đánh giá sàn Forex nổi bật</h2>
                <div class="nav nav-tabs home-nav-tabs nav-tabs--noborder border-bottom-0" role="tablist">
                    <a class="nav-link active" data-toggle="tab" href="#best-rating" role="tab" aria-selected="true">Xếp hạng cao nhất</a>
                    <a class="nav-link" data-toggle="tab" href="#bad-rating" role="tab" aria-selected="false">Xếp hạng thấp nhất</a>
                </div>
                <div class="tab-content mt-3 mt-md-4 pt-md-2">
                    <div class="tab-pane fade show active" id="best-rating" role="tabpanel">
                        <?php foreach ($data['data']['review']['height'] as $v) { ?>
                            <div class="home-review-item">
                                <div class="row">
                                    <div class="col-lg-6 home-review-item__left mb-3 mb-lg-0">
                                        <div class="row align-items-center">
                                            <div class="home-review-item__logo col-6 col-md-7">
                                                <img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/189x100' . $v['logo'] ?>" alt="<?= $v['name'] ?>">
                                            </div>
                                            <div class="home-review-item__info col-6 col-md-5">
                                                <h3 class="home-review-item__name"><?= $v['name'] ?></h3>
                                                <div class="review-info">
                                                    <div class="review-star">
                                                        <span class="home-review-item__star">
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="home-review-item__star review-star__mask" style="width: <?= ($v['star'] * 100 / 5) ?>%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                    <span class="home-review-item__count review-count"><?= $v['total_review'] ?> đánh giá</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 home-review-item__right">
                                        <div class="home-review-item__slider slider">
                                            <?php foreach ($v['review'] as $v2) { ?>
                                                <div class="home-review-item__slide"><?= $v2['info'] ?></div>
                                            <?php } ?>
                                        </div>
                                        <p class="mb-0 text-center text-md-right"><a href="thong-tin-danh-gia-san-<?= $v['slug'] ?>" class="btn btn-link font-14 p-0">Xem chi tiết</a></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane fade" id="bad-rating" role="tabpanel">
                        <?php foreach ($data['data']['review']['more'] as $v) { ?>
                            <div class="home-review-item">
                                <div class="row">
                                    <div class="col-lg-6 home-review-item__left mb-3 mb-lg-0">
                                        <div class="row align-items-center">
                                            <div class="home-review-item__logo col-6 col-md-7">
                                                <img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/189x100' . $v['logo'] ?>" alt="<?= $v['name'] ?>">
                                            </div>
                                            <div class="home-review-item__info col-6 col-md-5">
                                                <h3 class="home-review-item__name"><?= $v['name'] ?></h3>
                                                <div class="review-info">
                                                    <div class="review-star">
                                                        <span class="home-review-item__star">
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="home-review-item__star review-star__mask" style="width: <?= ($v['star'] * 100 / 5) ?>%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                    <span class="home-review-item__count review-count"><?= $v['total_review'] ?> đánh giá</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 home-review-item__right">
                                        <div class="home-review-item__slider slider">
                                            <?php if ($v['review']) {
                                                foreach ($v['review'] as $v2) { ?>
                                                    <div class="home-review-item__slide"><?= $v2['info'] ?></div>
                                                <?php }
                                            } else { ?>
                                                <div class="home-review-item__slide">Chưa có đánh giá nào!</div>
                                            <?php } ?>
                                        </div>
                                        <p class="mb-0 text-center text-md-right"><a href="thong-tin-danh-gia-san-<?= $v['slug'] ?>" class="btn btn-link font-14 p-0">Xem chi tiết</a></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <p class="mb-0 mt-4 pt-2"><a href="/danh-gia-san-forex" class="text-view-more">Xem thêm đánh giá khác</a></p>
            </div>
            <div class="col-md-5 col-lg-5 col-xl-4 home-side">
                <div class="home-side-item home-side-box">
                    <h3 class="side-title"><a href="/san-forex-uy-tin">Top sàn giao dịch uy tín <i class="fa fa-angle-right ml-1" aria-hidden="true"></i></a></h3>
                    <div class="top-broker-slider">
                        <?php foreach ($data['data']['top5'] as $v) { ?>
                            <div class="home-side-broker">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-xl-7 home-side-broker__left">
                                        <div class="home-side-broker__logo">
                                            <img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/105x52' . $v['logo'] ?>" alt="<?= $v['name'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-5 home-side-broker__right">
                                        <!-- <p class="text-verify mb-2"><i class="fa fa-check-circle" aria-hidden="true"></i> Verified Broker</p> -->
                                        <a href="<?= $v['link_create'] ?>" class="btn btn-warning btn-font-small" target="_blank">Mở tài khoản</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="home-side-item banner-slider banner-full row mx-md-0">
                    <?php
                    foreach ($data['data']['advert'] as $v) {
                        if ($v['area_id'] == 3) {
                    ?>
                            <a href="<?= $v['link'] ?>" target="_blank">
                                <picture>
                                    <source srcset="<?= Yii::$app->params['imgHref'] ?>endow/<?= $v['image'] ?>" media="(min-width: 768px)">
                                    <img srcset="<?= Yii::$app->params['imgHref'] ?>endow/<?= $v['image_mb'] ?>" alt="<?= $v['name'] ?>" class="w-100">
                                </picture>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <h2 class="title-h2">So sánh sàn forex</h2>
        <?php
        $str1 = $str2 = '';
        foreach ($data['data']['compare'] as $k => $v) {
            if ($k < 3) {
                $active = $k ? '' : 'active';
                $selected = $k ? 'false' : 'true';
                $show = $k ? '' : 'show active';
                $id0 = $v['items'][0]['id'];
                $id1 = $v['items'][1]['id'];

                $tkgd0 = isset($v['accounts'][$id0]) ? implode(", ", ArrayHelper::getColumn($v['accounts'][$id0], function ($element) {
                    return $element['accounts']['name'];
                })) : '';
                $pttt0 = isset($v['payments'][$id0]) ? implode(", ", ArrayHelper::getColumn($v['payments'][$id0], function ($element) {
                    return $element['payments']['name'];
                })) : '';
                $tkgd1 = isset($v['accounts'][$id1]) ? implode(", ", ArrayHelper::getColumn($v['accounts'][$id1], function ($element) {
                    return $element['accounts']['name'];
                })) : '';
                $pttt1 = isset($v['payments'][$id1]) ? implode(", ", ArrayHelper::getColumn($v['payments'][$id1], function ($element) {
                    return $element['payments']['name'];
                })) : '';
                $str1 .= '<a class="nav-link ' . $active . '" data-toggle="tab" href="#compare0' . $k . '" role="tab" aria-selected="' . $selected . '">' .
                    '<span><img src="' . Yii::$app->params['imgHref'] . 'logo/resize/93x44' . $v['items'][0]['logo'] . '" alt="' . $v['items'][0]['name'] . '"></span>' .
                    '<span><img src="' . Yii::$app->params['imgHref'] . 'logo/resize/93x44' . $v['items'][1]['logo'] . '" alt="' . $v['items'][1]['name'] . '"></span>' .
                    '</a>';

                $str2 .= '<div class="tab-pane fade ' . $show . '" id="compare0' . $k . '" role="tabpanel">
                    <div class="home-compare-box">    
                        <h3>Thông tin tổng quan</h3>    
                        <div class="table-custom fixHeight">    
                            <div class="table-custom__row table-custom__head">
                                <div class="table-custom__col">&nbsp;</div>
                                <div class="table-custom__col">Đánh giá</div>
                                <div class="table-custom__col">Tài khoản <br>giao dịch</div>
                                <div class="table-custom__col">Xuất xứ</div>
                                <div class="table-custom__col">Giấy phép<br>hoạt động</div>
                                <div class="table-custom__col">Hỗ trợ<br>tiếng Việt</div>
                                <div class="table-custom__col">Phương thức<br>thanh toán</div>
                            </div>   
                            <div class="table-custom__row">    
                                <div class="table-custom__col table-custom__name">' . $v['items'][0]['name'] . '</div>    
                                <div class="table-custom__col" data-title="Đánh giá">    
                                    <span>' . $v['items'][0]['star'] . '/5 <i class="fa fa-star review-star ml-1" aria-hidden="true"></i></span>    
                                </div>    
                                <div class="table-custom__col" data-title="Tài khoản giao dịch">
                                    <div class="limit-line fixHeightChild">' . ($tkgd0 ? $tkgd0 : 'N/A') . '</div>
                                </div>    
                                <div class="table-custom__col" data-title="Xuất xứ">' . $v['items'][0]['contry'] . '</div>    
                                <div class="table-custom__col" data-title="Giấy phép hoạt động"><i class="icon-' . (isset($v['licenses'][$id0]) ? 'tick' : 'x') . '"></i></div>    
                                <div class="table-custom__col" data-title="Hỗ trợ tiếng Việt"><i class="icon-' . ($v['items'][0]['language_vn'] ? 'tick' : 'x') . '"></i></div>    
                                <div class="table-custom__col" data-title="Phương thức thanh toán">
                                    <div class="limit-line fixHeightChild-payment">' . ($pttt0 ? $pttt0 : 'N/A') . '</div>
                                </div>    
                            </div>    
                            <div class="table-custom__row">    
                                <div class="table-custom__col table-custom__name">' . $v['items'][1]['name'] . '</div>    
                                <div class="table-custom__col" data-title="Đánh giá">    
                                    <span>' . $v['items'][1]['star'] . '/5 <i class="fa fa-star review-star ml-1" aria-hidden="true"></i></span>    
                                </div>    
                                <div class="table-custom__col" data-title="Tài khoản giao dịch">
                                    <div class="limit-line fixHeightChild">' . ($tkgd1 ? $tkgd1 : 'N/A') . '</div>
                                </div>    
                                <div class="table-custom__col" data-title="Xuất xứ">' . $v['items'][1]['contry'] . '</div>    
                                <div class="table-custom__col" data-title="Giấy phép hoạt động"><i class="icon-' . (isset($v['licenses'][$id1]) ? 'tick' : 'x') . '"></i></div>    
                                <div class="table-custom__col" data-title="Hỗ trợ tiếng Việt"><i class="icon-' . ($v['items'][1]['language_vn'] ? 'tick' : 'x') . '"></i></div>    
                                <div class="table-custom__col" data-title="Phương thức thanh toán">
                                    <div class="limit-line fixHeightChild-payment">' . ($pttt1 ? $pttt1 : 'N/A') . '</div>
                                </div>    
                            </div>    
                        </div>    
                        <p class="compare-view-more text-center mb-0"><a href="/so-sanh-san-forex?brokers=' . $v['items'][0]['slug'] . '&brokers=' . $v['items'][1]['slug'] . '" class="btn btn-link">Xem chi tiết</a></p>    
                    </div>    
                </div>';
            }
        }
        ?>

        <div class="d-md-flex align-items-center">
            <div class="nav nav-tabs nav-tabs-slider home-nav-tabs nav-tabs--compare border-bottom-0" role="tablist">
                <?= $str1 ?>
            </div>
            <a href="/so-sanh-san-forex" class="ml-auto home-compare-more d-none d-md-block">So sánh <?= $data['data']['total_broker'] ?>+ sàn khác</a>
        </div>
        <div class="tab-content mt-2 mt-md-4 pt-2 mb-4 pb-3">
            <?= $str2 ?>
        </div>
        <div class="row">
            <div class="col-md-7 col-lg-8 col-xl-9 mb-4 pb-2 mb-md-0 pb-mb-0 home-content">
                <h3 class="title-h3">Gợi ý so sánh</h3>
                <ul class="compare-other-list">
                    <?php foreach ($data['data']['compare'] as $k => $v) {
                        if ($k > 2) { ?>
                            <li>
                                <a href="/so-sanh-san-forex?brokers=<?= $v['items'][0]['slug'] ?>&brokers=<?= $v['items'][1]['slug'] ?>" class="compare-item">
                                    <span><img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/93x44' . $v['items'][0]['logo'] ?>" alt="<?= $v['items'][0]['name'] ?>"></span>
                                    <span><img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/93x44' . $v['items'][1]['logo'] ?>" alt="<?= $v['items'][1]['name'] ?>"></span>
                                </a>
                            </li>
                    <?php }
                    } ?>
                </ul>
            </div>
            <div class="col-md-5 col-lg-5 col-xl-4 home-side">
                <h3 class="title-h3">Bài viết đánh giá chi tiết:</h3>
                <ul class="dotted-list font-14">
                    <?php foreach ($data['data']['compare_news'] as $v) { ?>
                        <li><a href="<?= $v['link'] ?>"><?= $v['text'] ?></a></li>
                    <?php } ?>
                </ul>
                <a href="https://news.fxinsites.com/danh-gia-san/" target="_blank" class="text-view-more">Xem thêm</a>
            </div>
        </div>
        <div class="banner-slider banner-full row justify-content-center text-center mt-5 pt-2">
            <?php
            foreach ($data['data']['advert'] as $v) {
                if ($v['area_id'] == 2) {
            ?>
                    <a href="<?= $v['link'] ?>" target="_blank">
                        <img src="<?= Yii::$app->params['imgHref'] . 'endow/' . $v['image'] ?>" alt="<?= $v['name'] ?>">
                    </a>
            <?php
                }
            }
            ?>

        </div>
    </div>
</div>

<div class="section-tags bg-gray">
    <div class="container">
        <h4>Tìm kiếm nổi bật</h4>
        <nav class="tags-list">
            <?php foreach ($data['data']['text_search'] as $v) { ?>
                <a href="<?= $v['link'] ?>"><i class="icon-search mr-2 pr-1"></i><?= $v['text'] ?></a>
            <?php } ?>
        </nav>
    </div>
</div>

<div class="section">
    <div class="container">
        <h2 class="title-h2 text-center">Hỗ trợ tiện ích</h2>
        <ul class="border-list">
            <li><a href="/tin-hieu-giao-dich-forex">
                    <div class="border-list__icon"><img src="assets/images/icons/icon01.svg" alt="Tín hiệu giao dịch"></div>
                    <h3 class="border-list__name">Tín hiệu giao dịch</h3>
                </a></li>
            <li><a href="/lich-kinh-te">
                    <div class="border-list__icon"><img src="assets/images/icons/icon02.svg" alt="Lịch kinh tế"></div>
                    <h3 class="border-list__name">Lịch kinh tế</h3>
                </a></li>
            <li><a href="/gia-vang">
                    <div class="border-list__icon"><img src="assets/images/icons/icon04.svg" alt="Giá vàng"></div>
                    <h3 class="border-list__name">Giá vàng</h3>
                </a></li>
        </ul>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <h2 class="title-h2">Tin tức</h2>
        <div class="nav nav-tabs home-nav-tabs nav-tabs--noborder border-bottom-0" role="tablist">
            <a class="nav-link active" data-toggle="tab" href="#km" role="tab" aria-selected="true">Khuyến mãi</a>
            <a class="nav-link" data-toggle="tab" href="#pt" role="tab" aria-selected="false">Phân tích</a>
            <a class="nav-link" data-toggle="tab" href="#dgs" role="tab" aria-selected="false">Đánh giá sàn</a>
        </div>
        <div class="tab-content mt-4 pt-1">
            <div class="tab-pane fade show active" id="km" role="tabpanel">
                <div class="home-news row">
                    <div class="col-md-6 mb-3 pb-2 mb-md-0 pb-md-0" id="js-news-tab-left-01">
                    </div>
                    <div class="col-md-6">
                        <div id="js-news-tab-right-01"></div>
                        <p class="mb-0 mt-4 pt-1 text-md-right"><a href="https://news.fxinsites.com/khuyen-mai-forex/" class="text-view-more">Xem thêm</a></p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pt" role="tabpanel">
                <div class="home-news row">
                    <div class="col-md-6 mb-3 pb-2 mb-md-0 pb-md-0" id="js-news-tab-left-02">
                    </div>
                    <div class="col-md-6">
                        <div id="js-news-tab-right-02"></div>
                        <p class="mb-0 mt-4 pt-1 text-md-right"><a href="https://news.fxinsites.com/phan-tich-thi-truong-forex/" class="text-view-more">Xem thêm</a></p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="dgs" role="tabpanel">
                <div class="home-news row">
                    <div class="col-md-6 mb-3 pb-2 mb-md-0 pb-md-0" id="js-news-tab-left-03">
                    </div>
                    <div class="col-md-6">
                        <div id="js-news-tab-right-03"></div>
                        <p class="mb-0 mt-4 pt-1 text-md-right"><a href="https://news.fxinsites.com/danh-gia-san/" class="text-view-more">Xem thêm</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider banner-full row justify-content-center text-center mt-5 pt-2">
            <?php
            foreach ($data['data']['advert'] as $v) {
                if ($v['area_id'] == 1) {
            ?>
                    <a href="<?= $v['link'] ?>" target="_blank">
                        <img src="<?= Yii::$app->params['imgHref'] . 'endow/' . $v['image'] ?>" alt="<?= $v['name'] ?>">
                    </a>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <h2 class="title-h2 text-center">Đối tác của Fxinsites</h2>
        <ul class="broker-partner">
            <?php foreach ($data['data']['partners'] as $v) { ?>
                <li><a href="<?= $v['link'] ?>"><img src="<?= Yii::$app->params['imgHref'] . 'endow/resize/160x80' . $v['image'] ?>" alt="<?= $v['name'] ?>"></a></li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="section home-about">
    <div class="container">
        <h2 class="title-h2 border-top text-center">Bạn muốn đầu tư Forex? </h2>
        <div class="about-more">

            <p>Trong những năm gần đây, ngày càng nhiều ông lớn trong ngành Forex trên thế giới tham gia vào thị trường Việt Nam như: <a href="https://www.exness.com/vi/" target="_blank" rel="noopener noreferrer">Exness</a>, eToro, <a href="https://www.xtb.com/vn" target="_blank" rel="noopener noreferrer">XTB</a>, <a href="https://www.natureforex.com/" target="_blank" rel="noopener noreferrer">NatureForex</a>, <a href="https://www.forextime.com/vi" target="_blank" rel="noopener noreferrer">FXTM</a>… khiến thị trường Forex tại Việt Nam đang trở nên sôi động hơn bao giờ hết. Đa số các sàn đều mang lại những lợi ích vô cùng đặc biệt cho các traders như: <a href="https://news.fxinsites.com/category/khuyen-mai-forex/" target="_blank" rel="noopener noreferrer">ưu đãi khuyến mãi</a> cho người mới mở tài khoản, spread cực thấp, miễn phí phí swap, bắt đầu với phí giao dịch chỉ từ 1$… </p>

            <p>Tuy nhiên, bên cạnh những sàn uy tín cũng có không ít các sàn giao dịch hoạt động <a href="https://forex.com.vn/san-forex-lua-dao/" target="_blank" rel="noopener noreferrer">lừa đảo</a>, lợi dụng sự thiếu hiểu biết của các traders mà làm ảnh hưởng đến uy tin của các sàn khác. Nắm bắt được thực trạng đó, <strong class="font-italic">FxInsites – chuyên trang tìm kiếm, so sánh và đánh giá các sàn Forex đầu tiên tại Việt Nam</strong> đã ra đời, để cung cấp các thông tin hữu ích, giúp các traders tìm ra được một sàn giao dịch uy tín cho mình.</p>

            <h2 class="title-h2 text-center">Vì sao nên tham khảo thông tin trên FxInistes?</h2>

            <p><a href="/">FxInsites</a> là một website cung cấp các công cụ <a href="/tim-kiem-san-forex">tìm kiếm</a>, <a href="/so-sanh-san-forex">so sánh</a> và <a href="/danh-gia-san-forex">đánh giá</a> các sàn Forex trên thế giới nói chung và tại Việt Nam nói riêng. Tại đây, các traders có thể tham khảo mọi thông tin quan trọng về 1 sàn forex trước khi ra quyết định, có nên tham gia mở tài khoản tại sàn này hay không.</p>

            <h2 class="title-h2">Giới thiệu chức năng.</h2>

            <div class="mb-5">

                <h3 class="title-h3">1. Tìm kiếm sàn</h3>

                <p>Giờ đây, bạn không cần phải “đi từng ngõ, gõ từng nhà” để hỏi về thông tin của sàn giao dịch nữa. Chúng tôi cung cấp cho bạn data của hơn 300+ sàn đang có mặt tại Việt Nam và trên thế giới để tìm ra sàn forex ưng ý với bạn. Chỉ việc chọn các tiêu chí mà bạn quan tâm, tất cả các sàn forex phù hợp với gợi ý đó sẽ xuất hiện. Bộ lọc của chúng tôi cung cấp cho bạn 8 tiêu chí để tìm kiếm 1 sàn forex, bao gồm: xuất xứ, tiền nạp tối thiểu, đòn bẩy, sản phẩm giao dịch, tài khoản giao dịch, hỗ trợ tiếng Việt, copy giao dịch, khuyến mãi hiện có.</p>

                <p><a href="/tim-kiem-san-forex" class="btn btn-outline-primary btn-medium-size text-uppercase font-12">tìm sàn forex ngay</a></p>

            </div>

            <div class="mb-5">

                <h3 class="title-h3">2. So sánh sàn</h3>

                <p>Nếu bạn đang phân vân trước quá nhiều sàn forex, và không biết đâu sẽ là lựa chọn phù hợp với mình, thì chức năng này sẽ thực sự giúp ích cho bạn. Bạn có thể so sánh lên đến 4 sàn forex cùng 1 lúc, để có 1 cái nhìn tổng quan trước khi lựa chọn. Thông tin chi tiết của các sàn sẽ hiện lên 1 cách trực quan để bạn xem xét. Ngoài ra, hệ thống còn gợi ý cho bạn các nhóm sàn forex thường được nhà đầu tư so sánh với nhau nhiều nhất.</p>

                <p>Gợi ý so sánh:</p>

                <ul>

                    <li><a href="/so-sanh-san-forex?brokers=exness&brokers=fbs">So sánh sàn Exness, FBS.</a></li>

                    <li><a href="/so-sanh-san-forex?brokers=xm&brokers=xtb">So sánh sàn XTB và XM</a></li>

                    <li><a href="/so-sanh-san-forex?brokers=fxtm&brokers=ic-markets">So sánh sàn FXTM và IC Market.</a></li>

                </ul>

                <p><a href="/so-sanh-san-forex" class="btn btn-outline-primary btn-medium-size text-uppercase font-12">So sánh ngay</a></p>

            </div>

            <div class="mb-5">

                <h3 class="title-h3">3. Đánh giá sàn</h3>

                <p>Bạn muốn dành một lời khen ngợi hoặc phàn nàn về dịch vụ của các sàn giao dịch forex? Thật đơn giản, hãy trực tiếp đưa ra nhận định của mình. Ngoài ra, các đánh giá của traders khác cũng là một tham khảo khách quan quan trọng. Tất cả đều được người dùng đánh giá khách quan. Các nhà đầu tư có thể trực tiếp viết đánh giá về các sàn mà họ đã từng trải nghiệm, tham khảo đánh giá của nhiều người dùng khác về các sàn khác nhau, và chấm điểm theo các tiêu chí: dịch vụ hỗ trợ khách hàng, trải nghiệm giao dịch, độ uy tín và tin cậy.</p>

                <p><a href="/danh-gia-san-forex" class="btn btn-outline-primary btn-medium-size text-uppercase font-12">Đánh giá ngay</a></p>

            </div>

            <h3 class="title-h3 text-center">Đảm bảo trải nghiệm người dùng tốt nhất</h3>

            <p>Trang tìm kiếm, so sánh và đánh giá sàn forex FxInsites ra đời nhằm mục đích hỗ trợ và giúp đỡ các nhà đầu tư Việt Nam tìm ra một sàn forex uy tín và chất lượng. Chưa bao giờ, việc tìm kiếm, so sánh hay đánh giá các sàn forex lại trở nên dễ dàng như bây giờ. Nhằm mang đến cho khách hàng những trải nghiệm tiện lợi nhất, FxInistes đã xây dựng hệ thống website thân thiện và dễ sử dụng dành cho tất cả các người dùng.</p>

            <p><strong>Giao diện dễ sử dụng:</strong> Giao diện trang web được thiết kế thân thiện, dễ thao tác, tập trung vào các chức năng chính chỉ qua vài cú click chuột.</p>

            <p><strong>Chức năng tiện lợi:</strong> Chúng tôi thấu hiểu nhu cầu của các nhà đầu tư là gì, và chỉ phát triển các tính năng nhằm cung cấp thông tin cho người dùng tốt nhất có thể.</p>

            <p><strong>Sàn Forex uy tín tại Việt Nam:</strong> Hiện tại, FxInsites có quan hệ đối tác với nhiều sàn giao dịch forex đáng tin cậy. Đây là các sàn forex sở hữu các loại <span class="cl-primary">giấy phép uy tín</span> trên thế giới. Nhà đầu tư có thể tìm hiểu trước về các loại giấy phép này, so sánh giữa những sàn với nhau và chọn cho mình một sàn có chất lượng dịch vụ tốt nhất để giao dịch.</p>

            <p><strong>Tư vấn giao dịch chuyên nghiệp:</strong> Với kinh nghiệm nhiều năm trong lĩnh vực đầu tư tài chính nói chung và forex nói riêng, FxInsites sẵn sàng giải đáp và hỗ trợ các nhà đầu tư khi có nhu cầu muốn giao dịch forex, bằng nhiều hình thức khác nhau: chat zalo, facebook. điện thoại trực tiếp, email.. Tất cả hoàn toàn miễn phí!</p>

            <p><strong>Tin hiệu giao dịch:</strong> Bên cạnh việc sử dụng dịch vụ tìm kiếm, so sánh, đánh giá các sàn forex, các chuyên gia của FxInsites cũng đang trực tiếp cung cấp tin hiệu giao dịch cho nhà đầu tư. Bạn có thể tham gia group tín hiệu của chúng tôi <a href="https://zalo.me/g/jocdcj103" target="_blank" rel="noopener noreferrer">tại đây.</a></p>

        </div>
    </div>
</div>

<?= $this->render('../layouts/inc/before-footer', ['brokers' => $data['data']['brokers']]); ?>

<script>
    var newScript = document.createElement("script");
    newScript.type = 'text/javascript';
    newScript.src = "https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js";
    newScript.async = true;
    newScript.text = `{
                        "symbols": [{
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "Nasdaq 100"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR/USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "BTC/USD"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "ETH/USD"
                            }
                        ],
                        "colorTheme": "light",
                        "isTransparent": false,
                        "displayMode": "adaptive",
                        "locale": "en"
                    }`;

    if (window.innerWidth > 767) {
        document.getElementById('tradingview-pc').appendChild(newScript);
    } else {
        document.getElementById('tradingview-mobile').appendChild(newScript);
    }
</script>

<?php

$format = <<< SCRIPT
function apiNewsItem(categories,idleft,idright){
    $.getJSON('https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=4&categories='+categories, function(dataJSON) {
        try {
            dataJSON.forEach(function(item,index) {
                if(index == 0){
                    $.getJSON('https://news.fxinsites.com/wp-json/wp/v2/media/' + item.featured_media, function(dataJSON1) {
                        // console.log(dataJSON1.media_details.sizes); 
                        $('#'+idleft).append(`<div class="home-news-big">
                            <div class="home-news-big__img img-hover"><a href="`+item.link+`">
                                    <img src="`+dataJSON1['media_details']['sizes']['newspaper-x-recent-post-big']['source_url']+`" alt="`+item.title.rendered+`" class="w-100"></a></div>
                            <h3 class="home-news-big__ttl"><a href="`+item.link+`">`+item.title.rendered+`</a></h3>
                            <p class="mb-0"><span class="home-news__date">23/10/2020</span></p>
                        </div>`); 
                    }); 
                }else{
                    $.getJSON('https://news.fxinsites.com/wp-json/wp/v2/media/' + item.featured_media, function(dataJSON1) {
                        // console.log(dataJSON1.media_details.sizes); 
                        $('#'+idright).append(`<div class="home-news-item">
                            <div class="home-news-item__img img-hover"><a href="`+item.link+`">
                                    <img src="`+dataJSON1.media_details.sizes.medium.source_url+`" alt="`+item.title.rendered+`" class="w-100"></a></div>
                            <div class="home-news-item__info">
                                <h3 class="home-news-item__ttl"><a href="`+item.link+`">`+item.title.rendered+`</a></h3>
                                <p class="mb-0"><span class="home-news__date">05/10/2020</span></p>
                            </div>
                        </div>`); 
                    }); 
                }
            });            
        } catch(e) {
            console.error(e);
        }
    });
}
apiNewsItem(276,'js-news-tab-left-01','js-news-tab-right-01');
apiNewsItem(1937,'js-news-tab-left-02','js-news-tab-right-02');
apiNewsItem(145,'js-news-tab-left-03','js-news-tab-right-03');
SCRIPT;
$this->registerJs($format, View::POS_END);
