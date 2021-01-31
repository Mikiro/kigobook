@extends('layouts.app')

@section('content')
  <div class="" style="">
    <div class="card"> 
        <div class="card-header text-center">
        <h1>夏の季語</h1>
        </div>
            <div class="card-body mx-auto">
                <!--<div "table-responsive-md">-->
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">夏 時候</h3>
                                    </tr>
                                </thead>
                                @foreach($summerWordsTimes->chunk(100) as $chunk)
                                <tbody>  
                                    <tr>
                                        <th> 
                                        @foreach($chunk as $summerWordsTime)
                                            <a class="btn btn-success m-2" href="{{ route('posts.summerWordPost', $summerWordsTime) }}" role="button">{{$summerWordsTime->name}}</a>
                                        @endforeach
                                        </th>
                                    </tr>
                                </tbody>
                                @endforeach  
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">夏 天文</h3>
                                    </tr>
                                </thead>
                                @foreach($summerWordsAstronomies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $summerWordsAstronomy)                                 
                                        <a class="btn btn-success m-2" href="{{ route('posts.summerWordPost', $summerWordsAstronomy)}}" role="button">{{$summerWordsAstronomy->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">夏 地理</h3>
                                    </tr>
                                </thead>
                                @foreach($summerWordsGeographies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $summerWordsGeography)                                 
                                        <a class="btn btn-success m-2" href="{{ route('posts.summerWordPost', $summerWordsGeography) }}" role="button">{{$summerWordsGeography->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach 
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">夏 生活</h3>
                                    </tr>
                                </thead>
                                @foreach($summerWordsLives->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $summerWordsLive)                                 
                                        <a class="btn btn-success m-2" href="{{ route('posts.summerWordPost', $summerWordsLive) }}" role="button">{{$summerWordsLive->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">夏 行事</h3>
                                    </tr>
                                </thead>
                                @foreach($summerWordsEvents->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>  
                                        @foreach($chunk as $summerWordsEvent)
                                        <a class="btn btn-success m-2" href="{{ route('posts.summerWordPost', $summerWordsEvent) }}" role="button">{{$summerWordsEvent->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">夏 動物</h3>
                                    </tr>
                                </thead>
                                @foreach($summerWordsAnimals->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>   
                                        @foreach($chunk as $summerWordsAnimal)
                                        <a class="btn btn-success m-2" href="{{ route('posts.summerWordPost', $summerWordsAnimal) }}" role="button">{{$summerWordsAnimal->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">夏 植物</h3>
                                    </tr>
                                </thead>
                                @foreach($summerWordsPlants->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th> 
                                        @foreach($chunk as $summerWordsPlant)
                                        <a class="btn btn-success m-2" href="{{ route('posts.summerWordPost', $summerWordsPlant) }}" role="button">{{$summerWordsPlant->name}}</a>
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


