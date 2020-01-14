@extends('layouts.app')

@section('content')

<body1 class="mw-100 overflow-auto">
    <div>{{$data->count()}}句見つかりました。</div>
    <div id="">
        <div class="row">
            
            @foreach($data as $post)
            <table>
                <tr class="border-left">
                    <td>{{ $post->content_upper}}{{ $post->content_middle}}{{ $post->content_bottom}}</td>
                    <td>{{ $post->author}}</td>
                    <td><p class="post_date">{{ $post->date}}</p></td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
</body1>
　　　　　　　　　　　　　　　
@endsection