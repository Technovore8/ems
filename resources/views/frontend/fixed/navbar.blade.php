<nav class="site-nav">
  <div class="container">
    <div class="menu-bg-wrap">
      <div class="site-navigation">
        <a href="{{ route('home') }}" class="logo m-0 float-start">EverNest</a>

        <ul
          class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
        >
          <li class=" {{(request()->is("/")) ? 'active': '' }} "><a href="{{ route('home') }}">Home</a></li>
          @if(auth()->user())
          @auth
          @if(auth()->user()->role=='buyer')
          <li class=" {{(request()->is("all-property-index/*")) ? 'active': '' }} "><a href="{{ route('frontend.properties') }}">Buy Properties</a></li>
          @endif
          @endauth
          @endif
          @if(auth()->user())
          @auth
          @if(auth()->user()->role=='seller')
          <li class=" {{(request()->is("/")) ? 'active': '' }} "><a href="{{ route('property.sell') }}">Sell Properties</a></li>
          @endif
          @endauth
          @endif
          <li class=" {{(request()->is("front-project-index")) ? 'active': '' }} "><a href="{{ route('front.project') }}">Projects</a></li>
          <li class=" {{(request()->is("contactus")) ? 'active': '' }} "><a href="{{ route('contactus') }}">Contact Us</a></li>
          <li class=" {{(request()->is("aboutus")) ? 'active': '' }} "><a href="{{ route('aboutus') }}">About Us</a></li>
          @if (auth()->user())
          <li>

              @auth
                @if (auth()->user()->role == 'admin')
                <a href="{{ route('admin') }}">{{ auth()->user()->name }}|Profile</a>
                @else
                <a href="{{ route('user.profile') }}">{{ auth()->user()->name }}|Profile</a>
                @endif
              @endauth


          </li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
          @else
          <li><a href="{{ route('login') }}">login</a></li>
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