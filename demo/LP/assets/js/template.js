$(window).on('load resize', function() {
    let viewportWidth = $(window).width();
    let otherSlider = $('.other-slider');

    if( viewportWidth < 768 ) {
        if( otherSlider.hasClass('slick-initialized') )
        {
            otherSlider.slick('unslick');
        }
    } else {
        if( !otherSlider.hasClass('slick-initialized') ) {
            otherSlider.slick({
                arrows: false,
                centerPadding: 0,
                centerMode: true,
                slidesToShow: 3,
                dots: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        }
    }
});

$(document).ready(function() {
    $('.chanel-slider').slick({
        slidesToShow: 3,
        arrows: false,
        dots: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    let checkLength = $('.chanel-slider').find('.chanel-item').length;
    if( checkLength <= 3 ) {
        $('.chanel-slider').find('.slick-dots').hide();
    }

    $('.other-slider').slick({
        arrows: false,
        centerPadding: 0,
        centerMode: true,
        slidesToShow: 3,
        dots: true,
        autoplay: true,
        swipe: false,
        focusOnSelect: true
    });

    $('.invest-tab a').on('click', function(e) {
        e.preventDefault();
        let t = $(this);
        let data = t.data('chart');
        let text = t.html();
        t.addClass('active').parent().siblings().find('a').removeClass('active');
        $('.invest-chart__item').find('.invest-chart__progress').removeClass('higger-col');

        t.closest('.chart-wrap').find('.dropdown-toggle').html(text);

        var dataSort = [...data].sort(function(a, b){return b - a});

        for(let i=0; i<data.length; i++) {
            let percent = data[i] * 463 / 100;
            let col = $('.invest-chart__item:nth-child('+ (i + 1 )+')');
            col.find('.invest-chart__progress').css({
                'height' : percent,
                'width' : percent
            });
            col.find('.invest-chart__value').text(data[i] + '%');

            if( data[i] === dataSort[0] ) {
                col.find('.invest-chart__progress').addClass('higger-col');
            }
        }
    });

    $('.invest-tab li:first-child a').trigger('click');

    let form = $("#frmNewform");

    $.validator.addMethod("phoneUS", function (phone, element) {
        phone = phone.replace(/\s+/g, "");
        return this.optional(element) || phone.length > 8 &&
        phone.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
    }, "Vui lòng nhập đụng định dạng số điện thoại.");

    form.validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                phoneUS: true
            },
            '00N2w00000FnTKJ': {
                required: true
            }
        },
        errorClass: 'errMsg',
        errorPlacement: function (error, element) {
            error.insertBefore(element);
        },
        submitHandler: function (form) {
            if (grecaptcha.getResponse()) {
                form.submit();
                $('.errMsg').text('');
            } else {
                $('.errMsg').text('Vui lòng xác nhận.');
            }
        },
        messages: {
            first_name: {
                required: 'Vui lòng nhập Họ.'
            },
            last_name: {
                required: "Vui lòng nhập Tên."
            },
            email: {
                required: 'Vui lòng nhập Email.',
                email: 'Vui lòng nhập đúng định dạng email.'
            },
            phone: {
                required: 'Vui lòng nhập Số điện thoại.'
            },
            '00N2w00000FnTKJ': {
                required: 'Vui lòng chọn loại hình đầu tư.'
            }
        },
    });

    if (window.location.search) {
        let params = (new URL(document.location)).searchParams;
        let values = params.get('utm_source');
        
        values ? $('input[name="lead_source"]').val(values) : '';
    }

    $('#link-to-form').on('click', function(e) {
        e.preventDefault();
        let t = $(this);
        let hash = t.attr('href');

        let value = $('.invest-tab').find('.active').data('value');
        
        form.find('select').val(value);

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1000);
    });

    $('.anchor-link').on('click', function(e) {
        e.preventDefault();
        let t = $(this);
        let hash = t.attr('href');

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1000);
    });
});