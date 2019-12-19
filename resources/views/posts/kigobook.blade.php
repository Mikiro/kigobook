@extends('layouts.app')

@section('content')

    <body1 class="mw-100 overflow-auto">
        <div id="">
            <div class="mw-100 overflow-auto">
                <div class="row mw-100 overflow-auto">
                    @foreach($posts as $post)
                        <table class="mw-100 overflow-auto">
                            <tr class="mw-100">
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
        </div>
    </body1>
 
@endsection


