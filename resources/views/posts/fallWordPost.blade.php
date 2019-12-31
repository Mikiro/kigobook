@extends('layouts.app')

@section('content')

    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($fallWordPosts as $fallWordPost)
                <table>
                    <tr>
                        <td>{{ $fallWordPost->content_upper}}{{ $fallWordPost->content_middle}}{{ $fallWordPost->content_bottom}}</td>
                        <td>{{ $fallWordPost->author}}</td>
                        <td><p class="post_date">{{ $fallWordPost->date}}</p></td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </body1>
 
@endsection


