<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/favicon.webp">
    <title>Document</title>
    <?php include('inc/head.php'); ?>
</head>
<body>
    <?php include('inc/header.php'); ?>

    <div id="contents">
        <div class="container">
            <div class="contact-wrap bg-gray">
                <div class="row">
                    <div class="col-md-5 pr-md-0">
                        <div class="bg-primary contact-wrap__box">
                            <h1 class="title-h1 mb-md-7 text-white text-left">Liên hệ</h1>
                            <h3 class="title-h3 text-white">Công ty cổ phần Insites Việt Nam</h3>
                            <p class="company-item"><span class="icon"><img src="./assets/images/icons/icon-spin.svg" alt="address"></span>Tầng 3 Tòa nhà Vietcomreal, 68 Nguyễn Huệ, Phường Bến Nghé, Quận 1, TP. Hồ Chí Minh</p>
                            <p class="company-item"><span class="icon"><a class="tel" href="tel:0906326177"><img src="./assets/images/icons/icon-phone.svg" alt="phone number"></span>090  632  6177</a></p>
                            <p class="company-item"><span class="icon"><img src="./assets/images/icons/icon-email.svg" alt="email"></span>marketing@insites.com.vn</p>
                        </div>
                    </div>
                    <div class="col-md-7 pl-md-0">
                        <div class="contact-wrap__box">
                            <form action="#" id="contact-form" method="post" novalidate>
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

    <?php include('inc/before-footer.php'); ?>

    <?php include('inc/footer.php'); ?>

    <script>
        $.validator.addMethod("phoneUS", function (phone, element) {
            phone = phone.replace(/\s+/g, "");
            return this.optional(element) || phone.length > 8 &&
            phone.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
        }, "Định dạng số điện thoại không đúng");

        let form =  $('#contact-form');

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
            }
        });
    </script>
</body>
</html>