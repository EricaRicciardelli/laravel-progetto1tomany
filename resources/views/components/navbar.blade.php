<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          @auth
          <a href="">{{Auth::user()->name}}</a>
          <form method="POST" action="{{route('logout')}}">
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
          </form>
          @else
          <li>
            <a class="btn btn-primary" href="{{route('register')}}">Registrati</a>
            <a class="btn btn-primary" href="{{route('login')}}">Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>