/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************!*\
  !*** ./public/js/modal.js ***!
  \****************************/
/******/
(function () {
  // webpackBootstrap
  var __webpack_exports__ = {};
  /*!****************************!*\
    !*** ./public/js/modal.js ***!
    \****************************/

  /******/

  (function () {
    // webpackBootstrap
    var __webpack_exports__ = {};
    /*!****************************!*\
      !*** ./public/js/modal.js ***!
      \****************************/

    /******/

    (function () {
      // webpackBootstrap
      var __webpack_exports__ = {};
      /*!****************************!*\
        !*** ./public/js/modal.js ***!
        \****************************/

      /******/

      (function () {
        // webpackBootstrap
        var __webpack_exports__ = {};
        /*!****************************!*\
          !*** ./public/js/modal.js ***!
          \****************************/

        /******/

        (function () {
          // webpackBootstrap
          var __webpack_exports__ = {};
          /*!****************************!*\
            !*** ./public/js/modal.js ***!
            \****************************/

          /******/

          (function () {
            // webpackBootstrap
            var __webpack_exports__ = {};
            /*!****************************!*\
              !*** ./public/js/modal.js ***!
              \****************************/

            var buttonOpen = document.getElementsByClassName('modalOpen');
            console.log(buttonOpen);
            var modal = document.getElementById('easyModal');
            var buttonClose = document.getElementsByClassName('modalClose')[0]; //ボタンがクリックされた時

            buttonOpen.addEventListener('click', modalOpen);

            function modalOpen() {
              modal.style.display = 'block';
            }

            ; //バツ印がクリックされた時

            buttonClose.addEventListener('click', modalClose);

            function modalClose() {
              modal.style.display = 'none';
            }

            ; //モーダルコンテンツ以外がクリックされた時

            addEventListener('click', outsideClose);

            function outsideClose(e) {
              if (e.target == modal) {
                modal.style.display = 'none';
              }

              ;
            }

            ;
            /******/
          })();
          /******/

        })();
        /******/

      })();
      /******/

    })();
    /******/

  })();
  /******/

})();
/******/ })()
;