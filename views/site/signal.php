<?php

use yii\web\View;
use app\models\FunPub;

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
<div id="contents">
    <div class="container">
        <div class="content-top">

            <h1 class="title-h1">TÍN HIỆU GIAO DỊCH FOREX</h1>

            <p class="text-center">Tín hiệu giao dịch forex miễn phí, đươc cung cấp bởi các chuyên gia của FxInsites, các nguồn tin đáng tin cậy là đối tác của FxInsites. Cập nhật trên thời gian thực, liên tục.</p>

            <p class="mb-0 text-center font-weight-bold">Tham gia cùng cộng đồng traders nhận tín hiệu ngay!</p>

        </div>

        <div class="clearfix mt-3 pt-2 mt-md-0 pt-md-0" data-sticky_parent>
            <div class="contents-main contents-main--left" data-sticky_column>
                <ul class="signal-list" id="js-more-signal">

                    <?php
                    foreach ($data['data']['items'] as $v) {
                    ?>
                        <li class="signal-item">
                            <span class="signal-item__time"><?= FunPub::getCountTime($v['date']) ?></span>
                            <div class="d-flex align-items-center align-items-md-start mb-2 mb-md-1">
                                <div class="signal-item__img"><img src="<?= Yii::$app->params['imgHref'] . 'user/' . $v['tele_users']['avatar'] ?>" alt="<?= $v['tele_users']['full_name'] ?>"></div>
                                <h3 class="signal-item__name"><?= $v['tele_users']['full_name'] ?></h3>
                                <span class="signal-item__view d-flex align-items-center"><i class="icon-eye mr-1"></i><?= $v['view'] ?></span>
                            </div>
                            <div class="signal-item__txt"><?= nl2br($v['text']) ?></div>
                        </li>
                    <?php
                    }
                    ?>

                </ul>

            </div>

            <div class="contents-side contents-side--right sidebar-scroll mt-5 pt-2 mt-md-0 pt-md-0" data-sticky_column>
                <h3 class="title-h4 text-uppercase mb-4">Tin độc quyền từ FXinsites</h3>
                <ul class="news-list news-list--noslider mb-3 pb-1">

                    <?php
                    foreach ($monopoly as $item) {
                        $l = 'https://news.fxinsites.com/wp-json/wp/v2/media/' . $item['featured_media'];
                        $image = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
                    ?>
                        <li class="news-item">
                            <div class="news-item__img img-hover"><a href="<?= $item['link'] ?>">
                                    <img src="<?= $image['media_details']['sizes']['medium']['source_url'] ?>" alt="<?= $item['title']['rendered'] ?>"></a></div>
                            <div class="news-item__info">
                                <h3 class="news-item__ttl"><a href="<?= $item['link'] ?>"><?= $item['title']['rendered'] ?></a></h3>
                                <p class="mb-0"><span class="text-date font-12"><?= FunPub::getCountTime(strtotime($item['date'])) ?></span></p>
                            </div>
                        </li>
                    <?php } ?>

                </ul>
                <a href="https://news.fxinsites.com/tin-tuc-forex/" class="text-view-more font-12">Xem thêm</a>
            </div>
        </div>
    </div>

    <div class="mt-7 mb-3 pb-1 mb-md-7 pb-md-0">
        <div class="container">
            <h2 class="title-h4 text-upppercase">PHÂN TÍCH KỸ THUẬT</h2>
            <ul class="news-grid">
                <?php
                foreach ($signal as $item) {
                    $l = 'https://news.fxinsites.com/wp-json/wp/v2/media/' . $item['featured_media'];
                    $image = json_decode(FunPub::Curl_index($l, [], 'get'), JSON_UNESCAPED_UNICODE);
                ?>
                    <li class="news-item">
                        <div class="news-item__img img-hover"><a href="<?= $item['link'] ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?= $image['media_details']['sizes']['medium']['source_url'] ?>" alt="<?= $item['title']['rendered'] ?>"></a></div>
                        <div class="news-item__info">
                            <h3 class="news-item__ttl"><a href="<?= $item['link'] ?>" target="_blank" rel="noopener noreferrer"><?= $item['title']['rendered'] ?></a></h3>
                            <p class="news-item__date mb-0"><?= FunPub::getCountTime(strtotime($item['date'])) ?></p>
                        </div>
                    </li>
                <?php } ?>

            </ul>
        </div>

    </div>

    <div class="subscribe-wrap">

        <div class="container">

            <div class="row align-items-center justify-content-between">

                <div class="col-12 col-md-6 subscribe-wrap__txt mb-3 mb-md-0">Đăng ký nhận tín hiệu giao dịch forex <span>ĐỘC QUYỀN</span> từ FxInsites</div>

                <div class="col-12 col-md-6">

                    <div class="form-subscribe ml-md-auto">

                        <form id="subscribe-form-signal" action="#" method="post" novalidate>

                            <div class="d-flex">

                                <input type="email" name="subcribe-email" class="form-control form-control--mail" placeholder="Nhập email tại đây..." required>

                                <button type="submit" name="search" class="btn btn-primary btn-send">Gửi</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="intro-bottom mt-md-5 pt-md-4">

        <div class="container">

            <div class="intro-bottom__wrap">
                <p>Tại <a href="/">FxInsites</a>, chúng tôi cung cấp tín hiệu giao dịch forex cho các traders hoàn toàn miễn phí. Chúng tôi muốn chứng minh rằng, các tín hiệu miễn phí cũng đáng tin cậy và chính xác như tín hiệu đăng ký đắt tiền từ các nguồn khác.</p>
                <p>Các tín hiệu giao dịch forex của FxInsites được trích dẫn từ các chuyên gia đang làm việc trên khắp thế giới, phù hợp với mọi <a href="https://news.fxinsites.com/cac-phien-giao-dich-thi-truong-ngoai-hoi/" target="_blank" rel="noopener noreferrer">phiên giao dịch trên thị trường ngoại hối.</a> Tín hiệu giao dịch forex sẽ được gửi đến bạn theo thời gian thực. Tại đó, bạn có thể trực tiếp nhận ngay tín hiệu giao dịch của họ và tham gia giao dịch tức thì tại mọi khung thời gian và phiên giao dịch trên thị trường ngoại hối. Các tín hiệu giao dịch forex này phù hợp với nhà giao dịch yêu thích lướt sóng, đầu tư theo thời gian ngắn M15, M30, H1</p>
                <p>Ngoài ra, nếu bạn là một nhà đầu tư yêu thích sự bền vững, đang tìm kiếm các tín hiệu giao dịch theo ngày dựa vào việc phân tích cơ bản và phân tích kỹ thuật, chúng tôi vẫn sẽ cung cấp cho bạn các nội dung <a href="https://news.fxinsites.com/category/phan-tich-thi-truong-forex/" target="_blank" rel="noopener noreferrer">phân tích thị trường</a>, tin tức độc quyền từ các chuyên gia có nhiều năm kinh nghiệm. Họ là những cây bút chuyên phân tích thị trường, nhận định chiến lược tại các sàn giao dịch nổi tiếng trên thế giới và tại Việt Nam, như <a href="https://www.xtb.com/vn?utm_source=FxInsites-doc-com&amp;utm_campaign=signal-page" target="_blank" rel="noopener noreferrer">XTB</a>, <a href="https://www.exness.com/vi/?utm_source=FxInsites-doc-com&amp;utm_campaign=signal-page" target="_blank" rel="noopener noreferrer">Exness</a>, Tickmill, XM, <a href="https://www.natureforex.com/?utm_source=FxInsites-doc-com&amp;utm_campaign=signal-page" target="_blank" rel="noopener noreferrer">NatureForex</a>... hiện đang ký kết hợp tác cung cấp tín hiệu giao dịch độc quyền với FxInsites.</p>
                <p>Vậy, nếu đây là lần đầu tiên bạn sử dụng tín hiệu giao dịch hoặc đơn giản bạn chỉ cần tín hiệu forex đáng tin cậy một vài lần một tuần, hãy thử các tín hiệu giao dịch của chúng tôi. Tại đây, chúng tôi mong muốn giúp bạn giao dịch thành công! Và đặc biệt là HOÀN TOÀN MIỄN PHÍ.</p>
                <p>Ngoài ra, nếu bạn đang tìm kiếm các sàn giao dịch forex uy tín, bạn có thể tham khảo công cụ <a href="/tim-kiem-san-forex">TÌM KIẾM SÀN FOREX</a> hoặc <a href="/so-sanh-san-forex">SO SÁNH SÀN FOREX</a> nhé.</p>
                <div class="mt-4 pt-3 pt-md-0 mt-md-5 d-flex justify-content-center">
                    <a href="/tim-kiem-san-forex" class="btn btn-primary btn-large-size text-uppercase mr-2">Tìm kiếm ngay</a>
                    <a href="/so-sanh-san-forex" class="btn btn-outline-primary btn-large-size text-uppercase">So sánh sàn</a>
                </div>
            </div>

        </div>

    </div>

