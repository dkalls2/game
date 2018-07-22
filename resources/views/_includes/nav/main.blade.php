<nav class="navbar has-shadow" role="navigation" aria-label="main navigation" id = "nav">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{route('welcome')}}">
                @yield('logo')
                <img src = "{{asset('images/logo3.svg')}}" alt="Motley Games Logo" />
                {{-- From the asset helper, we can reference anything in the public folder...we can just do the url from the public folder. --}}
            </a>
    
            @if(Request::segment(1) != "")
                {{-- we only want to show this icon when the first segment of the url (the segment right after the first /) is not "" --}}
                <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
                    <span class="icon"><i class="fa fa-arrow-circle-o-right"></i></span>
                </a>
            @endif
    
    
            {{-- <a role="button" class="navbar-burger" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a> --}}
    
            <a role="button" class="navbar-burger" v-on:click="showNav = !showNav" v-bind:class="{ 'is-active' : showNav }">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>


        <div class="navbar-menu" v-bind:class="{ 'is-active' : showNav }">
                {{-- <div class="navbar-start"> --}}
                    {{-- <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-20">New GameAthlon</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Search GameAthlons</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Bracket Generator</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Game Generator</a> --}}
                {{-- </div> --}}
        
                <div class="navbar-end">
                    @if (Auth::guest())
                        <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Register</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-item is-tab is-hidden-touch">
                                <span>Hey {{Auth::user()->name}}</span>
                                <span class="icon"><i class="fa fa-caret-down"></i></span>
                            </a>
                        
                            <div class="navbar-dropdown is-right">
                                <a href="#" class="navbar-item dark">
                                    <span class="icon"><i class="fa fa-fw m-r-10 fa-play-circle"></i></span>
                                    My GameAthlons
                                </a>
                                <a href="#" class="navbar-item dark">
                                    <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>
                                    Profile
                                </a>
                                {{-- <a href="#" class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>
                                    Notifications
                                </a> --}}
                                <a href='{{route('dashboard')}}' class="navbar-item dark">
                                    <span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>
                                    Manage
                                </a>
                                <hr class="navbar-divider">
                                <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>
                                    Logout
                                </a>
                                @include('_includes.forms.logout')
                            </div>
                        </div>
                    @endif
                </div>
            </div> 



    </div>

    
    </nav>