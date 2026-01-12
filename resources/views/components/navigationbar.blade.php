<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <x-navlink  href="gallery" :active='request()->is("gallery")'>Home</x-navlink>
          </li>
          <li class="nav-item">
            <x-navlink  href="about" :active='request()->is("about")'>Home 2</x-navlink>
          </li>

        </ul>
      </div>
    </div>
  </nav>
