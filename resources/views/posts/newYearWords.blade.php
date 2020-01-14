@extends('layouts.app')

@section('content')
  
        <div class="card text-center">
            <div class="card-header">
                <h1>季語別俳句集</h1>
            </div>
            <div class="card-body">
                <div "table-responsive-md">
                    
                    <table class="table">
                       @foreach ($newYearWords->chunk(8) as $chunk)
                        <div class="row">
                               @foreach($chunk as $newYearWord) 
                                <a href="{{ route('posts.newYearWordPost', $newYearWord) }}" class="btn btn-primary">{{ $newYearWord->name }}</a>
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


