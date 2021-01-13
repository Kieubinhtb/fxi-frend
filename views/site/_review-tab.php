
<div class="review-list">
    <?php foreach ($items as $v) { ?>
        <div class="review-item bg-gray">
            <div class="row align-items-center">
                <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="review-item__logo col-6">
                            <a href="/thong-tin-danh-gia-san-<?= $v['slug'] ?>" class="img-hover">
                                <img src="<?= Yii::$app->params['imgHref'] . 'logo/resize/189x100' . $v['logo'] ?>" alt="<?= $v['name'] ?>">
                            </a>
                        </div>
                        <div class="review-item__info col-6">
                            <h3 class="title-h3 mb-1"><?= $v['name'] ?></h3>
                            <div class="review-info">
                                <div class="review-star">
                                    <span class="review-item__star">
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </span>
                                    <span class="review-item__star review-star__mask" style="width: <?= ($v['star'] * 100) / 5 ?>%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <span class="d-block review-item__count review-count"><?= $v['total_review'] ?> đánh giá</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 review-item__right text-center">
                    " <?= isset($reviews[$v['broker_id']]) ? $reviews[$v['broker_id']]['info'] : "Chưa có đánh giá nào!" ?> "
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php
$curent = '/danh-gia-san-forex?tab=' . $tab . '&page=' . $meta['currentPage'];
$end = ceil($meta['currentPage'] / 3) * 3;
$start = $end - 2;
$but_pre = ($meta['currentPage'] < 2) ? 'disabled' : '';
$but_next = ($meta['pageCount'] == $meta['currentPage']) ? 'disabled' : '';
if ($meta['pageCount'] > 1) {
?>
    <nav>
        <ul class="pagination justify-content-center justify-content-md-start">
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