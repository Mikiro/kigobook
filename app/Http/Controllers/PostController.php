<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Word;

use Illuminate\Support\Facades\Auth;


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

}
