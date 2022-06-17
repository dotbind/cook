@extends('layouts.base')

@section('title','トップページ')
    
@section('content')

{{ Breadcrumbs::render('home') }}
<div class="container">
    <div class="row">
        {{-- <div class="col-11">
            <form action="/admin/" method="GET" novalidate>
                @csrf
            <select id="year" name="year">
            </select>
            / 
            <select id="month" name="month">
            </select>
            /
            <select id="day" name="day">
            </select>
            <input type="submit" value="検索">
            </form>
        </div> --}}
        <div class="col-1">
            <a href="/admin/add"><img src="./images/add_button.svg" alt="" srcset="" class="text-righ"></a>
        </div>
    </div>
</div>
<div class="container">
    <table>
        <tr>
            <th>年月日<a href="/admin?sort_asc=date">▲</a><a href="/admin?sort_desc=date">▼</a></th>
            <th>画像</th>
            <th>Like<a href="/admin?sort_asc=like_count">▲</a><a href="/admin?sort_desc=like_count">▼</a></th>
            <th>コメント</th>
            <th>作成日<a href="/admin?sort_asc=created_at">▲</a><a href="/admin?sort_desc=created_at">▼</a></th>
            <th>更新日<a href="/admin?sort_asc=updated_at">▲</a><a href="/admin?sort_desc=updated_at">▼</a></th><th></th>
        </tr>
    @foreach ($posts as $post)
        <tr>
            <td>
            {{$post->date}} {{config('const.'.$post->cook_type)}} 
            </td>
            <td>
                @if(count($post->post_images) > 0)
                    @foreach ($post->post_images as $post_image)
                        <img src="/storage/images/{{$post_image->url}}" alt="" srcset="" width="80">
                    @break;
                    @endforeach
                @else
                    no image.
                @endif
            </td>      
            <td>
                {{$post->like_count}}
            </td>
            <td>
                {{$post->comment}}
            </td>
            <td>
                {{$post->created_at}}
            </td>
            <td>
                {{$post->update_at}}
            </td>
            <td>
            <a href="admin/edit/{{$post->id}}">編集</a>
            <button class="js-popup-open" type="button" data-delete-id="{{$post->id}}">削除</button>
            </td>
        </tr>
    @endforeach
    </table>
{{$posts->appends(['sort' => $sort, 'order' => $order,])->links()}}
@include('components.modal')
<form method="post" id="delete_form">
    @csrf
    <input type="hidden" name="delete_post_id" id="delete_post_id" value="" />
</form>


    
@endsection