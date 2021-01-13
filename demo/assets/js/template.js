let homeFilterWrapper = $('.home-search');

let depositRange = $("#deposit-range-slider");
let txtDepositMinValue = $('#min-deposit-min'),
    txtDepositMaxValue = $('#min-deposit-max');

let leverageRange = $('#leverage-range-slider');
let txtLeverageMinValue = $('#leverage-min'),
    txtLeverageMaxValue = $('#leverage-max');

let w = $(window);
let header = $('#header');
let footer = $('#footer');

// Form comment page + Quang cao begin
let commentPageModal = $('#comment-page-modal');
let pathname = window.location.pathname;
let bannerPopup = $('#banner-popup');

if( !window.sessionStorage.getItem("userSession") ) {
    window.sessionStorage.setItem("userSession", pathname);

    setTimeout(function() {
        bannerPopup.modal('show');
    }, 5 * 1000);
} else {
    let getPathNameSession = window.sessionStorage.getItem("userSession");
    if( getPathNameSession !== pathname && getPathNameSession !== '1' ) {
        setTimeout(function() {
            commentPageModal.modal('show');
            $('#btn-comment-page').addClass('d-block');
        }, 20 * 1000);

        window.sessionStorage.setItem("userSession", '1');
    }

    if( getPathNameSession === '1' ) {
        $('#btn-comment-page').addClass('d-block');
    }
}

bannerPopup.find('a').on('click', function() {
    bannerPopup.modal('hide');
});

var CaptchaCallback = function() {
    grecaptcha.render('recaptcha-form-comment-page', {'sitekey' : '6Ld1b-IZAAAAALU21fkgffiS7LS0UruHL467J0GW', 'callback' : correctCaptcha_quote});

    if( $('#recaptcha-form-check').length ) {
        grecaptcha.render('recaptcha-form-check', {'sitekey' : '6Ld1b-IZAAAAALU21fkgffiS7LS0UruHL467J0GW', 'callback' : correctCaptcha_ct});
    }
};

var correctCaptcha_quote = function(response) {
    $("#qt_hiddenRecaptcha").val(response);
};

var correctCaptcha_ct = function(response) {
    $("#ct_hiddenRecaptcha").val(response);
};

commentPageModal.on('shown.bs.modal', function (e) {
    commentPageModal.addClass('d-block');
    commentPageModal.removeClass('hidden-modal').addClass('shown-modal');
    $('body').addClass('overflow-auto');
}).on('hidden.bs.modal', function() {
    commentPageModal.removeClass('shown-modal').addClass('hidden-modal');
    $('body').removeClass('overflow-auto');
});
// Form comment page + Quang cao end

// Header 
$('#navigation').on('shown.bs.modal', function (e) {
    header.addClass('index-high');
}).on('hidden.bs.modal', function() {
    header.removeClass('index-high');
});

