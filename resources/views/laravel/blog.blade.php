@extends('base')
@section('content')
    <section>
        <article>
            <ul >
                <li>
                    <a href="/blog/article/1">article 1</a>
                </li>
                <li>
                    <a href="/blog/article/2">article 2</a>
                </li>
                <li>
                    <a href="/blog/article/3">article 3</a>
                </li>
            </ul>
        </article>
        <article>
            <ul >
                <li>
                    <a href="/blog/category/1">category 1</a>
                </li>
                <li>
                    <a href="/blog/category/2">category 2 </a>
                </li>
            </ul>
        </article>
        @foreach($blogs as $b)
            <article>
                <h2>{{$b['titre']}}</h2>
                <p>{{$b['text']}}</p>
            </article>
        @endforeach
    </section>
    @endsection
