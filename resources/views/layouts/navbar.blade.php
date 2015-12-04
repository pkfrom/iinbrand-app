
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('public.home')}}">EDC System</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">

            @if(Auth::check())
                @if(Auth::user()->hasRole('administrator')))
                <li ><a href="{{ URL::to('dashboards') }}">Dashboard</a></li>
                @endif
            @endif
                <li ><a href="{{ URL::to('scan') }}">Verify</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            @if(!Auth::check())
                @yield('action-menu')
            @else
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">{{ Auth::user()->first_name }}&nbsp; {{ Auth::user()->last_name }}<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="themes">

                        <!--<li><a href="#">Profile</a></li>
                        <li class="divider"></li>-->
                        <li><a href="{{ route('authenticated.logout') }}">Sign out</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>
</div>