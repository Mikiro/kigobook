@extends('layouts.app')

@section('content')
    <body>
            <div class="content">
                <div class="title m-b-md">
                    季語別俳句集
                </div>

                <div class="links">
                    <a href="{{ route('posts.index')}}">俳句一覧</a>
                    <a href="{{ route('posts.spring')}}">春の句</a>
                    <a href="{{ route('posts.summer')}}">夏の句</a>
                    <a href="{{ route('posts.fall')}}">秋の句</a>
                    <a href="{{ route('posts.winter')}}">冬の句</a>
                    <a href="{{ route('posts.search')}}">検索</a>
                </div>
        </div>
    </body>


@endsection
