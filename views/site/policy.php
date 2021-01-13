<?php

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

        <div class="content-top mw-100 pb-4">

            <h1 class="title-h1">Chính sách quyền riêng tư</h1>

            <p class="text-center">Chúng tôi, <a href="/">https://fxinsites.com/</a> (sau đây được gọi là ‘Trang’ hay ‘Chúng tôi’) tôn trọng những sự quan ngại về quyền riêng tư của người dùng trên Trang, và đã tạo tuyên bố quyền riêng tư này để giải thích về những thông tin mà chúng tôi thu thập khi bạn truy cập Trang, và cách sử dụng những thông tin ấy. </p>

        </div>



        <dl class="dl-list">

            <dt>Sử dụng thông tin</dt>

            <dd>

                <p>Là một chính sách tổng quát, không thông tin định danh cá nhân nào, chẳng hạn như tên hay địa chỉ của bạn, được thu thập tự động từ việc truy cập trang. Tuy nhiên, những thông tin phi cá nhân nhất định được ghi chép theo hoạt động tiêu chuẩn của các internet server. Thông tin như loại trình duyệt được sử dụng, hệ điều hành, và địa chỉ IP của bạn được thu thập để tăng cường trải nghiệm online của bạn.<br>

                    Ví dụ, thông tin có thể được dùng để thiết kế nội dung và quảng cáo theo sự quan tâm của bạn.</p>

                <p>Trong những trường hợp đặc biệt, Chúng tôi có thể tiết lộ thông tin người dùng khi có lý do để tin rằng việc tiết lộ thông tin này là cần thiết để xác định, liên hệ hay có hành động pháp lý với người có thể gây thương tích hoặc can thiệp (cố ý hay vô ý) các quyền hoặc tài sản của Trang, những người dùng khác của Trang, hay bất kỳ ai khác có thể bị làm hại bởi những hoạt động như thế.</p>

            </dd>

            <dt>Bảo mật</dt>

            <dd>Sự bảo mật đối với tất cả mọi thông tin có thể định danh là điều cực kỳ quan trọng đối với chúng tôi. Tiếc là, việc truyền dữ liệu qua Internet không thể được đảm bảo an toàn 100%. Mặc dù cố gắng bảo vệ thông tin cá nhân của bạn, chúng tôi không thể cam đoan hay đảm bảo sự bảo mật của bất kỳ thông tin nào mà bạn gửi cho chúng tôi từ những dạng online, và bạn chịu mọi rủi ro khi làm như vậy. Khi chúng tôi nhận được thông tin, chúng tôi sẽ nỗ lực hết mình để đảm bảo bảo mật trên các hệ thống của mình. </dd>

            <dt>Sử dụng Cookies</dt>

            <dd>Cookies là những mẩu thông tin mà một trang web truyền đến ổ cứng máy tính cá nhân với mục đích ghi chép dữ liệu. Cookies được dùng để theo dõi các lượt truy cập Trang và cá nhân hóa các Trang cho những người đăng ký mới và hiện tai. Hầu hết các trình duyệt đều được thiết lập chấp nhận cookies; tuy nhiên, bạn có thể cài lại trình duyệt để từ chối tất cả các cookie hay nêu rõ khi nào thì gửi cookie. (Lưu ý: bạn sẽ cần xem hướng dẫn trong phần trợ giúp của ứng dụng trình duyệt.) Nếu bạn quyết định tắt thiết lập cookie hay không chấp nhận cookie, một số phần của trang web chúng tôi có thể sẽ không hoạt động đúng.</dd>

            <dt>Dùng các địa chỉ IP</dt>

            <dd>Địa chỉ IP là một con số được cấp tự động cho máy tính của bạn bởi nhà cung cấp Internet bất cứ khi nào bạn lướt Web. Khi bạn yêu cầu các trang con từ Trang, các server của chúng tôi nhập địa chỉ IP của bạn. Chúng tôi thu thập địa chỉ IP với mục đích quản trị hệ thống, để báo cáo thông tin tổng hợp cho các nhà cung cấp, và kiểm toán việc sử dụng Trang. Chúng tôi có thể dùng các địa chỉ IP phối hợp với nhà cung cấp Internet của bạn để xác định bạn nếu chúng tôi cho là cần thiết để thực thi việc tuân thủ Điều khoản Sử dụng của chúng tôi hay để bảo vệ dịch vụ, Trang, khách hàng, hay những yếu tố khác của chúng tôi.</dd>

            <dt>Link đến các trang khác</dt>

            <dd>Trang không chịu trách nhiệm về nội dung hay việc thực hành của các trang web bên thứ ba có thể được liên kết với Trang của chúng tôi. Trang của chúng tôi có thể liên kết đến những trang web được điều hành bởi các công ty khác; chúng tôi không chịu trách nhiệm đối với những hoạt động riêng tư của những trang web đó.</dd>

            <dt>Các cookie bên thứ ba</dt>

            <dd>

                <p>Trong quá trình quảng cáo trên các trang của chúng tôi, những nhà quảng cáo bên thứ ba có thể đặt hay nhận ra một “cookie” đặc biệt trên trình duyệt của bạn.</p>

                <p>Chúng tôi sử dụng các công ty quảng cáo bên thứ ba để quảng cáo khi bạn truy cập Trang của chúng tôi. Các công ty này có thể dùng thông tin tổng hợp (không bao gồm tên, địa chỉ, địa chỉ email hay số điện thoại của bạn) về những lượt truy cập của bạn đến Trang này và các trang web khác để cung cấp quảng cáo về các sản phẩm và dịch vụ mà bạn quan tâm. Nếu bạn muốn thêm thông tin về hoạt động này và biết những chọn lựa của mình về việc không để các công ty sử dụng những thông tin này, hãy truy cập Network Advertising Initiative hay Self-Regulatory Program for Online Behavioral Advertising. Google AdSense và các nhà cung cấp bên thứ ba khác dùng cookie để phục vụ quảng cáo trên những trang web của chúng tôi. Người dùng có thể không tham gia sử dụng cookie DART của chúng tôi bằng cách truy cập Google và chính sánh quyền riêng tư về mạng nội dung.</p>

            </dd>

            <dt>Liên hệ với chúng tôi</dt>

            <dd>Nếu bạn có bất kỳ câu hỏi nào về tuyên bố quyền riêng tư này, các hoạt động trên Trang của chúng tôi, hay cách chúng tôi xử lý các Trang, bạn có thể email đến chúng tôi. Thông tin mà bạn cung cấp thông qua thắc mắc qua email chẳng hạn như địa chỉ email của bạn sẽ chỉ được dùng để phản hồi thắc mắc của bạn trong quá trình kinh doanh thông thường và không bao giờ được chia sẻ với các bên thứ ba.</dd>

            <dt>Chấp nhận những điều khoản này</dt>

            <dd>Bằng cách dùng Trang này, bạn tuyên bố chấp nhận Chính sách Quyền riêng tư. Nếu bạn không đồng ý với chính sách này, vui lòng không dùng dịch vụ của Trang chúng tôi. Chúng tôi có quyền điều chỉnh, thay đổi hay cập nhật chính sách này vào bất cứ lúc nào. Chúng tôi khuyến khích khách truy cập xem lại chính sách này thỉnh thoảng. Việc bạn tiếp tục dùng Trang sau khi đăng những thay đổi về các điều khoản này ám chỉ rằng bạn chấp nhận những sự thay đổi.</dd>

        </dl>

    </div>

</div>

<?= $this->render('../layouts/inc/before-footer', ['brokers' => $data['data']['brokers']]); ?>