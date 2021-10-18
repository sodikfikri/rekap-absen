<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
        <img src="{{ asset('images/logo/logo_bonceng_white.png') }}" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
        <img src="{{ asset('images/logo/logo_head_white.png') }}" alt="logo" /> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown"> --}}
            <li class="nav-item dropdown d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    {{-- <img class="img-xs rounded-circle" src="{{asset('images/no-avatar.png')}}" alt="Profile image"> --}}
                    <img class="img-sm" src="{{asset('images/no-avatar.png')}}" alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown text-center" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-lg rounded-circle" src="{{asset('images/no-avatar.png')}}" alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                        <p class="font-weight-light text-muted mb-0">Super Admin</p>
                    </div>
                    <a href="" class="logout-button" style="cursor:pointer;">
                        Sign Out<i class="dropdown-item-icon ti-power-off"></i>
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center pos-absolute" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
