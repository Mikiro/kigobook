@extends('layouts.app')

@section('content')
      
    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($fallPosts as $fallPost)
                <table>
                    <tr>
                        <td>{{ $fallPost->content_upper}}</td>
                        <td>{{ $fallPost->content_middle}}</td>
                        <td>{{ $fallPost->content_bottom}}</td>
                        <td>{{ $fallPost->author}}</td>
                        <td> 
                            <p class="post_date">{{ $fallPost->date}}</p>
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="paginate">
                {{ $fallPosts->links() }}
            </div>
        </div>
            
    </body1>
 
@endsection


