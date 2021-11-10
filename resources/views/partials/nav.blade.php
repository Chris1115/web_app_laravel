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
          <a class="nav-link {{ ($title === "BisnisCap") ? 'active' : '' }}"href="/">Home</a>
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </div>
      </div>
    </div>
  </nav>