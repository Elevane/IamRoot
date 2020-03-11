@extends('base')
@section('content')
    <section>

            <article>
                @foreach($blog as $b)
                    @foreach($b)
                <article>
                    <h2>{{$b['title']}}</h2>
                    <p>{{$b['text']}}</p>
                </article>
                @endforeach
            </article>

    </section>
    @endsection()
