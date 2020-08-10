<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar navbar-light" style="background-color: #e3f2fd;"> 
        <a class="navbar-brand" href="/"><i class="fas fa-home"></i> ホーム</a>
        <a class="navbar-brand" href="{{ route('posts.kigobook')}}"><i class="fas fa-book"></i> 季語別俳句集</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav">
              <li class="nav-item dropdown">
                  <a href="{{ route('posts.search')}}" class="text-secondary"><i class="fas fa-search"></i> 検索</a></li>
          </ul>
          <ul class="navbar-nav mr-auto">  
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                季節別季語
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('posts.springWords')}}">春の季語</a>
                    <a class="dropdown-item" href="{{ route('posts.summerWords')}}">夏の季語</a>
                    <a class="dropdown-item" href="{{ route('posts.fallWords')}}">秋の季語</a>
                    <a class="dropdown-item" href="{{ route('posts.winterWords')}}">冬の季語</a>
                    <a class="dropdown-item" href="{{ route('posts.newYearWords')}}">新年の季語</a>
                    <a class="dropdown-item" href="{{ route('posts.noSeasonWords')}}">無季語</a>
                </div>
            </li>
          </ul>        
        
        </div>
    </nav>
</header>


 
    
  
