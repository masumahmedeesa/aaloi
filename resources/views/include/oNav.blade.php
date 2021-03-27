<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="main_menu_iner">
                    <div class="search_icon">
                        <a id="search_1" href="javascript:void(0)"
                        ><i class="ti-search"></i
                            ></a>
                        <a id="search_1" class="ml-3" href="javascript:void(0)"
                        ><i class="ti-home"></i
                            ></a>
                    </div>
                    <div>
                        <a href="/"><img src="{{asset('img/aloyy21.png')}}" alt="#"/></a>
                        <!-- <h1 style="color: white; font-family: Ubuntu; padding: 0;">ALOY</h1> -->
                    </div>
                    <span class="menu-trigger visible-xs">
                <span></span>
                <span></span>
                <span></span>
              </span>
                    <div class="off-canven-menu">
                <span class="close-icon">
                  <i class="ti-close"></i>
                </span>
                        <div class="canven-menu-warp">
                            <div class="canven-menu-iner">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li><a href="/">Home</a> </li>
                                    <li> <a href="/about">About</a> </li>
                                    {{-- <li> <a href="/services">Services</a> </li> --}}
                                    {{-- <li><a href="/projects">project</a></li> --}}
                                    {{-- <li><a href="#">blog</a></li> --}}
                                    <li><a href="#">JOB</a></li>
                                    <li><a href="/farms">Farms</a></li>
                                    @if(Auth::guard()->check())
                                    <li><a href="/dashboard">Dashboard</a></li>
                                    @endif
                                </ul>



                                <ul>
                                    <!-- Authentication Links -->
                                    @guest
                                    <li>
                                        <a href="{{ route('login') }}">
                                            Login
                                        </a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">

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
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                                </ul>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input
                        type="text"
                        class="form-control"
                        id="search_input"
                        placeholder="Search Here"
                />
                <button type="submit" class="btn"></button>
                <span
                        class="ti-close"
                        id="close_search"
                        title="Close Search"
                ></span>
            </form>
        </div>
    </div>
</header>
