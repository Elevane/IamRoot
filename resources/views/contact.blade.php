@extends('base')
<!-- Section body - This is the main part of the website-->
@section('content')

    <section>
        <h1>IamRoot</h1>
        <form action="/contact/form/{$request}" method="GET">
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" name="lastname">
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <label for="message">Message</label>
            <input type="text" id="message" name="message">
            <label for="submit"></label>
            <input type="submit" id="submit" name="submit">
        </form>


</section>


@endsection
