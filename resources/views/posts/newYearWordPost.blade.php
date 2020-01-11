@extends('layouts.app')

@section('content')

    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($newYearWordPosts as $newYearWordPost)
                <table>
                    <tr>
                        <td>{{ $newYearWordPost->content_upper}}{{ $newYearWordPost->content_middle}}{{ $newYearWordPost->content_bottom}}</td>
                        <td>{{ $newYearWordPost->author}}</td>
                        <td><p class="post_date">{{ $newYearWordPost->date}}</p></td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </body1>
 
@endsection


