@extends('layouts.app')

@section('content')
      
    <body1 >
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($summerPosts as $summerPost)
                <table>
                    <tr>
                        <td>{{ $summerPost->content_upper}}</td>
                        <td>{{ $summerPost->content_middle}}</td>
                        <td>{{ $summerPost->content_bottom}}</td>
                        <td>{{ $summerPost->author}}</td>
                        <td> 
                            <p class="post_date">{{ $summerPost->date}}</p>
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="paginate">
                {{ $summerPosts->links() }}
            </div>
        </div>
            
    </body1>
 
@endsection


