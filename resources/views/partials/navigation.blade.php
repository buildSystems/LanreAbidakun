<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/" ><img class="logo" src="/images/logo.png" alt="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
    </button>

    
    @if(! strpos(Request::path(), 'dashboard') )

    <div class="collapse navbar-collapse" id="main-nav"  >
      <ul class="navbar-nav" >
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ request()->route()->getName() == 'about' ? 'active' : '' }}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{ request()->route()->getName() == 'services' ? 'active' : '' }}">
          <a class="nav-link" href="/services">Services</a>
        </li>
        <!-- <li class="nav-item {{ request()->route()->getName() == 'services' ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle" href="/services" id="services-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>                      
            <ul class="dropdown-menu" aria-labelledby="services-dropdown">
              <li class="dropdown-item"><a href="#">Clients</a></li>
              <li class="dropdown-item"><a href="#">Our Mission</a></li>
              <li class="dropdown-item"><a href="#">Team</a></li>
              <li class="dropdown-item"><a href="#">Network</a></li>
            </ul> 
        </li> -->
        <li class="nav-item {{ request()->route()->getName() == 'publications' ? 'active' : '' }}">
          <a class="nav-link" href="/publications">Publications</a>
        </li>
        <li class="nav-item {{ request()->route()->getName() == 'blog' ? 'active' : '' }}">
          <a class="nav-link" href="/blog">blog</a>
        </li>
        <li class="nav-item {{ request()->route()->getName() == 'contact-us' ? 'active' : '' }}">
          <a class="nav-link" href="contact-us" href="#contact">Contact us</a>
        </li>
        
        @guest
        <li class="nav-item ">
          <a class="nav-link" href="/admin/login" >Sign in</a>
        </li>
        @else
        <li class="nav-item ">
          <a class="nav-link" href="/admin/dashboard/view-posts" >Dashboard</a>
        </li>
        @endguest
      </ul>
    </div>

    @else

    <div class="collapse navbar-collapse" id="main-nav"  >
      <ul class="navbar-nav ml-auto">
          
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                  <a class="dropdown-item logout" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" >
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>

      </ul>
    </div>

    @endif

  </div>
</nav>