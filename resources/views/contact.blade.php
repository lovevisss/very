@extends('template.main')

@section('nav')
    @parent
    <a href="about">About</a>
    {{Html::script('js/script.js')}}
    {{Html::style('css/style.css')}}
@endsection
@section('content')
    contact us
    {{ Html::link('http://www.baidu.com', 'baidu')}}
    {{ Html::ul($list) }}
    {{Form::open(['url' => '/verify'])}}
        {{Form::label('name')}}
        {{Form::text('name', 'input username')}}
        {{Form::select('flavor', $list)}}
    {{Form::submit('提交') }}
    {{Form::close()}}
@endsection