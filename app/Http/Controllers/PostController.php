<?php

namespace App\Http\Controllers;

use Request;
use App\Post;
use App\Category;
use App\Word;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Eloquent\ModelNotFoundException;



class PostController extends Controller
{
    
   

    
    
    public function index()
    {
        
        return view('posts.index');
                                  
    }
    
    public function kigobook()
    {
        $words = Word::with('posts')->orderBy('yomigana','asc')
        ->paginate(10);
        
        return view('posts.kigobook')->with('words',$words);
    }
    
//     public function create()
//     {
        
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
        

//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show()
//     {
       
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit()
//     {
      
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request)
//     {
   
//     }


//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
       
//     }
    
    
    
//     public function SpringWords()
//     {
    
//     $springWordsTimes = Word::whereIn('category_id', [1])->orderBy('yomigana','asc')->get();
//     $springWordsAstronomies = Word::whereIn('category_id', [2])->orderBy('yomigana','asc')->get();
//     $springWordsGeographies = Word::whereIn('category_id', [3])->orderBy('yomigana','asc')->get();
//     $springWordsLives = Word::whereIn('category_id', [4])->orderBy('yomigana','asc')->get();
//     $springWordsEvents = Word::whereIn('category_id', [5])->orderBy('yomigana','asc')->get();
//     $springWordsAnimals = Word::whereIn('category_id', [6])->orderBy('yomigana','asc')->get();
//     $springWordsPlants = Word::whereIn('category_id', [7])->orderBy('yomigana','asc')->get();
//     return view('posts.springWords')->with('springWordsTimes', $springWordsTimes)
//                                     ->with('springWordsAstronomies', $springWordsAstronomies)
//                                     ->with('springWordsGeographies', $springWordsGeographies)
//                                     ->with('springWordsLives', $springWordsLives)
//                                     ->with('springWordsEvents', $springWordsEvents)
//                                     ->with('springWordsAnimals', $springWordsAnimals)
//                                     ->with('springWordsPlants', $springWordsPlants);
//     }
    
//     public function SpringWordPost(){
        
//         $springWordPosts = Word::whereHas('posts', function ($query) {
//             $query->where('word_id',  request('id'));
            
//         })->get();
        
//     if($springWordPosts->isEmpty()) {
//         abort('404');
//     }
//     //ずっとnullを使っていた isEmpty()で勝利！
//         return view('posts.springWordPost')->with('springWordPosts',$springWordPosts);
//     }
    
    
//     public function SummerWords(){
        
//     $summerWordsTimes = Word::whereIn('category_id', [8])->orderBy('yomigana','asc')->get();
//     $summerWordsAstronomies = Word::whereIn('category_id', [9])->orderBy('yomigana','asc')->get();
//     $summerWordsGeographies = Word::whereIn('category_id', [10])->orderBy('yomigana','asc')->get();
//     $summerWordsLives = Word::whereIn('category_id', [11])->orderBy('yomigana','asc')->get();
//     $summerWordsEvents = Word::whereIn('category_id', [12])->orderBy('yomigana','asc')->get();
//     $summerWordsAnimals = Word::whereIn('category_id', [13])->orderBy('yomigana','asc')->get();
//     $summerWordsPlants = Word::whereIn('category_id', [14])->orderBy('yomigana','asc')->get();
//     return view('posts.summerWords')->with('summerWordsTimes', $summerWordsTimes)
//                                     ->with('summerWordsAstronomies', $summerWordsAstronomies)
//                                     ->with('summerWordsGeographies', $summerWordsGeographies)
//                                     ->with('summerWordsLives', $summerWordsLives)
//                                     ->with('summerWordsEvents', $summerWordsEvents)
//                                     ->with('summerWordsAnimals', $summerWordsAnimals)
//                                     ->with('summerWordsPlants', $summerWordsPlants);
        
//     }
    
//     public function SummerWordPost(){
        
// 	    $summerWordPosts = Word::whereHas('posts', function ($query){
// 	        $query->where('word_id', request('id'));
// 	    })->get(); 
	    
// 	    if($summerWordPosts->isEmpty()) {
//         abort('404');
//     }
	   
//         return view('posts.summerWordPost')->with('summerWordPosts',$summerWordPosts);
//     }
    
    
    
//     public function fallWords(){
        
