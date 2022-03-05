<div class="header-top">
    <div class="header-adress">
        <button class="hamburger hamburger--collapse" type="button" style="display:none;">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <ul class="button navbar-nav me-auto up">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ asset('/dashboard') }}" class="nav-link">Admin panel</a>
            </li>
        </ul>
    </div>
    <div class="header-buttons">
        <button class="btn btn-feedback" id="gotofeedback">Обратная связь</button>
        <!-- <button class="btn btn-help">Помощь</button>-->
        <a class="header-email" href="mailto:info@cent.kz">info@cent.kz</a>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto up" style="float:right;">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div>
<div class="header-bottom">
    <a class="logo" href="/user/home"><img src="https://cent.kz/images/logo8.png"></a>
</div> <br>
