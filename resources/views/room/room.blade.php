@extends('layouts.master')

@section('content')
    <h>search result</h>

    <p>地址</p>{{$room->building}} - {{$room->name}}


    devices
        @foreach($room->devices as $device)
            {{$device->type}}-{{$device->vlan}}
        @endforeach
@endsection