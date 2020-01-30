@extends('layouts.app')

@section('content')

    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div>
            <div class="container">
                @foreach($springWordPosts as $springWordPost)
                <table>
                    <tr>
                        <td><h2>{{ $springWordPost->content_upper}}{{ $springWordPost->content_middle}}{{ $springWordPost->content_bottom}}</h2></td>
                    </tr>
                    <tr class="border-left">
                        <td><h2>{{ $springWordPost->author}}</h2></td>
                        <td><h2 class="post_date">{{ $springWordPost->date}}</h2></td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </body1>
 
@endsection