// Desktop
if( depositRange.length ) {
    depositRange.slider({
        range: true,
        step: 10,
        min: depositRange.data('min'),
        max: depositRange.data('max'),
        values: [ depositRange.data('min'), depositRange.data('max') ],
        slide: function(event, ui) {
            depositRange.siblings().find('.range-min').val(ui.values[ 0 ]);
            depositRange.siblings().find('.range-max').val(ui.values[ 1 ]);
            
            depositRange.parent().prev('.dropdown-toggle').text(ui.values[ 0 ] + ' - ' + ui.values[ 1 ]);
            txtDepositMinValue.trigger("keyup");
            txtDepositMaxValue.trigger("keyup");

            depositRange.parent().find('.filter-side__result').text('$'+ui.values[ 0 ] + ' - ' + '$'+ui.values[ 1 ]);
        }
    });

    txtDepositMinValue.on('keyup', function() {
        let value = $(this).val();
        depositRange.slider('values',0, value);
        depositRange.siblings().find('.range-min').val(value);
        $(this).closest('.dropdown-menu').find('.range-other li').removeClass('active');

        if( (value === 0 || !value) && (!txtDepositMaxValue.val() || txtDepositMaxValue.val() === 0) ) {
            depositRange.parent().prev('.dropdown-toggle').text('Min Deposit');
        } else {
            if( !txtDepositMaxValue.val() || txtDepositMaxValue.val() === 0 ) {
                depositRange.parent().prev('.dropdown-toggle').text('>= ' + value);
            } else {
                depositRange.parent().prev('.dropdown-toggle').text(value + ' - ' + txtDepositMaxValue.val());
    
                if( value === 0 || !value ) {
                    txtDepositMaxValue.trigger("keyup");
                }
            }
        }
    });

    txtDepositMaxValue.on('keyup', function() {
        let value = $(this).val();
        depositRange.slider('values',1, value);
        depositRange.siblings().find('.range-max').val(value);

        if( (value === 0 || !value) && (!txtDepositMinValue.val() || txtDepositMinValue.val() === 0) ) {
            depositRange.parent().prev('.dropdown-toggle').text('Min Deposit');
        } else {
            if( !txtDepositMinValue.val() || txtDepositMinValue.val() === 0 ) {
                depositRange.parent().prev('.dropdown-toggle').text('< ' + value);
            } else {
                depositRange.parent().prev('.dropdown-toggle').text(txtDepositMinValue.val() + ' - ' + value);
    
                if( value === 0 || !value ) {
                    txtDepositMinValue.trigger("keyup");
                }
            }
        }        
    });

    txtDepositMinValue.val(depositRange.slider('values',0));
    txtDepositMaxValue.val(depositRange.slider('values',1));
}

if( leverageRange.length ) {
    leverageRange.slider({
        range: true,
        step: 10,
        min: leverageRange.data('min'),
        max: leverageRange.data('max'),
        values: [ leverageRange.data('min'), leverageRange.data('max') ],
        slide: function(event, ui) {
            leverageRange.siblings().find('.range-min').val(ui.values[ 0 ]);
            leverageRange.siblings().find('.range-max').val(ui.values[ 1 ]);
            
            leverageRange.parent().prev('.dropdown-toggle').text(ui.values[ 0 ] + ' - ' + ui.values[ 1 ]);
            txtLeverageMinValue.trigger("keyup");
            txtDepositMaxValue.trigger("keyup");

            leverageRange.parent().find('.filter-side__result').text('1 : ' + ui.values[ 0 ] + ' - ' + '1 : ' + ui.values[ 1 ]);
        }
    });

    txtLeverageMinValue.on('keyup', function() {
        let value = $(this).val();
        leverageRange.slider('values',0, value);
        leverageRange.siblings().find('.range-min').val(value);

        $(this).closest('.dropdown-menu').find('.range-other li').removeClass('active');

        if( (value === 0 || !value) && (!txtLeverageMaxValue.val() || txtLeverageMaxValue.val() === 0) ) {
            leverageRange.parent().prev('.dropdown-toggle').text('Min Deposit');
        } else {
            if( !txtLeverageMaxValue.val() || txtLeverageMaxValue.val() === 0 ) {
                leverageRange.parent().prev('.dropdown-toggle').text('>= ' + value);
            } else {
                leverageRange.parent().prev('.dropdown-toggle').text(value + ' - ' + txtLeverageMaxValue.val());
    
                if( value === 0 || !value ) {
                    txtLeverageMaxValue.trigger("keyup");
                }
            }
        }
    });

    txtLeverageMaxValue.on('keyup', function() {
        let value = $(this).val();
        leverageRange.slider('values',1, value);
        leverageRange.siblings().find('.range-max').val(value);

        if( (value === 0 || !value) && (!txtLeverageMinValue.val() || txtLeverageMinValue.val() === 0) ) {
            leverageRange.parent().prev('.dropdown-toggle').text('Min Deposit');
        } else {
            if( !txtLeverageMinValue.val() || txtLeverageMinValue.val() === 0 ) {
                leverageRange.parent().prev('.dropdown-toggle').text('< ' + value);
            } else {
                leverageRange.parent().prev('.dropdown-toggle').text(txtLeverageMinValue.val() + ' - ' + value);
    
                if( value === 0 || !value ) {
                    txtLeverageMinValue.trigger("keyup");
                }
            }
        }        
    });

    txtLeverageMinValue.val(leverageRange.slider('values',0));
    txtLeverageMaxValue.val(leverageRange.slider('values',1));
}

