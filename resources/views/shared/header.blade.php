<header>
  <div class="container py-4">
    <nav class="navbar">

      {{-- logo --}}
      <img class="navbar-brand" src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg"
        alt="Logo DC Comics">

      {{-- hamburger --}}

      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="#">CHARACTERS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="offcanvasComicsDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                COMICS
              </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasComicsDropdown">
                <li><a class="dropdown-item" href="/">Home</a></li>
                <li><a class="dropdown-item" href="/comics/create">Create</a></li>
                <li><a class="dropdown-item" href="/comics/genres">Genres</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">MOVIES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">GAMES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">COLLECTIBLES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">VIDEOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FANS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NEWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SHOP</a>
            </li>
          </ul>
        </div>
      </div>

      {{-- navbar --}}

      <ul class="navbar-nav d-none d-lg-flex flex-row gap-3 fw-bold">
        <li>
          <a class="nav-link py-3" href="#">CHARACTERS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link py-3 dropdown-toggle" href="#" id="comicsDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            COMICS
          </a>
          <ul class="dropdown-menu" aria-labelledby="comicsDropdown" style="position: absolute">
            <li><a class="dropdown-item" href="/">Home</a></li>
            <li><a class="dropdown-item" href="/comics/create">Create</a></li>
            <li><a class="dropdown-item" href="/comics/genres">Genres</a></li>
          </ul>
        </li>
        <li>
          <a class="nav-link py-3" href="#">MOVIES</a>
        </li>
        <li>
          <a class="nav-link py-3" href="#">TV</a>
        </li>
        <li>
          <a class="nav-link py-3" href="#">GAMES</a>
        </li>
        <li>
          <a class="nav-link py-3" href="#">COLLECTIBLES</a>
        </li>
        <li>
          <a class="nav-link py-3" href="#">VIDEOS</a>
        </li>
        <li>
          <a class="nav-link py-3" href="#">FANS</a>
        </li>
        <li>
          <a class="nav-link py-3" href="#">NEWS</a>
        </li>
        <li>
          <a class="nav-link py-3" href="#">SHOP</a>
        </li>
      </ul>

    </nav>
</header>
