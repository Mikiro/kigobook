@extends('layouts.app')

@section('content')

        <div class="container">
          
          
          <style type="text/css">
            .container {
            background-image: url(image/book.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            
            height: 768px;
            width: 1024px;
          }
          </style>
          
            
          <div class="card" style="width: 30%" >
            
            <a href="/posts/search" class="card text-white bg-dark mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-search-plus"></i> 検索する</h1>
              </div>
            </a>
            
            <a href="posts/kigobook" class="card text-white bg-info mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-book-open"></i> 歳時記を読む</h1>
              </div>
            </a>
            
            <a href="posts/springWords" class="card text-white bg-warning mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-frog"></i>   春の季語</h1>
              </div>
            </a>
            
            <a href="posts/summerWords" class="card text-white bg-success mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-umbrella-beach"></i> 夏の季語</h1>
              </div>
            </a>
            
            <a href="posts/fallWords" class="card text-white bg-secondary mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-leaf"></i> 秋の季語</h1>
              </div>
            </a>
            
            <a href="posts/winterWords" class="card text-white bg-primary mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-snowman"></i> 冬の季語</h1>
              </div>
            </a>
            
            <a href="/posts/newYearWords" class="card text-white bg-danger mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center"><i class="fas fa-kiwi-bird"></i> 新年の季語</h1>
              </div>
            </a>
           
            
            </div>
             </div>
        
      
    
@endsection


