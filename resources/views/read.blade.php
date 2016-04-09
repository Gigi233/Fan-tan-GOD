@extends('layouts/base')

@section('title', '阅读')

@section('head')
    @parent
    <link href="{{ asset('/css/read.css') }}" rel="stylesheet" />
@stop

@section('body')
    @parent
    <div class="read-trail">
        <header>
            <span>阅读轨迹</span>
        </header>
        @foreach ($post->ancestors as $ancestor)
            <a {{ $ancestor->id == $post->id ? 'class="active"' : '' }}
               href="{{ route('post.view', $ancestor->id) }}">
                <span class="title">{{ $ancestor->title }}</span>
                <p class="description">{{ $ancestor->description }}</p>
            </a>
        @endforeach
    </div>
    <div class="buttons">
        <a href="#"><i class="icon iconfont">&#xe624;</i></a>
        <a onclick="Bookmark(this)"><i class="icon iconfont">&#xe647;</i></a>
        <a><i class="icon iconfont">&#xe655;</i></a>
        @if ($post->isLiked(Auth::id()))
        <a class="active" onclick="Like(this)">
            <i class="icon iconfont">&#xe982;</i>
        </a>
        @else
        <a onclick="Like(this)">
            <i class="icon iconfont">&#xe982;</i>
        </a>
        @endif
    </div>
    <div class="main-read-area">
        <div class="post-title">
            <header>{{ $post->title }}</header>
            <div class="meta-info">
                <label>作者：</label>
                <span>{{ $post->user->username }}</span>
                <label>发布时间：</label>
                <span>{{ $post->created_at }}</span>
            </div>
        </div>
        <div class="post-content">{{ $post->content }}</div>
    </div>
    <header class="choices-header">
        <span>选择路线</span>
    </header>
    <div class="choices">
        @foreach ($post->childPosts as $child)
            <a href="{{ route('post.view', $child->id) }}">
                <span class="title">{{ $child->title }}</span>
                <p class="description">{{ $child->description }}</p>
            </a>
        @endforeach
        <a class="new-choice" href="#">
            <span class="title"><i class="icon iconfont">&#xe655;</i>续写新故事</span>
        </a>
    </div>
    <script>
        function Like(ctrl) {
            var to = !$(ctrl).hasClass("active");
            var url = ['{{ route('post.unlike', $post->id) }}', '{{ route('post.like', $post->id) }}'][to ? 1 : 0];
            $.post(url, function (data) {
                if (data.success)
                    if (to)
                        $(ctrl).addClass("active");
                    else
                        $(ctrl).removeClass("active");
            });
        }
        function Bookmark(ctrl) {
            $.post('{{ route('post.bookmark', $post->id) }}', function (data) {
                if (data.success)
                    $(ctrl).addClass("active").removeProp('onclick');
            });
        }
    </script>
@stop