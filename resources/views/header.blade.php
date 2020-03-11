
    <!-- Section Header - Contains IamRoot image and navigation menu-->
    <header>
        <!--The Logo of the website-->
        <a href="/" id="title"><img src="{{ URL::to('/') }}/images/iamroot.png" alt="github_icon"></a>
        <!-- The side Menu-->
    <nav>
        <ul>



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
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

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
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>

                @endauth


        </ul>
    </nav>
    </header>
