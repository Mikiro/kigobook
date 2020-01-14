@extends('layouts.app')

@section('content')
      
    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($summerWordPosts as $summerWordPost)
                <table>
                    <tr class="border-left">
                        <td>{{ $summerWordPost->content_upper}}{{ $summerWordPost->content_middle}}{{ $summerWordPost->content_bottom}}</td>
                        <td>{{ $summerWordPost->author}}</td>
                        <td><p class="post_date">{{ $summerWordPost->date}}</p></td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </body1>
 
@endsection


