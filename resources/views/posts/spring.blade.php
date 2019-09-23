@extends('layouts.app')

@section('content')
      
    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($springPosts as $springPost)
                <table>
                    <tr>
                        <td>{{ $springPost->content_upper}}</td>
                        <td>{{ $springPost->content_middle}}</td>
                        <td>{{ $springPost->content_bottom}}</td>
                        <td>{{ $springPost->author}}</td>
                        <td> 
                            <p class="post_date">{{ $springPost->date}}</p>
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="paginate">
                {{ $springPosts->links() }}
            </div>
        </div>
            
    </body1>
 
@endsection


