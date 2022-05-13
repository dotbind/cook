/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./public/js/delete_confirm_modal.js ***!
  \*******************************************/
/******/
(function () {
  // webpackBootstrap
  var __webpack_exports__ = {};
  /*!*******************************************!*\
    !*** ./public/js/delete_confirm_modal.js ***!
    \*******************************************/

  /******/

  (function () {
    // webpackBootstrap
    var __webpack_exports__ = {};
    /*!*******************************************!*\
      !*** ./public/js/delete_confirm_modal.js ***!
      \*******************************************/

    /******/

    (function () {
      // webpackBootstrap
      var __webpack_exports__ = {};
      /*!*******************************************!*\
        !*** ./public/js/delete_confirm_modal.js ***!
        \*******************************************/

      function popupImage() {
        var modal_wrap = document.getElementById('js-popup');
        var popup = document.querySelectorAll('.js-popup-open');
        var popup_close = document.querySelectorAll('.js-popup-close');
        var confirm_delete = document.getElementById('confirm-delete'); //削除IDを取得するためエレメント取得

        popup.forEach(function (element) {
          element.addEventListener('click', function () {
            var delete_id = element.dataset.deleteId; //削除IDを取得

            confirm_delete.dataset.deleteId = delete_id; //削除IDをモーダル内の削除ボタンにセット

            modal_wrap.classList.add('is-show');
          });
        });
        popup_close.forEach(function (element) {
          element.addEventListener('click', function () {
            modal_wrap.classList.remove('is-show');
          });
        });
      }

      popupImage();
      /******/
    })();
    /******/

  })();
  /******/

})();
/******/ })()
;