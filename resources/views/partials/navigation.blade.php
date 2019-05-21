<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/" ><img class="logo" src="/images/logo.png" alt="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
    </button>
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
        <li class="nav-item {{ request()->route()->getName() == 'publications' ? 'active' : '' }}">
          <a class="nav-link" href="/publications">Publications</a>
        </li>
        <li class="nav-item {{ request()->route()->getName() == 'blog' ? 'active' : '' }}">
          <a class="nav-link" href="/blog">blog</a>
        </li>
        <li class="nav-item {{ request()->route()->getName() == 'contact-us' ? 'active' : '' }}">
          <a class="nav-link" href="contact-us" href="#contact">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>/