@extends('layouts.app')

@section('content')
      
    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($testPosts as $testPost)
                <table>
                    <tr>
                        <td>{{ $testPost->content_upper}}</td>
                        <td>{{ $testPost->content_middle}}</td>
                        <td>{{ $testPost->content_bottom}}</td>
                        <td>{{ $testPost->author}}</td>
                        <td> 
                            <p class="post_date">{{ $testPost->date}}</p>
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="paginate">
                {{ $testPosts->links() }}
            </div>
        </div>
            
    </body1>
 
@endsection


