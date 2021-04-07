@extends('layouts.master')

@section('content')
    <button class="btn-danger"><a href="{{route('deleteRoom',['id'=>$room->id] )}}">删除房间</a></button>
    <h>search result</h>

    <p>地址</p>{{$room->building}} - {{$room->name}}


    @include('Devices.index', ['room' => $room])

@endsection