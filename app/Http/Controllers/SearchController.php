<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use App\Post;
use App\Category;
use App\Word;

class SearchController extends Controller
{
    public function index(Request $request){
        //キーワードを取得
        $keyword = $request->input('keyword');

        //もしキーワードが入力されている場合
        if(!empty($keyword))
        {   
            //料理名から検索
            $categories = DB::table('categories')
                    ->where('name', 'like', '%'.$keyword.'%')
                    ->paginate(4);

            //リレーション関係にあるテーブルの材料名から検索
            $categories = Category::whereHas('words', function ($query) use ($keyword){
                $query->where('word', 'like','%'.$keyword.'%');
            })->paginate(4);

        }else{//キーワードが入力されていない場合
            $ca = DB::table('categories')->paginate(4);
        }
        //検索フォームへ
        return view('search.index',[
            'categories' => $categories,
            'keyword' => $keyword,
            ]);
        
    }
}
