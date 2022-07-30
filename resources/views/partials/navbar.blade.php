<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Home</a>
        @auth
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('my-article*') ? 'active' : '' }}" href="/my-article">My Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                          <form action="/logout" method="POST">
                            @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a></button>
                          </form>
                      </li>
                    </ul>
                  </li>
            </ul>
        </div>
        @else
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/login" class="nav-link {{ Request::is('login') || Request::is('register') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
        </ul>
        @endauth
    </div>
</nav>
