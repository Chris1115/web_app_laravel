<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/LOGO.png') }}" alt="" width="160" height="160" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === "BisnisCap") ? 'active' : '' }}" href="/">Home</a>
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </div>
        @auth
          <a class="nav-link {{ ($title === "Course") ? 'active' : '' }}" href="/user/course">Courses</a>
          <a class="nav-link {{ ($title === "News") ? 'active' : '' }}" href="/user/news">News</a>
        @endauth
      </div>

      
      @auth
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="/home">
                <img src="{{ asset('icons/house.svg') }}" alt="Bootstrap" width="22" height="22"> Home
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">
                  <img src="{{ asset('icons/box-arrow-right.svg') }}" alt="Bootstrap" width="22" height="22"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
        @else
          <a href="/register"><button class="btn btn-outline-primary">Register</button></a>
          <a href="/login"><button class="btn btn-primary m-3">Login</button></a>
        @endauth

    </div>
</nav>