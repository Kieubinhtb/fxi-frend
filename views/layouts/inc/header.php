<?php
$home = $filter = $compare = $review = $reputation = '';
$help = $signal = $calendar = $gold = $contact = '';
switch (Yii::$app->controller->action->id) {
    case 'home':
        $home = 'active';
        break;
    case 'filter':
        $filter = 'active';
        break;
    case 'compare':
        $compare = 'active';
        break;
    case 'review':
        $review = 'active';
        break;
    case 'reputation':
        $reputation = 'active';
        break;
    case 'signal':
        $help = $signal = 'active';
        break;
    case 'economic-calendar':
        $help = $calendar = 'active';
        break;
    case 'gold-price':
        $help = $gold = 'active';
        break;
    case 'contact':
        $contact = 'active';
        break;
    default:
        $home = 'active';
        break;
}
?>
<header id="header">

    <div class="container">

        <div class="d-flex flex-wrap flex-lg-nowrap justify-content-center justify-content-lg-between align-items-center py-3 py-lg-4 pb-md-0">

            <div class="logo"><a href="./"><img src="assets/images/logo.png" srcset="assets/images/logo@2x.png 2x" alt="fxInsites"></a></div>

            <div class="banner-header">
                <?php if (isset($advert_top)) { ?>
                    <a href="<?=$advert_top['link']?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?= Yii::$app->params['imgHref'] ?>endow/<?=$advert_top['image']?>" alt="<?=$advert_top['name']?>">
                    </a>
                <?php } ?>
            </div>


        </div>

        <nav class="navbar navbar-expand-lg">

            <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#navigation">

                <span class="hamburger-box"><span class="hamburger-inner"></span></span>

            </button>



            <div class="collapse navbar-collapse" id="navigation">

                <div class="text-right mb-3 d-lg-none">

                    <button type="button" class="btn btn-close p-0" data-dismiss="modal"><img src="assets/images/icons/icon-close.svg" alt="Close"></button>

                </div>

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item <?= $home ?> d-none d-lg-block">

                        <a class="nav-link" href="/">Home</a>

                    </li>

                    <li class="nav-item <?= $filter ?>">

                        <a class="nav-link" href="/tim-kiem-san-forex"><span class="nav-link-icon icon-search2"></span>Tìm kiếm</a>

                    </li>

                    <li class="nav-item <?= $compare ?>">

                        <a class="nav-link" href="/so-sanh-san-forex"><span class="nav-link-icon icon-exchange"></span>So sánh</a>

                    </li>

                    <li class="nav-item <?= $review ?>">

                        <a class="nav-link" href="/danh-gia-san-forex"><span class="nav-link-icon icon-review"></span>Đánh giá</a>

                    </li>

                    <li class="nav-item <?= $reputation ?>">

                        <a class="nav-link" href="/san-forex-uy-tin"><span class="nav-link-icon icon-chart"></span>Sàn giao dịch uy tín</a>

                    </li>

                    <li class="nav-item <?= $help ?>">

                        <a class="nav-link" href="javascript:;"><span class="nav-link-icon icon-help"></span>Hỗ trợ tiện tích</a>

                        <ul class="navbar-nav-sub">

                            <li class="nav-item <?= $signal ?>"><a class="nav-link" href="/tin-hieu-giao-dich-forex">Tín hiệu giao dịch</a></li>

                            <li class="nav-item <?= $calendar ?>"><a class="nav-link" href="/lich-kinh-te">Lịch kinh tế</a></li>

                            <li class="nav-item <?= $gold ?>"><a class="nav-link" href="/gia-vang">Giá vàng</a></li>

                        </ul>

                    </li>

                    <li class="nav-item <?= $contact ?>">

                        <a class="nav-link" href="/lien-he"><span class="nav-link-icon icon-phone"></span>Liên hệ</a>

                    </li>

                </ul>

                <div class="h-social">

                    <a href="https://www.facebook.com/fxinsites" target="_blank"><i class="icon-fb"></i></a>

                    <a href="https://zalo.me/g/jocdcj103" target="_blank" class="ml-lg-3 ml-xl-4"><i class="icon-zalo"></i></a>

                </div>

            </div>

        </nav>

    </div>

</header>

<?php if (isset($advert_popup)) { ?>
    <div class="modal fade banner-popup" id="banner-popup" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body p-0"><a href="<?=$advert_popup['link']?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?= Yii::$app->params['imgHref'] ?>endow/<?=$advert_popup['image']?>" alt="<?=$advert_popup['name']?>">
                    </a></div>

            </div>

        </div>

    </div>
<?php } ?>