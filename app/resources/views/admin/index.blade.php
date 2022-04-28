@extends('layouts.base')

@section('title','トップページ')
    
@section('content')
{{ Breadcrumbs::render('home') }}
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