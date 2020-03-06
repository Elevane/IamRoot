@extends('base')
<!-- Section body - This is the main part of the website-->
@section('content')


    <section>
        {{  Form::open(['url' => '/login/connect/{$request}', 'method' => 'Get'])}}
        {{Form::token()}}
        {{ Form::label('login', 'login')}}
        {{Form::text('login')}}
        {{ Form::label('password', 'password')}}
        {{Form::email('password')}}
        {{ Form::submit('Log In') }}
        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul class="alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
        @endif
        {{ Form::close() }}
        <a href="{{route('register')}}">create account</a>
        @if($status ?? '')
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul class="alert-danger">

                            <li>{{$status}}</li>


                    </ul>
                </div>
            </div>
        @endif
    </section>

@endsection
