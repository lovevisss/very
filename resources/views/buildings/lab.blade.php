@extends('layouts.master')

@section('content')
    <form action="{{route('searchRoom')}}" method="post">
        <label for="name">房间：</label>
        <input type="text" name="name">
        <button type="submit">查找</button>
        <input type="hidden" value="{{Session::token()}}" name="_token">
    </form>
    <div class="clearfix"></div>
    <ul>
        @foreach($rooms as $room)

            <a class="item free " href="{{route('findRoom', ['building' => $room->building, 'room' => $room->name])}}" target="_blank" data-cid="1281" data-type="1" data-title="MySQL8.0零基础入门之从青铜到钻石">
                <div class="img" style="background-image: url('/img/lab.jpg')"></div>
                <p class="title ellipsis2">{{$room->devices->count()}}</p>
                <p class="one">管理人-{{$room->owner->name}}</p>

                <p class="two clearfix">
                    <span class="l">{{$room->building}}</span>
                    <span class="star r"><i class="icon imv2-star-o"></i><i class="txt">{{$room->name}} </i></span>
                </p>
            </a>
        @endforeach
    </ul>
    <div class="clearfix"></div>
    {{ $rooms->links() }}
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
            @foreach($owners as $owner)
                <option value="{{$owner->id}}">{{$owner->name}}</option>
            @endforeach
        </select>
        <button type="submit">添加</button>
        <input type="hidden" value="{{Session::token()}}" name="_token">
    </form>
    @include('includes.error')
@endsection