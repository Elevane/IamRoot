@extends('base')
@section('content')
    <section>
        <h1>About Us</h1>
        <div id="plans-sheet">

            <div class="team">
                <h3>Chewye</h3>

                <img class="photos" src="{{ URL::to('/') }}/images/chewye.jpg" alt="chewye_photo"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.gb</p>

            </div>

            <div class="team">
                <h3>Genesis</h3>

                <img  class="photos" src="{{ URL::to('/') }}/images/ram.jpg" alt="ram_photo"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.gb</p>
            </div>

        </div>
    </section>

@endsection
