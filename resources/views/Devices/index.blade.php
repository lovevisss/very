@extends('layouts.master')

@section('content')
    <article>
        <h3>tile</h3>
        <span class="">Authoer</span>
        <p>
        @foreach($room->devices as $device)
                <a href="{{route('device.single', $device->id)}}">{{$device->type}}-{{$device->vlan}}</a>
        @endforeach
        </p>
        <a href="">More</a>
    </article>

    <section class="pagination">
        Pagination
    </section>
@endsection