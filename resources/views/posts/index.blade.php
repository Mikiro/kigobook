@extends('layouts.app')
@section('content')

    <style type="text/css">
            .image-book {
            background-image: url(image/book.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            
            height: 768px;
            width: 1024px;
          }
          
    .vertical {
          font-family: 'Yu Mincho', YuMincho, 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', 'HGP明朝B', serif;
          -webkit-font-feature-settings: 'pkna';
          /*font-feature-settings: 'pkna';*/
          
          -moz-column-count: 10;
          -ms-column-count: 10;
          -webkit-column-gap: 10;
          -moz-column-gap: 10;
          -ms-column-gap: 10;
         
          line-height: 2.9; /* ←tableの幅に関わる*/
          letter-spacing: 0.06em;
          -webkit-writing-mode: vertical-rl;
          -ms-writing-mode: tb-rl;
          -epubg-writing-mode: tb-rl;
          writing-mode: tb-rl;
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
     
     
    /*font-size: calc(2.2rem + ((1vw - 0.64rem) * 0.7143));*/
        
     .text-combine{
        text-combine-upright: all;
        -webkit-text-combine: horizontal;
        -ms-text-combine-horizontal: all;
    }
    
      @media screen and (max-height: 823px) {
   /* 縦幅が823px以下の場合に適用するスタイル */
       .row{height:500px!important;}
       .image-book{height:500px!important;}
    }
    
    @media screen and (max-height: 568px) {
   /* 縦幅が568px以下の場合に適用するスタイル */
       .row{height:400px!important;}
       .image-book{height:400px!important;}
    }
    
    </style>

        <div class="container">
          <div class="row">
              <div class="image-book vertical img-fluid" alt="">
                  <table border="1" class="table table-responsive">
                      <tr>
                          <td><p>季語別俳句集</p></td>
                      </tr>
                      <tr>
                          <td class="">
                              <a href="/posts/search" class="text-white bg-dark mb-3 mt-3" style="text-decoration: none;">
                              検索する</a>      
                          </td>
                      </tr>
                      <tr>
                          <td class="">
                              <a href="posts/kigobook" class="text-white bg-info mb-3 mt-3" style="text-decoration: none;">
                              歳時記を読む</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="">
                              <a href="posts/springWords" class="text-white bg-warning mb-3 mt-3" style="text-decoration: none;">
                              春の季語</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="">
                              <a href="posts/summerWords" class="text-white bg-success mb-3 mt-3" style="text-decoration: none;">
                             夏の季語</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="">
                              <a href="posts/fallWords" class="text-white bg-secondary mb-3 mt-3" style="text-decoration: none;">
                              秋の季語</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="">
                              <a href="posts/winterWords" class="text-white bg-primary mb-3 mt-3" style="text-decoration: none;">
                              冬の季語</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="">
                              <a href="/posts/newYearWords" class="text-white bg-danger mb-3 mt-3" style="text-decoration: none;">
                              新年の季語</h1></a>
                          </td>
                      </tr>
                  </table>
           
               </div>
            </div>
        </div>
    
@endsection


