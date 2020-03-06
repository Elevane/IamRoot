@extends('base')
@section('content')
    <section>
        <h1 > Category{{ $id }}</h1>

        @foreach($blogs as $b)
            <article>
                <h2>{{$b['title']}}</h2>
                <p>{{$b['text']}}</p>
            </article>
            @endforeach
    </section>
    @endsection()
