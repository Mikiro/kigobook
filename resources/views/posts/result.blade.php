@extends('layouts.app')

@section('content')

<body1>
    <div>{{$data->count()}}句見つかりました。</div>
    <div id="wrapper">
        <div class="container">
            
            @foreach($data as $post)
            <table>
                <tr>
                    <td>{{ $post->content_upper}}</td>
                    <td>{{ $post->content_middle}}</td>
                    <td>{{ $post->content_bottom}}</td>
                    <td>{{ $post->author}}</td>
                    <td><p class="post_date">{{ $post->date}}</p></td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
</body1>
　　　　　　　　　　　　　　　
@endsection