//     $fallWordsTimes = Word::whereIn('category_id', [15])->orderBy('yomigana','asc')->get();
//     $fallWordsAstronomies = Word::whereIn('category_id', [16])->orderBy('yomigana','asc')->get();
//     $fallWordsGeographies = Word::whereIn('category_id', [17])->orderBy('yomigana','asc')->get();
//     $fallWordsLives = Word::whereIn('category_id', [18])->orderBy('yomigana','asc')->get();
//     $fallWordsEvents = Word::whereIn('category_id', [19])->orderBy('yomigana','asc')->get();
//     $fallWordsAnimals = Word::whereIn('category_id', [20])->orderBy('yomigana','asc')->get();
//     $fallWordsPlants = Word::whereIn('category_id', [21])->orderBy('yomigana','asc')->get();
//     return view('posts.fallWords')->with('fallWordsTimes', $fallWordsTimes)
//                                     ->with('fallWordsAstronomies', $fallWordsAstronomies)
//                                     ->with('fallWordsGeographies', $fallWordsGeographies)
//                                     ->with('fallWordsLives', $fallWordsLives)
//                                     ->with('fallWordsEvents', $fallWordsEvents)
//                                     ->with('fallWordsAnimals', $fallWordsAnimals)
//                                     ->with('fallWordsPlants', $fallWordsPlants);
        
//     }
    
//     public function fallWordPost()
//     {
        
// 	$fallWordPosts = Word::whereHas('posts', function ($query){
// 	    $query->where('word_id', request('id'));
// 	 })->get(); 
	 
// 	  if($fallWordPosts->isEmpty()) {
//         abort('404');
//     }

// 	return view('posts.fallWordPost')->with('fallWordPosts',$fallWordPosts);
//     }
    
    
    
//     public function WinterWords()
//     {
        
// 	$winterWordsTimes = Word::whereIn('category_id', [22])->orderBy('yomigana','asc')->get();
//     $winterWordsAstronomies = Word::whereIn('category_id', [23])->orderBy('yomigana','asc')->get();
//     $winterWordsGeographies = Word::whereIn('category_id', [24])->orderBy('yomigana','asc')->get();
//     $winterWordsLives = Word::whereIn('category_id', [25])->orderBy('yomigana','asc')->get();
//     $winterWordsEvents = Word::whereIn('category_id', [26])->orderBy('yomigana','asc')->get();
//     $winterWordsAnimals = Word::whereIn('category_id', [27])->orderBy('yomigana','asc')->get();
//     $winterWordsPlants = Word::whereIn('category_id', [28])->orderBy('yomigana','asc')->get();
//     return view('posts.winterWords')->with('winterWordsTimes', $winterWordsTimes)
//                                     ->with('winterWordsAstronomies', $winterWordsAstronomies)
//                                     ->with('winterWordsGeographies', $winterWordsGeographies)
//                                     ->with('winterWordsLives', $winterWordsLives)
//                                     ->with('winterWordsEvents', $winterWordsEvents)
//                                     ->with('winterWordsAnimals', $winterWordsAnimals)
//                                     ->with('winterWordsPlants', $winterWordsPlants);
//     }
    
//     public function winterWordPost()
//     {
        
// 	$winterWordPosts = Word::whereHas('posts', function ($query){
// 	    $query->where('word_id', request('id'));
// 	})->get(); 
	
// 	if($winterWordPosts->isEmpty()) {
//         abort('404');
//     }

// 	return view('posts.winterWordPost')->with('winterWordPosts',$winterWordPosts);
//     }
    
    
    
//     public function newYearWords()
//     {
        
// 	$newYearWordsTimes = Word::whereIn('category_id', [29])->orderBy('yomigana','asc')->get();
//     $newYearWordsAstronomies = Word::whereIn('category_id', [30])->orderBy('yomigana','asc')->get();
//     $newYearWordsGeographies = Word::whereIn('category_id', [31])->orderBy('yomigana','asc')->get();
//     $newYearWordsLives = Word::whereIn('category_id', [32])->orderBy('yomigana','asc')->get();
//     $newYearWordsEvents = Word::whereIn('category_id', [33])->orderBy('yomigana','asc')->get();
//     $newYearWordsAnimals = Word::whereIn('category_id', [34])->orderBy('yomigana','asc')->get();
//     $newYearWordsPlants = Word::whereIn('category_id', [35])->orderBy('yomigana','asc')->get();
//     return view('posts.newYearWords')->with('newYearWordsTimes', $newYearWordsTimes)
//                                     ->with('newYearWordsAstronomies', $newYearWordsAstronomies)
//                                     ->with('newYearWordsGeographies', $newYearWordsGeographies)
//                                     ->with('newYearWordsLives', $newYearWordsLives)
//                                     ->with('newYearWordsEvents', $newYearWordsEvents)
//                                     ->with('newYearWordsAnimals', $newYearWordsAnimals)
//                                     ->with('newYearWordsPlants', $newYearWordsPlants);
//     }
    
