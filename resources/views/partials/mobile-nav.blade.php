<div id="dark-screen"></div>
<div id="responsive-menu">
	<div id="menu-logo">
		<a class="mobile-menu-brand" href="/">
	      <img src="/images/logo.png" class="logo" alt="logo" />
	    </a>
	</div>
	<div id="mobile-menu">
		<ul class="mobile-links">

			<li class="mobile-nav-link {{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>

			<li class="mobile-nav-link {{ request()->route()->getName() == 'about' ? 'active' : '' }}"><a href="/about">About</a></li>

			<li class="mobile-nav-link {{ request()->route()->getName() == 'services' ? 'active' : '' }}"><a href="/services">Services</a></li>
			
			<li class="mobile-nav-link {{ request()->route()->getName() == 'publications' ? 'active' : '' }}"><a href="/publications">Publications</a></li>
			
			<li class="mobile-nav-link {{ request()->route()->getName() == 'blog' ? 'active' : '' }}"><a href="/blog">Blog</a></li>

			<li class="mobile-nav-link {{ request()->route()->getName() == 'contact-us' ? 'active' : '' }}"><a href="/contact-us">Contact us</a></li>
			
		</ul>
	</div>

</div>