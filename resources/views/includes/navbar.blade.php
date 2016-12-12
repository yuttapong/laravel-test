    <!--Navigation-->
    <header>
        @include('partials.above-navbar-alert')
        <!--Navbar-->
        <nav class="navbar navbar-dark scrolling-navbar mdb-gradient">
            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i></button>
            <div class="container">
                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Links-->
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/codingo-me/laravel-social-email-authentication" target="_blank"><i class="fa fa-download"></i>  Download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('public.home')  }}"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about')  }}"><i class="fa fa-home"></i> เกี่ยวกับเรา</a>
                        </li>

                    </ul>
                    <!-- Form search -->
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                    <!--Navbar icons-->
                    <ul class="nav navbar-nav pull-right">
                        @if(!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}"><i class="fa fa-sign-in"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('register') }}"><i class="fa fa-registered"></i> Register</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->first_name }}</a>
                            <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                                <a class="dropdown-item" href="{{ Auth::user()->homeUrl() }}"><i class="fa fa-cog"></i> Profile</a>
                                <a class="dropdown-item" href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
                <!--/.Collapse content-->
            </div>
        </nav>
        <!--/.Navbar-->
    </header>
    <!--/Navigation-->