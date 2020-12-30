@extends('layouts.app')

@section('content')
  <div class="" style="">
    <div class="card"> 
        <div class="card-header text-center">
        <h1>新年の季語</h1>
        </div>
            <div class="card-body mx-auto">
                <!--<div "table-responsive-md">-->
                        <div class="row" style="width:1000px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">新年 時候</th>
                                    </tr>
                                </thead>
                                @foreach($newYearWordsTimes->chunk(100) as $chunk)
                                <tbody>  
                                    <tr>
                                        <th> 
                                        @foreach($chunk as $newYearWordsTime)
                                            <a class="btn btn-danger m-2" href="{{ route('posts.newYearWordPost', $newYearWordsTime) }}" role="button">{{$newYearWordsTime->name}}</a>
                                        @endforeach
                                        </th>
                                    </tr>
                                </tbody>
                                @endforeach  
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">新年 天文</th>
                                    </tr>
                                </thead>
                                @foreach($newYearWordsAstronomies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $newYearWordsAstronomy)                                 
                                        <a class="btn btn-danger m-2" href="{{ route('posts.newYearWordPost', $newYearWordsAstronomy)}}" role="button">{{$newYearWordsAstronomy->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">新年 地理</th>
                                    </tr>
                                </thead>
                                @foreach($newYearWordsGeographies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $newYearWordsGeography)                                 
                                        <a class="btn btn-danger m-2" href="{{ route('posts.newYearWordPost', $newYearWordsGeography) }}" role="button">{{$newYearWordsGeography->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach 
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">新年 生活</th>
                                    </tr>
                                </thead>
                                @foreach($newYearWordsLives->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $newYearWordsLive)                                 
                                        <a class="btn btn-danger m-2" href="{{ route('posts.newYearWordPost', $newYearWordsLive) }}" role="button">{{$newYearWordsLive->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">新年 行事</th>
                                    </tr>
                                </thead>
                                @foreach($newYearWordsEvents->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>  
                                        @foreach($chunk as $newYearWordsEvent)
                                        <a class="btn btn-danger m-2" href="{{ route('posts.newYearWordPost', $newYearWordsEvent) }}" role="button">{{$newYearWordsEvent->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">新年 動物</th>
                                    </tr>
                                </thead>
                                @foreach($newYearWordsAnimals->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>   
                                        @foreach($chunk as $newYearWordsAnimal)
                                        <a class="btn btn-danger m-2" href="{{ route('posts.newYearWordPost', $newYearWordsAnimal) }}" role="button">{{$newYearWordsAnimal->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">新年 植物</th>
                                    </tr>
                                </thead>
                                @foreach($newYearWordsPlants->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th> 
                                        @foreach($chunk as $newYearWordsPlant)
                                        <a class="btn btn-danger m-2" href="{{ route('posts.newYearWordPost', $newYearWordsPlant) }}" role="button">{{$newYearWordsPlant->name}}</a>
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


