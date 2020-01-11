@extends('layouts.app')

@section('content')
      
    
        <div class="body1_header">
            <h1 class="">季語別俳句集</h1>
        </div>
        <div id="wrapper">
            <div class="post_container">
                @foreach($fallWords as $fallWord)
                    <table>
                        <tr>
                            <td><a href="{{ route('posts.fallWordPost', $fallWord) }}">{{ $fallWord->name }}</a></td>
                            <!--ルートパラメータをルートメソッドに渡す必要がある。-->
                        </tr>
                    </table>
                @endforeach
            </div>
        </div>
 
@endsection


