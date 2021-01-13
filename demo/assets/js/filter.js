// Filter start
let filterBrokerSlider = $('.filter-broker-slider');
if( filterBrokerSlider.length ) {
    filterBrokerSlider.slick({
        autoplay: true,
        slidesToShow: 5,
        arrows: false,
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

$('.sort-dropdown .selectpicker').on('shown.bs.select', function () {
    $('.mobile-filter__overlay').addClass('show')
}).on('hidden.bs.select', function () {
    $('.mobile-filter__overlay').removeClass('show')
});

let compareModal = $('.popup-compare');
let compareModalText = $('.popup-compare-txt');
let compareModalList = $('#popup-compare-list');
let compareModalButton = $('#btn-compare-popup');

let getCompareStore = function(slug) {
    return window.localStorage.getItem(slug);
}

let addCompareStore = function(slug, image, alt) {
    let arrayItem = getCompareStore('slug') ? JSON.parse(getCompareStore('slug')) : {'slug': []};
    arrayItem['slug'].push({slug, image, alt});
    window.localStorage.setItem('slug', JSON.stringify(arrayItem));
}

let removeCompareStore = function(slug) {
    let arrayItem = getCompareStore('slug') ? JSON.parse(getCompareStore('slug')) : [];
    arrayItem['slug'] = arrayItem['slug'].filter(item => item.slug != slug);

    window.localStorage.setItem('slug', JSON.stringify(arrayItem));
}

let disabledCompare = function(items) {
    if( items.length >= 4 ) {
        $('[data-compare]').attr('disabled', true);
    } else {
        let params = (new URL(document.location)).searchParams;
        let values = params.getAll("brokers");

        if(values.length) {
            $('[data-compare]').attr('disabled', false);
            compareModal.removeClass('hidden').addClass('show');

            values.map(v => {
                let target = $('[data-compare-slug="'+v+'"]');        
                target.attr('disabled', true);
            });
        }
    }
}

let disabledCompareMobile = function(items) {
    if( items.length >= 2 ) {
        $('[data-compare]').attr('disabled', true);
    } else {
        let params = (new URL(document.location)).searchParams;
        let values = params.getAll("brokers");

        if(values.length) {
            $('[data-compare]').attr('disabled', false);
            compareModal.removeClass('hidden').addClass('show');

            values.map(v => {
                let target = $('[data-compare-slug="'+v+'"]');        
                target.attr('disabled', true);
            });
        }
    }
}

let checkShowCompareButton = function() {
    let compareModalItem = $('.popup-compare-item');

    if( compareModalItem.length > 1 ) {
        compareModalButton.removeClass('d-none');
    } else {
        compareModalButton.addClass('d-none');
    }

    if( compareModalItem.length ) {
        compareModal.removeClass('none');
    } else {
        compareModal.addClass('none');
    }

    if( w.width() > 768 ) {
        disabledCompare(compareModalItem);
    } else {
        disabledCompareMobile(compareModalItem);
    }
}

compareModalButton.on("click", function() {
    let url = $(this).data('url') ? $(this).data('url') : 'so-sanh/';
    let searchURL = window.location.search;

    if( searchURL && searchURL.indexOf('?brokers=') === -1 ) {
        let indexBroker = searchURL.indexOf('&brokers=');
        searchURL = '?' + searchURL.substr(indexBroker + 1);
    }

    url =  url + searchURL;

    window.location.href = url;
});

let template_borker = function (slug, logo, alt) {
    return '<div class="popup-compare-item">' +
        '<div class="x-del" data-slug="'+slug+'"></div>' +
        '<div class="broker-popup">' +
        '<img class="logo-broker" src="' + logo + '" alt="'+alt+'">' +
        '</div>' +
        '</div>' +
        '</div>';
}

if (!window.location.search) {
    window.localStorage.removeItem('slug');
} else {
    $('html,body').animate({
        scrollTop: $('.search-result').offset().top
    }, 1000);
}

let slugSearch = getCompareStore('slug') ? JSON.parse(getCompareStore('slug'))['slug'] : [];
if( slugSearch && slugSearch.length > 0 ) {
    let slugArr = [];
    
    compareModal.removeClass('hidden').addClass('show');

    slugSearch.map(item => {
        let slug = item['slug'],
                logo = item['image'],
                alt = item['alt'];
    
        $('button[data-compare-slug="'+slug+'"]').addClass('compare-added').attr('disabled', true);
        compareModalList.append(template_borker(slug, logo, alt));

        slugArr.push(slug);
    });
    let params = (new URL(document.location)).searchParams;
    let broker = '';
    if(window.location.search) {
        broker = window.location.search;

        if( params.getAll("brokers").length <= 0 ) {
            for (let i = 0; i < slugArr.length; i++) {
                broker += "&brokers=" + slugArr[i];
            }
        }
    } else {
        if( !params.getAll("brokers") ) {
            broker = "?brokers=" + slugArr[0];

            for (let i = 1; i < slugArr.length; i++) {
                broker += "&brokers=" + slugArr[i];
            }
        }
    }
    
    compareModalText.find('.popup-compare-txt__count').text(slugArr.length);
    checkShowCompareButton();
    window.history.pushState({}, 'compare', broker);
}
let slugArr = slugSearch.map(item => item.slug);
let refreshURL = function(valueData) {
    let value = valueData.toLowerCase();

    let indexValue = slugArr.indexOf(value);
    if (indexValue != -1) {
        slugArr.splice(indexValue, 1);
    } else if (slugArr.length <= 3) {
        slugArr.push(value);
    }

    let broker = window.location.pathname;
    let searchURL = window.location.search;

    if( searchURL && searchURL.indexOf('?brokers=') === -1 ) {
        let indexBroker = searchURL.indexOf('&brokers=') !== -1 ? searchURL.indexOf('&brokers=') : searchURL.length;
        broker = searchURL.substr(0, indexBroker);

        for (let i = 0; i < slugArr.length; i++) {
            broker += "&brokers=" + slugArr[i];
        }
    } else {
        for (let i = 0; i < slugArr.length; i++) {
            broker += i > 0 ? "&brokers=" + slugArr[i] : "?brokers=" + slugArr[i];
        }
    
    }
    
    compareModalText.find('.popup-compare-txt__count').text(slugArr.length);
    window.history.pushState({}, 'compare', broker);

    if( slugArr.length < 1 ) {
        compareModal.removeClass('show').addClass('hidden');
    }
}

compareModalText.on('click', function() {
    compareModal.removeClass('hidden').addClass('show');  
});

$('body').on('click', '[data-compare]', function() {
    let compareBtn = $(this),
        brokerImg = compareBtn.closest('li').find('.filter-list__logo img').attr('src'),
        brokerName = compareBtn.data('brokerName'),
        slug = compareBtn.data('compareSlug');
    
    $('[data-compare-slug="'+slug+'"]').addClass('compare-added').attr('disabled', true);
    compareModalList.append(template_borker(slug, brokerImg, brokerName));
    addCompareStore(slug, brokerImg, brokerName);
    refreshURL(slug);

    compareModal.removeClass('hidden').addClass('show');
    checkShowCompareButton();
});

$('body').on('click', '.x-del', function() {
    let slug = $(this).data('slug');

    removeCompareStore(slug);
    refreshURL( slug );
    $('[data-compare-slug="'+slug+'"]').removeClass('compare-added').attr('disabled', false);
    $(this).fadeOut(300, function() {
        $(this).parent().remove();

        checkShowCompareButton();
    });
});

w.bind('load resize', function() {
    if (w.width() < 768) {
        $('.popup-compare-item').each(function(index) {
            if (index > 1) {
                let id = $(this).find('.x-del').data('id');
                let slug = $('button[data-compare="'+id+'"]').data('compareSlug');
                refreshURL(slug);
                $(this).remove();
            }
        });
    }
 
    checkShowCompareButton();
});

let lastScrollTop = 0;
w.scroll(function(){
    let direction = $(this).scrollTop();

    if (direction <= lastScrollTop && $('.popup-compare-item').length ){
        compareModal.removeClass('hidden').addClass('show');    
    } else {
        compareModal.removeClass('show').addClass('hidden');
    }
    lastScrollTop = direction;
});

let formSort = $('.form-sort');

formSort.find('select').on('change', function() {
    $(this).closest('form').trigger('submit');
});

let filterForm = $('#form-filter');

filterForm.on('submit', function() {
    $(':input', this).each(function() {
        this.disabled = !($(this).val());
    });
});

if (window.location.search) {
    let params = (new URL(document.location)).searchParams;
    let minDes = params.get('min-deposit-min'),
        maxDes = params.get('min-deposit-max'),
        minLeverage = params.get('leverage-min'),
        maxLeverage = params.get('leverage-max'),
        checkboxProduct = params.getAll('product'),
        checkboxAccount = params.getAll('account'),
        isVietNamese = params.get('isVietnam'),
        copyTrade = params.get('copyTrade'),
        promotion = params.get('promotion'),
        countries = params.getAll('checkCountry');

    if( !params.getAll("brokers") && params.getAll("brokers").length < 1 ) {
        window.localStorage.removeItem('slug');
    }

    if( minDes && maxDes ) {
        filterForm.find('[name="min-deposit-min"]').val(minDes).trigger('keyup');
        filterForm.find('[name="min-deposit-max"]').val(maxDes).trigger('keyup');
        depositRange.parent().find('.filter-side__result').text('$'+minDes + ' - ' + '$'+maxDes);
    }
    
    if( minLeverage && maxLeverage ) {
        filterForm.find('[name="leverage-min"]').val(minLeverage).trigger('keyup');
        filterForm.find('[name="leverage-max"]').val(maxLeverage).trigger('keyup');
        leverageRange.parent().find('.filter-side__result').text('1 : ' + minLeverage + ' - ' + '1 : ' + maxLeverage);
    }

    if( checkboxProduct.length ) {
        checkboxProduct.map( product => filterForm.find('[name="product"][value="'+product+'"]').prop('checked', true) );
    }

    if( checkboxAccount.length ) {
        checkboxAccount.map( account => filterForm.find('[name="account"][value="'+account+'"]').prop('checked', true) );
    }

    if( isVietNamese ) {
        filterForm.find('[name="isVietnam"]').prop('checked', true);
    }

    if( copyTrade ) {
        filterForm.find('[name="copyTrade"]').prop('checked', true);
    }

    if( promotion ) {
        filterForm.find('[name="promotion"]').prop('checked', true);
    }

    if( countries.length ) {
        countries.map( country => filterForm.find('[name="checkCountry"] option[value="'+country+'"]').prop('selected', true) );
        filterForm.find('[name="checkCountry"]').trigger('change');
    }
}

/* Filter end */