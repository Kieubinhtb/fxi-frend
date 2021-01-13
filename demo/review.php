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
                <h1 class="title-h1">Đánh giá sàn Forex</h1>
                <p class="mb-0 text-center">Đánh giá tất tần tật về dịch vụ hỗ trợ, sàn lừa đảo, giãn spread, xóa tài khoản người dùng, không cho rút tiền.</p>
                <div class="compare-form mt-3">
                    <form action="#" method="post">
                        <div class="d-flex search-with-icon search-with-icon--noshadow" data-toggle="modal">
                            <input type="text" id="auto-broker" name="broker-input" class="form-control" placeholder="Tìm kiếm sàn ...">
                            <button type="button" name="search" class="btn btn-icon-search"><i class="icon-search-primary"></i></button>
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

            <div class="clearfix mt-3 pt-2 mt-md-0 pt-md-0" data-sticky_parent>
                <div class="contents-main contents-main--left" data-sticky_column>
                    <div class="nav nav-tabs review-nav-tabs nav-tabs--noborder border-bottom-0" role="tablist">
                        <a class="nav-link active" data-toggle="tab" href="#all-brokers" role="tab" aria-selected="true">Tất cả</a>
                        <a class="nav-link" data-toggle="tab" href="#best-brokers" role="tab" aria-selected="false">Sàn uy tín</a>
                        <a class="nav-link" data-toggle="tab" href="#bad-brokers" role="tab" aria-selected="false">Sàn bựa nên né</a>
                    </div>
                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="all-brokers" role="tabpanel">
                            <div class="review-list">
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav>
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="best-brokers" role="tabpanel">
                            <div class="review-list">
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav>
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="bad-brokers" role="tabpanel">
                            <div class="review-list">
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item bg-gray">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 review-item__left mb-md-3 mb-lg-0">
                                            <div class="row align-items-center">
                                                <div class="review-item__logo col-6"><a href="detail.php#review-detail" class="img-hover"><img src="assets/images/logo/xtb-logo3.png" alt="XTB"></a></div>
                                                <div class="review-item__info col-6">
                                                    <h3 class="title-h3 mb-1">XTB</h3>
                                                    <div class="review-info">
                                                        <div class="review-star">
                                                            <span class="review-item__star">
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="review-item__star review-star__mask" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <span class="d-block review-item__count review-count">30 đánh giá</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 review-item__right text-center">
                                        " Sàn này tốt lắm, nhiều bonus cho những người mới chơi như mình. Hỗ trợ nhiệt tình, rút tiền nhanh chóng "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav>
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="lastest-review">
                        <h2 class="title-h3 text-uppercase mb-3 pb-1">Đánh giá gần đây</h2>
                        <div class="lastest-review__wrap">
                            <div class="lastest-review__item d-flex justify-content-between">
                                <div class="lastest-review__left">
                                    <h3 class="lastest-review__head">
                                        <span>Trung KB</span> đã đánh giá sàn <a href="./detail-broker.php">BCS</a>
                                    </h3>
                                    <div class="review-star d-md-none mt-0 mb-2">
                                        <span>
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
                                    <div class="mb-2">"Tôi đã chơi sàn này cũng được 2 năm rồi.Đội ngũ hỗ trợ rất tốt ptkt hỗ trợ rất an toàn. chúc XTB ngày càng phát triển nhé."</div>
                                    <p class="text-date mb-0">15 phút trước</p>
                                </div>
                                <div class="lastest-review__right">
                                    <div class="lastest-review__logo"><a href="#" class="img-hover"><img src="./assets/images/logo/xtb-logo2.png" alt="XTB"></a></div>
                                    <div class="review-star">
                                        <span>
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
                            <div class="lastest-review__item d-flex justify-content-between">
                                <div class="lastest-review__left">
                                    <h3 class="lastest-review__head">
                                        <span>Trung KB</span> đã đánh giá sàn <a href="./detail-broker.php">BCS</a>
                                    </h3>
                                    <div class="review-star d-md-none mt-0 mb-2">
                                        <span>
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
                                    <div class="mb-2">"Tôi đã chơi sàn này cũng được 2 năm rồi.Đội ngũ hỗ trợ rất tốt ptkt hỗ trợ rất an toàn. chúc XTB ngày càng phát triển nhé."</div>
                                    <p class="text-date mb-0">15 phút trước</p>
                                </div>
                                <div class="lastest-review__right">
                                    <div class="lastest-review__logo"><a href="#" class="img-hover"><img src="./assets/images/logo/xtb-logo2.png" alt="XTB"></a></div>
                                    <div class="review-star">
                                        <span>
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
                            <div class="lastest-review__item d-flex justify-content-between">
                                <div class="lastest-review__left">
                                    <h3 class="lastest-review__head">
                                        <span>Trung KB</span> đã đánh giá sàn <a href="./detail-broker.php">BCS</a>
                                    </h3>
                                    <div class="review-star d-md-none mt-0 mb-2">
                                        <span>
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
                                    <div class="mb-2">"Tôi đã chơi sàn này cũng được 2 năm rồi.Đội ngũ hỗ trợ rất tốt ptkt hỗ trợ rất an toàn. chúc XTB ngày càng phát triển nhé."</div>
                                    <p class="text-date mb-0">15 phút trước</p>
                                </div>
                                <div class="lastest-review__right">
                                    <div class="lastest-review__logo"><a href="#" class="img-hover"><img src="./assets/images/logo/xtb-logo2.png" alt="XTB"></a></div>
                                    <div class="review-star">
                                        <span>
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
                            <div class="lastest-review__item d-flex justify-content-between">
                                <div class="lastest-review__left">
                                    <h3 class="lastest-review__head">
                                        <span>Trung KB</span> đã đánh giá sàn <a href="./detail-broker.php">BCS</a>
                                    </h3>
                                    <div class="review-star d-md-none mt-0 mb-2">
                                        <span>
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
                                    <div class="mb-2">"Tôi đã chơi sàn này cũng được 2 năm rồi.Đội ngũ hỗ trợ rất tốt ptkt hỗ trợ rất an toàn. chúc XTB ngày càng phát triển nhé."</div>
                                    <p class="text-date mb-0">15 phút trước</p>
                                </div>
                                <div class="lastest-review__right">
                                    <div class="lastest-review__logo"><a href="#" class="img-hover"><img src="./assets/images/logo/xtb-logo2.png" alt="XTB"></a></div>
                                    <div class="review-star">
                                        <span>
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
                            <div class="lastest-review__item d-flex justify-content-between">
                                <div class="lastest-review__left">
                                    <h3 class="lastest-review__head">
                                        <span>Trung KB</span> đã đánh giá sàn <a href="./detail-broker.php">BCS</a>
                                    </h3>
                                    <div class="review-star d-md-none mt-0 mb-2">
                                        <span>
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
                                    <div class="mb-2">"Tôi đã chơi sàn này cũng được 2 năm rồi.Đội ngũ hỗ trợ rất tốt ptkt hỗ trợ rất an toàn. chúc XTB ngày càng phát triển nhé."</div>
                                    <p class="text-date mb-0">15 phút trước</p>
                                </div>
                                <div class="lastest-review__right">
                                    <div class="lastest-review__logo"><a href="#" class="img-hover"><img src="./assets/images/logo/xtb-logo2.png" alt="XTB"></a></div>
                                    <div class="review-star">
                                        <span>
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
                        </div>
                    </div>
                </div>
                <div class="contents-side contents-side--right sidebar-scroll mt-5 pt-2 mt-md-0 pt-md-0" data-sticky_column>
                    <div class="review-form">
                        <h2 class="title-h3 text-uppercase mb-4">Viết nhận xét của bạn</h2>
                        <form action="#" id="commentForm" method="post" novalidate>
                            <div class="form-group">
                                <select id="broker-list-slect" name="broker" class="show-tick" data-size="10" data-live-search="true" title="Chọn sàn đánh giá"></select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="full_name" class="form-control" placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-row mb-2">
                                <div class="col-7 col-md-12 col-lg-7 mb-md-1 mb-lg-0">Dịch vụ hỗ trợ khách hàng</div>
                                <div class="col text-right text-md-left text-lg-right">
                                    <div class="rating clearfix">
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                    </div>
                                    <input type="text" name="rate_one" class="sr-only" value="5">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col-7 col-md-12 col-lg-7 mb-md-1 mb-lg-0">Trải nghiệm giao dịch</div>
                                <div class="col text-right text-md-left text-lg-right">
                                    <div class="rating clearfix">
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                    </div>
                                    <input type="text" name="rate_two" class="sr-only" value="5">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col-7 col-md-12 col-lg-7 mb-md-1 mb-lg-0">Độ uy tín và tin cậy</div>
                                <div class="col text-right text-md-left text-lg-right">
                                    <div class="rating clearfix">
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                        <label class="icon-star active"></label>
                                    </div>
                                    <input type="text" name="rate_three" class="sr-only" value="5">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" cols="30" rows="7" placeholder="Viết nhận xét của bạn"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-control-inline font-12 mr-0">
                                    <input type="checkbox" id="checkme" name="checkme" class="custom-control-input">
                                    <label class="custom-control-label" for="checkme">Tôi tự chịu trách nhiệm về nội dung nhận xét của mình.</label>
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Ld1b-IZAAAAALU21fkgffiS7LS0UruHL467J0GW"></div>
                            <div class="errMsg"></div>
                            <p class="mt-4 mb-0">
                                <button type="submit" name="submit-review" class="btn btn-primary btn-medium-size">Gửi nhận xét</button>
                            </p>
                        </form>
                    </div>
                    <div>
                        <h3 class="title-h4 text-uppercase mb-4 pb-2">Đánh giá - So sánh chi tiết</h3>
                        <ul class="news-list news-list--noslider mb-3 pb-1">
                            <li class="news-item">
                                <div class="news-item__img img-hover"><a href="#"><img src="assets/images/news/top-san-forex.png" alt="Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!"></a></div>
                                <div class="news-item__info">
                                    <h3 class="news-item__ttl"><a href="#">Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!</a></h3>
                                    <p class="mb-0"><span class="text-date font-12">3 giờ trước</span></p>
                                </div>
                            </li>
                            <li class="news-item">
                                <div class="news-item__img img-hover"><a href="#"><img src="assets/images/news/dau-tu-tai-chinh.png" alt="Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!"></a></div>
                                <div class="news-item__info">
                                    <h3 class="news-item__ttl"><a href="#">Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!</a></h3>
                                    <p class="mb-0"><span class="text-date font-12">3 giờ trước</span></p>
                                </div>
                            </li>
                            <li class="news-item">
                                <div class="news-item__img img-hover"><a href="#"><img src="assets/images/news/Forex-trading.png" alt="Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!"></a></div>
                                <div class="news-item__info">
                                    <h3 class="news-item__ttl"><a href="#">Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!</a></h3>
                                    <p class="mb-0"><span class="text-date font-12">3 giờ trước</span></p>
                                </div>
                            </li>
                            <li class="news-item">
                                <div class="news-item__img img-hover"><a href="#"><img src="assets/images/news/huong_dan_mt4.png" alt="Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!"></a></div>
                                <div class="news-item__info">
                                    <h3 class="news-item__ttl"><a href="#">Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!</a></h3>
                                    <p class="mb-0"><span class="text-date font-12">3 giờ trước</span></p>
                                </div>
                            </li>
                            <li class="news-item">
                                <div class="news-item__img img-hover"><a href="#"><img src="assets/images/news/trading.png" alt="Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!"></a></div>
                                <div class="news-item__info">
                                    <h3 class="news-item__ttl"><a href="#">Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!</a></h3>
                                    <p class="mb-0"><span class="text-date font-12">3 giờ trước</span></p>
                                </div>
                            </li>
                            <li class="news-item">
                                <div class="news-item__img img-hover"><a href="#"><img src="assets/images/news/news-img02.png" alt="Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!"></a></div>
                                <div class="news-item__info">
                                    <h3 class="news-item__ttl"><a href="#">Giới thiệu bạn bè – nhận lên tới $10,000 từ FXTM!</a></h3>
                                    <p class="mb-0"><span class="text-date font-12">3 giờ trước</span></p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="text-view-more font-12">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('inc/before-footer.php'); ?>

    <?php include('inc/footer.php'); ?>

    <script>
        $('#commentForm .rating').each(function() {
            let $this = $(this);
            let label = $('label', this);
            label.on('click', function() {
                let i = $(this).index() + 1;
                label.removeClass('active');
                $this.find('label:nth-child(-n+' + i + ')').addClass('active');
                $(this).parent().next('input').val(i);
            });
        });

        $(document).on('ready', function() {
            for(let i=0; i< brokerList.length; i++) {
                $('#broker-list-slect').append(`<option value="${brokerList[i]}">${brokerList[i]}</option>`);
            }

            $('#broker-list-slect').selectpicker();
        });
    </script>
</body>
</html>