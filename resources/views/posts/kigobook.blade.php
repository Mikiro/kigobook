@extends('layouts.app')

@section('content')

    <body1 class="mw-100 overflow-auto">
           
                <div class="row h-100">
                    @foreach($posts as $post)
                    <div class="">
                        <table class="border-left">
                            <tr class="h-75">
                                <td class="text-nowrap"><h2 style="height: 520px;">{{$post->content_upper}}{{$post->content_middle}}{{$post->content_bottom}}</h></td>
                            </tr>
                            <tr class="h-75">
                                <!--<td style="height: 100px;><h2 style="height: 100px;">&nbsp;</h2></td>-->
                                <td class="h-50"><h2 class="mb-auto" style="height: 300px;">{{$post->author}}</h2></td>
                                <td class="h-25"><h2 class="post_date">{{$post->date}}</h2></td>
                            </tr>
                        </table>
                    </div>
                    @endforeach
                </div>
            
    </body1>
 
@endsection


