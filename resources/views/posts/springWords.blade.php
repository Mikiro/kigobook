@extends('layouts.app')

@section('content')
  <div class="" style="">
    <div class="card"> 
        <div class="card-header text-center">
        <h1>春の季語</h1>
        </div>
            <div class="card-body mx-auto">
                <!--<div "table-responsive-md">-->
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">春 時候</h3>
                                    </tr>
                                </thead>
                                @foreach($springWordsTimes->chunk(100) as $chunk)
                                <tbody>  
                                    <tr>
                                        <th> 
                                        @foreach($chunk as $springWordsTime)
                                            <a class="btn btn-warning m-2" href="{{ route('posts.springWordPost', $springWordsTime) }}" role="button">{{$springWordsTime->name}}</a>
                                        @endforeach
                                        </th>
                                    </tr>
                                </tbody>
                                @endforeach  
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">春 天文</h3>
                                    </tr>
                                </thead>
                                @foreach($springWordsAstronomies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $springWordsAstronomy)                                 
                                        <a class="btn btn-warning m-2" href="{{ route('posts.springWordPost', $springWordsAstronomy)}}" role="button">{{$springWordsAstronomy->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">春 地理</h3>
                                    </tr>
                                </thead>
                                @foreach($springWordsGeographies->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $springWordsGeography)                                 
                                        <a class="btn btn-warning m-2" href="{{ route('posts.springWordPost', $springWordsGeography) }}" role="button">{{$springWordsGeography->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach 
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">春 生活</h3>
                                    </tr>
                                </thead>
                                @foreach($springWordsLives->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $springWordsLive)                                 
                                        <a class="btn btn-warning m-2" href="{{ route('posts.springWordPost', $springWordsLive) }}" role="button">{{$springWordsLive->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">春 行事</h3>
                                    </tr>
                                </thead>
                                @foreach($springWordsEvents->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>
                                        @foreach($chunk as $springWordsEvent)                               
                                        <a class="btn btn-warning m-2" href="{{ route('posts.springWordPost', $springWordsEvent) }}"  role="button">{{$springWordsEvent->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">春 動物</h3>
                                    </tr>
                                </thead>
                                @foreach($springWordsAnimals->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>   
                                        @foreach($chunk as $springWordsAnimal)
                                        <a class="btn btn-warning m-2" href="{{ route('posts.springWordPost', $springWordsAnimal) }}" role="button">{{$springWordsAnimal->name}}</a>
                                        @endforeach
                                        </th>
                                </tbody>
                                @endforeach
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3 style="margin-left: 10px;" scope="col">春 植物</h3>
                                    </tr>
                                </thead>
                                @foreach($springWordsPlants->chunk(100) as $chunk)
                                <tbody>                                   
                                    <tr>
                                        <th>    
                                        @foreach($chunk as $springWordsPlant)
                                        <a class="btn btn-warning m-2" href="{{ route('posts.springWordPost', $springWordsPlant) }}" role="button">{{$springWordsPlant->name}}</a>
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


