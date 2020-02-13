@extends('base')
<!-- Section body - This is the main part of the website-->
@section('content')

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

        <div>
</div>
</section>
@endsection
