
    <!-- Section Header - Contains IamRoot image and navigation menu-->
    <header>
        <!--The Logo of the website-->
        <a href="/" id="title"><img src="{{ URL::to('/') }}/images/iamroot.png" alt="github_icon"></a>
        <!-- The side Menu-->
    <nav>
        <ul>
            @if (Route::has('login'))


                @auth
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                    <li>
                        <a href="/tutorials">Laravel</a>
                    </li>
                    <li>
                        <a href="/home">Home</a>
                    </li>
                    <li>
                        <a href="/plans">Plans</a>
                    </li>
                    <li>
                        <a href="/about">About-Us</a>
                    </li>
                    <li>
                        <a href="/contact">Contact Us</a>
                    </li>
                    <li>
                @else
                    <li>
                        <a href="/home">Home</a>
                    </li>
                    <li>
                        <a href="/plans">Plans</a>
                    </li>
                    <li>
                        <a href="/about">About-Us</a>
                    </li>
                    <li>
                        <a href="/contact">Contact Us</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('login') }}"> Log In</a>
                    </li>
                @endauth

            @endif
        </ul>
    </nav>
    </header>
