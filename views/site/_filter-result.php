<?php

use yii\helpers\ArrayHelper;
?>
<div class="d-none d-md-block mb-2 pb-1">
    <div class="sort-dropdown">
        <form method="GET" class="form-sort">
            <select class="form-control selectpicker show-tick" name="sort" title="Mặc định">
                <option data-tokens="Mặc định" value="default" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'default' ? 'selected' : ''; ?>>Mặc định</option>
                <option data-tokens="Min deposit giảm dần" value="deposit-" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'deposit-' ? 'selected' : ''; ?>>Min deposit giảm dần</option>
                <option data-tokens="Min deposit tăng dần" value="deposit+" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'deposit+' ? 'selected' : ''; ?>>Min deposit tăng dần</option>
                <option data-tokens="Đòn bẩy giảm dần" value="lever-" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'lever-' ? 'selected' : ''; ?>>Đòn bẩy giảm dần</option>
                <option data-tokens="Đòn bẩy tăng dần" value="lever+" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'lever+' ? 'selected' : ''; ?>>Đòn bẩy tăng dần</option>
            </select>
        </form>
    </div>
</div>

<ul class="filter-list mb-4 pb-3 mb-md-5 pb-md-1">
    <?php foreach ($items as $k => $v) {
        $pay = implode(", ", ArrayHelper::getColumn($v['payments'], function ($element) {
            return $element['payments']['name'];
        }));
        $lic = implode(", ", ArrayHelper::getColumn($v['licenses'], function ($element) {
            return $element['licenses']['name'];
        }));
    ?>
        <li>
            <div class="row align-items-lg-center justify-content-between">
                <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                    <div class="row align-items-md-center">
                        <div class="col col-md-6 col-lg-12">
                            <a href="/thong-tin-danh-gia-san-<?= $v['slug'] ?>" class="filter-list__logo img-hover mb-1"><img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/189x100' . $v['logo'] ?>" alt="<?= $v['name'] ?>"></a>
                            <button type="button" class="btn btn-link d-md-none font-11" data-compare="12" data-compare-slug="<?= $v['slug'] ?>" data-broker-name="<?= $v['name'] ?>">
                                <i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh
                            </button>
                        </div>
                        <div class="col col-md-6 col-lg-12">
                            <div class="d-lg-none review-star mb-2 mb-md-3">
                                <span class="review-star__main">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                                <span class="review-star__mask" style="width: <?= ($v['star'] * 100 / 5) ?>%">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="filter-list__intro">
                                <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold"><?= $v['contry'] ? $v['contry'] : 'N/A' ?></span></p>
                                <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold"><?= $v['founded_year'] != -1 ? $v['founded_year'] : 'N/A' ?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="filter-broker-desc">
                        <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                        <p class="mb-0 font-weight-bold filter-broker-desc__txt"><?= $lic ? $lic : 'N/A' ?></p>
                    </div>
                    <div class="filter-broker-desc">
                        <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                        <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-<?= $v['init_fee'] ? 'tick' : 'x' ?>"></i></p>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="filter-broker-desc">
                        <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                        <p class="mb-0 font-weight-bold filter-broker-desc__txt"><?= $pay ? $pay : 'N/A' ?></p>
                    </div>
                    <div class="filter-broker-desc">
                        <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                        <p class="mb-0 font-weight-bold filter-broker-desc__txt"><?= $v['min_deposit'] != -1 ? '$' . number_format($v['min_deposit']) : 'N/A' ?></p>
                    </div>
                </div>
                <div class="filter-list__info col-6 col-md-12 col-lg-3 pl-0">
                    <div class="d-none d-md-flex row text-xl-right">
                        <div class="d-none d-lg-block col-6 col-lg-12 mb-3">
                            <div class="filter-star-pc">
                                <div class="review-star">
                                    <span class="review-star__main">
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span>
                                    <span class="review-star__mask" style="width: <?= ($v['star'] * 100 / 5) ?>%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="/thong-tin-danh-gia-san-<?= $v['slug'] ?>" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                        <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="<?= $v['broker_id'] ?>" data-compare-slug="<?= $v['slug'] ?>" data-broker-name="<?= $v['name'] ?>" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                    </div>
                </div>
            </div>
        </li>
    <?php } ?>
</ul>

<?php
$curent = Yii::$app->request->url;
if ($curent == '/tim-kiem-san-forex') $curent .= '?page=';
if (strpos($curent, 'page=') === false) $curent .= '&page=';

$end = ceil($meta['currentPage'] / 3) * 3;
$start = $end - 2;
$but_pre = ($meta['currentPage'] < 2) ? 'disabled' : '';
$but_next = ($meta['pageCount'] == $meta['currentPage']) ? 'disabled' : '';
if ($meta['pageCount'] > 1) {
?>
    <nav>
        <ul class="pagination justify-content-center justify-content-md-end">
            <li class="page-item <?= $but_pre ?>">
                <a class="page-link" href="<?=($meta['currentPage'] - 1) > 0 ? preg_replace('/page=[\d]{0,}/i', 'page=' . ($meta['currentPage'] - 1), $curent) : '#' ?>" aria-label="Previous">
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