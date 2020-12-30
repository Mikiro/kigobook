@extends('layouts.app')

@section('content')
  <div class="" style="">
    <div class="card"> 
        <div class="card-header text-center">
        <h1>秋の季語</h1>
        </div>
            <div class="card-body mx-auto">
                <!--<div "table-responsive-md">-->
                        <div class="row" style="width:1000px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">秋 時候</th>
                                    </tr>
                                </thead>
                                @foreach($fallWordsTimes->chunk(100) as $chunk)
                                <tbody>  
                                    <tr>
                                        <th> 
                                        @foreach($chunk as $fallWordsTime)
                                            <a class="btn btn-secondary m-2" href="{{ route('posts.fallWordPost', $fallWordsTime) }}" role="button">{{$fallWordsTime->name}}</a>
                                        @endforeach
                                        </th>
                                    </tr>
                                </tbody>
                                @endforeach  
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">秋 天文</th>
                                    </tr>
                                </thead>
                                @foreach($fallWordsAstronomies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $fallWordsAstronomy)                                 
                                        <a class="btn btn-secondary m-2" href="{{ route('posts.fallWordPost', $fallWordsAstronomy)}}" role="button">{{$fallWordsAstronomy->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">秋 地理</th>
                                    </tr>
                                </thead>
                                @foreach($fallWordsGeographies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $fallWordsGeography)                                 
                                        <a class="btn btn-secondary m-2" href="{{ route('posts.fallWordPost', $fallWordsGeography) }}" role="button">{{$fallWordsGeography->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach 
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">秋 生活</th>
                                    </tr>
                                </thead>
                                @foreach($fallWordsLives->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $fallWordsLive)                                 
                                        <a class="btn btn-secondary m-2" href="{{ route('posts.fallWordPost', $fallWordsLive) }}" role="button">{{$fallWordsLive->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">秋 行事</th>
                                    </tr>
                                </thead>
                                @foreach($fallWordsEvents->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>  
                                        @foreach($chunk as $fallWordsEvent)
                                        <a class="btn btn-secondary m-2" href="{{ route('posts.fallWordPost', $fallWordsEvent) }}" role="button">{{$fallWordsEvent->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">秋 動物</th>
                                    </tr>
                                </thead>
                                @foreach($fallWordsAnimals->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>   
                                        @foreach($chunk as $fallWordsAnimal)
                                        <a class="btn btn-secondary m-2" href="{{ route('posts.fallWordPost', $fallWordsAnimal) }}" role="button">{{$fallWordsAnimal->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">秋 植物</th>
                                    </tr>
                                </thead>
                                @foreach($fallWordsPlants->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th> 
                                        @foreach($chunk as $fallWordsPlant)
                                        <a class="btn btn-secondary m-2" href="{{ route('posts.fallWordPost', $fallWordsPlant) }}" role="button">{{$fallWordsPlant->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                <!--</div>  -->
            </div>
        </div>
    </div>
@endsection


