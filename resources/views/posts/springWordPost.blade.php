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
                    <tr>
                        <td>{{ $springWordPost->content_upper}}</td>
                        
                    </tr>
                </table>
                @endforeach
            </div>
           
        </div>
            
    </body1>
 
@endsection


