@extends('layouts.app')

@section('content')
      
    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($winterPosts as $winterPost)
                <table>
                    <tr>
                        <td>{{ $winterPost->content_upper}}</td>
                        <td>{{ $winterPost->content_middle}}</td>
                        <td>{{ $winterPost->content_bottom}}</td>
                        <td>{{ $winterPost->author}}</td>
                        <td> 
                            <p class="post_date">{{ $winterPost->date}}</p>
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="paginate">
                {{ $winterPosts->links() }}
            </div>
        </div>
            
    </body1>
 
@endsection


