<?php

use app\models\FunPub;
use yii\helpers\ArrayHelper;

FunPub::createMeta([
    'title' => $data['data']['seo']['title'],
    'description' => $data['data']['seo']['description'],
    'keywords' => $data['data']['seo']['keywords'],
    'image' => '',
    'url' => Yii::$app->params['ssl'] . '://'.$_SERVER['HTTP_HOST'].'/so-sanh-san-forex',
]);

$this->params['advert_top'] = $data['data']['advert_top']; 
$this->params['advert_popup'] = $data['data']['advert_popup']; 
?>
<div id="contents">

    <div class="container">

        <div class="content-top">

            <h1 class="title-h1">So sánh sàn Forex</h1>

            <p class="mb-0 text-center">Khám phá và so sánh các thông tin quan trọng nhất của các sàn giao dịch mà bạn đang quan tâm.</p>

            <div class="compare-form">

                <p class="compare-form__note d-none d-md-block">Chọn tối đa 4 sàn để so sánh</p>

                <p class="compare-form__note d-md-none">Chọn tối đa 2 sàn để so sánh</p>

                <form action="/so-sanh-san-forex" id="compare-form" method="get">

                    <div class="form-row flex-nowrap">

                        <div class="col">

                            <select id="compare-select" class="form-control" name="brokers" title="Vui lòng chọn sàn để so sánh" data-live-search-placeholder="Nhập tên sàn ..." multiple data-live-search="true" data-size="10" data-style="btn-outline-primary input-compare" data-actions-box="true" data-deselect-all-text="Bỏ chọn tất cả">

                                <?php
                                foreach ($data['data']['search']['broker'] as $k => $v) {
                                ?>
                                    <option data-tokens="<?= $v['slug'] ?>" value="<?= $v['slug'] ?>"><?= $v['name'] ?></option>
                                <?php
                                }
                                ?>

                            </select>

                        </div>

                        <div class="col-auto"><button type="submit" class="btn btn-primary btn-compare text-uppercase" disabled>So sánh</button></div>

                    </div>

                </form>

            </div>

        </div>

        <?php
        $str = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];
        foreach ($data['data']['items'] as $k => $v) {
            $tk = implode(", ", ArrayHelper::getColumn($v['accounts'], function ($element) {
                return $element['accounts']['name'];
            }));
            $tt = implode(", ", ArrayHelper::getColumn($v['payments'], function ($element) {
                return $element['payments']['name'];
            }));
            $nt = implode(", ", ArrayHelper::getColumn($v['platforms'], function ($element) {
                return $element['platforms']['name'];
            }));
            $gp = implode(", ", ArrayHelper::getColumn($v['licenses'], function ($element) {
                return $element['licenses']['name'];
            }));
            $cp = implode(", ", ArrayHelper::getColumn($v['trades'], function ($element) {
                return $element['trades']['name'];
            }));
            $str[0] .= '<div class="table-compare__col">
                        <div class="compare-logo"><img src="' . Yii::$app->params['imgHref'] . 'logo/resize/189x100' . $v['detail']['logo'] . '" alt="' . $v['detail']['name'] . '"></div>
                        <div class="review-star">
                            <span class="review-star__main">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                            <span class="review-star__mask" style="width: ' . ($v['detail']['star'] * 100 / 5) . '%">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                        </div>
                        <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">' . $v['detail']['contry'] . '</span></p>
                        <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">' . $v['detail']['founded_year'] . '</span></p>
                    </div>';
            $str[1] .= '<div class="table-compare__col">
                        <div class="compare-logo"><img src="' . Yii::$app->params['imgHref'] . 'logo/resize/189x100' . $v['detail']['logo'] . '" alt="' . $v['detail']['name'] . '"></div>
                    </div>';
            $str[2] .= '<div class="table-compare__col" data-title="Tài khoản giao dịch">' . ($tk ? $tk : 'N/A') . '</div>';
            $str[3] .= '<div class="table-compare__col" data-title="Xuất xứ">' . $v['detail']['contry'] . '</div>';
            $str[4] .= '<div class="table-compare__col" data-title="Giấy phép hoạt động">' . ($gp ? $gp : 'N/A') . '</div>';
            $str[5] .= '<div class="table-compare__col" data-title="Hỗ trợ tiếng Việt"><i class="icon-' . ($v['detail']['language_vn'] ? 'tick' : 'x') . '"></i></div>';
            $str[6] .= '<div class="table-compare__col" data-title="Phương thức thanh toán">' . ($tt ? $tt : 'N/A') . '</div>';
            $str[7] .= '<div class="table-compare__col" data-title="Công cụ copy giao dịch"><i class="icon-' . ($cp ? 'tick' : 'x') . '"></i></div>';
            $str[8] .= '<div class="table-compare__col" data-title="Forex">' . ($v['detail']['forex'] != -1 ? $v['detail']['forex'] : 'N/A') . '</div>';
            $str[9] .= '<div class="table-compare__col" data-title="Stock">' . ($v['detail']['number_shares'] != -1 ? $v['detail']['number_shares'] : 'N/A') . '</div>';
            $str[10] .= '<div class="table-compare__col" data-title="CFDs">' . ($v['detail']['CFDs'] != -1 ? $v['detail']['CFDs'] : 'N/A') . '</div>';
            $str[11] .= '<div class="table-compare__col" data-title="Nền tảng giao dịch">' . ($nt ? $nt : 'N/A') . '</div>';
            $str[12] .= '<div class="table-compare__col" data-title="Phí mở tài khoản"><i class="icon-' . ($v['detail']['init_fee'] ? 'tick' : 'x') . '"></i></div>';
            $str[13] .= '<div class="table-compare__col" data-title="Minimun deposit">' . ($v['detail']['min_deposit'] ? '$' . $v['detail']['min_deposit'] : 'N/A') . '</div>';
            $str[14] .= '<div class="table-compare__col" data-title="Tỉ giá nạp rút">' . ($v['detail']['exchange_rate'] != -1 ? $v['detail']['exchange_rate'] : 'N/A') . '</div>';
            $str[15] .= '<div class="table-compare__col" data-title="Spread">' . ($v['detail']['spread'] != -1 ? $v['detail']['spread'] : 'N/A') . '</div>';
            $str[16] .= '<div class="table-compare__col" data-title="Swap">' . ($v['detail']['swap'] != -1 ? '$' . $v['detail']['swap'] : 'N/A') . '</div>';
            $str[17] .= '<div class="table-compare__col" data-title="Margin call">' . ($v['detail']['margin_call'] != -1 ? $v['detail']['margin_call'] . '%' : 'N/A') . '</div>';
            $str[18] .= '<div class="table-compare__col" data-title="Stop out">' . ($v['detail']['stop_out'] != -1 ? $v['detail']['stop_out'] : 'N/A') . '</div>';
            $str[19] .= '<div class="table-compare__col" data-title="Đòn bẩy">' . $v['detail']['lever'] . '</div>';
            $str[20] .= '<div class="table-compare__col" data-title="Khuyến mãi hiện có"><i class="icon-tick"></i></div>';
            $str[21] .= '<div class="table-compare__col" data-title="Xếp hạng tổng quan"><span>' . $v['detail']['star'] . '/5 <i class="fa fa-star review-star ml-1" aria-hidden="true"></i></span></div>';
            $str[22] .= '<div class="table-compare__col" data-title="Nhận xét">' . $v['detail']['total_review'] . ' đánh giá</div>';
            $str[23] .= '<div class="table-compare__col"><a href="' . $v['detail']['link_create'] . '" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-small-size">Mở tài khoản</a></div>';
        }
        ?>



        <div class="compare-content border-bottom pb-5 mb-5 pb-md-7 mb-md-7">

            <div class="table-compare">

                <div class="table-compare__head">

                    <div class="table-compare__group">

                        <div class="table-compare__row bg-gray">

                            <div class="table-compare__col"></div>

                            <?= $str[0] ?>

                        </div>

                        <div class="table-compare__row table-compare__clone bg-gray">

                            <div class="table-compare__col"></div>

                            <?= $str[1] ?>

                        </div>

                    </div>

                </div>

                <div class="table-compare__body">

                    <div class="table-compare__group">

                        <div class="table-compare__row table-compare__title bg-gray">

                            <div class="table-compare__col font-weight-bold">Thông tin tổng quan</div>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Tài khoản giao dịch</div>

                            <?= $str[2] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Xuất xứ</div>

                            <?= $str[3] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Giấy phép hoạt động</div>

                            <?= $str[4] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Hỗ trợ tiếng Việt</div>

                            <?= $str[5] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Phương thức thanh toán</div>

                            <?= $str[6] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Công cụ copy giao dịch</div>

                            <?= $str[7] ?>

                        </div>

                    </div>

                    <div class="table-compare__group">

                        <div class="table-compare__row table-compare__title bg-gray">

                            <div class="table-compare__col font-weight-bold">Sản phẩm giao dịch</div>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Forex</div>

                            <?= $str[8] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Stock</div>

                            <?= $str[9] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">CFDs</div>

                            <?= $str[10] ?>

                        </div>

                    </div>

                    <div class="table-compare__group">

                        <div class="table-compare__row table-compare__title bg-gray">

                            <div class="table-compare__col font-weight-bold">Thông tin Giao dịch</div>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Nền tảng giao dịch</div>

                            <?= $str[11] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Phí mở tài khoản</div>

                            <?= $str[12] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Minimun deposit</div>

                            <?= $str[13] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Tỉ giá nạp rút</div>

                            <?= $str[14] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Spread</div>

                            <?= $str[15] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Swap</div>

                            <?= $str[16] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Margin call</div>

                            <?= $str[17] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Stop out</div>

                            <?= $str[18] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Đòn bẩy</div>

                            <?= $str[19] ?>

                        </div>

                    </div>

                    <div class="table-compare__group">

                        <div class="table-compare__row table-compare__title bg-gray">

                            <div class="table-compare__col font-weight-bold">Thông tin dịch vụ</div>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Khuyến mãi hiện có</div>

                            <?= $str[20] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Xếp hạng tổng quan</div>

                            <?= $str[21] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal">Nhận xét</div>

                            <?= $str[22] ?>

                        </div>

                        <div class="table-compare__row">

                            <div class="table-compare__col bg-gray font-weight-normal"></div>

                            <?= $str[23] ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <div class="border-bottom pb-5 mb-5 pb-md-7 mb-md-7">

            <h2 class="title-h3 text-uppercase">Có thể bạn quan tâm</h2>

            <div class="row mr-0">

                <?php
                foreach ($data['data']['compare'] as $k => $v) {
                ?>
                    <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0 pr-0">

                        <a href="/so-sanh-san-forex?brokers=<?= $v[0]['slug'] ?>&brokers=<?= $v[1]['slug'] ?>" class="compare-item">

                            <span><img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/93x44' . $v[0]['logo'] ?>" alt="<?= $v[0]['name'] ?>"></span>

                            <span><img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/93x44' . $v[1]['logo'] ?>" alt="<?= $v[0]['name'] ?>"></span>

                        </a>

                    </div>
                <?php
                }
                ?>

            </div>

        </div>



        <div class="overflow-md-hidden">
            <h2 class="title-h3 text-uppercase">Đánh giá - So sánh chi tiết</h2>
            <div class="news-slider-list" id="js-news-expand">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-bottom">
            <div class="intro-bottom__wrap">
                <dl>
                    <dt>Tại sao các trader nên so sánh sàn forex với nhau trước khi bắt đầu giao dịch?</dt>
                    <dd>
                        <p>Không giống như việc mua bán các món hàng thông thường, <a href="/tim-kiem-san-forex" class="font-weight-bold">tìm kiếm</a> và <strong>so sánh các sàn forex</strong> là điều cực kì khó khăn. Nếu như internet có thể hỗ trợ cung cấp thông tin cho việc tìm kiếm sàn forex dễ dàng hơn, thì ngược lại cũng chính internet sẽ làm cho người dùng trở nên “rối loạn” trong 1 bể thông tin vô tận, không biết đâu là đúng đâu là sai. Do đó, bạn sẽ rất cần tìm đến những nền tảng <strong>so sánh sàn forex</strong> để tìm ra đâu là <a href="/san-forex-uy-tin" class="font-weight-bold">sàn forex uy tín</a> và phù hợp nhất với nhu cầu của bạn.</p>
                        <p>Sau đây là những lý do mà bạn nên sử dụng tính năng so sánh sàn forex:</p>
                        <ul class="list-tick mb-5">
                            <li><strong>Giấp phép:</strong> Khám phá những loại <a href="https://news.fxinsites.com/danh-sach-giay-phep-san-forex-uy-tin/" target="_blank" class="font-weight-bold">giấy phép</a> mà các sàn forex đang sở hữu. Càng nhiều giấy phép được cấp bởi tổ chức tài chính lớn, sàn forex đó càng trở nên uy tín hơn.</li>
                            <li><strong>Nền tảng giao dịch:</strong> Tìm ra các nền tảng giao dịch mà các sàn forex đó đang cung cấp. Bên cạnh nền tảng giao dịch MT4, MT5 truyền thống, một số sàn forex đã phát triển nền tảng riêng biệt cho mình như <a href="https://www.xtb.com/vn/learn-to-trade/xstation-5-bo-cuc-co-ban-vn" target="_blank" rel="noopener noreferrer" class="font-weight-bold">xStation</a> của sàn XTB, <a href="https://bitcoinvietnamnews.com/td-ameritrade-la-gi" target="_blank" rel="noopener noreferrer" class="font-weight-bold">Thinkorswim</a> của sàn TD Ameritrade. Việc này nhằm phục vụ tốt hơn khách hàng và khiến các sàn nổi bật hơn so với phần còn lại.</li>
                            <li><strong>Tiền nạp tối thiểu (Min deposit):</strong> Nếu bạn là nhà đầu tư mới, việc tìm hiểu các sàn chấp nhận mức tiền nạp tối thiểu càng thấp càng tốt. Việc này sẽ giúp bạn trải nghiệm được quá trình giao dịch thật, nhưng sẽ giảm thiểu được rủi ro.</li>
                            <li><strong>Spread:</strong> Đây có lẽ là yếu tố so sánh mà các trader quan tâm bậc nhất. Việc spread thay đổi sẽ ảnh hưởng rất nhiều đến khả năng tìm kiếm lợi nhuận. Ở một số sàn, spread được cung cấp dựa vào loại tài khoản bạn đang mở là gì, được thả nổi hay được fix cố định.</li>
                            <li><strong>Nguồn gốc và lịch sử:</strong> Yếu tố phân biệt này khá quan trọng. Nguồn gốc xuất xứ, năm thành lập của một sàn giao dịch giúp chúng ta thấy danh tiếng của công ty cũng như cách sàn giao dịch này vận hành qua nhiều năm, xác định được liệu nó có đủ kinh nghiệm để cung cấp cho chúng ta những dịch vụ tốt nhất hay không. </li>
                            <li><strong>Hỗ trợ tiếng Việt:</strong> Đây là một tiêu chí mà đa số các trader Việt rất quan tâm. Vì nếu sàn có đội ngũ hỗ trợ là người Việt Nam, các traders sẽ thuận tiện hơn so với việc giao tiếp, khiếu nại khi cần thiết. Hoạt động cùng múi giờ cũng sẽ giúp tiết kiệm thời gian họ tiếp nhận và xử lý vấn đề của bạn.</li>
                        </ul>
                        <p>Và còn nhiều tiêu chí khác mà các trader sẽ rất quan tâm khi <strong>so sánh sàn forex</strong> với nhau. </p>
                        <p>Tại FxInsites, chúng tôi hiện đang cung cấp thông tin hơn <strong>299+ sàn forex</strong> trên thế giới và có mặt tại Việt Nam. Đây là sẽ kho thông tin tham khảo cực lớn cho bạn <a href="/tim-kiem-san-forex">tìm kiếm các sàn forex</a> theo các tiêu chí quan trọng mà bạn quan tâm.</p>
                    </dd>
                </dl>
                <p class="text-center mb-0"><a href="/tim-kiem-san-forex" class="btn btn-primary btn-large-size text-uppercase">Tìm kiếm ngay</a></p>
            </div>
        </div>

    </div>

