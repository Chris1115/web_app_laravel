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
        @auth
        @if (auth()->user()->name === 'admin')
          <a class="nav-link {{ ($title === "BisnisCap") ? 'active' : '' }}" href="/admin/dashboard">Dashboard</a>
          <a class="nav-link {{ ($title === "Course") ? 'active' : '' }}" href="/admin/course">Courses</a>
          <a class="nav-link {{ ($title === "News") ? 'active' : '' }}" href="/admin/news">News</a>
          <a class="nav-link {{ ($title === "Forums") ? 'active' : '' }}" href="/admin/forum">Forums</a>
          <a class="nav-link {{ ($title === "Accounts") ? 'active' : '' }}" href="/admin/account">Accounts</a>
          <a class="nav-link {{ ($title === "Classes") ? 'active' : '' }}" href="/admin/class">Classes</a>
        @else
          <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/user/home">Dashboard</a>
          <a class="nav-link {{ ($title === "Course") ? 'active' : '' }}" href="/user/course">Courses</a>
          <a class="nav-link {{ ($title === "News") ? 'active' : '' }}" href="/user/news">News</a>
          <a class="nav-link {{ ($title === "Forums") ? 'active' : '' }}" href="/user/forum">Forums</a>
          <a class="nav-link {{ ($title === "Class") ? 'active' : '' }}" href="/user/myclass/{{ auth()->user()->id}}">Class</a>
        @endif
        @endauth
      </div>
    </div>
    @auth
      <a href="/logout"><button class="btn btn-danger">Logout</button></a>
    @else
      <a href="/register"><button class="btn btn-outline-primary">Register</button></a>
      <a href="/login"><button class="btn btn-primary m-3">Login</button></a>
    @endauth
  </div>
</nav>