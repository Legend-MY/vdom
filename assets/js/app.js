'use strict';

function testWebP(callback) {
    var webP = new Image();
    webP.onload = webP.onerror = function () {
        callback(webP.height == 2);
    };
    webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}
testWebP(function (support) {
    if (support === true) {
        document.querySelector('html').classList.add('_webp');
    } else {
        document.querySelector('html').classList.add('_no-webp');
    }
});

window.onload = function () {

    document.addEventListener('click', documentActions);

    // Actions (делегирование события click)
    function documentActions(event) {
        const target = event.target;
        // menu
        if (target.closest('.menu__icon')) {
            document.querySelector('.mobile-menu').classList.add('_active');
            document.querySelector('body').classList.add('_lock');
        } else if (target.closest('.mobile-menu__btn') || !target.closest('.mobile-menu__wrapper')) {
            document.querySelector('.mobile-menu').classList.remove('_active');
            document.querySelector('body').classList.remove('_lock');
        }

        // search
        if (target.classList.contains('search-header__icon')) {
            document.querySelector('.search-header__form').classList.add('_active');
        } else if (!target.closest('.search-header__form') || target.classList.contains('search-header__close')) {
            document.querySelector('.search-header__form').classList.remove('_active');
        }
    }


    (function () {
        // quantity
        const quantityBox = document.querySelectorAll('.quantity_box');
        const updateCart = document.querySelector('[name=update_cart]');

        if (quantityBox.length > 0) {
            quantityBox.forEach((quantity) => {
                const quantityButtonMinus = quantity.querySelector('.quantity__button_minus');
                const quantityButtonPlus = quantity.querySelector('.quantity__button_plus');
                const quantityBoxInput = quantity.querySelector('input');
                if (quantityButtonMinus !== null) {
                    quantityButtonMinus.addEventListener('click', function () {
                        let value = parseInt(quantityBoxInput.value);
                        value = value - 1;
                        if (value < 1) {
                            value = 1
                        }
                        quantityBoxInput.value = value;
                        updateCart !== null ? updateCart.removeAttribute('disabled') : null
                    })
                }
                if (quantityButtonPlus !== null) {
                    quantityButtonPlus.addEventListener('click', function () {
                        let value = parseInt(quantityBoxInput.value);
                        value++;
                        quantityBoxInput.value = value;
                        updateCart !== null ? updateCart.removeAttribute('disabled') : null
                    })
                }
            });
        }

        return false;
    })();

    (function () {
        const categoryMenu = document.querySelector('#menu_category_home');

        if (categoryMenu !== null) {
            categoryMenu.querySelectorAll('.menu-item-has-children>a').forEach((item) => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    item.classList.toggle('active');
                    this.nextElementSibling.classList.toggle('active');

                })
            })
        }
        return false;

    })();

    (function () {
        const catalogLink = document.querySelector('.catalog__link'),
            catalogMenu = document.querySelector('.catalog__menu');

        if (catalogLink !== null) {
            catalogLink.addEventListener('click', function (event) {
                event.preventDefault();
                catalogMenu.classList.toggle('active');
            });
        }
    })();

    (function () {
        const shopFilterLink = document.querySelector('.shop__filter_link'),
            shopSortAside = document.querySelector('.shop__sort_aside');

        if (shopFilterLink !== null) {
            shopFilterLink.addEventListener('click', function (event) {
                event.preventDefault();
                shopSortAside.classList.toggle('active');
            });
        }
    })();


    // Подключение slick для hero section
    jQuery('#offer_slider .products.columns-3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
    });

    // Подключение slick для vendor section
    jQuery('.vendor__slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        variableWidth: true
    });

}