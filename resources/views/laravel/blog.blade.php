@extends('base')
@section('content')
    <section>
        <article>
            <ul >
                @foreach($blogs as $b)
                    <li>
                        <a href="/blog/article/{{$b['id']}}">{{$b['title']}}</a>
                    </li>
                @endforeach
            </ul>
        </article>
        <article>
            <ul >
                @foreach($category as $c)
                    <li>
                        <a href="/blog/category/{{$c['id']}}">{{$c['nom']}}</a>
                    </li>
                @endforeach
            </ul>
        </article>
        @foreach($blogs as $b)
            <article>
                <h2>{{$b['title']}}</h2>
                <p>{{$b['text']}}</p>
            </article>
        @endforeach
    </section>
    @endsection
