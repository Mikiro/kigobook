@extends('layouts.app')

@section('content')
      
    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($posts as $post)
                <table>
                    <tr>
                        <td>{{ $post->content_upper}}</td>
                        <td>{{ $post->content_middle}}</td>
                        <td>{{ $post->content_bottom}}</td>
                        <td>{{ $post->author}}</td>
                        <td> 
                            <p class="post_date">{{ $post->date}}</p>
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="paginate">
                {{ $posts->links() }}
            </div>
        </div>
            
    </body1>
 
@endsection


