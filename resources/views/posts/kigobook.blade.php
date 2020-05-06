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
          
          font-size:1.6rem;/* 16px*/
          display: block;
     }
     
     .vertical h2 {
        
         font-size: calc(2.2rem + ((1vw - 0.64rem) * 0.7143));/* 20px~24pxで可変*/
         /*line-height: 1.3;*/

     }
     
     .vertical h3 {
       
         font-size: calc(2.2rem + ((1vw - 0.64rem) * 0.7143));/* 20px~24pxで可変*/
         /*line-height: 1.3;*/
         font-weight: normal;
     }
     
     .text-combine{
        text-combine-upright: all;
        -webkit-text-combine: horizontal;
        -ms-text-combine-horizontal: all;
    }
    
  
    </style>
    

    <div class="vertical mw-100 overflow-auto panel panel-default mx-auto d-md-flex">
     
         <div class="row" style="margin-right: 15px; height:620px;">
             
            @foreach($words as $word)
                <div class="" style="height: 620px; margin-right: 15px;">
                    <table class="table-hover">
                        <tr>
                            <td class="text-nowrap"><h2 class="my-2 mx-3" style="height: 180px; line-height: 2.0;">{{$word->name}}</h3></td>
                        </tr>
                         @foreach($word->posts as $post )
                         
                        <table class="table-hover">
                            <tr>
                                <td class="text-nowrap"><h3 class="my-2 ml-4" style="height: 600px;">{{$post->content_upper}}{{$post->content_middle}}{{$post->content_bottom}}</h3></td>
                            </tr>
                        </table>
                        <table class="table-hover border-left">
                            <tr>
                                <td class=""><h3 class="text-nowrap mx-3" style="margin-top: 170px; height: 250px;">{{ $post->author}}</h2></td>
                                <td class=""><h3 class="text-nowrap mx-3" style="height: 40px margin-top: 60px">{{$post->date}}</h2></td>
                                <td><h3 class="text-nowrap text-combine mx-3" style="height: 55px; margin-top: 0px">{{$post->year}}</h2></td>
                            </tr>
                        </table>
                       
                         @endforeach
                    </table>
                </div>
            @endforeach
        </div>
        
    </div>
 
@endsection


