@extends('layouts.base')

@section('title','新規作成')
    
@section('content')
{{ Breadcrumbs::render('add') }}
<div class="container">
<form action="/admin/create" method="POST" enctype="multipart/form-data">
    @csrf

	<input type="file" id="file" name="file[]" class="form-control" multiple>

    <input type="date" id="date" name="date">
    <select name="cook_type">
    @foreach($cook_type as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
    @endforeach
    </select>
    <textarea name="comment">
    </textarea>

    <button type="submit">保存</button>
</form>
</div>

    
@endsection