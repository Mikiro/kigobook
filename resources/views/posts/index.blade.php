@extends('layouts.app')

@section('content')

        <div class="container">
          <div class="">
            <a href="posts/springWords" class="card text-white bg-warning mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center">春の季語</h1>
              </div>
            </a>
            
            <a href="posts/summerWords" class="card text-white bg-success mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center">夏の季語</h1>
              </div>
            </a>
            
            <a href="posts/fallWords" class="card text-white bg-secondary mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center">秋の季語</h1>
              </div>
            </a>
            
            <a href="posts/winterWords" class="card text-white bg-primary mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center">冬の季語</h1>
              </div>
            </a>
            
            <a href="/posts/newYearWords" class="card text-white bg-danger mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center">新年の季語</h1>
              </div>
            </a>
            
            <a href="posts/kigobook" class="card text-white bg-info mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center">俳句集を詠む</h1>
              </div>
            </a>
            
            <a href="/posts/search" class="card text-white bg-dark mb-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="text-center">検索する</h1>
              </div>
            </a>
            </div>
        </div>
      
    
@endsection


