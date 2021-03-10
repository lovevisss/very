@extends('layouts.master')
@section('style')
 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

@endsection

@section('content')

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
	@for($i = 0; $i < 11; $i++)
		@if ($i%2 === 0)

			<li>Iteration {{ $i+1 }}</li>
		@endif
	@endfor
</ul>
 
@endsection