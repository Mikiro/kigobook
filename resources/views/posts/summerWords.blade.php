@extends('layouts.app')

@section('content')
  
        <div class="card text-center">
            <div class="card-header">
                <h1>季語別俳句集</h1>
            </div>
            <div class="card-body mx-auto">
                <div "table-responsive-md">
                    
                    <table class="table">
                       @foreach ($summerWords->chunk(15) as $chunk)
                        <div class="row">
                               @foreach($chunk as $summerWord)
                               <div class="m-2">
                                <a class="btn btn-success" href="{{ route('posts.summerWordPost', $summerWord) }}" role="button">{{ $summerWord->name }}</a>
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


