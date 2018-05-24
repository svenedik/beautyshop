<nav class="navbar navbar-default">
    <div class="container padding-0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" height="100" alt=""></a>
            <div class="navbar-left" style="display: none;">
                <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
            </div>
            <div class="navbar-right">
                @if (empty(Auth::user()))
                <div class="account-btn-group">
                    <a href="/register" class="account-btn">Sign In</a>
                    <a href="/login" class="account-btn">Register</a>                    
                </div>
                @else
                <div class="account-btn-group">
                    <span class="account-name">{{Auth::user()->name}} <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                    <ul class="account-menu">
                        <li><a href="/myaccount" class="account-btn">My Account</a> </li>
                        <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="account-btn">Sign Out</a> </li>
                        <form id="logout-form" action="{{url('/logout')}}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                    </ul>                   
                </div>
                @endif
                @yield('aimeos_head')
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse padding-0" id="bs-example-navbar-collapse-1">
        <div class="main-fix-menu">
            <div class="background-line"></div>
            <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="/">Pirate Squad Rocks</a></li>
                    <li><a href="/">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
