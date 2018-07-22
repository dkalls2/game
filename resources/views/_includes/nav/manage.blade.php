<div class="side-menu" id = "admin-side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">
            General
        </p>

        <ul class="menu-list">
            <li><a href="{{route('dashboard')}}" class="{{Nav::isRoute('dashboard')}}">Dashboard</a></li>
                {{-- The class Nav::isRoute is from the easynav package we installed here:
                https://github.com/DevMarketer/LaravelEasyNav
                This helps us to highlight active navigation elements if there is a certain route, resource, segment, or word in a url.
                This example will only be active if we are in the manage.dashboard route. --}}
        </ul>

        <p class="menu-label">
            Content
        </p>

        <ul class="menu-list">
            <li><a href="{{route('gameathlons.index')}}" class="{{Nav::isResource('gameathlons', 1)}}">GameAthlons</a></li>
            {{-- <li><a href="{{route('gameathlons.index')}}" class="{{Nav::urlDoesContain('gameathlons', NULL, NULL, false)}}">View GameAthlons</a></li> --}}
            <li><a href="{{route('brackets.index')}}" class="{{Nav::isResource('brackets', 1)}}">Bracket Generator</a></li>
                {{-- this will allow this nav item to be active if we are using anything in the gameathlons resource (index, show, edit, create) in the 1st position after / --}}
            <li><a href="{{route('games.index')}}" class="{{Nav::isResource('games', 1)}}">Game Generator</a></li>
        </ul>

        <p class="menu-label">
            Administration
        </p>

        <ul class="menu-list">
            <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a></li>
                {{-- this will allow this nav item to be active if we are using anything in the users resource (index, show, edit, create) --}}
            <li>
                <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 1)}}">Roles &amp; Permissions</a>
                    {{-- this will highlight if we are either in the roles or the permissions --}}
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
                </ul>
            </li>
        </ul>

    </aside>
</div>