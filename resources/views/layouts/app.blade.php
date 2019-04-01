<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-left">
                    @guest
                    @else
                    <!-- Tenant Side -->
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ 'Tenant' }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu">
                        <li>
                        <a class="dropdown-item" href="{{ route('tenant.index') }}" onclick="event.preventDefault(); document.getElementById('tenant-form').submit();">
                          Tenant List
                        </a>

                        <form id="tenant-form" action="{{ route('tenant.index') }}">
                          {{ csrf_field() }}
                        </form>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('tenant.create') }}" onclick="event.preventDefault(); document.getElementById('create-form').submit();">
                          Add Tenant
                        </a>

                        <form id="create-form" action="{{ route('tenant.create') }}">
                          {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                    </li>
                    <!-- Floor Side -->
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ 'Floor' }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu">
                        <li>
                        <a class="dropdown-item" href="{{ route('floor.index') }}" onclick="event.preventDefault(); document.getElementById('floorlist-form').submit();">
                          Floor List
                        </a>

                        <form id="floorlist-form" action="{{ route('floor.index') }}">
                          {{ csrf_field() }}
                        </form>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('floor.create') }}" onclick="event.preventDefault(); document.getElementById('addfloor-form').submit();">
                          Add Floor
                        </a>

                        <form id="addfloor-form" action="{{ route('floor.create') }}">
                          {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                    </li>

                    <!-- Tenant Side -->
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ 'Zone' }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu">
                        <li>
                        <a class="dropdown-item" href="{{ route('zone.index') }}" onclick="event.preventDefault(); document.getElementById('zonelist-form').submit();">
                          Zone List
                        </a>

                        <form id="zonelist-form" action="{{ route('zone.index') }}">
                          {{ csrf_field() }}
                        </form>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('zone.create') }}" onclick="event.preventDefault(); document.getElementById('addzone-form').submit();">
                          Add Tenant
                        </a>

                        <form id="addzone-form" action="{{ route('zone.create') }}">
                          {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                    </li>
                    @endguest
                  </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest

                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
