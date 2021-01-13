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
            <div class="content-top">
                <h1 class="title-h1 mb-0">LỊCH KINH TẾ DIỄN RA THEO <br class="d-md-none">THỜI GIAN THỰC</h1>
            </div>

            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/economic-calendar/" rel="noopener" target="_blank"><span class="blue-text">Economic Calendar</span></a> by TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
            {
            "colorTheme": "light",
            "isTransparent": false,
            "width": "100%",
            "height": "800",
            "locale": "en",
            "importanceFilter": "-1,0,1"
            }
            </script>
            </div>
            <!-- TradingView Widget END -->

            <div class="intro-bottom">
                <div class="intro-bottom__wrap">
                    <dl class="mb-0">
                        <dt>LỊCH KINH TẾ LÀ GÌ?</dt>
                        <dd><strong>Lịch kinh tế</strong> theo thời gian thực trong thị trường forex bao gồm các sự kiện và chỉ báo kinh tế từ khắp nơi trên thế giới. Các sự kiện trong <strong>lịch kinh tế</strong> thể hiện rõ nội dung và quốc gia, thời gian diễn ra sự kiện đó. Mức độ ảnh hưởng của sự kiện đến đến thị trường như thế nào cũng là một điểm quan trọng, thường được đánh dấu bằng màu sắc. Bên cạnh đó, yếu tố được các nhà đầu tư quan tâm nhất trong lịch kinh tế có lẽ là kết quả tác động của các sự kiện đó đến nền kinh tế như thế nào, với các con số đã từng xảy ra trong quá khứ và dự báo của các chuyên gia trong tương lai. Đây là cơ sở để các nhà đầu tư đưa ra quyết định của mình khi các tin tức được công bố chính thức.</dd>
                        <dt>TẠI SAO CÁC NHÀ ĐẦU TƯ FOREX QUAN T M ĐẾN LỊCH KINH TẾ?</dt>
                        <dd>
                            <p>- Lịch kinh tế được xem như một công cụ cung cấp đầy đủ, chính xác và kịp thời nhất các tin tức của thị trường giao dịch Forex. Các sự kiện của lịch kinh tế được FxInsites mua lại từ một đơn vị thứ ba, bao gồm đội ngũ chuyên gia kinh tế và nhà báo cập nhật tất cả dữ liệu 24h mỗi ngày, 5 ngày một tuần.</p>
                            <p>- Các nhà giao dịch forex có thể xem lịch kinh tế như một tín hiệu để giao dịch.</p>
                            <p>- Lịch kinh tế từ lâu đã được chứng minh là một công cụ đáng tin cậy, và được sử dụng rộng rãi bởi các nhà đầu tư.</p>
                            <p>- Tránh những tin xấu bất ngờ: bạn có thể kiểm tra khi dữ liệu biến động cao được dự kiến công bố để quản lý các giao dịch một cách tốt hơn.</p>
                        </dd>
                        <dt>CÁCH ĐỌC LỊCH KINH TẾ</dt>
                        <dd>
                            <div class="pl-3 pl-md-4 ml-md-3 mt-md-4">
                                <h3 class="dotted-title text-uppercase">Thời gian</h3>
                                <p>Tất cả dữ liệu được hiển thị theo thứ tự thời gian, được chia cho ngày. Theo từng ngày, bạn có thể thấy các sự kiện tại các quốc gia diễn ra vào thời gian nào.</p>
                                <h3 class="dotted-title text-uppercase">Tiền tệ</h3>
                                <p>Biểu tượng cờ cho biết quốc gia phát hành dữ liệu và bên cạnh quốc gia đó là đơn vị tiền tệ của quốc gia đó. Vì vậy, bạn có thể nhanh chóng quét và xem những loại tiền tệ nào có thể bị ảnh hưởng trong ngày hôm nay hoặc trong một số ngày cụ thể.</p>
                                <h3 class="dotted-title text-uppercase">Biến động</h3>
                                <p class="mb-0">Mức độ biến động, hay tác động của các sự kiện trong lịch kinh tế được mô tả là các thanh màu vàng/cam/đỏ, sự biến động là một chỉ báo về tác động dự kiến ​​của một dữ liệu về tiền tệ. Với hình tròn màu đỏ, các nhà quan sát thị trường cho rằng dữ liệu này có tác động lớn đến thị trường ngoại hối. Màu cam cho thấy mức độ biến động trung bình, và với màu vàng, tác động được xem là thấp. Các mức độ biến động này được chia theo 3 cột dữ liệu: mức độ tác động thực tế của kỳ trước, dự báo kỳ tới và thực tế diễn ra.</p>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <?php include('inc/before-footer.php'); ?>

    <?php include('inc/footer.php'); ?>
</body>
</html>