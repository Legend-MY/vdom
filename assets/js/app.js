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

      // quantity
      const quantityButtonMinus = document.querySelector('.quantity__button_minus');
      const quantityButtonPlus = document.querySelector('.quantity__button_plus');

      if (quantityButtonMinus || quantityButtonPlus) {
         let value = parseInt(quantityButtonMinus.closest('.quantity').querySelector('input').value);
         if (target.classList.contains('quantity__button_minus')) {
            value = value - 1;
            if (value < 1) {
               value = 1
            }
            quantityButtonMinus.closest('.quantity').querySelector('input').value = value;
         }
         if (target.classList.contains('quantity__button_plus')) {
            value++;
            quantityButtonPlus.closest('.quantity').querySelector('input').value = value;
         }
      }

   }

}