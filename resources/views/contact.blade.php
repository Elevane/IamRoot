@extends('base')
<!-- Section body - This is the main part of the website-->
@section('content')

<<<<<<< HEAD
  <section>
    <form action="/contact/form/{$request}" method="GET">
      <label for="lastname">Lastname</label>
      <input type="text" id="lastname" name="lastname">
      <label for="firstname">Firstname</label>
      <input type="text" id="firstname" name="firstname">
      <label for="email">Email</label>
      <input type="email" id="email" name="email">
      <label for="message">Message</label>
      <textarea name="email" id="email" rows="8" cols="80"></textarea>
      <label for="submit"></label>
      <input type="submit" id="submit" name="submit">
    </form>
  </section>
=======
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
        {{Form::textarea('email')}}
        {{ Form::submit('Send') }}
</section>
>>>>>>> cb806e20a24a6e3fc512976c57075ebf4ea42ccb


@endsection
