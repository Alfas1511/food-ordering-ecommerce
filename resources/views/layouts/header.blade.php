<div class="page-header">
    <!--=============== Navbar ===============-->
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="index.html" class="navbar-brand">
                <img src="{{ asset('assets/img/logo/logo.png') }}" width="150px" alt="">
            </a>

            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarcollapse">
                <!-- Navbar Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="shop.html" class="nav-link">Shop</a>
                    </li>

                    @guest
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif

                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown"
                                style="display: flex; justify-content: center;" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-header"><img src="{{ asset('assets/img/logo/avatar.jpg') }}"
                                        width="20px" style="border-radius: 50%;"></div>
                                &nbsp;{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transaction.html">Transactions History</a>
                                <a class="dropdown-item" href="setting.html">Settings</a>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                    out</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                </form>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a href="cart.html" class="nav-link" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary">5</span>
                            </a>

                        </li>
                    @endguest
                </ul>
            </div>

        </div>
    </nav>
</div>
