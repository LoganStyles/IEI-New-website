    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <a href="{{ url('office') }}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-tachometer-alt fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Dashboard</span>
                </div>
            </a>
            <!-- Menu with submenu -->
            <a href="#menu" data-toggle="collapse" aria-expanded="{{ request()->is('office/menu') || request()->is('office/menu/*')? 'true' : 'false' }}" class="bg-dark dashboard list-group-item list-group-item-action flex-column align-items-start {{ request()->is('office/menu') || request()->is('office/menu/*')? 'active' : 'collapsed' }}">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-bars fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Menu</span>
                    <span class="fas fa-angle-double-right submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='menu' class="collapse sidebar-submenu {{ request()->is('office/menu') || request()->is('office/menu/*')? 'show' : '' }}">
                <a href="{{ route('office.menu.create') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/menu/create')? 'active' : '' }}">
                    <span class="menu-collapsed">Create Menu</span>
                </a>
                <a href="{{ route('office.menu.view') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/menu')? 'active' : '' }}">
                    <span class="menu-collapsed">Manage Menu</span>
                </a>
            </div>
            <!-- Menu with submenu -->
            <a href="#pages" data-toggle="collapse" aria-expanded="{{ request()->is('office/pages') || request()->is('office/pages/*')? 'true' : 'false' }}" class="bg-dark dashboard list-group-item list-group-item-action flex-column align-items-start {{ request()->is('office/pages') || request()->is('office/pages/*')? 'active' : 'collapsed' }}">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-cubes fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Pages</span>
                    <span class="fas fa-angle-double-right submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='pages' class="collapse sidebar-submenu {{ request()->is('office/pages') || request()->is('office/pages/*')? 'show' : '' }}">
                <a href="{{ route('office.pages') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/pages')? 'active' : '' }}">
                    <span class="menu-collapsed">View Pages</span>
                </a>
                <a href="{{ route('office.pages.home') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/pages/home')? 'active' : '' }}">
                    <span class="menu-collapsed">Home Page</span>
                </a>
                <a href="{{ route('office.pages.about') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/pages/about')? 'active' : '' }}">
                    <span class="menu-collapsed">About Page</span>
                </a>
                <a href="{{ route('office.pages.modify','1') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/pages/modify/*')? 'active' : '' }}">
                    <span class="menu-collapsed">Other Pages</span>
                </a>
                <a href="{{ route('office.pages.strategy') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/pages/about')? 'active' : '' }}">
                    <span class="menu-collapsed">Strategy Page</span>
                </a>
                <a href="{{ route('office.pages.schemes') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/pages/schemes')? 'active' : '' }}">
                    <span class="menu-collapsed">Schemes Page</span>
                </a>
            </div>
            
            <!-- Menu with submenu -->
            <a href="#resources" data-toggle="collapse" aria-expanded="{{ request()->is('office/resources') || request()->is('office/resources/*')? 'true' : 'false' }}" class="bg-dark dashboard list-group-item list-group-item-action flex-column align-items-start {{ request()->is('office/resources') || request()->is('office/resources/*')? 'active' : 'collapsed' }}">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-database fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Resources</span>
                    <span class="fas fa-angle-double-right submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='resources' class="collapse sidebar-submenu {{ request()->is('office/resources') || request()->is('office/resources/*')? 'show' : '' }}">
                <a href="{{ route('office.resources') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/resources')? 'active' : '' }}">
                    <span class="menu-collapsed">Manage Resources</span>
                </a>
            </div>
            
            <!-- Menu with submenu -->
            @if (Auth::user()->id == 1)
            <a href="#accounts" data-toggle="collapse"aria-expanded="{{ request()->is('office/accounts') || request()->is('office/accounts/*')? 'true' : 'false' }}" class="bg-dark dashboard list-group-item list-group-item-action flex-column align-items-start {{ request()->is('office/accounts') || request()->is('office/accounts/*')? 'active' : 'collapsed' }}">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-users-cog  fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Accounts</span>
                    <span class="fas fa-angle-double-right submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='accounts' class="collapse sidebar-submenu">
                <a href="{{ url('office/register') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/register')? 'active' : '' }}">
                    <span class="menu-collapsed">Create Account</span>
                </a>
                <a href="{{ url('office/accounts') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->is('office/accounts')? 'active' : '' }}">
                    <span class="menu-collapsed">View All Users</span>
                </a>
            </div>
            @endif
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li>
            <!-- /END Separator -->
            <a href="{{ route('office.users.profile') }}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>    
                </div>
            </a>
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OTHERS</small>
            </li>
            <!-- /END Separator -->
            <a href="{{ url('/') }}" target="_blank" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-globe fa-fw mr-3"></span>
                    <span class="menu-collapsed">Visit Website</span>
                </div>
            </a>
            <!-- /END Separator -->
            <a class="bg-dark list-group-item list-group-item-action"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-sign-out-alt  fa-fw mr-3"></span>
                    <span class="menu-collapsed">Logout</span>
                </div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <!-- Logo -->
            <li class="list-group-item logo-separator d-flex justify-content-center">
                <img src="{{ asset('/media/images/slider/login-logo.png') }}" alt="{{ config('app.name', 'Application') }}"></a>
            </li>   
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->    
    <!-- MAIN -->
    <div class="content col">