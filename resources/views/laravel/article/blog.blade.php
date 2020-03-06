@extends('base')
@section('content')
    <section>

            <article>
                <h2>{{$blog['title']}}</h2>
                <p>{{$blog['text']}}</p>
            </article>

    </section>
    @endsection()
