<nav class="shadow navbar navbar-expand-lg navbar-dark" style="background: #0B3861; font-size: 17px;">
    <span style="padding-right: 20px;"></span>
    <a href="{{url('/')}}" class="navbar-brand">
        <kbd style="color: #58FF33;">AALOI</kbd>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <span style="padding-right: 20px;"></span>
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="d-lg-none mr-2 fa fa-users"></i>
                    Home
                </a> </li>
            <li class="nav-item">
                <a href="/farms" class="nav-link font-weight-normal">
                    <i class="d-lg-none mr-2 fa fa-cogs"></i>
                    Firms
                </a>
            </li>
            <li class="nav-item">
                <a href="/companies" class="nav-link">
                    <i class="d-lg-none mr-2 fa fa-puzzle-piece"></i>
                    Materials
                </a>
            </li>
            <li class="nav-item">
                <a href="/about" class="nav-link">
                    <i class="d-lg-none mr-2 fa fa-slack"></i>
                    About
                </a>
            </li>
        </ul>

        {{-- <form class="shadow form-inline mt-0 ml-auto">
            <div class="input-group">
                <input type="search" class="form-control form-control-sm bg-light"
                    style="color: rgb(6, 6, 7); width: 400px;" placeholder="Search">
                <div class="input-group-append">
                    <button class="input-group-text btn btn-outline-warning"><i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form> --}}


        <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item">
                @if(Auth::guard('admin')->check())
                <a class="nav-link" href="{{ route('admin.login') }}">
                    @elseif(Auth::guard('owner')->check())
                    <a class="nav-link" href="{{ route('owner.login') }}">
                        @else
                        <a class="nav-link" href="{{ route('login') }}">
                            @endif
                            <i class="d-lg-none mr-2 fa fa-files-o"></i>
                            Login
                        </a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                    <i class="d-lg-none mr-2 fa fa-files-o"></i>
                    Register
                </a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    @if(Auth::guard('admin')->check())
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @elseif(Auth::guard('owner')->check())
                    <form id="logout-form" action="{{ route('owner.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endif

                </div>

            </li>
            @endguest
        </ul>

    </div>
</nav>