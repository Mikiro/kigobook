@extends('layouts.app')

@section('content')
      
        <div class="card text-center">
            <div class="card-header">
                <h1>季語別俳句集</h1>
            </div>
            <div class="card-body mx-auto">
                <div "table-responsive-md">
                    
                    <table class="table">
                       @foreach ($winterWords->chunk(10) as $chunk)
                        <div class="row">
                               @foreach($chunk as $winterWord)
                               <div class="m-2">
                                    <a class="btn btn-primary" href="{{ route('posts.winterWordPost', $winterWord) }}" role="button">{{ $winterWord->name }}</a>
                               </div>
                               @endforeach
                         </div> 
                        
                       @endforeach
                    </table>
                    
                </div>       
            </div>
            <div class="card-footer text-muted">
                
            </div>
        </div>  
 
@endsection


