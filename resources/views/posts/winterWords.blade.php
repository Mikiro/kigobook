@extends('layouts.app')

@section('content')
  <div class="" style="">
    <div class="card"> 
        <div class="card-header text-center">
        <h1>冬の季語</h1>
        </div>
            <div class="card-body mx-auto">
                <!--<div "table-responsive-md">-->
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">冬 時候</h3>
                                    </tr>
                                </thead>
                                @foreach($winterWordsTimes->chunk(100) as $chunk)
                                <tbody>  
                                    <tr>
                                        <th> 
                                        @foreach($chunk as $winterWordsTime)
                                            <a class="btn btn-primary m-2" href="{{ route('posts.winterWordPost', $winterWordsTime) }}" role="button">{{$winterWordsTime->name}}</a>
                                        @endforeach
                                        </th>
                                    </tr>
                                </tbody>
                                @endforeach  
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">冬 天文</h3>
                                    </tr>
                                </thead>
                                @foreach($winterWordsAstronomies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $winterWordsAstronomy)                                 
                                        <a class="btn btn-primary m-2" href="{{ route('posts.winterWordPost', $winterWordsAstronomy)}}" role="button">{{$winterWordsAstronomy->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 scope="col">冬 地理</h3>
                                    </tr>
                                </thead>
                                @foreach($winterWordsGeographies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $winterWordsGeography)                                 
                                        <a class="btn btn-primary m-2" href="{{ route('posts.winterWordPost', $winterWordsGeography) }}" role="button">{{$winterWordsGeography->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach 
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">冬 生活</h3>
                                    </tr>
                                </thead>
                                @foreach($winterWordsLives->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $winterWordsLive)                                 
                                        <a class="btn btn-primary m-2" href="{{ route('posts.winterWordPost', $winterWordsLive) }}" role="button">{{$winterWordsLive->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">冬 行事</h3>
                                    </tr>
                                </thead>
                                @foreach($winterWordsEvents->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>  
                                        @foreach($chunk as $winterWordsEvent)
                                        <a class="btn btn-primary m-2" href="{{ route('posts.winterWordPost', $winterWordsEvent) }}" role="button">{{$winterWordsEvent->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">冬 動物</h3>
                                    </tr>
                                </thead>
                                @foreach($winterWordsAnimals->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>   
                                        @foreach($chunk as $winterWordsAnimal)
                                        <a class="btn btn-primary m-2" href="{{ route('posts.winterWordPost', $winterWordsAnimal) }}" role="button">{{$winterWordsAnimal->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">冬 植物</h3>
                                    </tr>
                                </thead>
                                @foreach($winterWordsPlants->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th> 
                                        @foreach($chunk as $winterWordsPlant)
                                        <a class="btn btn-primary m-2" href="{{ route('posts.winterWordPost', $winterWordsPlant) }}" role="button">{{$winterWordsPlant->name}}</a>
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


