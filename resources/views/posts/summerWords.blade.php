@extends('layouts.app')

@section('content')
  
        <div class="card text-center">
            <div class="card-header">
                <h1>季語別俳句集</h1>
            </div>
            <div class="card-body">
                <div "table-responsive-md">
                    
                    <table class="table">
                       @foreach ($summerWords->chunk(8) as $chunk)
                        <div class="row">
                               @foreach($chunk as $summerWord) 
                                <a href="{{ route('posts.summerWordPost', $summerWord) }}" class="btn btn-primary">{{ $summerWord->name }}</a>
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


