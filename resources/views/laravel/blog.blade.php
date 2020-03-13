@extends('base')
@section('content')
    <section>
        <article>
            <ul>
                @foreach($blogs as $b)
                       @if($b['role_id'] == 1)
                        <li>
                            <a href="/blog/article/{{$b['id']}}">{{$b['title']}}</a>
                        </li>
                        @endif

                @endforeach
            </ul>
        </article>

    </section>
    @endsection
