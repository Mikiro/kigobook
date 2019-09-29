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
        
        // $posts = Post::where('category_id', '1')->paginate(6);
       
        $posts = Post::paginate(6);
        return view('posts.index')->with('posts',$posts);
                                  
                                
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
        
	$springPosts = Post::where('category_id', '1')->paginate(6);

	return view('posts.spring')->with('springPosts',$springPosts);
    }
    
    public function Summer()
    {
        
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
    
    public function search(Request $request)
    {   
        // 検索するテキスト取得
        $category = Request::get('category');
        $word = Request::get('word');
        $author = Request::get('author');
        $content_upper = Request::get('content_upper');
        $content_middle = Request::get('content_middle');
        $content_bottom = Request::get('content_bottom');
        $query = Post::query();
        
        
        // 検索するテキストが入力されている場合のみ
        if(!empty($category)) {
            $query->where('category_id', 'like', '%'.$category.'%');
        }
        if(!empty($word)) {
            $query->where('word_id', 'like', '%'.$word.'%');
        }
        if(!empty($author)) {
            $query->where('author', 'like', '%'.$author.'%');
        }
        if(!empty($content_upper)) {
            $query->where('content_upper', 'like', '%'.$content_upper.'%');
        }if(!empty($content_middle)) {
            $query->where('content_middle', 'like', '%'.$content_middle.'%');
        }if(!empty($content_bottom)) {
            $query->where('content_bottom', 'like', '%'.$content_bottom.'%');
        }
        $data = $query->paginate(7);
        return view('posts.search', compact('data', 'category', 'word', 'author', 'content_upper', 'content_middle','content_bottom'));
    }
}

