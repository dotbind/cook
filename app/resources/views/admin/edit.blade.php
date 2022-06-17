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

    
@endsection