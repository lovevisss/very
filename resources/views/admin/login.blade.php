@extends('layouts.master')

@section('content')
    <form action="{{route('admin.postlogin')}}" method="post">
        <div class="input-group">
            <label for="name">用户：</label>
            <input type="text" name="name" id="name" placeholder="用户名">
        </div>
        <div class="input-group">
            <label for="password">密码：</label>
            <input type="text" name="password" id="password" placeholder="密码">
        </div>
        <button type="submit">登陆</button>
    </form>
@endsection
