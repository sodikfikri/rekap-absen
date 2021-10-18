<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
        <a href="" class="nav-link">
            <div class="profile-image">
            {{-- <img class="img-xs rounded-circle" src="{{asset('images/no-avatar.png')}}" alt="profile image"> --}}
            <img class="img-sm" src="{{asset('images/no-avatar.png')}}" alt="profile image">
            <div class="dot-indicator bg-success"></div>
            </div>
            <div class="text-wrapper">
            <p class="profile-name">Allen Moreno</p>
            <p class="designation">Super Administrator</p>
            </div>
        </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
    
        <li class="nav-item {{ (request()->segment(1) == 'dashboard') ? 'active-single' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ (request()->segment(1) == 'export') ? 'active-single' : '' }}">
            <a class="nav-link" href="{{ route('export') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Export File</span>
            </a>
        </li>
    
    </ul>
    </nav>
    