@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12"> 
            {!! Form::open(['route' => 'posts.result','method' => 'post']) !!}
                {{ csrf_field() }}
                <input type="text" name="q" value="" id="q" placeholder="総検索">
                <input type="text" name="category" value="" id="category" placeholder="季節を入力">
                <input type="text" name="word" value="" id="word" placeholder="季語を入力">
                <input type="text" name="author" value="" id="author" placeholder="作者を入力">
                <input type="text" name="content_upper" value="" id="content_upper" placeholder="上の句を入力">
                <input type="text" name="content_middle" value="" id="content_middle" placeholder="中の句を入力">
                <input type="text" name="content_bottom" value="" id="content_bottom" placeholder="下の句を入力">
                <br>
                <button type="submit" class="btn btn-primary" action="">検索</button>
                <input type="button" value="リセット" onClick="document.location='search';" class="btn btn-danger">
            {!! Form::close() !!}
        </div>
    </div>
</div>
    

@endsection