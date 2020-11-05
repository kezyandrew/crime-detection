

<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{ url('/home') }}">
    Crime Alert </a>
    <a class="navbar-brand brand-logo-mini" href="{{ url('/home') }}">
    CAA </a>
</div>
<div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav">
    <li class="nav-item font-weight-semibold d-none d-lg-block">Location Detected : {{ Auth::user()->location }}</li>
    <li class="nav-item dropdown language-dropdown">
        <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
        {{-- <div class="d-inline-flex mr-0 mr-md-3">
            <div class="flag-icon-holder">
            <i class="flag-icon flag-icon-ug"></i>
            </div>
        </div> --}}
        <span class="profile-text font-weight-medium d-none d-md-block">{{ session('location') }}</span>
        </a>
        {{-- <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
        <a class="dropdown-item">
            <div class="flag-icon-holder">
            <i class="flag-icon flag-icon-us"></i>
            </div>English
        </a>
        </div> --}}
    </li>
    </ul>
    <form class="ml-auto search-form d-none d-md-block" action="#">
    <div class="form-group">
        <input type="search" class="form-control" placeholder="Search Here">
    </div>
    </form>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
        <i class="mdi mdi-bell-outline"></i>
        <span class="count">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
        <a class="dropdown-item py-3">
            <p class="mb-0 font-weight-medium float-left">You have 0 unread mails </p>
            <span class="badge badge-pill badge-primary float-right">View all</span>
        </a>
        <div class="dropdown-divider"></div>
        
        {{-- <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
            <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
            <div class="preview-item-content flex-grow py-2">
            <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
            <p class="font-weight-light small-text"> The meeting is cancelled </p>
            </div>
        </a> --}}

        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
        <i class="mdi mdi-email-outline"></i>
        <span class="count bg-success">1</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
        <a class="dropdown-item py-3 border-bottom">
            <p class="mb-0 font-weight-medium float-left">You have 1 new notifications </p>
            <span class="badge badge-pill badge-primary float-right">View all</span>
        </a>

        <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
            <i class="mdi mdi-airballoon m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
            <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
            <p class="font-weight-light small-text mb-0"> Today </p>
            </div>
        </a>
        </div>
    </li>
    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
        <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
        <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
            <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
            <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</p>
        </div>
        <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
        <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
        <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
        <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
        <a href="{{ route('logout') }}"  class="dropdown-item"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        >Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
    </li>
    </ul> 
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
    <span class="mdi mdi-menu"></span>
    </button>
</div>
</nav>