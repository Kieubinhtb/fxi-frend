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
        <div class="content-top">
            <div class="container">
                <h1 class="title-h1 d-none d-md-block">Tìm kiếm sàn Forex</h1>
                <form action="#" method="post">
                    <div class="d-flex search-with-icon search-with-icon--noshadow" data-toggle="modal">
                        <input type="text" id="auto-broker" name="filter-top-input" class="form-control" placeholder="Tìm kiếm sàn ...">
                        <button type="submit" name="search" class="btn btn-icon-search"><i class="icon-search-primary"></i></button>
                    </div>
                    <div class="recommend-filter d-none d-md-flex">
                        <a href="detail-broker.php" class="recommend-filter__link">Sàn XTB</a>
                        <a href="detail-broker.php" class="recommend-filter__link">NatureForex</a>
                        <a href="detail-broker.php" class="recommend-filter__link">GTF Markets</a>
                        <a href="detail-broker.php" class="recommend-filter__link">ClickTrade</a>
                        <a href="detail-broker.php" class="recommend-filter__link">GTF Markets</a>
                        <a href="detail-broker.php" class="recommend-filter__link">Sàn FBS</a>
                    </div>
                </form>

                <script>
                    let brokerList = ['101investing', '24option', '2 invest'];
                    $('#auto-broker').autocomplete({
                        source: brokerList
                    }).on('search change', function() {
                        if ($(this).val().trim() !== '') {
                            $(this).closest('form').submit();
                        }
                    });
                </script>
            </div>
        </div>

        <div class="mobile-filter d-md-none">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto sort-dropdown">
                        <form method="GET" class="form-sort">
                            <select class="form-control selectpicker show-tick" name="sort" title="Mặc định">
                                <option data-tokens="Mặc định" value="default" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'default' ? 'selected' : ''; ?>>Mặc định</option>
                                <option data-tokens="Min deposit giảm dần" value="min_desc" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'min_desc' ? 'selected' : ''; ?>>Min deposit giảm dần</option>
                                <option data-tokens="Min deposit tăng dần" value="min_asc" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'min_asc' ? 'selected' : ''; ?>>Min deposit tăng dần</option>
                                <option data-tokens="Đòn bẩy giảm dần" value="leverage_desc" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'leverage_desc' ? 'selected' : ''; ?>>Đòn bẩy giảm dần</option>
                                <option data-tokens="Đòn bẩy tăng dần" value="leverage_asc" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'leverage_asc' ? 'selected' : ''; ?>>Đòn bẩy tăng dần</option>
                            </select>
                        </form>
                        <div class="mobile-filter__overlay"></div>
                    </div>
                    <div class="col-auto">
                        <button class="btn p-0" data-toggle="modal" data-target="#filter-side"><span class="mr-2"><img src="./assets/images/icons/icon-filter.svg" alt="Lọc"></span>Lọc</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column">
            <div class="search-result order-md-2">
                <div class="container">
                    <h2 class="title-h1 d-md-none">Tìm kiếm sàn Forex</h2>
                    <p class="search-result__main mb-1 mb-md-2">Có <span class="font-weight-bold">300+</span> sàn Forex đang được liệt kê.</p>
                    <p class="search-result__txt mb-0">Đăng ký tham gia vào cộng đồng broker miễn phí với chúng tôi <a href="#" class="btn-link">Tại đây</a></p>
                </div>
            </div>

            <div class="filter-top-broker bg-gray">
                <div class="container">
                    <h2 class="title-h3 mb-3">Top sàn giao dịch uy tín</h2>
                    <div class="filter-broker-slider">
                        <div class="filter-broker-slider__item">
                            <div class="img-hover mb-2"><img src="assets/images/logo/xtb-03.png" alt="xtb"></div>
                            <p class="text-verify mb-2 mb-md-4 pb-md-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Verified Broker</p>
                            <a href="#" class="btn btn-primary btn-medium-size" target="_blank">Mở tài khoản</a>
                        </div>
                        <div class="filter-broker-slider__item">
                            <div class="img-hover mb-2"><img src="assets/images/logo/fxtm-logo-1.png" alt="xtb"></div>
                            <p class="text-verify mb-2 mb-md-4 pb-md-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Verified Broker</p>
                            <a href="#" class="btn btn-primary btn-medium-size" target="_blank">Mở tài khoản</a>
                        </div>
                        <div class="filter-broker-slider__item">
                            <div class="img-hover mb-2"><img src="assets/images/logo/FXVC.png" alt="FXVC"></div>
                            <p class="text-verify mb-2 mb-md-4 pb-md-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Verified Broker</p>
                            <a href="#" class="btn btn-primary btn-medium-size" target="_blank">Mở tài khoản</a>
                        </div>
                        <div class="filter-broker-slider__item">
                            <div class="img-hover mb-2"><img src="assets/images/logo/IC_Markets_2.png" alt="IC Markets"></div>
                            <p class="text-verify mb-2 mb-md-4 pb-md-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Verified Broker</p>
                            <a href="#" class="btn btn-primary btn-medium-size" target="_blank">Mở tài khoản</a>
                        </div>
                        <div class="filter-broker-slider__item">
                            <div class="img-hover mb-2"><img src="assets/images/logo/natureforex.png" alt="natureforex"></div>
                            <p class="text-verify mb-2 mb-md-4 pb-md-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Verified Broker</p>
                            <a href="#" class="btn btn-primary btn-medium-size" target="_blank">Mở tài khoản</a>
                        </div>
                        <div class="filter-broker-slider__item">
                            <div class="img-hover mb-2"><img src="assets/images/logo/FXVC.png" alt="xtb"></div>
                            <p class="text-verify mb-2 mb-md-4 pb-md-1"><i class="fa fa-check-circle" aria-hidden="true"></i> Verified Broker</p>
                            <a href="#" class="btn btn-primary btn-medium-size" target="_blank">Mở tài khoản</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="filter-main">
            <div class="container">
                <div class="clearfix" data-sticky_parent>
                    <div id="filter-side" class="contents-side contents-side--left sidebar-scroll fade" data-sticky_column aria-hidden="true">
                        <div class="modal-dialog m-0">
                            <div class="modal-content border-0">
                                <div class="filter-side">
                                    <form id="form-filter" action="<?php echo $_SERVER["PHP_SELF"] . '?'.http_build_query($_GET); ?>" method="get">
                                        <div class="d-flex d-md-none align-items-center justify-content-between mb-3">
                                            <h2 class="modal-title">Tìm kiếm sàn</h2>
                                            <button type="button" class="btn btn-close p-0" data-dismiss="modal"><img src="assets/images/icons/icon-close.svg" alt="Close"></button>
                                        </div>
                                        <h2 class="filter-side__head d-none d-md-block">Lọc tìm kiếm</h2>
                                        <div class="filter-side__body">
                                            <div class="filter-side__row">
                                                <h3 class="filter-side__ttl">Xuất xứ</h3>
                                                <?php 
                                                $countrylist = array('Australia', 'Austria', 'Belarus', 'Belize', 'British', 'British Virgin Islands', 'Bulgaria', 'Canada', 'Cayman Islands', 'China', 'Cook Islands', 'Cyprus', 'Denmark', 'Dominica', 'England', 'Estonia', 'Europe', 'Georgia', 'Germany', 'Gibraltar', 'Greece', 'Hong Kong', 'Ireland', 'Israel', 'Japan', 'Latvia', 'Lebanon', 'Luxembourg', 'Malta', 'Marshall', 'Marshall Islands', 'Montenegro', 'Netherlands', 'New Zealand', 'Russia', 'Saint Vincent and the Grenadines', 'Seychelles', 'Singapore', 'Sip', 'South Africa', 'Switzerland', 'Turkey', 'United Arab Emirates', 'United Kingdom', 'United States', 'USA', 'Vanuatu'); 
                                                ?>
                                                <select class="form-control selectpicker" multiple name="checkCountry" data-live-search="true" title="Xuất Xứ" data-selected-text-format="count" data-size="10" data-header="Xuất Xứ">
                                                    <?php 
                                                        foreach($countrylist as $country) {
                                                            echo '<option data-tokens="'.$country.'" value="'.$country.'">'.$country.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="filter-side__row">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <h3 class="filter-side__ttl">Min Deposit</h3>
                                                    <span class="filter-side__result">$0 - $1000</span>
                                                </div>
                                                <div class="form-row d-none">
                                                    <div class="col"><input type="text" name="min-deposit-min" id="min-deposit-min" class="form-control form-control--small range-min" placeholder="Từ"></div>
                                                    -
                                                    <div class="col"><input type="text" name="min-deposit-max" id="min-deposit-max" class="form-control form-control--small range-max" placeholder="Đến"></div>
                                                </div>
                                                <div id="deposit-range-slider" class="range-slider" data-min="0" data-max="1000"></div>
                                            </div>
                                            <div class="filter-side__row">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <h3 class="filter-side__ttl">Đòn Bẩy</h3>
                                                    <span class="filter-side__result">1 : 0 - 1 : 1000</span>
                                                </div>
                                                <div class="form-row d-none">
                                                    <div class="col"><input type="text" name="leverage-min" id="leverage-min" class="form-control form-control--small range-min" placeholder="Từ"></div>
                                                    -
                                                    <div class="col"><input type="text" name="leverage-max" id="leverage-max" class="form-control form-control--small range-max" placeholder="Đến"></div>
                                                </div>
                                                <div id="leverage-range-slider" class="range-slider" data-min="0" data-max="1000"></div>
                                            </div>
                                            <div class="filter-side__row">
                                                <h3 class="filter-side__ttl">Sản Phẩm Giao Dịch</h3>
                                                <ul class="filter-side__list">
                                                    <li><label class="checkbox-rect"><input type="checkbox" name="product" value="Forex"><span>Forex</span></label></li>
                                                    <li><label class="checkbox-rect"><input type="checkbox" name="product" value="Stock"><span>Stock</span></label></li>
                                                    <li><label class="checkbox-rect"><input type="checkbox" name="product" value="CFDs"><span>CFDs</span></label></li>
                                                </ul>
                                            </div>
                                            <div class="filter-side__row">
                                                <h3 class="filter-side__ttl">Tài Khoản Giao Dịch</h3>
                                                <ul class="filter-side__list">
                                                    <li><label class="checkbox-rect"><input type="checkbox" name="account" value="Demo"><span>Demo</span></label></li>
                                                    <li><label class="checkbox-rect"><input type="checkbox" name="account" value="Standard"><span>Standard</span></label></li>
                                                    <li><label class="checkbox-rect"><input type="checkbox" name="account" value="VIP"><span>VIP</span></label></li>
                                                    <li><label class="checkbox-rect"><input type="checkbox" name="account" value="ENC"><span>ENC</span></label></li>
                                                    <li><label class="checkbox-rect"><input type="checkbox" name="account" value="Khác"><span>Khác</span></label></li>
                                                </ul>
                                            </div>
                                            <div class="filter-side__row mb-md-3 pb-md-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h3 class="filter-side__ttl mb-0"><label class="mb-0" for="isVietnamMobile">Hỗ Trợ Tiếng Việt</label></h3>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="isVietnamMobile" name="isVietnam" class="custom-control-input" value="1">
                                                        <label class="custom-control-label" for="isVietnamMobile"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filter-side__row mb-md-3 pb-md-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h3 class="filter-side__ttl mb-0"><label class="mb-0" for="copyTradeMobile">Copy Giao Dịch</label></h3>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="copyTradeMobile" name="copyTrade" class="custom-control-input" value="1">
                                                        <label class="custom-control-label" for="copyTradeMobile"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filter-side__row mb-md-3 pb-md-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h3 class="filter-side__ttl mb-0"><label class="mb-0" for="promotionMobile">Tin Khuyến Mãi</label></h3>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="promotionMobile" name="promotion" class="custom-control-input" value="1">
                                                        <label class="custom-control-label" for="promotionMobile"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-side__footer d-none d-md-flex justify-content-between">
                                            <button type="reset" name="reset-home-search" class="btn cl-red"><i class="fa fa-repeat mr-1" aria-hidden="true"></i> Đặt lại</button>
                                            <button type="submit" class="btn btn-primary btn-filter">Lọc kết quả</button>
                                        </div>
                                        <div class="d-md-none">
                                            <p><button type="reset" name="reset-home-search" class="btn btn-link cl-red"><i class="fa fa-repeat mr-2" aria-hidden="true"></i> Đặt lại</button></p>
                                            <p class="mb-0"><button type="submit" name="submit-filter" class="btn btn-primary btn-modal-search w-100 text-uppercase"><i class="icon-search-white mr-2"></i> Tìm kiếm</button></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contents-main contents-main--right" data-sticky_column>
                        <div class="d-none d-md-block mb-2 pb-1">
                            <div class="sort-dropdown">
                                <form method="GET" class="form-sort">
                                    <select class="form-control selectpicker show-tick" name="sort" title="Mặc định">
                                        <option data-tokens="Mặc định" value="default" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'default' ? 'selected' : ''; ?>>Mặc định</option>
                                        <option data-tokens="Min deposit giảm dần" value="min_desc" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'min_desc' ? 'selected' : ''; ?>>Min deposit giảm dần</option>
                                        <option data-tokens="Min deposit tăng dần" value="min_asc" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'min_asc' ? 'selected' : ''; ?>>Min deposit tăng dần</option>
                                        <option data-tokens="Đòn bẩy giảm dần" value="leverage_desc" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'leverage_desc' ? 'selected' : ''; ?>>Đòn bẩy giảm dần</option>
                                        <option data-tokens="Đòn bẩy tăng dần" value="leverage_asc" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'leverage_asc' ? 'selected' : ''; ?>>Đòn bẩy tăng dần</option>
                                    </select>
                                </form>
                            </div>
                        </div>

                        <ul class="filter-list mb-4 pb-3 mb-md-5 pb-md-1">
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="12" data-compare-slug="xtb" data-broker-name="XTB"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="12" data-compare-slug="xtb" data-broker-name="XTB" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Fondex.png" alt="Fondex"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="13" data-compare-slug="fondex" data-broker-name="Fondex"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="13" data-compare-slug="fondex"  data-broker-name="Fondex" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Capital_Index.png" alt="Capital Index"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="14" data-compare-slug="capital_index" data-broker-name="Capital Index"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="14" data-compare-slug="capital_index" data-broker-name="Capital Index" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/CMG.png" alt="CMG"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="15" data-compare-slug="cmg" data-broker-name="CMG"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="15" data-compare-slug="cmg" data-broker-name="CMG" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Delta_stock.png" alt="Delta stock"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="16" data-compare-slug="delta_stock" data-broker-name="Delta stock"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="16" data-compare-slug="delta_stock" data-broker-name="Delta stock" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="12" data-compare-slug="xtb" data-broker-name="XTB"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="12" data-compare-slug="xtb" data-broker-name="XTB" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Fondex.png" alt="Fondex"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="13" data-compare-slug="fondex" data-broker-name="Fondex"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="13" data-compare-slug="fondex"  data-broker-name="Fondex" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Capital_Index.png" alt="Capital Index"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="14" data-compare-slug="capital_index" data-broker-name="Capital Index"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="14" data-compare-slug="capital_index" data-broker-name="Capital Index" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/CMG.png" alt="CMG"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="15" data-compare-slug="cmg" data-broker-name="CMG"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="15" data-compare-slug="cmg" data-broker-name="CMG" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Delta_stock.png" alt="Delta stock"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="16" data-compare-slug="delta_stock" data-broker-name="Delta stock"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="16" data-compare-slug="delta_stock" data-broker-name="Delta stock" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="12" data-compare-slug="xtb" data-broker-name="XTB"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="12" data-compare-slug="xtb" data-broker-name="XTB" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Fondex.png" alt="Fondex"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="13" data-compare-slug="fondex" data-broker-name="Fondex"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="13" data-compare-slug="fondex"  data-broker-name="Fondex" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Capital_Index.png" alt="Capital Index"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="14" data-compare-slug="capital_index" data-broker-name="Capital Index"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="14" data-compare-slug="capital_index" data-broker-name="Capital Index" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/CMG.png" alt="CMG"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="15" data-compare-slug="cmg" data-broker-name="CMG"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="15" data-compare-slug="cmg" data-broker-name="CMG" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Delta_stock.png" alt="Delta stock"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="16" data-compare-slug="delta_stock" data-broker-name="Delta stock"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="16" data-compare-slug="delta_stock" data-broker-name="Delta stock" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Fondex.png" alt="Fondex"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="13" data-compare-slug="fondex" data-broker-name="Fondex"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="13" data-compare-slug="fondex"  data-broker-name="Fondex" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Capital_Index.png" alt="Capital Index"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="14" data-compare-slug="capital_index" data-broker-name="Capital Index"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="14" data-compare-slug="capital_index" data-broker-name="Capital Index" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/CMG.png" alt="CMG"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="15" data-compare-slug="cmg" data-broker-name="CMG"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="15" data-compare-slug="cmg" data-broker-name="CMG" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-lg-center justify-content-between">
                                    <div class="col-12 col-md-12 col-lg-3 mb-md-3 mb-lg-0">
                                        <div class="row align-items-md-center">
                                            <div class="col col-md-6 col-lg-12">
                                                <a href="#" class="filter-list__logo img-hover mb-1"><img src="assets/images/logo/Delta_stock.png" alt="Delta stock"></a>
                                                <button type="button" class="btn btn-link d-md-none font-11" data-compare="16" data-compare-slug="delta_stock" data-broker-name="Delta stock"><i class="icon-exchange-primary mr-2"></i>Thêm vào so sánh</button>
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
                                                    <span class="review-star__mask" style="width: 80%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-list__intro">
                                                    <p class="mb-1"><span class="label cl-gray-300">Trụ sở chính :</span> <span class="font-weight-bold">Japan</span></p>
                                                    <p class="mb-0"><span class="label cl-gray-300">Năm thành lập :</span> <span class="font-weight-bold">1996</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Giấy phép hoạt động :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">CySEC, FSCA, ADGM (FSRA)</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phí mở tài khoản :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt"><i class="icon-tick"></i></p>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Phương thức thanh toán :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">VISA, MasterCard, Maestro, Neteller, Skrill</p>
                                        </div>
                                        <div class="filter-broker-desc">
                                            <h3 class="filter-broker-desc__label">Min Deposit :</h3>
                                            <p class="mb-0 font-weight-bold filter-broker-desc__txt">0.3</p>
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
                                                        <span class="review-star__mask" style="width: 80%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-6 col-lg-12 mb-0 mb-lg-3 text-right"><a href="detail-broker.php" class="btn btn-primary btn-medium-size font-14">Xem chi tiết</a></p>
                                            <p class="col-6 col-lg-12 mb-0"><button type="button" data-compare="16" data-compare-slug="delta_stock" data-broker-name="Delta stock" class="btn btn-outline-primary btn-medium-size font-14">Thêm vào so sánh</button></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <nav>
                            <ul class="pagination justify-content-center justify-content-md-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup-compare hidden none">
            <div class="popup-compare-main">
                <div class="container">
                    <h3 class="title-h3 text-center text-md-left">So sánh sàn giao dịch</h3>
                    <div class="row align-items-end">
                        <div class="col-md-9">
                            <div id="popup-compare-list" class="popup-compare-list"></div>
                        </div>
                        <div class="col-md-3 mt-4 pt-2 mt-md-0 pt-md-0"><button id="btn-compare-popup" data-url="compare.php" class="btn btn-primary d-none">So sánh ngay <i class="icon-arrow-long-white ml-2"></i></button></div>
                    </div>
                </div>
            </div>

            <div class="popup-compare-txt">Có <span class="popup-compare-txt__count">2</span> sàn đang được chọn tại đây <i class="fa fa-angle-up" aria-hidden="true"></i></div>
        </div>

        <div class="intro-bottom">
            <div class="container">
                <div class="intro-bottom__wrap">
                    <dl>
                        <dt>Sàn forex là gì?</dt>
                        <dd>
                            <p><strong>Sàn forex</strong> là một tổ chức tài chính trung gian – một nhà môi giới ngoại hối, nơi thiết lập các nền tảng và các điều kiện giao dịch để các nhà đầu tư forex mở tài khoản tại đó, nhằm mục đích giao dịch kiếm lời. Giống như sàn chứng khoán được quản lý bởi một Ủy ban chứng khoán, thì <strong>sàn forex</strong> cũng được quản lý bởi một Ủy ban ngoại hối (Ủy ban tài chính….) của một hoặc nhiều quốc gia nào đó.</p>
                            <p>Với khối lượng data lên đến hơn 300+ <strong>sàn forex</strong> trên hệ thống, gồm nhiều sàn nổi tiếng trên thế giới đang có mặt tại Việt Nam như: <a href="https://www.natureforex.com/" target="_blank" rel="noopener noreferrer">NatureForex</a>, <a href="https://www.fxtm.info/?utm_source=FxInsites.com&utm_medium=Filter-page" target="_blank" rel="noopener noreferrer">FXTM</a>, <a href="https://www.icmarkets.com/global/en?utm_source=FxInsites.com&utm_medium=Filter-page" target="_blank" rel="noopener noreferrer">IC Market</a>, <a href="https://www.fxpro.vn/?utm_source=FxInsites.com&utm_medium=Filter-page" target="_blank" rel="noopener noreferrer">FxPro</a>, <a href="https://fbs.com/?utm_source=FxInsites.com&utm_medium=Filter-page" target="_blank" rel="noopener noreferrer">FBS</a>... Chắc chắn bạn có thể tìm được cho mình 1 <strong>sàn forex</strong> ưng ý. Tại đây bạn có thể:</p>
                            <ul class="list-tick mb-4 mb-md-5">
                                <li>Tìm các sàn forex có tiền nạp tối thiểu phù hợp với nhu cầu bắt đầu giao dịch của bạn, bắt đầu chỉ từ 1$.</li>
                                <li>Có nhiều loại tài khoản để bạn bắt đầu. Nếu bạn là người mới chơi, bạn có thể tìm các sàn có cung cấp <span class="cl-primary">tài khoản demo</span>, với các tính năng y hệt một tài khoản thật. Nếu bạn là người chơi có kinh nghiệm, bạn có thể tìm kiếm các sàn hiện có thêm các ưu đãi riêng cho tài khoản <span class="cl-primary">VIP</span>, <span class="cl-primary">Pro</span>, <span class="cl-primary">Premium</span>, <span class="cl-primary">khác..</span></li>
                                <li>Bạn ưa mạo hiểm? Chúng tôi cung cấp công cụ tìm kiếm sàn với các loại đòn bẩy khác nhau. Một đòn bẩy cao có thể giúp bạn sinh lợi nhanh chóng, nhưng cũng có những nguy cơ khác. Hãy tìm hiểu kĩ trước khi bắt đầu.</li>
                                <li><a href="/tim-kiem-san-forex?min-deposit-min=0&min-deposit-max=1000&leverage-min=0&leverage-max=1000&account%5B%5D=Unlimited+Demo&language=1">Hỗ trợ tiếng Việt</a> là điều mà nhiều nhà đầu tư quan tâm. Sàn có người Việt hỗ trợ sẽ giúp giải quyết các vấn đề bạn đang thắc mắc một cách nhanh chóng. Có người Việt tư vấn cũng sẽ giúp bạn hiểu rõ hơn thông tin và đưa ra quyết định có nên tham gia cùng với sàn đó hay không.</li>
                                <li>Copy giao dịch: Có lẽ đây là điều mà đa số nhà giao dịch nhỏ, lẻ đang quan tâm. Hiện các sàn forex đang sử dụng nhiều công cụ copy giao dịch khác nhau trên thị trường. Các <a href="/tim-kiem-san-forex?min-deposit-min=0&min-deposit-max=1000&leverage-min=0&leverage-max=1000&trade=1">công cụ copy giao dịch</a> sẽ giúp nhà đầu tư sao chép hoạt động của các nhà đầu tư thành công khác chỉ với 1 click. </li>
                                <li><a href="/tim-kiem-san-forex?min-deposit-min=0&min-deposit-max=1000&leverage-min=0&leverage-max=1000&promotion=1">Tin khuyến mãi</a> dường như khá thu hút với nhà đầu tư mới. Các sàn thường tung ra chương trình khuyến mãi nhằm giúp hỗ trợ những người chơi mới có thêm cơ hội kiếm tiền, với các mức thưởng/ tặng khác nhau tùy từng chiến dịch</li>
                            </ul>
                        </dd>
                    </dl>
                    <p class="text-center mb-0"><a href="/so-sanh-san-forex/" class="btn btn-primary btn-large-size text-uppercase">So sánh sàn forex</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php include('inc/before-footer.php'); ?>

    <?php include('inc/footer.php'); ?>
    <script src="./assets/js/filter.js"></script>
</body>
</html>