<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Hits-Message</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">New Post</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/search-friend" >Cari Teman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>