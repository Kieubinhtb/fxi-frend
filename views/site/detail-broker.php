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

$detail = $data['data']['items']['detail'];
$acc = implode(", ", ArrayHelper::getColumn($data['data']['items']['account'], function ($element) {
    return $element['accounts']['name'];
}));
$pay = implode(", ", ArrayHelper::getColumn($data['data']['items']['payment'], function ($element) {
    return $element['payments']['name'];
}));
$lic = implode(", ", ArrayHelper::getColumn($data['data']['items']['license'], function ($element) {
    return $element['licenses']['name'];
}));
$pla = implode(", ", ArrayHelper::getColumn($data['data']['items']['platform'], function ($element) {
    return $element['platforms']['name'];
}));
$tra = implode(", ", ArrayHelper::getColumn($data['data']['items']['trade'], function ($element) {
    return $element['trades']['name'];
}));

$this->params['advert_top'] = $data['data']['advert_top'];
$this->params['advert_popup'] = $data['data']['advert_popup'];

?>
<?php if ($detail['star']) { ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "<?= $data['data']['seo']['title'] ?>",
            "image": "<?= Yii::$app->params['imgHref'] . 'logo/' . $detail['logo'] ?>",
            "telephone": "0906326177",
            "address": {
                "streetAddress": "<?= $detail['contry'] != -1 ? $detail['contry'] : 'N/A' ?>"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": <?= $detail['star'] ?>,
                "reviewCount": <?= $detail['total_review'] ?>
            },
            "servesCuisine": "Forex"
        }
    </script>
<?php } ?>


