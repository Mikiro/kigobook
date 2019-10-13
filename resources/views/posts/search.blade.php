@extends('layouts.app')

@section('content')

    {!! Form::open(['method' => 'GET']) !!}
        <!--季節:{!! Form::text('category', $category) !!}-->
        季節:{!! Form::select('category', \App\Category::select('id', 'name')->get()->pluck('name','id')->prepend( "選択してください", ""), null, ['class' => 'form']) !!}
        季節:{!! Form::select('word', \App\Word::select('id', 'name')->get()->pluck('name','id')->prepend( "選択してください", ""), null, ['class' => 'form']) !!}
        作者:{!! Form::text('author', $author) !!}
        上の句:{!! Form::text('content_upper', $content_upper) !!}
        中の句:{!! Form::text('content_middle', $content_middle) !!}
        下の句:{!! Form::text('content_bottom', $content_bottom) !!}
    {!! Form::submit('検索') !!}
    {!! Form::reset('クリアボタン', ['class' => 'form-button']) !!}
    {!! Form::close() !!}
    
        <body1 >
       <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
       </div>
        
        <div id="wrapper">
            <div class="post_container">
                @foreach($data as $post)
                <table>
                    <tr>
                        <td>{{ $post->content_upper}}</td>
                        <td>{{ $post->content_middle}}</td>
                        <td>{{ $post->content_bottom}}</td>
                        <td>{{ $post->author}}</td>
                        <td> 
                            <p class="post_date">{{ $post->date}}</p>
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="paginate">
                {{ $data->links() }}
            </div>
        </div>
    </body1>
　　　　　　　　　　　　　　　
@endsection