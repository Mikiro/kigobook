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
     
     
     .vertical td {
       
         font-size: calc(2.0rem + ((1vw - 0.64rem) * 0.9143));/* 20px~24pxで可変*/
         /*line-height: 1.3;*/
         font-weight: normal;
     }
     
     
       
    /*font-size: calc(2.2rem + ((1vw - 0.64rem) * 0.7143));*/
        
     
     .text-combine{
        text-combine-upright: all;
        -webkit-text-combine: horizontal;
        -ms-text-combine-horizontal: all;
    }
    
    @media screen and (max-height: 568px) {
   /* 縦幅が568px以下の場合に適用するスタイル */
       .row{height:400px!important;}
    }
    
   
  
    </style>
    

    <div class="vertical mw-100 overflow-auto panel panel-default mx-auto">
     
         <div class="row" style="margin-right: 15px; height:640px;">
             
            @foreach($words as $word)
                <div class="" style=" margin-right: 15px;">
                    <table class="table-hover">
                        <tr>
                            <td class="text-nowrap my-2 mx-3" style="height: 100%; line-height: 2.0; font-weight:800;">{{$word->name}}</td>
                        </tr>
                         @foreach($word->posts as $post )
                         
                        <table class="table-hover">
                            <tr>
                                <td class="text-nowrap" height="630">{{$post->content_upper}}{{$post->content_middle}}{{$post->content_bottom}}</td>
                            </tr>
                        </table>
                        <table class="table-hover border-left">
                            <tr>
                                <td height="277"></td>
                                <td height="277"class="text-nowrap">{{ $post->author}}</td>
                                <td height="66" class="text-nowrap">{{$post->date}} <span class="text-combine">{{$post->year}}</span></td>
                            </tr>
                        </table>
                       
                         @endforeach
                    </table>
                </div>
            @endforeach
        </div>
        
    </div>
 
@endsection


