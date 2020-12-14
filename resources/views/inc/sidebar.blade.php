<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <img class="img-xs rounded-circle" src="https://cdn.iconscout.com/icon/free/png-512/shield-protect-verify-defense-safety-on-protection-1-4114.png" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ Auth::user()->name }}</p>
            <p class="designation">{{ Auth::user()->email }}</p>

            {{-- <p class="designation"> Location {{ session('location') }}</p> --}}
          </div>
        </a>
      </li>
      <li class="nav-item nav-category">Main Menu</li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/maps') }}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Maps</span>
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

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/locations') }}">
            <i class="menu-icon typcn typcn-shopping-bag"></i>
            <span class="menu-title">Locations</span>
          </a>
        </li>
      @endif
      <li class="nav-item">
        {{-- <a  href="{{ url('/') }}"> --}}
          <i class="menu-icon typcn typcn-shopping-bag"></i>
          <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </a>
      </li>


    </ul>
  </nav>
