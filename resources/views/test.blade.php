@extends('base')
@section('content')
    <section>
        <h1>Blogs </h1>
        @foreach($blog as $b)
            <h2>{{$b->titre}}</h2>
            <h2>{{$b->category}}</h2>
            <h2>{{$b->text}}</h2>
            @endforeach
    </section>
    @endsection()
