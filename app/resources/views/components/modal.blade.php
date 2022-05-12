<button id="modalOpen" class="button">Click Me</button>
　　<div id="easyModal" class="modal">
　　　　<div class="modal-content">
　　　　　　<div class="modal-header">
　　　　　　　　<p>削除しますか？</p>
　　　　　　　　<span class="modalClose">×</span>
　　　　　　</div>
                <button>はい</button>
                <button>いいえ</button>
　　　　　　</div>
　　　　</div>
　　</div>
<script>
    function deletePost(postId) {
        document.querySelector("#delete_post_id").value = postId;
        document.querySelector("#delete_form").action = "{{ route('admin.delete') }}";
        document.querySelector("#delete_form").submit();
    }
//---- ここまで追加する ----
</script>