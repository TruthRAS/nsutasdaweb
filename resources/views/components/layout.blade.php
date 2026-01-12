<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img class="rounded-circle" src="{{ asset('images/sdanewlogo.jfif') }}" style="width: 3rem">
    </a>
    <a class="navbar-brand" href="#">SDA Nsuta</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">

      <!-- LEFT SIDE -->
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery">Gallery</a>
        </li>
      </ul>

      <!-- RIGHT SIDE -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Days
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="sunday">Sunday</a></li>
            <li><a class="dropdown-item" href="monday">Monday</a></li>
            <li><a class="dropdown-item" href="teusday">Tuesday</a></li>
            <li><a class="dropdown-item" href="wednesday">Wednesday</a></li>
            <li><a class="dropdown-item" href="thursday">Thursday</a></li>
            <li><a class="dropdown-item" href="friday">Friday</a></li>
            <li><a class="dropdown-item" href="saturday">Sabbath</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>
