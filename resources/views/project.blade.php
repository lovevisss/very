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
    {{Form::open(['url' => 'add'])}}
        {{Form::label('name')}}
        {{Form::text('name')}}

        {{Form::submit('Add')}}
    {{Form::close()}}
    @if($errors->any())
        <ul class="alert alert-warning paddings">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    @foreach($list as $item)
        <li>
           {{ $item->name}}({{$item->money }}$)
            {{Form::open(['url' => 'donate'])}}
                {{Form::hidden('id', $item->id)}}
                {{Form::selectRange('donation', 1, 15)}}
                {{Form::submit('donate')}}
            {{Form::close()}}
        </li>

    @endforeach
@endsection