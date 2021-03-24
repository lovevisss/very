@extends('layouts.master')


@section('content')
    dashboard
    <ul>
        @foreach($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>
@endsection
