<header>
      <nav id="nav" class="navbar navbar-expand-lg navbar-dark _bgdegree">
            <a class="navbar-brand _logo" href="/bullsheet">BullSheet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ml-md-auto">
                <li class="nav-item active">
                <a class="nav-link " href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RANKING</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/rankrealnews">Real News</a>
                    <a class="dropdown-item" href="/rankfakenews">Fake News</a>
                    </div>
<<<<<<< HEAD
=======
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    NEWS FEED</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/realnews">Real News</a>
                    <a class="dropdown-item" href="/fakenews">Fake News</a>
                    </div>
>>>>>>> 5ac489ae8a2fead8452abb7f5743c261efa2bc2a
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    NEWS FEED</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                    <a class="dropdown-item" href="/realnews">Real News</a>
                    <a class="dropdown-item" href="/fakenews">Fake News</a>
=======
                    <a class="dropdown-item" href="/fakenews/new">Fake News</a>
                    <a class="dropdown-item" href="/realnews/new">Real News</a>
>>>>>>> 5ac489ae8a2fead8452abb7f5743c261efa2bc2a
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ADD NEWS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/fakenews/new">Fake News</a>
                    <a class="dropdown-item" href="/realnews/new">Real News</a>
                    </div>
                {{-- </li>
                <li class="nav-item ">
                <a class="nav-link" href="perfil.php">EDITAR PERFIL</a>
                </li>
                <li class="nav-item ">
                <a  id="btn-abrir-popup"class="nav-link btn-abrir-popup" href="/logout">LOGOUT</a>
<<<<<<< HEAD
                </li> --}}
                <!-- Right Side Of Navbar -->
                {{-- <ul class="navbar-nav ml-auto"> --}}
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                {{-- </ul> --}}
=======
                </li>
>>>>>>> 5ac489ae8a2fead8452abb7f5743c261efa2bc2a
             </ul>
            </div>
     </nav>
     </header>
