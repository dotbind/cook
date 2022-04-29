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
                @if(count($post->post_images) > 0)
                    @foreach ($post->post_images as $post_image)
                        <img src="{{$post_image->url}}" alt="" srcset="" width="80">
                    @break;
                    @endforeach
                @else
                    no image.
                @endif
                
            
                
        </div>
        <div class="col-6">
            <dl>
                <dt>Like:</dt><dd>{{$post->like_count}}</dd>
                <dt>create:</dt><dd>{{$post->created_at}}</dd>
                <dt>update:</dt><dd>{{$post->update_at}}</dd>
            </dl>
        </div>
        <div class="col-2">
            <a href=""><img src="./images/row_menu.svg" alt="" srcset="" class="text-righ"></a>
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