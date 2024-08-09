<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <img src="assets/img/logo_fasya.png" style="width: 100px; height:auto" alt="">

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{url ('/')}}">Home<br></a></li>
            <li><a href="{{url ('about')}}">About us</a></li>
            <li><a href="{{url ('services')}}">Services</a></li>
            <li><a href="{{url ('products')}}">Products</a></li>
            <li><a href="{{url ('solutions')}}">Solutions</a></li>
            <li><a href="{{url ('news')}}">News</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      
      <a class="btn-getstarted" href="{{ url('/login') }}">login</a>

    </div>
  </header>