//Mobile
let depositRangeMobile = $("#deposit-range-slider-mobile");
let leverageRangeMobile = $('#leverage-range-slider-mobile');

let resultPlace = depositRangeMobile.parent().find('.modal-search-result');
let filterResultPlace = depositRangeMobile.parent().find('.filter-side__result');

let resultPlaceLeverage = leverageRangeMobile.parent().find('.modal-search-result');
let filterResultPlaceLeverage = leverageRangeMobile.parent().find('.filter-side__result');

if( depositRangeMobile.length ) {
    
    depositRangeMobile.slider({
        range: true,
        step: 10,
        min: depositRangeMobile.data('min'),
        max: depositRangeMobile.data('max'),
        values: [ depositRangeMobile.data('min'), depositRangeMobile.data('max') ],
        slide: function(event, ui) {
            depositRangeMobile.siblings().find('.range-min').val(ui.values[ 0 ]);
            depositRangeMobile.siblings().find('.range-max').val(ui.values[ 1 ]);
            
            resultPlace.text('$'+ui.values[ 0 ] + ' - ' + '$'+ui.values[ 1 ]);
            filterResultPlace.text('$'+ui.values[ 0 ] + ' - ' + '$'+ui.values[ 1 ]);
        }
    });
}

if( leverageRangeMobile.length ) {
    leverageRangeMobile.slider({
        range: true,
        step: 10,
        min: leverageRangeMobile.data('min'),
        max: leverageRangeMobile.data('max'),
        values: [ leverageRangeMobile.data('min'), leverageRangeMobile.data('max') ],
        slide: function(event, ui) {
            leverageRangeMobile.siblings().find('.range-min').val(ui.values[ 0 ]);
            leverageRangeMobile.siblings().find('.range-max').val(ui.values[ 1 ]);
            
            resultPlaceLeverage.text('1 : ' + ui.values[ 0 ] + ' - ' + '1 : ' + ui.values[ 1 ]);
            filterResultPlaceLeverage.text('1 : ' + ui.values[ 0 ] + ' - ' + '1 : ' + ui.values[ 1 ]);
        }
    });
}


let resetButton = $('button[name="reset-home-search"]');
let filterAdvance = $('.range-other');

// reset form
resetButton.on('click', function() {
    depositRange.slider('values',0, depositRange.data('min'));
    depositRange.slider('values',1, depositRange.data('max'));

    leverageRange.slider('values',0, leverageRange.data('min'));
    leverageRange.slider('values',1, leverageRange.data('max'));

    //mobile
    depositRangeMobile.slider('values',0, depositRangeMobile.data('min'));
    depositRangeMobile.slider('values',1, depositRangeMobile.data('max'));
    resultPlace.text(depositRangeMobile.data('min') + ' - ' + depositRangeMobile.data('max'));
    filterResultPlace.text(depositRangeMobile.data('min') + ' - ' + depositRangeMobile.data('max'));

    leverageRangeMobile.slider('values',0, leverageRangeMobile.data('min'));
    leverageRangeMobile.slider('values',1, leverageRangeMobile.data('max'));
    resultPlaceLeverage.text('1 : ' + leverageRangeMobile.data('min') + ' - ' + '1 : ' + leverageRangeMobile.data('max'));
    filterResultPlaceLeverage.text('1 : ' + leverageRangeMobile.data('min') + ' - ' + '1 : ' + leverageRangeMobile.data('max'));

    filterAdvance.find('li').removeClass('active');

    let form = $(this).closest('form');
    let button = form.find('.dropdown-toggle');
    let inputHidden = form.find('input[type="hidden"]');
    button.each(function() {
        $(this).text($(this).data('reset'));
    });
    inputHidden.val('');

    form.find('select').selectpicker("refresh");
});

filterAdvance.find('li').on('click', function() {
    let text = $(this).text();
    let vl = $(this).data('vl');

    // Reset input
    $(this).closest('.dropdown-menu').find('.range-min, .range-max').val('');

    $(this).parent().siblings('input[type="hidden"]').val(vl);

    //set active when clicked
    $(this).addClass('active').siblings().removeClass('active');

    // set text to button
    $(this).closest('.dropdown').find('.dropdown-toggle').text(text);
});

