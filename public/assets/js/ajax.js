jQuery(document).ready(function ($) {

    $('#quick-view').on('shown.bs.modal', function (e) {

    });
    var $body = $('body');

    $body.on('click', '.btn-view', function () {
        $('#quick-view').modal('show');
    });

    $body.on('click', '.close', function () {

    });

    $body.on('click', '.btn-view', function () {
        var id = $(this).children('span').data('id');
        $.ajax({
            url: '/ajax',
            data: {
                id: id
            },
            type: 'GET',
            beforeSend: function () {
            },
            success: function (data) {
                $('.quick-view-detail').html(data);
            },
            error: function () {
            }
        });
    });


    $body.on('change', '.product-filter, .sort-select', function () {

        var id = $(this).data('id'),
            $checked = $('.product-filter:checked'),
            sort = '',
            $sortSelect = $('.sort-select');
        filters = [];
        $checked.each(function () {
            var name = $(this).data('name');
            if ($.inArray(name, filters) === -1) {
                filters[name] = [];
            }
        });

        if ($sortSelect.val() !== 'Sort By') {
            sort = $sortSelect.val();
        }


        $checked.each(function () {
            $thisCheckedName = $(this).data('name');
            $thisCheckedId = $(this).data('id');
            Object.keys(filters).forEach(key => {
                if ($thisCheckedName === key) {
                    if ($.inArray($thisCheckedId, filters[key]) === -1) {
                        filters[key].push($thisCheckedId);
                    }
                }
            });
        });


        if ($sortSelect.val() !== 'Sort By') {
            filters['sort'] = sort;
        }
        var obj = $.extend({}, filters),
            currentPath = location.href;


        var url = location.pathname,
            index = 0;
        Object.keys(obj).forEach(key => {
            if (index === 0) {
                url += '?';
            } else {
                url += '&'
            }
            url += key + '=' + obj[key];
            index++;
        });
        url = url.replace('&&', '&');
        url = url.replace('?&', '?');
        history.pushState({}, '', url);

        ajaxFilter();

    });

    function ajaxFilter() {
        $.ajax({
            url: location.href,
            type: 'GET',
            data: {},

            beforeSend: function () {
            },
            success: function (data) {
                $('.products-content').html(data);

            },
            error: function () {
            }
        });
    }


    $body.on('click', '.btn-cart', function (e) {
        e.preventDefault();
        var $this = $(this),
            id = $this.data('id'),
            token = $this.data('token'),
            qty = 1;
        if ($this.closest('.card-wrapper').find('.product-qty')[0]) {
            qty = $this.closest('.card-wrapper').find('.product-qty').val();
        }

        $.ajax({
            url: '/cart',
            data: {
                id: id,
                _token: token,
                qty: qty
            },
            type: 'POST',
            beforeSend: function () {
            },
            success: function (data) {
                $('#cartModal .modal-body').html(data);
                findTotalQty();
            },
            error: function () {
            }
        });

    });

    $body.on('click', '.cart-product-delete', function (e) {
        e.preventDefault();
        var $this = $(this),
            id = $this.data('id'),
            token = $this.data('token');

        $.ajax({
            url: '/cart/' + id,
            data: {
                id: id,
                _token: token,
                _method: 'DELETE'
            },
            type: 'POST',
            beforeSend: function () {
            },
            success: function (data) {
                $('#cartModal .modal-body').html(data);
                $(".cart-product-delete[data-id='" + id + "']").closest('.cart-row').remove();
                findTotalQty();
            },
            error: function () {
            }
        });

    });

    $body.on('click', '.btn-cart-reload', function () {
        var $this = $(this),
            totalQty = $this.siblings('.product-qty').val(),
            id = $this.data('id'),
            token = $this.data('token');
        $.ajax({
            url: '/cart/' + id,
            data: {
                id: id,
                totalQty: totalQty,
                _token: token,
                _method: 'PATCH'
            },
            type: 'POST',
            beforeSend: function () {
            },
            success: function (data) {
                console.log(data);
                $('#cartModal .modal-body').html(data);
                findTotalQty();
            },
            error: function () {
            }
        });
    });

    findTotalQty();

    function findTotalQty() {
        var total = $('#cartModal .modal-body').find('.cart-modal-item'),
            totalQty = 0,
            totalPrice = $('.cart-subtotal-price').text();
        console.log(totalPrice);
        total.each(function () {
            totalQty += parseInt($(this).find('.product-cart-qty').text());
        });
        $('#header-cart-btn').find('span.shadow-sm ').attr('data-cart-items', totalQty);
        $('.nav-cart-total-qty').html(totalQty);
        $('.nav-cart-total-price').html(totalPrice);
        if ($('.subtotal-cart')[0]) {
            $('.subtotal-cart').html(totalPrice);
        }

        if ($('.cart-table')[0]) {
            $('.cart-table').find('.cart-product-total-price').each(function () {
                $productCartWrapper = $(this).closest('.card-wrapper');
                var productCartPrice = $productCartWrapper.find('.product-cart-price').text(),
                    productCartQty = $productCartWrapper.find('.product-qty').val(),
                    productCartTotalPrice = $productCartWrapper.find('.cart-product-total-price');
                productCartTotalPrice.html('$' + (productCartPrice * productCartQty));

            });
        }

    }


    $body.on('click', '.add-to-wishlist', function (e) {
        e.preventDefault();
        var token = $(this).data('token'),
            id = $(this).data('product');

        $.ajax({
            url: '/wishlist',
            method: 'post',
            data: {
                _token: token,
                product_id: id
            },
            beforeSend: function () {
            },
            success: function (data) {
                console.log(data);
            },
            error: function () {

            }

        });

    });

    $('.search-field').on('keyup', function () {
        var searchVal = $(this).val();
        if (searchVal.length < 3) {
            return;
        }

        $.ajax({
            url: '/ajax/search',
            method: 'GET',
            data: {
                searchVal: searchVal
            },
            success: function (data) {
                $('.search-result').css('display', 'block').html(data);
            },

        });

    });

    $body.on('click', function () {
        $('.search-result').css('display', 'none');
        $('.search-field').val('');
    });
    $('.btn-search').on('click', function (e) {
        e.preventDefault();
    });


});
