<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column mt-4">
            <li class="nav-item">
                <span class="nav-link">CORE</span>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item mt-3">
                <span class="nav-link">INTERFACE</span>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/blogs*') ? 'active' : '' }}" href="/dashboard/blogs">
                <span data-feather="file-text"></span>
                My Blog
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="/dashboard/products">
                    <span data-feather="shopping-bag"></span>
                    Product
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/reqView*') ? 'active' : '' }}" href="/dashboard/reqView">
                    <span data-feather="git-pull-request"></span>
                    request-view
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/userCart*') ? 'active' : '' }}" href="/dashboard/userCart">
                    <span data-feather="shopping-cart"></span>
                    User Cart
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
                    <span data-feather="users"></span>
                    Users
                </a>
            </li> --}}
        </ul>
    </div>
</nav>