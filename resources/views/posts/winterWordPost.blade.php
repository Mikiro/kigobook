@extends('layouts.app')

@section('content')
      
    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($winterWordPosts as $winterWordPost)
                <table>
                    <tr>
                        <td>{{ $winterWordPost->content_upper}}{{ $winterWordPost->content_middle}}{{ $winterWordPost->content_bottom}}</td>
                        <td>{{ $winterWordPost->author}}</td>
                        <td><p class="post_date">{{ $winterWordPost->date}}</p></td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </body1>
 
@endsection


