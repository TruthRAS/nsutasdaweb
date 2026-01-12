<div class="card mx-2" >
    <div class="card-body">
      <h4 class="card-title">{{ $title }}</h4>
      <img class="card-img-top" src="{{ 'images/great-wall-of-china.jpg' }}" alt="">
      <p class="card-text">{{ $name }}</p>
      <a href="mailto:{{ $email }}" class="card-link"><i class="fa-duotone fa-solid fa-envelope fa-2x text-primary" id="email"></i></a>
      <a href="{{ $facebook }}" class="card-link"><i class="fa-brands fa-facebook fa-2x text-primary" id="facebook"></i></a>
      <a href="{{ $mobile }}" class="card-link"><i class="fa-brands fa-whatsapp fa-2x"></i></a>
    </div>
</div>
