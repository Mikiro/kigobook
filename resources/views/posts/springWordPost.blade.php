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

          line-height: 2.9;
          letter-spacing: 0.06em;
          -webkit-writing-mode: vertical-rl;
          -ms-writing-mode: tb-rl;
          -epubg-writing-mode: tb-rl;
          /*writing-mode: tb-rl;*/
          text-indent: 0.7em;
          /*margin-left: 30px;*/
          
          /*font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Yu Gothic", YuGothic, Verdana, Meiryo, "M+ 1p", sans-serif;*/
          right: 0;
          
          font-size:1.6rem;/* 16px*/
          display: block;
          
     }
     
    .vertical td {
       
         font-size: calc(2.0rem + ((1vw - 0.54rem) * 0.5143));/* 20px~24pxで可変*/
         /*line-height: 1.3;*/
         font-weight: normal;
     }
     
     
     .vertical p {
         font-size: calc(4.5rem + ((1vw - 0.54rem) * 0.5143));
     }
     
     .text-combine{
        text-combine-upright: all;
        -webkit-text-combine: horizontal;
        -ms-text-combine-horizontal: all;
    }
    
      @media screen and (max-height: 823px) {
   /* 縦幅が823px以下の場合に適用するスタイル */
       .row{height:500px!important;}
    }
    
    @media screen and (max-height: 568px) {
   /* 縦幅が568px以下の場合に適用するスタイル */
       .row{height:400px!important;}
    }
    
    </style>
    
    <div class="vertical mw-100 overflow-auto panel panel-default panel-warning mx-auto">
         <div class="row" style="height:640px;">
            @foreach($springWordPosts as $springWordPost)
                <div class="" style=" margin-right: 15px;">
                    <table class="">
                        <tr>
                            <p class="text-nowrap" style="line-height: 1.0;  font-weight:1000; padding-top: 10px; padding-left: 10px; padding-right: 30px;">{{$springWordPost->name}}</p>
                        </tr>
                        <tr>
                            @isset ($springWordPost->photo)
                            <td style="padding-top: 20px;">
                                <a href="{{ Storage::disk('s3')->url("{$springWordPost->photo}") }}" data-lightbox="group">
                                    <img src="{{ Storage::disk('s3')->url("{$springWordPost->photo}") }}" class="" width="250" height="180"/>
                                </a>
                            </td>
                            @endisset
                            
                            <td class="" style="height: 450px; line-height: 1.0; font-weight:800; padding: 20px 10px 10px 10px;">{{$springWordPost->explain}}</td>
                        </tr>
                        <tr>
                            
                        </tr>
                         
                    </table>
                </div>
            @endforeach
            <div class="row" style="height:640px;">         
                @foreach($springWordPost->posts as $post )
                <div class="" style="margin-right: 15px;">
                        <table class="table-hover">
                            <tr>
                                <td class="text-nowrap" height="630" style="padding-top: 20px;">{{$post->content_upper}}{{$post->content_middle}}{{$post->content_bottom}}</td>
                            </tr>
                        </table>
                        <table class="table-hover border-left">
                            <tr>
                                <td height="277"></td>
                                <td height="277"class="text-nowrap">{{ $post->author}}</td>
                                <td height="66" class="text-nowrap">{{$post->date}} <span class="text-combine">{{$post->year}}</span> </td>
                            </tr>
                        </table>
                </div>
                @endforeach
            </div>
        </div>     
    </div>

    <!--<div class="vertical mw-100 overflow-auto mx-auto">-->
    <!--    <div class="row" style="margin-right: 15px;">-->
    <!--    @foreach($springWordPosts as $springWordPost)-->
    <!--        <div class="border-left" style="height: 500px; margin-right: 15px;">-->
    <!--            <table>-->
    <!--                <tr>-->
    <!--                    <td class="text-nowrap"><h3 class="mt-0 mb-0" style="height: 80px;">{{$springWordPost->name}}</h3></td>-->
    <!--                </tr>-->
    <!--                @foreach($springWordPost->posts as $post )-->
    <!--                <tr>-->
    <!--                    <td class="text-nowrap"><h2 class="mt-0 mb-0" style="height: 430px;">{{ $post->content_upper}}{{ $post->content_middle}}{{ $post->content_bottom}}</h2></td>-->
    <!--                </tr>-->
    <!--            </table>-->
    <!--            <table>-->
    <!--                <tr>-->
    <!--                    <td><h2 class="text-nowrap" style="margin-top: 150px; height: 170px;">{{ $post->author}}</h2></td>-->
    <!--                    <td><h2 class="text-nowrap" style="height: 40px margin-top: 10px">{{$post->date}}</h2></td>-->
    <!--                    <td><h2 class="text-nowrap text-combine" style="height: 35px; margin-top: 0px">{{$post->year}}</h2></td>-->
    <!--                </tr>-->
    <!--            </table>-->
    <!--                @endforeach-->
    <!--        </div>-->
    <!--    @endforeach-->
    <!--    </div>-->
    <!--</div>-->
 
@endsection


