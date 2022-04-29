@extends('layouts.base')

@section('title','トップページ')
    
@section('content')
{{ Breadcrumbs::render('home') }}
<div class="container">
    <div class="row">
        <div class="col-10">
            <form action="/admin/index" method="POST">
                @csrf
            <input type="date" name="date" id="date">
            <input type="submit" value="検索">
            </form>
        </div>
        <div class="col-2">
            <img src="./images/add_button.svg" alt="" srcset="" class="text-righ">
        </div>
    </div>
</div>
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-4">
            {{$post->date}} {{config('const.'.$post->cook_type)}}
        </div>
        <div class="col-2">
            
        </div>
        <div class="col-4">
        </div>
        <div class="col-2">
        </div>
    </div>
    @endforeach
</div>
<table>
    <tr><th>id</th><th>年月日</th><th>cook_type</th><th>comment</th><th>like_count</th><th>作成日</th><th>更新日</th><th>Post_image</th></tr>
@foreach ($posts as $post)
    <tr>
        <td>{{$post->id}}</td><td>{{$post->date}}</td><td>{{$post->cook_type}}</td><td>{{$post->comment}}</td><td>{{$post->like_count}}</td><td>{{$post->created_at}}</td><td>{{$post->updated_at}}</td>
        <td>
            @if($post->post_images != null)
            <table>
                @foreach ($post->post_images as $post_image)
                    <tr><td>{{$post_image->id}}</td><td>{{$post_image->url}}</td></tr>    
                @endforeach
            </table>
            @endif
        </td>
    </tr>
@endforeach
</table>
    
@endsection