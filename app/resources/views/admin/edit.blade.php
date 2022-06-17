@extends('layouts.base')

@section('title','編集')
    
@section('content')
{{-- {{ Breadcrumbs::render('edit') }} --}}
<div class="container">
@if(count($post_images) > 0)
@foreach ($post_images as $image)
<img src="./{{$image->url}}" alt="">
@endforeach
    
@endif
<form action="/admin/update" method="POST" enctype="multipart/form-data">
    @csrf

    
	<input type="file" id="file" name="file[]" class="form-control" multiple>
    {{-- {{$post_images->url}} --}}
    @foreach ($post_images as $image)
        <img src="/storage/images/{{$image->url}}" width="180">
        <button data-delete-id="{{$image->id}}" id="confirm-delete" onclick="deletePost()">削除</button>
    @endforeach
    <input type="date" id="date" name="date" value="{{$posts->date}}">
    <select name="cook_type">
    @foreach($cook_type as $key => $value)
    @if ($posts->cook_type == $key)
    <option value="{{$key}}" selected>{{$value}}</option>
    @else
        <option value="{{$key}}">{{$value}}</option>
    @endif
    @endforeach
    </select>
    <textarea name="comment">
        {{$posts->comment}}
    </textarea>
    <input type="hidden" name="id" value="{{$id}}">
    <button type="submit">保存</button>
</form>
</div>
<form method="post" id="delete_form">
    @csrf
    <input type="hidden" name="id" value="{{$id}}">
    <input type="hidden" name="delete_post_id" id="delete_post_id" value="" />
</form>
@endsection
<script>
    function deletePost() {
          var confirm_delete = document.getElementById('confirm-delete');
          var postId = confirm_delete.dataset.deleteId; //popupImage()で設定した削除IDを取得
    
          document.querySelector("#delete_post_id").value = postId;
          document.querySelector("#delete_form").action = "{{ route('admin.delete_img') }}";
          document.querySelector("#delete_form").submit();
        }
    </script>