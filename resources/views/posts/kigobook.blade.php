@extends('layouts.app')

@section('content')

    <body1 class="mw-100 overflow-auto">
           
                <div class="row h-100">
                    @foreach($posts as $post)
                    <div class="poem">
                        <table class="border-left">
                            <tr class="h-75">
                                <td class="text-nowrap"><h2 style="height: 520px;">{{$post->content_upper}}{{$post->content_middle}}{{$post->content_bottom}}</h></td>
                            </tr>
                            <tr class="h-75">
                                <td class="h-65"><h2 class="" style="margin-top: 260px">{{$post->author}}</h2></td>
                                <td class="h-35"><h2 class="post_date" style="margin-top: 5px">{{$post->date}}</h2></td>
                            </tr>
                        </table>
                    </div>
                    @endforeach
                </div>
            
    </body1>
 
@endsection


