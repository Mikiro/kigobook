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
    
    public function SpringWords()
    {
        
    $springWords = Word::whereIn('category_id', [1,2,3,4,5,6,7])->get();
    
    
    return view('posts.springWords')->with('springWords',$springWords);
        
// 	$springPosts = Post::where('category_id', '1')->paginate(6);

// 	return view('posts.spring')->with('springPosts',$springPosts);
    }
    
    public function SpringWordPost(){
        
        $springWordPosts = Post::where('word_id', request('id'))->get(); 
        //::where('word_id' ,'1')->get();
        
        return view('posts.springWordPost')->with('springWordPosts',$springWordPosts);
    }
    
    public function SummerWords(){
        
    $summerWords = Word::whereIn('category_id', [8,9,10,11,12,13,14])->get();
    return view('posts.summerWords')->with('summerWords',$summerWords);
        
    }
    
    public function SummerWordPost(){
        // $words  = Word::pluck('name', 'id');
        
	    $summerWordPosts = Post::where('word_id', request('id'))->get(); 
        return view('posts.summerWordPost')->with('summerWordPosts',$summerWordPosts);
    }
    
    public function fallWords(){
        
    $fallWords = Word::whereIn('category_id', [15,16,17,18,19,20,21])->get();
    return view('posts.fallWords')->with('fallWords',$fallWords);
        
    }
    
    public function fallWordPost()
    {
        
	$fallWordPosts = Post::where('word_id', request('id'))->get(); 

	return view('posts.fallWordPost')->with('fallWordPosts',$fallWordPosts);
    }
    
    public function WinterWords()
    {
        
	$winterWords = Word::whereIn('category_id', [22,23,24,25,26,27,28])->get();
	return view('posts.winterWords')->with('winterWords',$winterWords);
    }
    
    public function winterWordPost()
    {
        
	$winterWordPosts = Post::where('word_id', request('id'))->get(); 

	return view('posts.winterWordPost')->with('winterWordPosts',$winterWordPosts);
    }
    
    public function newYearWords()
    {
        
	$newYearWords = Word::whereIn('category_id', [29,30,31,32,33,34,35])->get();
	return view('posts.newYearWords')->with('newYearWords',$newYearWords);
    }
    
    public function newYearWordPost()
    {
        
	$newYearWordPosts = Post::where('word_id', request('id'))->get(); 

	return view('posts.newYearWordPost')->with('newYearWordPosts',$newYearWordPosts);
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
        $data = $query->get();
        $post = DB::table('posts')->count();
        return view('posts.result', compact('data', 'category', 'word', 'author', 'content_upper', 'content_middle','content_bottom'));
    }
}

