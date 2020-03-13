@extends('base')
@section('content')
    <section>
        <article>
            <ul>
                @foreach($blogs[0] as $b)
                    @if(Auth::user()->role_id >= $b['role_id'])
                        <li>
                            <h2>{{$b['title']}}</h2>
                            <p>{{$b['text']}}</p>
                        </li>
                    @endif
                @endforeach
                    @foreach($blogs[1] as $b)
                        @if(Auth::user()->role_id >= $b['role_id'])
                            <li>
                                <h2>{{$b['title']}}</h2>
                                <p>{{$b['text']}}</p>
                            </li>
                        @endif
                    @endforeach
                    @foreach($blogs[2] as $b)
                        @if(Auth::user()->role_id >= $b['role_id'])
                            <li>
                                <h2>{{$b['title']}}</h2>
                                <p>{{$b['text']}}</p>
                            </li>
                        @endif
                    @endforeach
            </ul>
        </article>

    </section>
    @endsection
