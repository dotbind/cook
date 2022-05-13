@extends('layouts.base')

@section('title','新規作成')
    
@section('content')
<form action="/admin/create" method="POST" enctype="multipart/form-data">
    @csrf

    {{ csrf_field() }}
	<input type="file" id="file" name="file[]" class="form-control" multiple>

	
    <select id="year" name="year">
    </select>
    / 
    <select id="month" name="month">
    </select>
    /
    <select id="day" name="day">
    </select>
    
    <button type="submit">保存</button>
</form>


    
@endsection