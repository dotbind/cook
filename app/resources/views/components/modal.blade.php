<div class="popup" id="js-popup">
  <div class="popup-inner">
    <div class="close-btn js-popup-close"><i class="fas fa-times"></i></div>
    削除しますか？
    <button type="button" onclick="deletePost()" data-delete-id="" id="confirm-delete">はい</button>
    <button class="js-popup-close">いいえ</button>
  </div>
  <div class="black-background js-popup-close"></div>
</div>
<button class="js-popup-open">Show Popup</button>

<script>
function deletePost() {
      var confirm_delete = document.getElementById('confirm-delete');
      var postId = confirm_delete.dataset.deleteId; //popupImage()で設定した削除IDを取得

      document.querySelector("#delete_post_id").value = postId;
      document.querySelector("#delete_form").action = "{{ route('admin.delete') }}";
      document.querySelector("#delete_form").submit();
    }
</script>