@extends('template.main')

@section('nav')
    @parent
    <a href="contact">Contact</a>
    <style>
        body {
            margin-top: 50px;
            text-align: center;
            background-color: rgb(15,25,90);
            color:white;
        }
        li {
            margin: 30px 0;
        }

        form {
            display: inline;
        }
    </style>
@endsection
@section('content')



    @foreach($articles as $article)
        <li>
            <h1>{{$article->title}}</h1>
            <p>{{$article->body}}</p>
            <ul>

                @foreach($article->comments as $comment)
                    <li>
                        Comment: {{$comment->body}}
                    </li>
                    @endforeach
            </ul>

        </li>

    @endforeach
@endsection