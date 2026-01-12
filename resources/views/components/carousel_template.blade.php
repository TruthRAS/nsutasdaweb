<!-- Carousel -->

<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ URL('images/sda2.jpg') }}" alt="Los Angeles" class="d-block w-100">
        <div class="carousel-caption">
            <h1 class="title">Los Angeles</h1>
            <p class="carousel-description">We had such a great time in LA!</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="{{ URL('images/logimg.jpg') }}" alt="New York" class="d-block w-100">
        <div class="carousel-caption">
            <h1 class="title">Los Angeles</h1>
            <p class="carousel-description">We had such a great time in LA!</p>
          </div>
      </div>

      <div class="carousel-item">
        <img src="{{ URL('images/sda1.jpg') }}" alt="New York" class="d-block w-100">
        <div class="carousel-caption">
            <h1 class="title">Los Angeles</h1>
            <p class="carousel-description">There is going to be an extensive meeting on the second way of interacting
                with our church members
            </p>
          </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
