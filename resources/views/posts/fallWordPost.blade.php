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
          
     }
     
     .vertical h2 {
         font-size: 24px;
         font-size: calc(2rem + ((1vw - 0.64rem) * 0.7143));/* 20px~24pxで可変*/
         line-height: 1.3;
     }
     
     .vertical h3 {
         font-size: 15px;
         font-size: calc(2rem + ((1vw - 0.64rem) * 0.7143));/* 20px~24pxで可変*/
         line-height: 1.3;
     }
     
     .text-combine{
        text-combine-upright: all;
        -webkit-text-combine: horizontal;
        -ms-text-combine-horizontal: all;
    }
    
    </style>
    
    <div class="vertical mw-100 overflow-auto mx-auto">
        <div class="row" style="margin-right: 15px;">
        @foreach($fallWordPosts as $fallWordPost)
            <div class="border-left" style="height: 500px; margin-right: 15px;">
                <table>
                    <tr>
                        <td class="text-nowrap"><h3 class="mt-0 mb-0" style="height: 80px;">{{$fallWordPost->word->name}}</h3></td>
                    </tr>
                    <tr>
                        <td class="text-nowrap"><h2 class="mt-0 mb-0" style="height: 430px;">{{ $fallWordPost->content_upper}}{{ $fallWordPost->content_middle}}{{ $fallWordPost->content_bottom}}</h2></td>
                    </tr>
                 </table>
                 <table>
                    <tr>
                        <td><h2 class="text-nowrap" style="margin-top: 150px; height: 170px;">{{ $fallWordPost->author}}</h2></td>
                        <td><h2 class="text-nowrap" style="height: 40px margin-top: 10px">{{$fallWordPost->date}}</h2></td>
                        <td><h2 class="text-nowrap text-combine" style="height: 35px; margin-top: 0px">{{$fallWordPost->year}}</h2></td>
                    </tr>
                 </table>
            </div>
        @endforeach
        </div>
    </div>
 
@endsection
