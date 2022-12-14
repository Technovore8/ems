<nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="{{route('home')}}" class="logo m-0 float-start">Property</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li class="active"><a href="{{route('home')}}">Home</a></li>
              <li class="has-children">
                <a href="{{route('properties')}}">Properties</a>
                <ul class="dropdown">
                  <li><a href="{{route('buyproperties')}}">Buy Property</a></li>
                  <li><a href="{{route('sellproperties')}}">Sell Property</a></li>
                </ul>
              </li>
              <li><a href="{{route('services')}}">Services</a></li>
              <li><a href="{{route('aboutus')}}">About</a></li>
              <li><a href="{{route('contactus')}}">Contact Us</a></li>
              <li><a href="contact.html">Search</a></li>
              @if (auth()->user())
              <li><a href="{{ route('user.profile') }}">{{ auth()->user()->name }}</a></li>
              <li><a href="{{ route('logout')}}">Logout</a></li>
              @else
              <li><a href="{{ route('login')}}">Login</a></li>
              @endif
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
    </div>
    </div>
  </div>
</nav>