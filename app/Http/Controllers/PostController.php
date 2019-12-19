<?php

namespace App\Http\Controllers;

use Request;
use App\Post;
use App\Category;
use App\Word;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 


class PostController extends Controller
{
    public function index()
    {
        
        return view('posts.index');
                                  
    }
    
    public function kigobook()
    {
        
        // $posts = Post::simplePaginate(6);
        $posts = Post::all();
        return view('posts.kigobook')->with('posts',$posts);
                                  
    }
    
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
   
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
    
    public function Spring()
    {
        
    $springWords = Word::where('category_id', '1')->get();
    
    
    return view('posts.spring')->with('springWords',$springWords);
        
// 	$springPosts = Post::where('category_id', '1')->paginate(6);

// 	return view('posts.spring')->with('springPosts',$springPosts);
    }
    
    public function SpringWordPost(){
        
        $springWordPosts = Post::where('word_id', request('id'))->get(); 
        //::where('word_id' ,'1')->get();
        
        return view('posts.springWordPost')->with('springWordPosts',$springWordPosts);
    }
    
    public function Summer()
    {
    $words  = Word::pluck('name', 'id');
        
	$summerPosts = Post::where('category_id', '2')->paginate(6);

	return view('posts.summer')->with('summerPosts',$summerPosts);
    }
    
    public function fall()
    {
        
	$fallPosts = Post::where('category_id', '3')->paginate(6);

	return view('posts.fall')->with('fallPosts',$fallPosts);
    }
    
    public function Winter()
    {
        
	$winterPosts = Post::where('category_id', '4')->paginate(6);

	return view('posts.winter')->with('winterPosts',$winterPosts);
    }
    
    public function search(){
        return view('posts.search');
    }
    
    public function result(Request $request)
    {   
        // 検索するテキスト取得
        $q = Request::get('q');
        $category = Request::get('category');
        $word = Request::get('word');
        $author = Request::get('author');
        $content_upper = Request::get('content_upper');
        $content_middle = Request::get('content_middle');
        $content_bottom = Request::get('content_bottom');
        $query = Post::query();
        
        
        
        // 検索するテキストが入力されている場合のみ
        if (!empty($q)) {
            $query->where(function($query) use ($q){
            
               
                $query->whereHas('category', function($query) use ($q){ 
                $query->where('name','like', "%".$q ."%");
                });
             
              
                $query->orWhereHas('word', function($query) use ($q){ 
                $query->Where('name','like', "%". $q ."%");
                });
             
                $query->orwhere('author', 'LIKE', "%$q%")
                ->orWhere('content_upper', 'LIKE', "%$q%")
                ->orWhere('content_middle', 'LIKE', "%$q%")
                ->orWhere('content_bottom', 'LIKE', "%$q%");
                });
        }
        
        if(!empty($category)) {
            $query->whereHas('category', function($query) use ($category){ 
            $query->where('name','like', '%'.$category.'%');
            })->get();
        }
        if(!empty($word)) {
            $query->whereHas('word', function($query) use ($word){ 
            $query->where('name','like', '%'.$word.'%');
            })->get();
        }
        if(!empty($author)) {
            $query->where('author', 'like', '%'.$author.'%');
        }
        if(!empty($content_upper)) {
            $query->where('content_upper', 'like', '%'.$content_upper.'%');
        }
        if(!empty($content_middle)) {
            $query->where('content_middle', 'like', '%'.$content_middle.'%');
        }
        if(!empty($content_bottom)) {
            $query->where('content_bottom', 'like', '%'.$content_bottom.'%');
        }
        $data = $query->paginate(7);
        $post = DB::table('posts')->count();
        return view('posts.result', compact('data', 'category', 'word', 'author', 'content_upper', 'content_middle','content_bottom'));
    }
}

