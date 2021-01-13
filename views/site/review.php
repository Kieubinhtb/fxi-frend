<?php

use app\models\FunPub;
use yii\helpers\ArrayHelper;

FunPub::createMeta([
    'title' => $data['data']['seo']['title'],
    'description' => $data['data']['seo']['description'],
    'keywords' => $data['data']['seo']['keywords'],
    'image' => '',
    'url' => Yii::$app->params['ssl'] . '://' . $_SERVER['HTTP_HOST'] . '/danh-gia-san-forex',
]);

$this->params['advert_top'] = $data['data']['advert_top']; 
$this->params['advert_popup'] = $data['data']['advert_popup']; 
?>
<div id="contents">
    <div class="container">
        <div class="content-top">
            <h1 class="title-h1">Đánh giá sàn Forex</h1>
            <p class="mb-0 text-center">Đánh giá tất tần tật về dịch vụ hỗ trợ, sàn lừa đảo, giãn spread, xóa tài khoản người dùng, không cho rút tiền.</p>
            <div class="compare-form mt-3">
                <form action="/tim-kiem-san-forex" method="get">
                    <div class="d-flex search-with-icon search-with-icon--noshadow" data-toggle="modal">
                        <input type="text" id="auto-broker" name="name" class="form-control" placeholder="Tìm kiếm sàn ...">
                        <button type="button" class="btn btn-icon-search"><i class="icon-search-primary"></i></button>
                    </div>
                </form>

                <script>
                    let brokerList = <?= json_encode($data['data']['brokers']) ?>;
                    let convertBro = function() {
                        let json = [];
                        brokerList.forEach(function(broker, index) {
                            json.push(broker.name);
                        });
                        return json;
                    };
                    $('#auto-broker').autocomplete({
                        source: convertBro()
                    }).on('search change', function() {
                        if ($(this).val().trim() !== '') {
                            $(this).closest('form').submit();
                        }
                    });
                </script>
            </div>
        </div>

        <div class="clearfix mt-3 pt-2 mt-md-0 pt-md-0" data-sticky_parent>

            <div class="contents-main contents-main--left" data-sticky_column>
                <div class="nav nav-tabs review-nav-tabs nav-tabs--noborder border-bottom-0" role="tablist">
                    <a class="nav-link <?= $tab == 'tat-ca' ? 'active' : '' ?>" data-toggle="tab" href="#all-brokers" role="tab" aria-selected="true">Tất cả</a>
                    <a class="nav-link <?= $tab == 'uy-tin' ? 'active' : '' ?>" data-toggle="tab" href="#best-brokers" role="tab" aria-selected="false">Sàn uy tín</a>
                    <a class="nav-link <?= $tab == 'nen-ne' ? 'active' : '' ?>" data-toggle="tab" href="#bad-brokers" role="tab" aria-selected="false">Sàn bựa nên né</a>
                </div>
                <div class="tab-content mt-3">
                    <div class="tab-pane fade <?= $tab == 'tat-ca' ? 'show active' : '' ?>" id="all-brokers" role="tabpanel">
                        <?php if ($tab == 'tat-ca') {
                            echo $this->render('_review-tab', [
                                'items' => $dataPage['data']['items'],
                                'meta' => $dataPage['data']['meta'],
                                'reviews' => $dataPage['data']['review'],
                                'tab' => 'tat-ca'
                            ]);
                        } else {
                            echo $this->render('_review-tab', [
                                'items' => $data['data']['all']['items'],
                                'meta' => $data['data']['all']['meta'],
                                'reviews' => $data['data']['review'],
                                'tab' => 'tat-ca'
                            ]);
                        } ?>
                    </div>
                    <div class="tab-pane fade <?= $tab == 'uy-tin' ? 'show active' : '' ?>" id="best-brokers" role="tabpanel">
                        <?php if ($tab == 'uy-tin') {
                            echo $this->render('_review-tab', [
                                'items' => $dataPage['data']['items'],
                                'meta' => $dataPage['data']['meta'],
                                'reviews' => $dataPage['data']['review'],
                                'tab' => 'uy-tin'
                            ]);
                        } else {
                            echo $this->render('_review-tab', [
                                'items' => $data['data']['reputation']['items'],
                                'meta' => $data['data']['reputation']['meta'],
                                'reviews' => $data['data']['review'],
                                'tab' => 'uy-tin'
                            ]);
                        } ?>
                    </div>
                    <div class="tab-pane fade <?= $tab == 'nen-ne' ? 'show active' : '' ?>" id="bad-brokers" role="tabpanel">
                        <?php if ($tab == 'nen-ne') {
                            echo $this->render('_review-tab', [
                                'items' => $dataPage['data']['items'],
                                'meta' => $dataPage['data']['meta'],
                                'reviews' => $dataPage['data']['review'],
                                'tab' => 'nen-ne'
                            ]);
                        } else {
                            echo $this->render('_review-tab', [
                                'items' => $data['data']['dirty']['items'],
                                'meta' => $data['data']['dirty']['meta'],
                                'reviews' => $data['data']['review'],
                                'tab' => 'nen-ne'
                            ]);
                        } ?>
                    </div>
                </div>
                <div class="lastest-review">
                    <h2 class="title-h3 text-uppercase mb-3 pb-1">Đánh giá gần đây</h2>
                    <div class="lastest-review__wrap">
                        <?php foreach ($data['data']['curent-review'] as $v) { ?>
                            <div class="lastest-review__item d-flex justify-content-between">
                                <div class="lastest-review__left">
                                    <h3 class="lastest-review__head">
                                        <span><?= $v['full_name'] ?></span> đã đánh giá sàn
                                        <a href="/thong-tin-danh-gia-san-<?= $v['brokers']['slug'] ?>"><?= $v['brokers']['name'] ?></a>
                                    </h3>
                                    <div class="review-star d-md-none mt-0 mb-2">
                                        <span>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </span>
                                        <span class="review-star__mask" style="width: <?= $v['brokers']['star'] * 100 / 5 ?>%">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="mb-2">"<?php $txt = FunPub::cutStringPHP($v['info'],200);echo $txt['txt'].'...'; ?>"</div>
                                    <p class="text-date mb-0"><?= FunPub::getCountTime($v['created_at']) ?></p>
                                </div>
                                <div class="lastest-review__right">
                                    <div class="lastest-review__logo">
                                        <a href="/thong-tin-danh-gia-san-<?= $v['brokers']['slug'] ?>" class="img-hover">
                                            <img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/105x52' . $v['brokers']['logo'] ?>" alt="<?= $v['brokers']['name'] ?>">
                                        </a>
                                    </div>
                                    <div class="review-star">
                                        <span>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </span>
                                        <span class="review-star__mask" style="width: <?= $v['brokers']['star'] * 100 / 5 ?>%">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="contents-side contents-side--right sidebar-scroll mt-5 pt-2 mt-md-0 pt-md-0" data-sticky_column>

                <div class="review-form">
                    <h2 class="title-h3 text-uppercase mb-4">Viết nhận xét của bạn</h2>
                    <form action="/site/create-review" id="commentForm" method="post" novalidate>
                        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                        <div class="form-group">
                            <select id="broker-list-slect" name="broker_id" class="show-tick" data-size="10" data-live-search="true" title="Chọn sàn đánh giá"></select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="full_name" class="form-control" placeholder="Họ và tên">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-7 col-md-12 col-lg-7 mb-md-1 mb-lg-0">Dịch vụ hỗ trợ khách hàng</div>
                            <div class="col text-right text-md-left text-lg-right">
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
                        <div class="form-row mb-2">
                            <div class="col-7 col-md-12 col-lg-7 mb-md-1 mb-lg-0">Trải nghiệm giao dịch</div>
                            <div class="col text-right text-md-left text-lg-right">
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
                            <div class="col-7 col-md-12 col-lg-7 mb-md-1 mb-lg-0">Độ uy tín và tin cậy</div>
                            <div class="col text-right text-md-left text-lg-right">
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
                            <textarea name="message" class="form-control" cols="30" rows="7" placeholder="Viết nhận xét của bạn"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox custom-control-inline font-12 mr-0">
                                <input type="checkbox" id="checkme" name="checkme" class="custom-control-input">
                                <label class="custom-control-label" for="checkme">Tôi tự chịu trách nhiệm về nội dung nhận xét của mình.</label>
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6Ld1b-IZAAAAALU21fkgffiS7LS0UruHL467J0GW"></div>
                        <div class="errMsg"></div>
                        <p class="mt-4 mb-0">
                            <button type="submit" name="submit-review" class="btn btn-primary btn-medium-size">Gửi nhận xét</button>
                        </p>
                    </form>
                </div>

                <div>
                    <h3 class="title-h4 text-uppercase mb-4 pb-2">Đánh giá - So sánh chi tiết</h3>
                    <ul class="news-list news-list--noslider" id="js-news-expand">
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->render('../layouts/inc/before-footer', ['brokers' => $data['data']['brokers']]); ?>

<script>
    $('#commentForm .rating').each(function() {
        let $this = $(this);
        let label = $('label', this);
        label.on('click', function() {
            let i = $(this).index() + 1;
            label.removeClass('active');
            $this.find('label:nth-child(-n+' + i + ')').addClass('active');
            $(this).parent().next('input').val(i);
        });
    });
    $(document).on('ready', function() {
        for (let i = 0; i < brokerList.length; i++) {
            $('#broker-list-slect').append(`<option value="${brokerList[i].broker_id}">${brokerList[i].name}</option>`);
        }
        $('#broker-list-slect').selectpicker();
    });

    function apiNewsItem(categories, idleft) {
        $.getJSON('https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=6&categories=' + categories, function(dataJSON) {
            try {
                dataJSON.forEach(function(item, index) {
                    $.getJSON('https://news.fxinsites.com/wp-json/wp/v2/media/' + item.featured_media, function(dataJSON1) {
                        // console.log(dataJSON1.media_details.sizes); 
                        $('#' + idleft).append(`<li class="news-item">
                            <div class="news-item__img img-hover"><a href="` + item.link + `">
                            <img src="` + dataJSON1['media_details']['sizes']['crawlomatic_preview_image']['source_url'] + `" alt="` + item.title.rendered + `" class="w-100"></a></div>
                            <div class="news-item__info">
                                <h3 class="news-item__ttl"><a href="` + item.link + `">` + item.title.rendered + `</a></h3>
                                <p class="mb-0"><span class="text-date font-12">10/10/2020</span></p>
                            </div>
                        </li>`);
                    });
                });
            } catch (e) {
                console.error(e);
            }
        });
    }
    apiNewsItem(145, 'js-news-expand');
</script>