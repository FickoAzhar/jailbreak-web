<!-- NAVBAR -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bgnav">
  <div class="container">
      <a class="navbar-brand" href="#">
          <img class="logo" src="/asset/img/logo-white.png" height="50" alt=""> 
          <!-- <h6 class="my-auto text-white">The Dreams <br> Property</h6> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "The Dream's Property") ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "produk") ? 'active' : '' }}" href="/product">Product & Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "blogs") ? 'active' : '' }}" href="/blogs">Blog</a>
              </li>
              <li class="nav-item dropdown">
                  <!-- <a class="nav-link" href="#">Find Us</a> -->
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Find Us
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item {{ ($title === "tentang kami") ? 'active' : '' }}" href="/about">About Us</a></li>
                      <li><a class="dropdown-item {{ ($title === "contact") ? 'active' : '' }}" href="/contact">Contact Us</a></li>
                  </ul>
              </li> 
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-globe"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Indonesia</a></li>
                  <li><a class="dropdown-item" href="#">English</a></li>
                </ul>
            </li>
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My dashboard</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item" ><i class="bi bi-box-arrow-right"></i>Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
  
              @else
  
              <li class="nav-item">
                <a href="/login" class="nav-link {{ ($active === "login")?'active' :''}}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
              </li>
            @endauth
          </ul>
          {{-- <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa-solid fa-globe"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Indonesia</a></li>
                    <li><a class="dropdown-item" href="#">English</a></li>
                  </ul>
              </li>
          </ul>
          <button class="btn ms-lg-3 py-0 rounded-pill">
              Login
          </button> --}}
      </div>
  </div>
</nav>
<!-- END NAVBAR -->