</div>

<script>
    var flag = 0;
    var stringnews = '';

    function apiNewsItem(categories) {
        $.getJSON('https://news.fxinsites.com/index.php/wp-json/wp/v2/posts?per_page=6&categories=' + categories, function(dataJSON) {
            try {
                dataJSON.forEach(function(item, index) {
                    $.getJSON('https://news.fxinsites.com/wp-json/wp/v2/media/' + item.featured_media, function(dataJSON1) {
                        // console.log(dataJSON1.media_details.sizes); 
                        stringnews += `<div class="news-slider-list__item">
                            <div class="news-slider-list__img"><a href="` + item.link + `" class="img-hover" target="_blank">
                            <img src="` + dataJSON1['media_details']['sizes']['crawlomatic_preview_image']['source_url'] + `" alt="` + item.title.rendered + `" class="w-100"></a></div>
                            <h3 class="news-slider-list__ttl"><a href="` + item.link + `">` + item.title.rendered + `</a></h3>
                            <p class="news-slider-list__date mb-0">10/10/2020</p>
                        </div>`;
                        flag += 1;
                    });
                });
            } catch (e) {
                console.error(e);
            }
        });
    }
    apiNewsItem(145);
    setInterval(() => {
        if (flag == 6 && stringnews.length) {
            flag = 0;
            $('#js-news-expand').html(stringnews);
            $('body').append(`<script>$('#js-news-expand').slick({autoplay: true,slidesToShow: 4,arrows: false,responsive: [{breakpoint: 991,settings: {slidesToShow: 3}},{breakpoint: 768,settings: {variableWidth: true}}]})<\/script>`);
        }
    }, 5000);
</script>

<?= $this->render('../layouts/inc/before-footer', ['brokers' => $data['data']['brokers']]); ?>