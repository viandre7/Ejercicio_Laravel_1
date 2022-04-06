<nav class="navbar navbar-light bg-white navbar-expand-md shadow-sm">

    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Streamwin</a>
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" 
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">     
                <!-- <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="/" >home</a>
                </li> -->
                <li class="nav-item ">
                    <a class="{{ setActive('home') }} nav-link" href="{{ route('home') }}" >@lang('Home')</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a>
                </li>
                <li class="nav-item "> 
                    <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Projects')</a>
                </li>
        
                @guest
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    </li>
                @endguest
        
               
            </ul>
        </div>
    </div>
        
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>