@extends('layouts.app')

@section('content')
  
        <div class="card text-center"> 
            <div class="card-header">
                <h1>春の季語</h1>
            </div>
            <div class="card-body mx-auto">
                <div "table-responsive-md">
                    
                    <table class="table">
                       @foreach ($springWords->chunk(15) as $chunk)
                        <div class="row">
                               @foreach($chunk as $springWord) 
                                <div class="m-2">
                                    <a class="btn btn-warning" href="{{ route('posts.springWordPost', $springWord) }}" role="button">{{ $springWord->name }}</a>
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


