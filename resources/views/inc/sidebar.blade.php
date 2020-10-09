<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ Auth::user()->name }}</p>
            <p class="designation">{{ Auth::user()->email }}</p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-category">Main Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/crimes') }}">
          <i class="menu-icon typcn typcn-shopping-bag"></i>
          <span class="menu-title">Report Crime</span>
        </a>
      </li>

      @if(Auth::user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/categories') }}">
            <i class="menu-icon typcn typcn-shopping-bag"></i>
            <span class="menu-title">Categories</span>
          </a>
        </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
          <i class="menu-icon typcn typcn-shopping-bag"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
      
      
    </ul>
  </nav>