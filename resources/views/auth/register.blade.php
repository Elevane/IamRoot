@extends('base')
<!-- Section body - This is the main part of the website-->
@section('content')


    <section>
        {{  Form::open(['url' => 'auth/register', 'method' => 'Post'])}}
        {{Form::token()}}
        {{ Form::label('login', 'login')}}
        {{Form::text('login')}}
        {{ Form::label('password', 'password')}}
        {{Form::password('password')}}
        {{ Form::label('email', 'email')}}
        {{Form::email('email')}}


        {{ Form::submit('create') }}
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
    </section>



@endsection