$('.selectpicker').selectpicker({
    countSelectedText: "{0} mục được chọn",
    noneResultsText: "Không tìm thấy {0}",
    maxOptionsText: "Chọn tối đa 4 mục"
});

$('.selectpicker').on('refreshed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
    $(this).selectpicker('deselectAll');
    $(this).val('');
    $(this).change();
});
  

let inputFilterPc = $('#pc-filter-input');
let filterMore = $('#home-filter-more');
let filterLess = $('#home-filter-less');

inputFilterPc.on('focus', function() {
    $('.home-search__advance').css('display', 'block');
    $('.home-filter-1').removeClass('slideClose').addClass('slideOpen mt-3');
});

filterMore.on('click', function() {
    $(this).parent().css('display', 'none');
    $('.home-filter-2').removeClass('slideClose').addClass('slideOpen');
});

filterLess.on('click', function() {
    filterMore.parent().css('display', 'block');
    $('.home-filter-2').removeClass('slideOpen').addClass('slideClose');
});

if( $('.home-search').length ) {
    $(document).on('click', function(e) {
        let container = $('.home-search')[0];
    
        if( e.target != container && !container.contains(e.target) ) {
            $('.home-filter-1, .home-filter-2').removeClass('slideOpen mt-3').addClass('slideClose');
            filterMore.parent().css('display', 'block');
        }
    });
}

let reviewSlider = $('.home-review-item__slider');
if( reviewSlider.length ) {
    reviewSlider.each(function() {
        $(this).slick({
            prevArrow: '<span class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
            nextArrow: '<span class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>'
        });
    });

    $('.home-nav-tabs a[data-toggle="tab"]').on('shown.bs.tab', function() {   
        let tabPane = $($(this).attr('href'));

        $('.slider', tabPane).slick('refresh');

    }).first().trigger('shown.bs.tab');
}

let topBrokers = $('.top-broker-slider');
if( topBrokers.length ) {
    const topBrokerSettings = {
        variableWidth: true,
        arrows: false,
        swipeToSlide: true
    };

    if( w.width() < 768 ) topBrokers.slick(topBrokerSettings);
    
    w.on('resize', function() {
        if( w.width() > 767 ) {
            if(topBrokers.hasClass('slick-initialized')) topBrokers.slick('unslick');
        } else {
            if( !topBrokers.hasClass('slick-initialized') ) topBrokers.slick(topBrokerSettings);
        }
    });
}

let tabSlider = $('.nav-tabs-slider');
if( tabSlider.length ) {
    const tabSliderSettings = {
        autoplay: true,
        arrows: false,
        dots: true,
        swipeToSlide: true
    };

    if( w.width() < 768 ) tabSlider.slick(tabSliderSettings);

    w.on('resize', function() {
        if( w.width() > 767 ) {
            if(tabSlider.hasClass('slick-initialized')) tabSlider.slick('unslick');
        } else {
            if( !tabSlider.hasClass('slick-initialized') ) tabSlider.slick(tabSliderSettings);
        }
    });
    
    tabSlider.on('afterChange', function(e, slick, currentSlide) {
        tabSlider.find('.nav-link').removeClass('active');
        tabSlider.find('.nav-link.slick-active').tab('show');
    });
}

$('.show-more-review').collapser({
    mode: 'lines',
    truncate: 4,
    speed: 'fast',
    controlBtn: '',
    showText: 'Xem Thêm <i class="fa fa-angle-double-down" aria-hidden="true"></i>',
    hideText: 'Rút gọn <i class="fa fa-angle-double-up" aria-hidden="true"></i>'
});

$('.about-more').collapser({
    mode: 'lines',
    truncate: 7,
    speed: 'fast',
    controlBtn: '',
    showText: 'Xem Thêm',
    hideText: 'Rút gọn',
});

$('.banner-slider').each(function() {
    $(this).slick({
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false
    });
});

