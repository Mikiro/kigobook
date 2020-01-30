@extends('layouts.app')

@section('content')

    <body1 class="mw-100 overflow-auto">
           
                <!--<div class="row">-->
                <!--    @foreach($posts as $post)-->
                <!--    <div class="poem">-->
                <!--        <table class="border-left">-->
                <!--            <tr class="">-->
                <!--                <td class="text-nowrap"><h2 class="mt-0 mb-0" style="height: 200px;">{{$post->content_upper}}{{$post->content_middle}}{{$post->content_bottom}}</h2></td>-->
                <!--            </tr>-->
                <!--            <tr class="">-->
                <!--                <td><div class="h2 text-nowrap" style="margin-top: 240px;">{{$post->author}}</div></td>-->
                <!--                <td class=""><div class="h2 text-nowrap" style="height=""margin-top: 5px">{{$post->date}}</div></td>-->
                <!--            </tr>-->
                <!--        </table>-->
                <!--    </div>-->
                <!--    @endforeach-->
                <!--</div>-->
                
                <div class="container">
                    @foreach($posts as $post)
                    <div class="row no-gutters">
                        <div class="col-12">
                            <h2 class="text-nowrap mt-0 mb-0" style="height: 600px;">{{$post->content_upper}}{{$post->content_middle}}{{$post->content_bottom}}</h2>
                        </div>
                        <div class="col h2 text-nowrap" style="height: 300px margin-top: 240px;">{{$post->author}}</div>
                        <div class="col h2 text-nowrap">{{$post->date}}</div>
                    </div>
                    @endforeach
                </div>
            
    </body1>
 
@endsection


