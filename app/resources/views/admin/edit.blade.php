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
<form action="/admin/put" method="POST" enctype="multipart/form-data">
    @csrf

	<input type="file" id="file" name="file[]" class="form-control" multiple>

    <select id="year" name="year">
    </select>
    / 
    <select id="month" name="month">
    </select>
    /
    <select id="day" name="day">
    </select>
    <select name="cook_type">
    @foreach($cook_type as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
    @endforeach
    </select>
    <textarea name="comment">
        {{$posts->comment}}
    </textarea>
    <input type="hidden" value="{{$id}}">
    <button type="submit">保存</button>
</form>
</div>

    
@endsection