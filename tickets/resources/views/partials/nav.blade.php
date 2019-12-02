<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a href="/" class="navbar-brand">
        {{config('app.name')}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class=" nav-item">
                    <a class="nav-link {{ setActive('home') }}" href="/">
                        @lang('Home')
                    </a>
                </li>
                <li class=" nav-item">
                        <a class="nav-link {{ setActive('about') }}" href="{{route('about')}}">
                            @lang('About')
                        </a>
                </li>
                <li class=" nav-item">
                        <a class="nav-link {{ setActive('events.*') }}" href="{{route('events.index')}}">
                            @lang('Events')
                        </a>
                </li>   
                @auth
                @if(Auth::user()->roles->pluck('nombre_rol')->contains('admin'))
                <li class=" nav-item">
                        <a class="nav-link {{ setActive('institutions.*') }}" href="{{route('institutions.index')}}">
                            Instituciones
                        </a>
                </li>
                @endif
                @endauth
                <li class=" nav-item">
                        <a class="nav-link {{ setActive('contact') }}" href="{{route('contact')}}">
                            @lang('Contact')
                        </a>
                </li>
                @guest
                    <li><a class="nav-link" href="{{ route('login')}}">Iniciar sesion</a></li>
                    <li><a class="nav-link" href="{{ route('register')}}">Registrate</a></li>
                @else
                    <li><a class="nav-link" href="#" onclick=" document.getElementById('logout-form').submit();">Cerrar sesion</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>