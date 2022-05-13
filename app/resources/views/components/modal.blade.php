<div class="popup" id="js-popup">
  <div class="popup-inner">
    <div class="close-btn js-popup-close"><i class="fas fa-times"></i></div>
  </div>
  <div class="black-background js-popup-close"></div>
</div>
<button class="js-popup-open">Show Popup</button>

<script>
    function deletePost(postId) {
        document.querySelector("#delete_post_id").value = postId;
        document.querySelector("#delete_form").action = "{{ route('admin.delete') }}";
        document.querySelector("#delete_form").submit();
    }
</script>
<script>
  function popupImage() {
  
    const modal_wrap = document.getElementById('js-popup');
    const popup = document.querySelectorAll('.js-popup-open');
    
    const popup_close = document.querySelectorAll('.js-popup-close');

    popup.forEach(function(element){
      element.addEventListener('click', function() {
        modal_wrap.classList.add('is-show');
      });
    });   

    popup_close.forEach(function(element){
      element.addEventListener('click', function() {
        modal_wrap.classList.remove('is-show');
      });
    });   
  }
popupImage();
</script>