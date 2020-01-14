@extends('layouts.app')

@section('content')

    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($springWordPosts as $springWordPost)
                <table>
                    <tr class="border-left">
                        <td>{{ $springWordPost->content_upper}}{{ $springWordPost->content_middle}}{{ $springWordPost->content_bottom}}</td>
                        <td>{{ $springWordPost->author}}</td>
                        <td><p class="post_date">{{ $springWordPost->date}}</p></td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </body1>
 
@endsection