</div>

<?= $this->render('../layouts/inc/before-footer', ['brokers' => $data['data']['brokers']]); ?>
<script type="text/javascript">
    let idUpdate = <?= isset($data['data']['items'][0]) ? $data['data']['items'][0]['update_id'] : 0 ?>;
    let flag = 1;

    function nl2br(str, replaceMode, isXhtml) {
        var breakTag = (isXhtml) ? '<br />' : '<br>';
        var replaceStr = (replaceMode) ? '$1' + breakTag : '$1' + breakTag + '$2';
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, replaceStr);
    }

    function getCountTime(timeCreated) {
        let res = timeCreated.replace("T", " ");
        res = res.replace(".000Z", "");

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
            return Math.floor(diff / periods.month) + " thánh trước";
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
</script>

<?php
$format = <<< SCRIPT
let formSubscribeSignal = $("#subscribe-form-signal").validate({
    rules: {
        'subcribe-email': {
            required: true,
            email: true
        }
    },
    errorPlacement: function(error, element) {
        element.parent().after(error);
    },
    messages: {
        'subcribe-email': {
            required: "Vui lòng nhập thông tin",
            email: "Định dạng email không đúng"
        }
    }
});
$("#subscribe-form-signal").on('submit', function(e) {
    e.preventDefault();
    const serializedData = $(this).serialize();
    if (formSubscribeSignal.errorList.length < 1) {
        $.ajax({
            type: 'POST',
            url: "",
            data: serializedData,
            success: function(response) {
                let successContent = `<div class="notice-modal">
                        <div class="notice-modal__icon cl-primary"><i class="fa fa-check" aria-hidden="true"></i></div>
                        <div class="notice-modal__content text-center">
                            Đăng ký thành công !
                        </div>
                    </div>`;
                let errorContent = `<div class="notice-modal">
                       <div class="notice-modal__icon cl-red"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                       <div class="notice-modal__content text-center">
                            Email đã tồn tại!
                        </div>
                    </div>`;
                // true 
                subcribeModal.find('.modal-body').empty();
                subcribeModal.find('.modal-body').append(errorContent);
                // false subcribeModal.find('.modal-body').append(errorContent);
                subcribeModal.modal('show');
            },
            error: function(response) {
                console.log(response)
            }
        });
    }
});
setInterval(function () {
    if(flag){
        $.ajax({
            url: "/site/gettelegram?id="+idUpdate,
            method: "GET",
            beforeSend: function( xhr ) {
                flag = 0;
            }
        }).done(function( data ) {
            let json = JSON.parse(data);
            let str = '';
            if(json.success){
                for (let i = (json.data.length - 1); i >= 0; i--) {
                    idUpdate = v.update_id;
                    let v = json.data[i];
                    str += '<li class="signal-item">'+
                    '<span class="signal-item__time">'+getCountTime(v.date)+'</span>'+
                    '<div class="d-flex align-items-center align-items-md-start mb-2 mb-md-1">'+
                    '<div class="signal-item__img"><img src="https://backend.fxinsites.com/uploads/user/'+v.tele_users.avatar+'" alt="'+v.tele_users.full_name+'"></div>'+
                    '<h3 class="signal-item__name">'+v.tele_users.full_name+'</h3>'+
                    '<span class="signal-item__view d-flex align-items-center"><i class="icon-eye mr-1"></i>'+v.view+'</span>'+
                    '</div>'+
                    '<div class="signal-item__txt">'+nl2br(v.text)+'</div>'+
                    '</li>';
                }
                $('#js-more-signal').prepend(str);                         
            }
            flag = 1;
        });
    }
}, 4000);
SCRIPT;
$this->registerJs($format, View::POS_END);
