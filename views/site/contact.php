<?php

use app\models\FunPub;
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

<div id="contents">
    <div class="container">
        <div class="contact-wrap bg-gray">
            <div class="row">
                <div class="col-md-5 pr-md-0">
                    <div class="bg-primary contact-wrap__box">
                        <h1 class="title-h1 mb-md-7 text-white text-left">Liên hệ</h1>
                        <h3 class="title-h3 text-white">Công ty cổ phần Insites Việt Nam</h3>
                        <p class="company-item"><span class="icon"><img src="./assets/images/icons/icon-spin.svg" alt="address"></span>Tầng 3 Tòa nhà Vietcomreal, 68 Nguyễn Huệ, Phường Bến Nghé, Quận 1, TP. Hồ Chí Minh</p>
                        <p class="company-item"><span class="icon"><img src="./assets/images/icons/icon-phone.svg" alt="phone number"></span>090 632 6177</p>
                        <p class="company-item"><span class="icon"><img src="./assets/images/icons/icon-email.svg" alt="email"></span>marketing@insites.com.vn</p>
                    </div>
                </div>
                <div class="col-md-7 pl-md-0">
                    <div class="contact-wrap__box">
                        <form action="/site/submit-contact" id="contact-form" method="post" novalidate>
                            <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" name="full_name" placeholder="Họ và tên" required>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="col">
                                    <input type="tel" class="form-control" name="tel" placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Bạn cần liên hệ gì với chúng tôi?"></textarea>
                            </div>

                            <div id="recaptcha-form-check"></div>

                            <input type="hidden" class="hiddenRecaptcha" name="ct_hiddenRecaptcha" id="ct_hiddenRecaptcha">

                            <div class="mt-4 pt-3"><button type="submit" class="btn btn-primary btn-large-size">Gửi ngay</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.476371185228!2d106.7013503152604!3d10.774779862169263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f46fa5c0877%3A0xde0e0d040bc00298!2zNjggTmd1ecOqzINuIEh1w6rMoywgQuG6v24gTmdow6ksIFF14bqtbiAxLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1605253357661!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    </div>
</div>

<?= $this->render('../layouts/inc/before-footer', ['brokers' => $data['data']['brokers']]); ?>

<?php

$format = <<< SCRIPT
function submitContact(data){
    $.ajax({
        type: 'POST',
        url: "/site/submit-contact",
        data: data,
        success: function(response) {
            let successContent = `<div class="notice-modal">
                <div class="notice-modal__icon cl-primary"><i class="fa fa-check" aria-hidden="true"></i></div>
                <div class="notice-modal__content text-center">
                    Chúng tôi đã nhận thông tin của bạn thành công !
                </div>
            </div>`;

            let errorContent = `<div class="notice-modal">
                <div class="notice-modal__icon cl-red"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                <div class="notice-modal__content text-center">
                    Hệ thông đang có sự cố. rất tiếc vì lỗi này. Xin cảm ơn!
                </div>
            </div>`;

            subcribeModal.find('.modal-body').empty();
            let json = JSON.parse(response);
            // true                 
            subcribeModal.find('.modal-body').append(json.success ? successContent : errorContent);
            // false subcribeModal.find('.modal-body').append(errorContent);
            subcribeModal.modal('show');
            if(json.success){
                $('#contact-form')[0].reset();
            }
        },
        error: function(response) {
            console.log(response)
        }
    });
}
$.validator.addMethod("phoneUS", function (phone, element) {
    phone = phone.replace(/\s+/g, "");
    return this.optional(element) || phone.length > 8 &&
    phone.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
}, "Định dạng số điện thoại không đúng");

let form = $('#contact-form');

form.on('submit', function(e) {
    e.preventDefault();
});

$('#contact-form').validate({
    ignore: "",
    rules: {
        full_name: "required",
        email: {
            required: true,
            email: true
        },
        tel: {
            required: true,
            phoneUS: true
        },
        message: {
            required: true,
            minlength: 15,
        },
        ct_hiddenRecaptcha: "required"
    },
    messages: {
        full_name: "Vui lòng nhập thông tin",
        email: {
            required: "Vui lòng nhập thông tin",
            email: "Định dạng email không đúng"
        },
        tel: {
            required: "Vui lòng nhập thông tin",
            phoneUS: "Định dạng số điện thoại không đúng"
        },
        message: {
            required: "Vui lòng nhập thông tin",
            minlength: "Vui lòng nhập tối thiểu 15 ký tự"
        },
        ct_hiddenRecaptcha: "Vui lòng kiểm tra captcha"
    },
    submitHandler: function(form) {
        submitContact($('#contact-form').serialize());
    },
});

SCRIPT;
$this->registerJs($format, View::POS_END);