$(document).on('ready', function() {
    if( w.width() > 768 ) $('.sidebar-scroll').stick_in_parent();

    w.on('resize', function() {
        if( w.width() > 767 ) {
            $('.sidebar-scroll').stick_in_parent();
        } else {
            $('.sidebar-scroll').trigger("sticky_kit:detach");
        }
    });
});

let brokerRelative = $('.broker-relative');
if( brokerRelative.length ) {
    brokerRelative.slick({
        autoplay: true,
        arrows: false,
        slidesToShow: 4,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 768, 
                settings: {
                    variableWidth: true
                }
            }
        ]
    });
}

let commentForm = $("#commentForm");

commentForm.validate({
    ignore: "",
    rules: {
        broker: "required",
        full_name: "required",
        email: {
            required: true,
            email: true
        },
        message: {
            required: true,
            minlength: 15,
        },
        checkme: "required",
        rate_one: "required",
        rate_two: "required",
        rate_three: "required",
        ct_hiddenRecaptcha: "required"
    },
    errorPlacement: function(error, element) {
        if (element.attr('type') == 'checkbox') {
            element.parent().after(error);
        } else{
            error.insertAfter(element);
        }
    },
    messages: {
        broker: "Vui lòng chọn sàn để nhận xét",
        full_name: "Vui lòng nhập thông tin",
        email: {
            required: "Vui lòng nhập thông tin",
            email: "Định dạng email không đúng"
        },
        message: {
            required: "Vui lòng nhập thông tin",
            minlength: "Vui lòng nhập tối thiểu 15 ký tự"
        },
        checkme: "Đây là thông tin bắt buộc",
        rate_one: "Vui lòng đánh giá",
        rate_two: "Vui lòng đánh giá",
        rate_three: "Vui lòng đánh giá",
        ct_hiddenRecaptcha: "Vui lòng kiểm tra captcha"
    }
});

/* Compare page start */
let compareSelect = $('#compare-select');

if( w.width() < 768 ) {
    compareSelect.selectpicker({
        countSelectedText: "{0} mục được chọn",
        noneResultsText: "Không tìm thấy {0}",
        maxOptions: 2,
        maxOptionsText: "Chọn tối đa 2 mục"
    });
} else {
    compareSelect.selectpicker({
        countSelectedText: "{0} mục được chọn",
        noneResultsText: "Không tìm thấy {0}",
        maxOptions: 4,
        maxOptionsText: "Chọn tối đa 4 mục"
    });
}

if( $('.table-compare').length ) {
    w.scroll(function() {
        let scrollTop = $(this).scrollTop();
        let tableCompareHead = $('.table-compare__head');
        if (scrollTop > tableCompareHead.offset().top && scrollTop + tableCompareHead.outerHeight() < tableCompareHead.offset().top + $('.table-compare__body').outerHeight()) {
            tableCompareHead.addClass('fixed');
        } else {
            tableCompareHead.removeClass('fixed');
        }
    });
}

let compareForm = $('#compare-form');
compareSelect.on('change', function() {
    if( $(this).val() && $(this).val().length >= 2 ) {
        compareForm.find('button[type="submit"]').prop('disabled', false);
    } else {
        compareForm.find('button[type="submit"]').prop('disabled', true);
    }

    if( w.width() < 768 ) {
        if( $(this).val() && $(this).val().length >= 2 ) {
            compareForm.find('ul.dropdown-menu li:not(.selected)').addClass('disabled');
        } else {
            compareForm.find('ul.dropdown-menu li:not(.selected)').removeClass('disabled');
        }
    } else {
        if( $(this).val() && $(this).val().length >= 4 ) {
            compareForm.find('ul.dropdown-menu li:not(.selected)').addClass('disabled');
        } else {
            compareForm.find('ul.dropdown-menu li:not(.selected)').removeClass('disabled');
        }
    }
}).on('show.bs.select', function () {
    compareSelect.trigger('change');
});  

if( window.location.search ) {
    let params = (new URL(document.location)).searchParams;
    let brokers = params.getAll('brokers');
    compareSelect.selectpicker('val', brokers);
    compareSelect.trigger('change');
}

/* Compare page end */