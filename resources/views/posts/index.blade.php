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
         width: 60px;
         font-size: calc(2.0rem + ((1vw - 0.54rem) * 0.5143));/* 20px~24pxで可変*/
         /*line-height: 1.3;*/
         font-weight: normal;
     }
     
     .vertical tr {
         width: 60px;
     }
    /*font-size: calc(2.2rem + ((1vw - 0.64rem) * 0.7143));*/
        
     .text-combine{
        text-combine-upright: all;
        -webkit-text-combine: horizontal;
        -ms-text-combine-horizontal: all;
    }
    
    </style>

        <div class="container">
          <div class="row">
              <div class="image-book vertical">
                  <table>
                      <tr>
                          <td><img src="image/topimage.png"></img></td>
                      </tr>
                      <tr>
                          <td class="text-center">
                              <a href="/posts/search" class="text-white bg-dark mb-3 mt-3" style="text-decoration: none;">
                              <i class="fas fa-search-plus"></i> 検索する</a>      
                          </td>
                      </tr>
                      <tr>
                          <td class="text-center">
                              <a href="posts/kigobook" class="text-white bg-info mb-3 mt-3" style="text-decoration: none;">
                              <i class="fas fa-book-open"></i> 歳時記を読む</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="text-center">
                              <a href="posts/springWords" class="text-white bg-warning mb-3 mt-3" style="text-decoration: none;">
                              <i class="fas fa-frog"></i> 春の季語</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="text-center">
                              <a href="posts/summerWords" class="text-white bg-success mb-3 mt-3" style="text-decoration: none;">
                              <i class="fas fa-umbrella-beach"></i> 夏の季語</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="text-center">
                              <a href="posts/fallWords" class="text-white bg-secondary mb-3 mt-3" style="text-decoration: none;">
                              <i class="fas fa-leaf"></i> 秋の季語</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="text-center">
                              <a href="posts/winterWords" class="text-white bg-primary mb-3 mt-3" style="text-decoration: none;">
                              <i class="fas fa-snowman"></i> 冬の季語</a>
                          </td>
                      </tr>
                      <tr>
                          <td class="text-center">
                              <a href="/posts/newYearWords" class="text-white bg-danger mb-3 mt-3" style="text-decoration: none;">
                              <i class="fas fa-kiwi-bird"></i> 新年の季語</h1></a>
                          </td>
                      </tr>
                  </table>
           
               </div>
            </div>
        </div>
    
@endsection


