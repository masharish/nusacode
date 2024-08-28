<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Masharish</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " href="/">Home</a>
            {{-- <a class="nav-link {{ ($title === "Home") ? 'active' :'' }}" href="/">Home</a> --}}
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('blog') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link Blog  " href="{{ route('about') }}">About</a>
          </li>      
         
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        <button class="btn btn-warning" type="submit">Login</button>
      </div>
    </div>
  </nav>