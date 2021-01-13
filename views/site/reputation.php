<?php

use app\models\FunPub;
use yii\helpers\ArrayHelper;

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
        <div class="content-top content-top--larger">
            <h1 class="title-h1 mb-md-3 pb-md-1">Các sàn giao dịch uy tín</h1>
            <p class="mb-0 text-center">Danh sách các sàn giao dịch uy tín được chúng
                tôi đề xuất dựa vào mức độ uy tín của các giấy phép mà các sàn đang sở hữu.
                Tuy nhiên, các traders cũng nên tham khảo thêm các
                <a href="/danh-gia-san-forex">nhận xét và đánh giá</a>
                từ nhà đầu tư khác. Việc mở tài khoản với các sàn giao dịch sở hữu
                giấy phép uy tín chỉ giúp hạn chế rủi ro này. </p>
        </div>

        <ul class="reputation-list">

            <?php foreach ($data['data']['items'] as $v) {
                $gphd = implode(", ", ArrayHelper::getColumn($v['licenses'], function ($element) {
                    return $element['licenses']['name'];
                }));
            ?>
                <li>
                    <div class="reputation-item">
                        <div class="row align-items-center">
                            <div class="col-6 col-md-3 col-lg-4 reputation-item__logo">
                                <a href="/thong-tin-danh-gia-san-<?= $v['slug'] ?>" class="img-hover">
                                    <img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/189x100' . $v['logo'] ?>" alt="<?= $v['name'] ?>">
                                </a>
                            </div>
                            <div class="d-none d-md-block col-md-6 col-lg-5">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><?= $gphd ? $gphd : 'N/A' ?></p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Năm thành lập :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><?= $v['founded_year'] != -1 ? $v['founded_year'] : 'N/A' ?></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Hỗ trợ tiếng Việt :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-<?= $v['language_vn'] ? 'tick' : 'x' ?>"></i></p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Đánh giá :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><?= $v['total_review'] ?> đánh giá</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 pl-0">
                                <div class="reputation-item__action ml-auto">
                                    <div class="review-star">
                                        <span class="review-item__star">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </span>
                                        <span class="review-item__star review-star__mask" style="width: <?= $v['star'] * 100 / 5 ?>%">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <p class="mb-0"><a href="<?= $v['link_create'] ?>" target="_blank" class="btn btn-primary btn-medium-size font-14">Mở tài khoản</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>

        </ul>

        <?php
        $meta = $data['data']['meta'];
        $curent = Yii::$app->request->url;
        if ($curent == '/san-forex-uy-tin') $curent .= '?page=';
        if (strpos($curent, 'page=') === false) $curent .= '&page=';

        $end = ceil($meta['currentPage'] / 3) * 3;
        $start = $end - 2;
        $but_pre = ($meta['currentPage'] < 2) ? 'disabled' : '';
        $but_next = ($meta['pageCount'] == $meta['currentPage']) ? 'disabled' : '';
        if ($meta['pageCount'] > 1) {
        ?>
            <nav>
                <ul class="pagination justify-content-center justify-content-md-center">
                    <li class="page-item <?= $but_pre ?>">
                        <a class="page-link" href="<?= ($meta['currentPage'] - 1) > 0 ? preg_replace('/page=[\d]{0,}/i', 'page=' . ($meta['currentPage'] - 1), $curent) : '#' ?>" aria-label="Previous">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>

                    </li>
                    <?php
                    for ($i = $start; $i <= $end; $i++) {
                        if ($i <= $meta['pageCount']) {
                            $active = ($meta['currentPage'] == $i) ? 'active' : '';
                            $link = ($meta['currentPage'] == $i) ? 'javascript:;' : preg_replace('/page=[\d]{0,}/i', 'page=' . $i, $curent);
                            echo '<li class="page-item ' . $active . '"><a class="page-link" href="' . $link . '">' . $i . '</a></li>';
                        }
                    }
                    ?>

                    <li class="page-item <?= $but_next ?>">
                        <a class="page-link" href="<?= ($meta['currentPage'] + 1) <= $meta['pageCount'] ? preg_replace('/page=[\d]{0,}/i', 'page=' . ($meta['currentPage'] + 1), $curent) : '#' ?>" aria-label="Next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php } ?>

        <div class="intro-bottom">
            <div class="intro-bottom__wrap">
                <dl class="mb-0">
                    <dt>Làm thế nào để tìm ra sàn forex uy tín</dt>
                    <dd>
                        <p>Để tìm ra một <a href="https://news.fxinsites.com/cac-tieu-chi-chon-san-giao-dich-forex/" target="_blank" rel="noopener noreferrer" class="font-weight-bold">sàn forex uy tín</a>, bạn cần có những tiêu chí nhất định để đánh giá. Những tiêu chí đó có thể là: <a href="https://news.fxinsites.com/danh-sach-giay-phep-san-forex-uy-tin/" target="_blank" rel="noopener noreferrer">giấy phép</a> được cấp bởi các ủy ban tài chính của các nước, hay các <a href="/danh-gia-san-forex" class="font-weight-bold">đánh giá</a> của người giao dịch thật. Các bài viết giới thiệu về sàn forex uy tín chỉ nên mang tính chất tham khảo, vì có thể là những website do chính sàn môi giới lập ra để tự xếp hạng cho sàn của họ. Bạn nên tham khảo ở những nền tảng đánh giá sàn forex uy tín trung lập, không thuộc bất kì tổ chức trung gian nào như <a href="/">FxInsites</a> chẳng hạn.</p>
                        <p>Điều quan trọng là bạn phải tự trang bị cho mình đủ kiến thức và hiểu biết để đánh giá và tìm ra đâu là <strong>sàn giao dịch forex uy tín</strong>, chất lượng và phù hợp nhất với mình.</p>
                    </dd>
                    <dt>Các tiêu chí để đánh giá một <strong>sàn forex uy tín</strong> và chất lượng</dt>
                    <dd>
                        <p>Có rất nhiều sàn giao dịch forex uy tín - theo nhận xét của các traders trên thế giới mà bạn có thể mở tài khoản. Các điều kiện giao dịch cũng không khác nhau nhiều lắm. Các tiêu chí mà bạn cần đặt ra để lựa chọn là:</p>
                        <ul>
                            <li>Thời gian hoạt động của sàn đó đã lâu chưa?</li>
                            <li>Sàn đó có trụ sở ở nước nào?</li>
                            <li>Hoạt động theo các luật điều chỉnh nào?</li>
                            <li>Có mấy loại tài khoản? (ECN, Standard …)</li>
                            <li>Phí giao dịch và chênh lệch <a href="https://news.fxinsites.com/chenh-lech-ty-gia-mua-ban-ngoai-hoi-la-gi/" target="_blank" rel="noopener noreferrer" class="font-weight-bold">Bid/Ask (Spreads)</a> có thấp không?</li>
                            <li>Phí Swap qua đêm có thấp không?</li>
                            <li>Phần mềm giao dịch có ổn định không? có hiện tượng scam lừa đảo không?</li>
                            <li>Nạp rút tiền có nhanh chóng và thuận tiện?</li>
                            <li>Có bị mất phí nạp rút tiền không? Nếu có thì phí có cao không?</li>
                            <li>Đội ngũ hỗ trợ khi cần có luôn sẵn sàng và nhiệt tình, trung thực?</li>
                            <li>Website của sàn có Tiếng Việt và nhân viên hỗ trợ Tiếng Việt?</li>
                        </ul>
                        <p>Sau khi tìm được các <strong>sàn forex uy tín</strong> phù hợp với tiêu chí của bạn, bạn có thể <a href="/so-sanh-san-forex" class="font-weight-bold">so sánh</a> các sàn forex với nhau để thấy được các ưu điểm của mỗi sàn.</p>
                    </dd>
                    <dt>Danh sách giấy phép sàn Forex uy tín.</dt>
                    <dd>
                        <p><a href="https://news.fxinsites.com/danh-sach-giay-phep-san-forex-uy-tin/" target="_blank" rel="noopener noreferrer">Giấy phép</a> là một trong những tiêu chí quan trọng đánh giá mức độ uy tín của các sàn forex. Giấy phép càng chất lượng, được cấp bởi các cơ quan quản lí tài chính có tiếng trên thế giới chứng tỏ sàn forex đó càng có được mức độ bảo đảm cao, mức độ đầu tư và giảm thiểu rủi ro càng lớn. Dưới đây là danh sách xếp hạng giấy phép sàn forex và độ khó của các giấy phép theo thứ tự giảm dần.</p>
                        <h3 class="title-h3">ĐIỀU KIỆN PHÁP LÍ CẤP ĐỘ A:</h3>
                        <p>Mỹ và Nhật được xếp vào mục này. Để xin được giấy cấp phép ở hai nước này, một sàn forex sẽ cần chứng minh khoản tiền vốn khả dụng là 20 triệu USD, không bao gồm tiền ký quỹ của khách hàng. Các quy định về báo cáo và khiếu nại khách hàng là cực kì nghiêm khắc và nếu vi phạm thì sàn có thể bị phạt một khoản tiền cực kì lớn. Hai loại giấy phép này là <a href="https://www.nfa.futures.org/" target="_blank" rel="noopener noreferrer">NFA</a> (Mỹ) hoặc FSA (Nhật)</p>
                        <h3 class="title-h3">ĐIỀU KIỆN PHÁP LÍ CẤP ĐỘ B:</h3>
                        <p>Nước Anh (tổ chức <a href="https://www.fca.org.uk/" target="_blank" rel="noopener noreferrer">FCA</a>) và Úc (tổ chức <a href="https://asic.gov.au/" target="_blank" rel="noopener noreferrer">ASIC</a>) nằm ở cấp độ này. Các quy định và tiền vốn có sẵn sẽ thấp hơn cấp độ A một chút. Để có được giấy cấp phép ở đây, một broker sẽ phải tốn tầm 35,000-50,000 USD. Tiền vốn có sẵn sẽ ở mức 100,000 USD không gồm tiền ký quỹ và sàn bắt buộc phải có trụ sở chính.</p>
                        <h3 class="title-h3">ĐIỀU KIỆN PHÁP LÍ CẤP ĐỘ C:</h3>
                        <p>Những nước sau đây được liệt vào cấp độ C, tức độ bảo vệ khách hàng Forex ở mức ổn: Cyprus (Đảo Síp) (tổ chức <a href="https://www.cysec.gov.cy/en-GB/home/" target="_blank" rel="noopener noreferrer">CySec</a>), Malta (tổ chức <a href="https://www.mfsa.mt/" target="_blank" rel="noopener noreferrer">MFSA</a>) và New Zealand (tổ chức <a href="https://fsp-register.companiesoffice.govt.nz/" target="_blank" rel="noopener noreferrer">FSP</a>).</p>
                        <p>Các sàn bắt buộc phải có văn phòng hoặc trụ sở tại địa phương và mức vốn điều lệ chỉ từ 30,000 USD. Phí và thời gian để lấy được giấy cấp phép tương đương cấp B.</p>
                        <h3 class="title-h3">ĐIỀU KIỆN PHÁP LÍ CẤP ĐỘ D:</h3>
                        <p>Mức này gồm nước Belize và BVI (British Virgin Island) Các nước này cũng có các quy định cũng như yêu cầu cụ thể cho giấy phép forex dù không chặt chẽ như các cấp độ trên và có lẽ độ nhanh chóng là điểm cộng lớn nhất cho cấp độ này. Sàn chỉ tốn tầm 3-4 tháng để có được giấy cấp phép với mức phí dưới 30,000 USD. Tiền đặt cọc tối thiểu trong tài khoản ngân hàng là 125,000 USD cho cấp độ D.</p>
                        <h3 class="title-h3">ĐIỀU KIỆN PHÁP LÍ CẤP ĐỘ E:</h3>
                        <p>Mức độ này bao gồm các nước như Nevis, Seychelles và St.Vincent &amp; Grenadines. Điều đặc biệt là ở cấp độ này, sàn chẳng thèm cần tới một tờ giấy cấp phép forex chính chuyên và chỉ trong vòng 1 tuần với vài nghìn đô là bạn đã đăng kí xong và trở thành ông chủ của một sàn forex. Điểm mạnh đương nhiên là thời gian cấp phép cực nhanh và chi phí thấp. Tuy nhiên, khi không có giấy cấp phép, sàn sẽ bị giới hạn số lượng ngân hàng cho phép mở tài khoản để kinh doanh forex và hiển nhiên sẽ có nhiều rủi ro về tiền bạc hơn.</p>
                        <p class="mb-0"><em>Theo FXVN.net</em></p>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>


<?= $this->render('../layouts/inc/before-footer', ['brokers' => $data['data']['brokers']]); ?>