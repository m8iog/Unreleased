<nav class="navbar navbar-expand-md bg-black navbar-dark ">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="{{ route("track.index") }}">
            <i class="fas fa-fw fa-indent text-yellow"></i>
            Un:<span class="text-yellow">Released</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{ route('track.create') }}">
                        <i class="fas fa-fw fa-plus"></i> {{ __('Add track') }}
                    </a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{ route('artist.index') }}">
                        <i class="fas fa-fw fa-user"></i> {{ __('Artists') }}
                    </a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="{{ route('genre.index') }}">
                        <i class="fas fa-fw fa-music"></i> {{ __('Genres') }}
                    </a>
                </li>
                @guest
                    <li class="nav-item ml-4 border-left pl-4 border-darker">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
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
            </ul>
        </div>
    </div>
</nav>

<!-- Breadcrumbs -->
<div class="bg-yellow text-darker font-weight-bold py-2">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </div>
</div>