<div id="contents" class="bg-gray">
    <div class="container">
        <div class="banner-slider banner-full row justify-content-center mb-4 pb-1 mx-md-0">
            <?php
            foreach ($data['data']['advert'] as $v) {
            ?>
                <a href="<?= $v['link'] ?>" target="_blank">
                    <picture>
                        <source srcset="<?= Yii::$app->params['imgHref'] . 'endow/' . $v['image'] ?>" media="(min-width: 768px)">
                        <img srcset="<?= Yii::$app->params['imgHref'] . 'endow/' . $v['image'] ?>" alt="<?= $v['name'] ?>" class="w-100">
                    </picture>
                </a>
            <?php
            }
            ?>
        </div>


        <div class="clearfix" data-sticky_parent>
            <div class="contents-main" data-sticky_column>

                <div class="section-box mb-3">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-6 col-md-4 pr-md-0"><img src="<?= Yii::$app->params['imgHref'] . 'logo/' . $detail['logo'] ?>" alt="<?= $detail['name'] ?>"></div>
                        <div class="col-6 col-md-7">
                            <div class="row align-items-center">
                                <div class="col-xl-7">
                                    <h1 class="broker-detail-name"><?= $detail['name'] ?> <i style="display:<?= $detail['verify'] ? 'block' : 'none' ?>" class="fa fa-check-circle ml-2" aria-hidden="true"></i></h1>
                                    <div class="d-none d-md-block">
                                        <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold"><?= $detail['contry'] != -1 ? $detail['contry'] : 'N/A' ?></span></p>
                                        <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold"><?= $detail['founded_year'] != -1 ? $detail['founded_year'] : 'N/A' ?></span></p>
                                    </div>
                                    <div class="d-md-none">
                                        <div class="review-star mb-1">
                                            <span class="review-star__main">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </span>
                                            <span class="review-star__mask" style="width: <?= $detail['star'] * 100 / 5 ?>%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <p class="review-info mb-0"><?= $detail['total_review'] ?> đánh giá</p>
                                    </div>
                                </div>
                                <div class="col-xl-5 mt-3 mt-xl-0">
                                    <a href="<?= $detail['link_create'] ?>" class="btn btn-primary btn-medium-size d-none d-md-inline-block" target="_blank">Mở tài khoản</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center mt-3 pt-2 d-md-none">
                        <div class="col-6 text-right pr-2"><a href="<?= $detail['link_create'] ?>" class="btn btn-primary btn-medium-size" target="_blank">Mở tài khoản</a></div>
                        <div class="col-6 pl-2"><a href="javascript:;" class="btn btn-outline-primary btn-medium-size" data-toggle="modal" data-target="#modal-review">Viết nhận xét</a></div>
                    </div>
                </div>

                <div class="section-box mb-3">
                    <div class="broker-detail-info d-flex flex-wrap">
                        <div class="broker-detail-info__item">
                            <h2 class="title-h4 text-uppercase">Thông tin tổng quan</h2>
                            <div class="border-dashed">
                                <table class="table-detail-info">
                                    <tbody class="d-md-none">
                                        <tr>
                                            <th>Trụ sở chính :</th>
                                            <td><?= $detail['contry'] ? $detail['contry'] : 'N/A' ?></td>
                                        </tr>
                                        <tr>
                                            <th>Năm thành lập :</th>
                                            <td><?= $detail['founded_year'] != -1 ? $detail['founded_year'] : 'N/A' ?></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th>Giấy phép hoạt động :</th>
                                            <td><?= $lic ? $lic : 'N/A' ?></td>
                                        </tr>
                                        <tr>
                                            <th>Hỗ trợ tiếng Việt :</th>
                                            <td><i class="icon-<?= $detail['language_vn'] ? 'tick' : 'x' ?>"></i></td>
                                        </tr>
                                        <tr>
                                            <th>Phương thức thanh toán :</th>
                                            <td><?= $pay ? $pay : 'N/A' ?></td>
                                        </tr>
                                        <tr>
                                            <th>Niêm yếu sàn chứng khoán :</th>
                                            <td><i class="icon-<?= $detail['li_of_se'] ? 'tick' : 'x' ?>"></i></td>
                                        </tr>
                                        <tr>
                                            <th>Công cụ copy giao dịch :</th>
                                            <td><i class="icon-<?= $tra ? 'tick' : 'x' ?>"></i></td>
                                        </tr>
                                        <!-- <tr>
                                            <th>Niêm yếu sàn chứng khoán :</th>
                                            <td><i class="icon-tick"></i></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="broker-detail-info__item">
                            <h2 class="title-h4 text-uppercase">Số lượng sản phẩm</h2>
                            <div class="border-dashed">
                                <table class="table-detail-info">
                                    <tbody>
                                        <tr>
                                            <th>Forex :</th>
                                            <td><?= $detail['forex'] != -1 ? $detail['forex'] : 'N/A' ?></td>
                                        </tr>
                                        <tr>
                                            <th>Stock :</th>
                                            <td><?= $detail['number_shares'] != -1 ? $detail['number_shares'] : 'N/A' ?></td>
                                        </tr>
                                        <tr>
                                            <th>CFDs :</th>
                                            <td><?= $detail['CFDs'] != -1 ? $detail['CFDs'] : 'N/A' ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="broker-detail-info__item w-100">
                            <h2 class="title-h4 text-uppercase">Thông tin giao dịch</h2>
                            <div class="border-dashed">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <table class="table-detail-info">
                                            <tbody>
                                                <tr>
                                                    <th>Phí mở tài khoản :</th>
                                                    <td><i class="icon-<?= $detail['init_fee'] ? 'tick' : 'x' ?>"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>Swap :</th>
                                                    <td><?= $detail['swap'] != -1 ? $detail['swap'] : 'N/A' ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Minimun deposit :</th>
                                                    <td><?= $detail['min_deposit'] ? '$' . $detail['min_deposit'] : 'N/A' ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Spread :</th>
                                                    <td><?= $detail['spread'] != -1 ? $detail['spread'] : 'N/A' ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Margin call :</th>
                                                    <td><?= $detail['margin_call'] != -1 ? $detail['margin_call'] : 'N/A' ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-6">
                                        <table class="table-detail-info">
                                            <tr>
                                                <th>Đòn bẩy :</th>
                                                <td>1:<?= $detail['lever'] != -1 ? $detail['lever'] : 'N/A' ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nền tảng giao dịch :</th>
                                                <td><?= $pla ? $pla : 'N/A' ?></td>
                                            </tr>
                                            <tr>
                                                <th>Stop out :</th>
                                                <td><?= $detail['stop_out'] != -1 ? $detail['stop_out'] : 'N/A' ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tỉ giá nạp rút :</th>
                                                <td><?= $detail['exchange_rate'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-box mb-3">
                    <h3 class="title-h4 text-uppercase">Giới thiệu chi tiết sàn <?= $detail['name'] ?></h3>
                    <div class="broker-detail-description">
                        <?= nl2br($detail['info']) ?>
                    </div>
                </div>
                <div class="section-box">
                    <h3 class="title-h4 text-uppercase">Đánh giá sàn</h3>
                    <ul class="broker-review-list mb-0" id="js-more-view">
                        <?php if ($data['data']['items']['review']) {
                            foreach ($data['data']['items']['review'] as $v) { ?>
                                <li class="broker-detail-review">
                                    <div class="broker-detail-review__head d-flex align-items-center mb-3 pb-1 pb-md-0">
                                        <div class="avatar rounded-circle">
                                            <?php
                                            preg_match('/[^ ]*$/', $v['full_name'], $results);
                                            $last_word = $results[0]; // $last_word = PHP.
                                            $rest = substr($last_word, 0, 1);
                                            echo ucwords($rest);
                                            ?>
                                        </div>
                                        <div>
                                            <h4 class="name mb-2"><?= $v['full_name'] ?></h4>
                                            <p class="time mb-0"><?= FunPub::getCountTime($v['created_at']) ?></p>
                                        </div>
                                    </div>
                                    <div class="detail-review-point">
                                        <div class="row d-lg-block mb-2 pb-lg-1">
                                            <span class="review-label col-6 col-lg-12">Dịch vụ hỗ trợ khách hàng</span>
                                            <p class="mb-0 col-6 col-lg-12 d-flex align-items-center">
                                                <span class="review-progres">
                                                    <span class="review-progres__mask" style="width: <?= ($v['support'] * 100) / 5 ?>%"></span>
                                                </span>
                                                <?= $v['support'] ?>/5
                                            </p>
                                        </div>
                                        <div class="row d-lg-block mb-2 pb-lg-1">

                                            <span class="review-label col-6 col-lg-12">Trải nghiệm giao dịch</span>
                                            <p class="mb-0 col-6 col-lg-12 d-flex align-items-center">
                                                <span class="review-progres">
                                                    <span class="review-progres__mask" style="width: <?= ($v['experience'] * 100) / 5 ?>%"></span>
                                                </span>
                                                <?= $v['experience'] ?>/5
                                            </p>
                                        </div>
                                        <div class="row d-lg-block">
                                            <span class="review-label col-6 col-lg-12">Độ uy tín và tin cậy</span>
                                            <p class="mb-0 col-6 col-lg-12 d-flex align-items-center">
                                                <span class="review-progres">
                                                    <span class="review-progres__mask" style="width: <?= ($v['trust'] * 100) / 5 ?>%"></span>
                                                </span>
                                                <?= $v['trust'] ?>/5
                                            </p>
                                        </div>
                                    </div>
                                    <div class="broker-detail-review__message show-more-review">
                                        "<?= $v['info'] ?>"
                                    </div>
                                </li>
                        <?php }
                        } ?>
                    </ul>
                    <p class="text-center mt-md-4 pt-3 mb-0">
                        <a href="javascript:;" onclick="javascript:moreReview(this)" data-page="2" data-broker="<?= $detail['broker_id'] ?>" class="btn btn-link font-12">Xem thêm</a>
                    </p>
                </div>
            </div>
            <div class="contents-side sidebar-scroll" data-sticky_column>
                <div class="section-box broker-detail-side d-none d-md-block mb-3">
                    <div class="total-review mb-3"><span><?= $detail['star'] ?></span>/5</div>
                    <div class="review-star mb-1">
                        <span class="review-star__main">
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <span class="review-star__mask" style="width: <?= $detail['star'] * 100 / 5 ?>%">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </div>
                    <p class="review-info mb-0"><?= $detail['total_review'] ?> đánh giá</p>
                    <div class="detail-review-point">
                        <div class="mb-2 pb-1">
                            <span class="review-label">Dịch vụ hỗ trợ khách hàng</span>
                            <p class="mb-0 d-flex align-items-center">
                                <span class="review-progres">
                                    <span class="review-progres__mask" style="width: <?= ($detail['star_support'] * 100) / 5 ?>%"></span>
                                </span>
                                <?= $detail['star_support'] ?>/5
                            </p>
                        </div>
                        <div class="mb-2 pb-1">
                            <span class="review-label">Trải nghiệm giao dịch</span>
                            <p class="mb-0 d-flex align-items-center">
                                <span class="review-progres">
                                    <span class="review-progres__mask" style="width: <?= ($detail['star_experience'] * 100) / 5 ?>%"></span>
                                </span>
                                <?= $detail['star_experience'] ?>/5
                            </p>
                        </div>
                        <div>
                            <span class="review-label">Độ uy tín và tin cậy</span>
                            <p class="mb-0 d-flex align-items-center">
                                <span class="review-progres">
                                    <span class="review-progres__mask" style="width: <?= ($detail['star_trust'] * 100) / 5 ?>%"></span>
                                </span>
                                <?= $detail['star_trust'] ?>/5
                            </p>
                        </div>
                    </div>
                    <p class="text-center mb-0"><button type="button" class="btn btn-primary btn-medium-size" data-toggle="modal" data-target="#modal-review">Viết nhận xét</button></p>
                </div>
                <div class="section-box">
                    <div class="d-flex justify-content-between">
                        <h3 class="title-h3">Tin tức từ <?= $detail['name'] ?></h3>
                        <span class="d-md-none"><a href="#" class="text-view-more">Xem thêm</a></span>
                    </div>
                    <ul class="news-list mb-0" id="js-news-ul-left" style="display:none"></ul>
                    <p class="mb-0 mt-4 d-none d-md-block"><a href="#" class="text-view-more">Xem thêm</a></p>
                </div>
            </div>
        </div>

        <div class="broker-detail-relative">
            <h2 class="title-h3 text-uppercase">Có thể bạn quan tâm</h2>
            <div class="broker-relative">
                <?php foreach ($data['data']['same'] as $v) { ?>
                    <div class="broker-relative__slide">
                        <div class="img-hover"><a href="/thong-tin-danh-gia-san-<?= $v['slug'] ?>">
                                <img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/189x100' . $v['logo'] ?>" class="mx-auto" alt="<?= $v['name'] ?>">
                            </a></div>
                        <div class="d-block d-lg-flex justify-content-between mt-2 pt-1 mt-lg-0 pt-lg-0">
                            <div class="review-star">
                                <span class="review-star__main">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                                <span class="review-star__mask" style="width: <?= $v['star'] * 100 / 5 ?>%">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                            <span class="review-info"><?= $v['total_review'] ?> đánh giá</span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="fixed-bottom animate__animated hidden bg-white p-2 d-md-none">
    <div class="row">
        <div class="col-6 text-right pr-2"><a href="<?= $detail['link_create'] ?>" class="btn btn-primary btn-medium-size" target="_blank">Mở tài khoản</a></div>
        <div class="col-6 pl-2"><a href="javascript:;" class="btn btn-outline-primary btn-medium-size" data-toggle="modal" data-target="#modal-review">Viết nhận xét</a></div>
    </div>
</div>

<div class="modal fade" id="modal-review" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-h3 text-uppercase mb-0">Viết nhận xét của bạn</h2>
                    <button type="button" class="btn btn-close p-0" data-dismiss="modal"><img src="assets/images/icons/icon-close.svg" alt="Close"></button>
                </div>
                <form action="/site/create-review" id="commentForm" method="post" novalidate>
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                    <input type="hidden" name="broker_id" value="<?= $detail['broker_id'] ?>" />
                    <div class="form-group">
                        <input type="text" name="full_name" class="form-control" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-row">
                        <div class="col-7 col-md">Dịch vụ hỗ trợ khách hàng</div>
                        <div class="col">
                            <div class="rating clearfix">
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                            </div>
                            <input type="text" name="rate_one" class="sr-only">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7 col-md">Trải nghiệm giao dịch</div>
                        <div class="col">
                            <div class="rating clearfix">
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                            </div>
                            <input type="text" name="rate_two" class="sr-only">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-7 col-md">Độ uy tín và tin cậy</div>
                        <div class="col">
                            <div class="rating clearfix">
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                                <label class="icon-star"></label>
                            </div>
                            <input type="text" name="rate_three" class="sr-only">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Viết nhận xét của bạn"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox custom-control-inline font-14">
                            <input type="checkbox" id="checkme" name="checkme" class="custom-control-input">
                            <label class="custom-control-label" for="checkme">Tôi tự chịu trách nhiệm về nội dung nhận xét của mình.</label>
                        </div>
                    </div>
                    <div id="recaptcha-form-check"></div>

                    <input type="hidden" class="hiddenRecaptcha" name="ct_hiddenRecaptcha" id="ct_hiddenRecaptcha">
                    <p class="text-right mt-5 mb-0">
                        <button type="submit" name="submit-review" class="btn btn-primary btn-medium-size">Gửi nhận xét</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function getCountTime(timeCreated) {
        if (timeCreated) {
            let res = timeCreated.replace(/T/gim, " ");
            res = res.replace(/\.000Z/gim, "");

            let periods = {
                month: 30 * 24 * 60 * 60 * 1000,
                week: 7 * 24 * 60 * 60 * 1000,
                day: 24 * 60 * 60 * 1000,
                hour: 60 * 60 * 1000,
                minute: 60 * 1000
            };

            let curent = new Date().toLocaleString("sv-SE", {
                timeZone: "Asia/Ho_Chi_Minh",
                hour12: false
            });
            let time_curent = new Date(curent).getTime();
            let time_create = new Date(res * 1000).getTime();

            let diff = time_curent - time_create;

            if (diff > periods.month) {
                // it was at least a month ago
                //return Math.floor(diff / periods.month) + " thánh trước";
                var a = new Date(time_create);
                return a.getDate() + '/' + (a.getMonth() + 1) + '/' + a.getFullYear();
            } else if (diff > periods.week) {
                return Math.floor(diff / periods.week) + " tuần trước";
            } else if (diff > periods.day) {
                return Math.floor(diff / periods.day) + " ngày trước";
            } else if (diff > periods.hour) {
                return Math.floor(diff / periods.hour) + " giờ trước";
            } else if (diff > periods.minute) {
                return Math.floor(diff / periods.minute) + " phút trước";
            }
            return "Vừa xong";
        }
        return '';
    }

    function resultPercent(int) {
        return (int * 100) / 5;
    }

    function getFristName(name) {
        return name.substr(name.lastIndexOf(' ') + 1, 1);
    }

    function moreReview(el) {

        let p = el.getAttribute('data-page');
        let broker = el.getAttribute('data-broker');
        $.ajax({
                method: "GET",
                url: "/site/more-review",
                data: {
                    broker: broker,
                    page: p,
                }
            })
            .done(function(msg) {
                let json = JSON.parse(msg);
                let str = ``;
                if (json.success == true && json.data.items.length > 0) {
                    $.each(json.data.items, function(i, item) {
                        str +=
                            `<li class="broker-detail-review">
                            <div class="broker-detail-review__head d-flex align-items-center mb-3 pb-1 pb-md-0">
                                <div class="avatar rounded-circle">` + getFristName(item.full_name) + `</div>
                                <div>
                                    <h4 class="name mb-2">` + item.full_name + `</h4>
                                    <p class="time mb-0">` + getCountTime(item.created_at) + `</p>
                                </div>
                            </div>
                            <div class="detail-review-point">
                                <div class="row d-lg-block mb-2 pb-lg-1">
                                    <span class="review-label col-6 col-lg-12">Dịch vụ hỗ trợ khách hàng</span>
                                    <p class="mb-0 col-6 col-lg-12 d-flex align-items-center">
                                        <span class="review-progres">
                                            <span class="review-progres__mask" style="width: ` + resultPercent(item.support) + `%"></span>
                                        </span>
                                        ` + item.support + `/5
                                    </p>
                                </div>
                                <div class="row d-lg-block mb-2 pb-lg-1">
                                    <span class="review-label col-6 col-lg-12">Trải nghiệm giao dịch</span>
                                    <p class="mb-0 col-6 col-lg-12 d-flex align-items-center">
                                        <span class="review-progres">
                                            <span class="review-progres__mask" style="width: ` + resultPercent(item.experience) + `%"></span>
                                        </span>
                                        ` + item.experience + `/5
                                    </p>
                                </div>
                                <div class="row d-lg-block">
                                    <span class="review-label col-6 col-lg-12">Độ uy tín và tin cậy</span>
                                    <p class="mb-0 col-6 col-lg-12 d-flex align-items-center">
                                        <span class="review-progres">
                                            <span class="review-progres__mask" style="width: ` + resultPercent(item.trust) + `%"></span>
                                        </span>
                                        ` + item.trust + `/5
                                    </p>
                                </div>
                            </div>
                            <div class="broker-detail-review__message show-more-review hide-class">
                                <div style="overflow: hidden; height: auto;"><span style="display: none;" data-col-char="">.</span>
                                    "` + item.info + `"
                                </div>
                            </div>
                        </li>`;
                    });
                    $('#js-more-view').append(str);
                    el.setAttribute('data-page', p * 1 + 1);
                }

                if (json.success == false || json.data.items.length < 3) {
                    el.parentElement.remove();
                }
            });
    }

    function apiNewsItem(categories, idleft) {
        $.getJSON('https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=4' + categories, function(dataJSON) {
            try {
                dataJSON.forEach(function(item, index) {
                    $.getJSON('https://news.fxinsites.com/wp-json/wp/v2/media/' + item.featured_media, function(dataJSON1) {
                        // console.log(dataJSON1.media_details.sizes); 
                        $('#' + idleft).append(`<li class="news-item">
                                <div class="news-item__img img-hover"><a href="` + item.link + `">
                                        <img src="` + dataJSON1['media_details']['sizes']['newspaper-x-recent-post-big']['source_url'] + `" alt="` + item.title.rendered + `" class="w-100"></a></div>
                                <div class="news-item__info">
                                    <h3 class="news-item__ttl"><a href="` + item.link + `">` + item.title.rendered + `</a></h3>
                                    <p class="mb-0"><span class="home-news__date">` + getCountTime(item.modified) + `</span></p>
                                </div>
                            </li>`);
                    });
                });
            } catch (e) {
                console.error(e);
            }
        });
    }

    function chaySlide() {
        let newsSide = $('.contents-side .news-list:not(.news-list--noslider)');
        if (newsSide.length) {
            const newsSideSettings = {
                arrows: false,
                variableWidth: true,
                swipeToSlide: true
            };
            if ($(window).width() < 768) newsSide.slick(newsSideSettings);
            $(window).on('resize', function() {
                if ($(window).width() > 767) {
                    if (newsSide.hasClass('slick-initialized')) newsSide.slick('unslick');
                } else {
                    if (!newsSide.hasClass('slick-initialized')) newsSide.slick(newsSideSettings);
                }
            });
        }
    }

    apiNewsItem('<?= $data['data']['items']['detail']['wp_tag'] ? '&tags=' . $data['data']['items']['detail']['wp_tag'] : '' ?>', 'js-news-ul-left');
    setInterval(function() {        
        let abc = document.getElementById('js-news-ul-left');
        let bdf = abc.querySelectorAll('li');
        if (bdf.length == 4) {
            abc.style.display = 'block'; 
            chaySlide();
        }
    }, 3000);
</script>

<div class="bg-white">
    <?= $this->render('../layouts/inc/before-footer', ['brokers' => $data['data']['brokers']]); ?>
</div>
<?php
$this->registerJs("
    $('#commentForm .rating').each(function() {
        let _this = $(this);
        let label = $('label', this);
        label.on('click', function() {
            let i = $(this).index() + 1;
            label.removeClass('active');
            _this.find('label:nth-child(-n+' + i + ')').addClass('active');
            $(this).parent().next('input').val(i);
        });
    });

    if ($(window).width() < 768) {

        $(window).scroll(function() {

            let scrollTop = $(this).scrollTop();

            if( scrollTop > 500 && scrollTop + $(window).height() <= $('#footer').offset().top) {

                $('.fixed-bottom').removeClass('hidden').addClass('show');

                $('#launcher').css('bottom', '56px');

            } else {

                $('.fixed-bottom').removeClass('show').addClass('hidden');

                $('#launcher').css('bottom', '0');

            }

        });

    }    
    ", View::POS_END);
