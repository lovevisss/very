@extends('layouts.master')

@section('content')
    <article>
        <h3>{{$room->name}}</h3>
        <span class="">{{$room->owner()}}</span>
{{--        <ul>--}}
{{--        @foreach($room->devices as $device)--}}
{{--            <li>--}}
{{--                <a href="{{route('device.single', $device->id)}}">{{$device->type}}-{{$device->vlan}}</a>--}}
{{--            </li>--}}
{{--        @endforeach--}}
{{--        </ul>--}}
    </article>

    <section class="pagination">
        Pagination
    </section>
@endsection