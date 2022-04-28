/**
 * selectのoptionタグを生成するための関数
 * @param {Element} elem 変更したいselectの要素
 * @param {Number} val 表示される文字と値
 */
 function createOptionForElements(elem, val) {
    let option = document.createElement('option');
    option.text = val;
    option.value = val;
    elem.appendChild(option);
  }
  
  //年の生成
  for(let i = 1920; i <= 2020; i++) {
    createOptionForElements(userBirthdayYear, i);
  }
  //月の生成
  for(let i = 1; i <= 12; i++) {
    createOptionForElements(userBirthdayMonth, i);
  }
  //日の生成
  for(let i = 1; i <= 31; i++) {
    createOptionForElements(userBirthdayDay, i);
  }