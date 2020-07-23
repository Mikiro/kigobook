@extends('layouts.app')

@section('content')

        <div class="container">
          
          <div class="row">
          <div class="image">
          
          <style type="text/css">
            .image {
            background-image: url(image/book.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            
            height: 768px;
            width: 1024px;
          }
          </style>
          
            
        
            
            <a href="/posts/search" class="text-white bg-dark mb-3 mt-3" style="text-decoration: none;">
              
                <h1 class="text-center"><i class="fas fa-search-plus"></i> 検索する</h1>
              
            </a>
            
            <a href="posts/kigobook" class="text-white bg-info mb-3 mt-3" style="text-decoration: none;">
             
                <h1 class="text-center"><i class="fas fa-book-open"></i> 歳時記を読む</h1>
              
            </a>
            
            <a href="posts/springWords" class="text-white bg-warning mb-3 mt-3" style="text-decoration: none;">
             
                <h1 class="text-center"><i class="fas fa-frog"></i>   春の季語</h1>
             
            </a>
            
            <a href="posts/summerWords" class="text-white bg-success mb-3 mt-3" style="text-decoration: none;">
             
                <h1 class="text-center"><i class="fas fa-umbrella-beach"></i> 夏の季語</h1>
            </a>
            
            <a href="posts/fallWords" class="text-white bg-secondary mb-3 mt-3" style="text-decoration: none;">
             
                <h1 class="text-center"><i class="fas fa-leaf"></i> 秋の季語</h1>
             
            </a>
            
            <a href="posts/winterWords" class="text-white bg-primary mb-3 mt-3" style="text-decoration: none;">
              
                <h1 class="text-center"><i class="fas fa-snowman"></i> 冬の季語</h1>
             
            </a>
            
            <a href="/posts/newYearWords" class="text-white bg-danger mb-3 mt-3" style="text-decoration: none;">
           
                <h1 class="text-center"><i class="fas fa-kiwi-bird"></i> 新年の季語</h1>
             
            </a>
           
           </div>
           <img src="image/topimage.png"></img>
            </div>
            </div>
           
        
      
    
@endsection