//     public function newYearWordPost()
//     {
        
// 	$newYearWordPosts = Word::whereHas('posts', function ($query){
// 	    $query->where('word_id', request('id'));
// 	})->get(); 
	
// 		if($newYearWordPosts->isEmpty()) {
//         abort('404');
//     }

// 	return view('posts.newYearWordPost')->with('newYearWordPosts',$newYearWordPosts);
//     }
    
    
//     public function noSeasonWords()
//     {
        
// 	$noSeasonWords = Word::whereIn('category_id', [36])->get();
// 	return view('posts.noSeasonWords')->with('noSeasonWords',$noSeasonWords);
//     }
    
//     public function noSeasonWordPost()
//     {
        
// 	$noSeasonWordPosts = Word::whereHas('posts', function ($query){
// 	    $query->where('word_id', request('id'));
// 	})->get(); 
	
// 		if($noSeasonWordPosts->isEmpty()) {
//         abort('404');
//     }

	return view('posts.noSeasonWordPost')->with('noSeasonWordPosts',$noSeasonWordPosts);
    }
    
    

    public function search(){
        $query = Post::query();
        $data = $query->get();
        return view('posts.search',compact('data'));
    }
    
    // public function result(Request $request)
    // {   
    //     // 検索するテキスト取得
    //     $q = Request::get('q');
    //     $category = Request::get('category');
    //     $word = Request::get('word');
    //     $author = Request::get('author');
    //     $content_upper = Request::get('content_upper');
    //     $content_middle = Request::get('content_middle');
    //     $content_bottom = Request::get('content_bottom');
    //     $query = Post::query();
        
        
      
        
    //     // 検索するテキストが入力されている場合のみ
    //     if (!empty($q)) {
    //         $query->where(function($query) use ($q){
            
               
    //             $query->whereHas('category', function($query) use ($q){ 
    //             $query->where('name','like', "%".$q ."%");
    //             });
             
              
    //             $query->orWhereHas('word', function($query) use ($q){ 
    //             $query->Where('name','like', "%". $q ."%");
    //             });
             
    //             $query->orwhere('author', 'LIKE', "%$q%")
    //             ->orWhere('content_upper', 'LIKE', "%$q%")
    //             ->orWhere('content_middle', 'LIKE', "%$q%")
    //             ->orWhere('content_bottom', 'LIKE', "%$q%");
    //             });
    //     }
        
    //     if(!empty($category)) {
    //         $query->whereHas('category', function($query) use ($category){ 
    //         $query->where('name','like', '%'.$category.'%');
    //         })->get();
    //     }
    //     if(!empty($word)) {
    //         $query->whereHas('word', function($query) use ($word){ 
    //         $query->where('name','like', '%'.$word.'%');
    //         })->get();
    //     }
    //     if(!empty($author)) {
    //         $query->where('author', 'like', '%'.$author.'%');
    //     }
    //     if(!empty($content_upper)) {
    //         $query->where('content_upper', 'like', '%'.$content_upper.'%');
    //     }
    //     if(!empty($content_middle)) {
    //         $query->where('content_middle', 'like', '%'.$content_middle.'%');
    //     }
    //     if(!empty($content_bottom)) {
    //         $query->where('content_bottom', 'like', '%'.$content_bottom.'%');
    //     }
    //     $data = $query->get();
    //     if(count($data) <= 0){
    //         return view('posts.search',compact('data'));
    //     }
        
        
    //     $data = $query->get();
    //     // $words = $data->where('word_id', request('id'))->get();
    //     // $data = $query->get();
    //      $post = DB::table('posts')->count();
    //     return view('posts.result', compact('data', 'category', 'word', 'author', 'content_upper', 'content_middle','content_bottom'));
        
        
    // }
}

