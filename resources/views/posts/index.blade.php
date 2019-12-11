@extends('layouts.app')

@section('content')

        <div class="row justify-content-center bg-wihite">
          <div class="d-flex">
            <a href="posts/spring" class="card text-white bg-warning mb-3 mr-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="card-text-center">春</h1>
              </div>
            </a>
            
            <a href="posts/summer" class="card text-white bg-success mb-3 mr-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="card-text-center">夏</h1>
              </div>
            </a>
            
            <a href="posts/fall" class="card text-white bg-secondary mb-3 mr-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="card-text-center">秋</h1>
              </div>
            </a>
            
            <a href="posts/winter" class="card text-white bg-primary mb-3 mr-3 mt-3" style="text-decoration: none;">
              <div class="card-body">
                <h1 class="card-text-center">冬</h1>
              </div>
            </a>
            </div>
        </div>
        <div class="row justify-content-center">
          <div class="" style="width: 289px;">
            <div class="card bg-light">
              <div class="card-body">
                俳句集を詠む
              </div>
            </div>
          </div>
        </div>
        
    
@endsection


