@extends('layouts.app')

@section('content')

//検索フォーム
   <div class="container">
       <div class="row">
            <div class="col-md-3">   
                <form class="form-inline">
                    <div class="form-group">
                    <input type="text" name="keyword" value="{{ $keyword }}"
                    placeholder="季語か季節を入力">
                    <input type="submit" value="検索" >
                    </div>
                </form>
            </div>
        </div>
    </div>

    //の表示
    <div class="container">
        @if(count($categories) > 0)
          <div class="row">
            @foreach($categories as $category)
            <div class="col-md-3">
              {{ $category->name }}
            </div>
            @endforeach
           </div>
        @endif
　　　　　　　　　　　　　　　　//ページネーション機能
        <div class="paginate">
            {{ $categories->render('pagination::bootstrap-4') }}
        </div>
     </div>
     
@endsection