@extends('layouts.app')

@section('content')

    <body1 class="mx-auto">
        <div id="wrapper">
            <div class="container">
                <div class="row">
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
            </div>
            <div class="paginate">
                {{ $posts->links() }}
            </div>
        </div>
    </body1>
 
@endsection


