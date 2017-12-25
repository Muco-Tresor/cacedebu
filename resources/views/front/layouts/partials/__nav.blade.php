<nav class="teal" role="navigation">
    <div class="nav-wrapper">
        <div class="container">
            <a id="logo-container" href="{{ route('pages.home') }}" class="brand-logo">
                {{ config('app.name') }}
            </a>
        </div>
        
        <!---LARGE SCREEN NAV
        =============================================================-->
        <ul class="right hide-on-med-and-down">
            <li class="{{ set_active('/') }}">
                <a href="{{ route('pages.home') }}">Home</a>
            </li>
            
            <li><a href="#">Meet-up</a></li>
            
            <li class="{{ set_active('news*') }}">
                <a href="{{ route('news.index') }}">News</a>
            </li>
            
            <li class="{{ set_active('contact') }}">
                <a href="{{ route('pages.contact') }}">Contact</a>
            </li>
            
            <li class="{{ set_active('about') }}">
                <a href="{{ route('pages.about') }}">About</a>
            </li>
            <li><a href="#" class="btn teal">Login</a></li>
            <li><a href="#" class="btn teal">Sign up</a></li>
        
        </ul>

        <!--- MOBILE NAV
        =============================================================-->
        <ul id="nav-mobile" class="sidenav">
            <li class="{{ set_active('/') }}">
                <a href="{{ route('pages.home') }}">Home</a>
            </li>
            
            <li><a href="#">Meet-up</a></li>
            
            <li class="{{ set_active('news*') }}">
                <a href="{{ route('news.index') }}">News</a>
            </li>
            
            <li class="{{ set_active('contact') }}">
                <a href="{{ route('pages.contact') }}">Contact</a>
            </li>
            
            <li class="{{ set_active('about') }}">
                <a href="{{ route('pages.about') }}">About</a>
            </li>
            <li><a href="#" class="btn teal">Login</a></li>
            <li><a href="#" class="btn teal">Sign up</a></li>
        </ul>
        
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="fa fa-bars"></i></a>

    </div>
  </nav>