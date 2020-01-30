@extends('layouts.app')
@section('content')

    <style>
    .vertical {
          font-family: 'Yu Mincho', YuMincho, 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', 'HGP明朝B', serif;
          -webkit-font-feature-settings: 'pkna';
          /*font-feature-settings: 'pkna';*/
          
          -moz-column-count: 10;
          -ms-column-count: 10;
          -webkit-column-gap: 10;
          -moz-column-gap: 10;
          -ms-column-gap: 10;
         
          line-height: 3.9;
          letter-spacing: 0.06em;
          -webkit-writing-mode: vertical-rl;
          -ms-writing-mode: tb-rl;
          -epubg-writing-mode: tb-rl;
          writing-mode: tb-rl;
          text-indent: 1em;
          /*margin-left: 30px;*/
          
          /*font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Yu Gothic", YuGothic, Verdana, Meiryo, "M+ 1p", sans-serif;*/
          right: 0;
    
    }
    
    @media (min-width: 800px) {
    
    
          
        }
    
    </style>

    <div class="vertical mw-100 overflow-auto">
           
                <div class="container-lg row">
                    @foreach($posts as $post)
                    <div class="poem">
                        <table class="border-left">
                            <tr class="">
                                <td class="text-nowrap"><h2 class="mt-0 mb-0" style="height: 200px;">{{$post->content_upper}}{{$post->content_middle}}{{$post->content_bottom}}</h2></td>
                            </tr>
                            <tr class="">
                                <td><div class="h2 text-nowrap" style="margin-top: 240px;">{{$post->author}}</div></td>
                                <td class=""><div class="h2 text-nowrap" style="height=""margin-top: 5px">{{$post->date}}</div></td>
                            </tr>
                        </table>
                    </div>
                    @endforeach
                </div>
                
                <!--<div class="container">-->
                <!--    @foreach($posts as $post)-->
                <!--    <div class="row no-gutters">-->
                <!--        <div class="col-12">-->
                <!--            <h2 class="text-nowrap mt-0 mb-0" style="height: 600px;">{{$post->content_upper}}{{$post->content_middle}}{{$post->content_bottom}}</h2>-->
                <!--        </div>-->
                <!--        <div class="col h2 text-nowrap" style="height: 300px margin-top: 240px;">{{$post->author}}</div>-->
                <!--        <div class="col h2 text-nowrap">{{$post->date}}</div>-->
                <!--    </div>-->
                <!--    @endforeach-->
                <!--</div>-->
            
    </div>
 
@endsection


