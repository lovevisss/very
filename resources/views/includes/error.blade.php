@if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('success'))
    <section class="alert-success">

        {{Session::get('success')}}
    </section>

@endif
