@extends('base')
<!-- Section body - This is the main part of the website-->
@section('content')


    <section>
        {{  Form::open(['url' => '/contact/form/{$request}', 'method' => 'Get'])}}
        {{Form::token()}}
        {{ Form::label('lastname', 'lastname')}}
        {{Form::text('lastname')}}
        {{ Form::label('firstname', 'firstname')}}
        {{Form::text('firstname')}}
        {{ Form::label('email', 'email')}}
        {{Form::email('email')}}
        {{ Form::label('message', 'message')}}
        {{Form::textarea('message')}}
        {{ Form::submit('Send') }}
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
