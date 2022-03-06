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
                    <a class="nav-link {{ ($title === "The Dream's Property") ? 'active' : '' }}" href="/">{{ __('general.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/products*') ? 'active' : '' }}" href="/products">{{ __('general.product') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "blogs") ? 'active' : '' }}" href="/blogs">{{ __('general.blog') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('general.findUs') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ ($title === "tentang kami") ? 'active' : '' }}" href="/about">{{ __('general.aboutUs') }}</a></li>
                        <li><a class="dropdown-item {{ ($title === "contact") ? 'active' : '' }}" href="/contact">{{ __('general.contactUs') }}</a></li>
                    </ul>
                </li> 
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{strtoupper(Lang::locale())}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="lang/id">ID</a></li>
                      <li><a class="dropdown-item" href="lang/en">EN</a></li>
                  </ul>
              </li>
                @auth
                  <li class="nav-item">
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="btn ms-lg-3 py-0 rounded-pill" >{{ __('general.logout') }}</button>
                    </form>
                  </li>
                  @else
      
                  <li class="nav-item">
                    <a href="/login" class="nav-link">
                      <button class="btn ms-lg-3 py-0 rounded-pill">
                        {{ __('general.login') }}
                      </button>
                    </a>
                  </li>
                @endauth
              </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->