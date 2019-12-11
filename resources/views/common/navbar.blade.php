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
                季節
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('posts.spring')}}">春の季語</a>
                    <a class="dropdown-item" href="{{ route('posts.summer')}}">夏の句</a>
                    <a class="dropdown-item" href="{{ route('posts.fall')}}">秋の句</a>
                    <a class="dropdown-item" href="{{ route('posts.winter')}}">冬の句</a>
                </div>
            </li>
          </ul>        
            <ul class="nav navbar-nav navbar-right">
                 <li class="">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">ログイン</a></li>
                        <li><a href="{{ route('register') }}">登録</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle text-secondary" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} 
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    ログアウト
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </li>
            </ul>
        </div>
    </nav>
</header>


 
    
  
