<button id="modalOpen" class="button">Click Me</button>
　　<div id="easyModal" class="modal">
　　　　<div class="modal-content">
　　　　　　<div class="modal-header">
　　　　　　　　<p>削除しますか？</p>
　　　　　　　　<span class="modalClose">×</span>
　　　　　　</div>
　　　　　　<div  type="button" onclick="deleteTodo({{ $todo->id }})" class="modal-body">
                <button>はい</button>
                <button>いいえ</button>
　　　　　　</div>
　　　　</div>
　　</div>
<script>
    function deleteTodo(todoId) {
        document.querySelector("#select_todo_id").value = todoId;
        document.querySelector("#todo_form").action = "{{ route('admin.delete') }}";
        document.querySelector("#todo_form").submit();
    }
//---- ここまで追加する ----
</script>