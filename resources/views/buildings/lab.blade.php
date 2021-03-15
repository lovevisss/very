@extends('layouts.master')


@section('content')
    <ul>
        @foreach($rooms as $room)
            <a href="{{route('findRoom', ['building' => $room->building, 'room' => $room->name])}}"><li>{{$room->building}}-{{$room->name}}  管理人-{{$room->owner->name}}</li></a>
        @endforeach
    </ul>

    <form action="{{route('addRoom')}}" method="post">
        <label for="select-class">地点</label>
        <select name="building" id="select-class">
            <option value="S1">1号实验楼</option>
            <option value="S2">2号实验楼</option>
            <option value="S3">3号实验楼</option>
        </select>

        <label for="name">房间：</label>
        <input type="text" name="name">

        <label for="select-owner">管理人</label>
        <select name="owner_id" id="select-owner">
            <option value="2">赵家荣</option>
            <option value="3">吴玉龙</option>
            <option value="4">黄宗良</option>
        </select>

        <label for="device_num">设备数量：</label>
        <input type="text" name="device_num">
        <button type="submit">添加</button>
        <input type="hidden" value="{{Session::token()}}" name="_token">
    </form>
@endsection