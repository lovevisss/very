@extends('layouts.master')
@section('style')
 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

@endsection

@section('content')
@if(count($errors) >0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('postRoom')}}" method="post">
    <label for="select-class">选择地点</label>
    <select name="room" id="select-class">
        <option value="2J201">2J201</option>
        <option value="S1405">S1405</option>
        <option value="A202">A202</option>
    </select>
    <input type="text" name="name">
    <button type="submit">筛选</button>
    <input type="hidden" value="{{Session::token()}}" name="_token">
</form>
<ul>
	@foreach($rooms as $room)

			<li><a href="{{route('getRoom', ['building' => $room->name])}}">Iteration {{ $room->name }} - room device {{$room->device_num}}</a></li>

	@endforeach
</ul>
 
@endsection