/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./public/js/date_selectbox.js ***!
  \*************************************/
/******/
(function () {
  // webpackBootstrap
  var __webpack_exports__ = {};
  /*!*************************************!*\
    !*** ./public/js/date_selectbox.js ***!
    \*************************************/

  /******/

  (function () {
    // webpackBootstrap
    var __webpack_exports__ = {};
    /*!*************************************!*\
      !*** ./public/js/date_selectbox.js ***!
      \*************************************/

    /******/

    (function () {
      // webpackBootstrap
      var __webpack_exports__ = {};
      /*!*************************************!*\
        !*** ./public/js/date_selectbox.js ***!
        \*************************************/

      /******/

      (function () {
        // webpackBootstrap
        var __webpack_exports__ = {};
        /*!*************************************!*\
          !*** ./public/js/date_selectbox.js ***!
          \*************************************/

        /******/

        (function () {
          // webpackBootstrap
          var __webpack_exports__ = {};
          /*!*************************************!*\
            !*** ./public/js/date_selectbox.js ***!
            \*************************************/

          /******/

          (function () {
            // webpackBootstrap
            var __webpack_exports__ = {};
            /*!*************************************!*\
              !*** ./public/js/date_selectbox.js ***!
              \*************************************/

            /******/

            (function () {
              // webpackBootstrap
              var __webpack_exports__ = {};
              /*!*************************************!*\
                !*** ./public/js/date_selectbox.js ***!
                \*************************************/

              /******/

              (function () {
                // webpackBootstrap
                var __webpack_exports__ = {};
                /*!*************************************!*\
                  !*** ./public/js/date_selectbox.js ***!
                  \*************************************/

                /******/

                (function () {
                  // webpackBootstrap
                  var __webpack_exports__ = {};
                  /*!*************************************!*\
                    !*** ./public/js/date_selectbox.js ***!
                    \*************************************/

                  var Year = document.getElementById('year');
                  var Month = document.getElementById('month');
                  var Day = document.getElementById('day');
                  /**
                   * selectのoptionタグを生成するための関数
                   * @param {Element} elem 変更したいselectの要素
                   * @param {Number} val 表示される文字と値の数値
                   */

                  function createOptionForElements(elem, val) {
                    var option = document.createElement('option');
                    option.text = val;
                    option.value = val;
                    elem.appendChild(option);
                  } //年の生成


                  for (var i = 1920; i <= 2030; i++) {
                    createOptionForElements(Year, i);
                  } //月の生成


                  for (var _i = 1; _i <= 12; _i++) {
                    createOptionForElements(Month, _i);
                  } //日の生成


                  for (var _i2 = 1; _i2 <= 31; _i2++) {
                    createOptionForElements(Day, _i2);
                  }
                  /**
                   * 日付を変更する関数
                   */
                  // function changeTheDay() {
                  //   //日付の要素を削除
                  //   Day.innerHTML = ''; //選択された年月の最終日を計算
                  //   var lastDayOfTheMonth = new Date(Year.value, Month.value, 0).getDate(); //選択された年月の日付を生成
                  //   for (var _i3 = 1; _i3 <= lastDayOfTheMonth; _i3++) {
                  //     createOptionForElements(Day, _i3);
                  //   }
                  // } // Year.addEventListener('change', function () {
                  //   changeTheDay();
                  //   addOption('day');
                  // });
                  // Month.addEventListener('change', function () {
                  //   changeTheDay();
                  //   addOption('day');
                  // });

                  /******/

                })();

                function addOption(target_id) {
                  // selectタグを取得する
                  var select = document.getElementById(target_id); // optionタグを作成する

                  var option = document.createElement("option"); // optionタグのテキストを--に設定する

                  option.text = "--"; // optionタグのvalueを--に設定する

                  option.value = "--"; // selectタグの子要素にoptionタグを追加する

                  select.appendChild(option);
                }

                document.addEventListener('DOMContentLoaded', function () {
                  addOption('year');
                  addOption('month');
                  addOption('day');
                });
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
    /******/

  })();
  /******/

})();
/******/ })()
;