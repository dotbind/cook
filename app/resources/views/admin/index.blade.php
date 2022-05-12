@extends('layouts.base')

@section('title','トップページ')
    
@section('content')
{{ Breadcrumbs::render('home') }}
<div class="container">
    <div class="row">
        <div class="col-11">
            <form action="/admin/" method="GET" novalidate>
                @csrf
            {{-- <input type="date" name="date" id="date"> --}}
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
        </div>
        <div class="col-1">
            <img src="./images/add_button.svg" alt="" srcset="" class="text-righ">
        </div>
    </div>
</div>
<div class="container">
    <table>
        <tr>
            <th>年月日<a href="/admin?sort_asc=date">▲</a><a href="/admin?sort_desc=date">▼</a></th><th>画像</th><th>Like<a href="/admin?sort_asc=like_count">▲</a><a href="/admin?sort_desc=like_count">▼</a></th><th>作成日<a href="/admin?sort_asc=created_at">▲</a><a href="/admin?sort_desc=created_at">▼</a></th><th>更新日<a href="/admin?sort_asc=updated_at">▲</a><a href="/admin?sort_desc=updated_at">▼</a></th><th></th>
        </tr>
    @foreach ($posts as $post)
        <tr>
            <td>
            {{$post->date}} {{config('const.'.$post->cook_type)}} 
            </td>
            <td>
                @if(count($post->post_images) > 0)
                    @foreach ($post->post_images as $post_image)
                        <img src="{{$post_image->url}}" alt="" srcset="" width="80">
                    @break;
                    @endforeach
                @else
                    no image.
                @endif
            </td>      
            <td>
                <div class="col-1">{{$post->like_count}}</div>
            </td>
            <td>
                {{$post->created_at}}
            </td>
            <td>
                {{$post->update_at}}
            </td>
            <td>
            <a href="edit/{{$post->id}}">編集</a>
            <a href="delete/{{$post->id}}">削除</a>
            </td>
        </tr>
    @endforeach
    </table>
{{$posts->appends(['sort' => $sort, 'order' => $order,])->links()}}


    
@endsection