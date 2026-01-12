<x-pagemeta>
    <x-layout></x-layout>
     <x-carousel_template></x-carousel_template>
     <x-aboutus></x-aboutus>
<section class="py-5">
            <div class="container-fluid justify-content-center">
                <div class="leaders">
                    <h4 class="text-center">Our Leadership</h4>
                    <hr class="ruler">

                </div>

                <div class="d-flex flex-row">
                    @foreach ($jobs as $job )
                    <x-our_leaders>
                        <x-slot:title>
                           {{$job['title']}}
                        </x-slot:title>
                        <x-slot:name>
                           {{$job['Name']}}
                        </x-slot:name>
                        <x-slot:email>
                           {{$job['email']}}
                        </x-slot:email>
                        <x-slot:mobile>
                           {{$job['mobile']}}
                        </x-slot:mobile>
                        <x-slot:facebook>
                           {{$job['facebook']}}
                        </x-slot:facebook>
                    </x-our_leaders>
                   <!-- <div class="card mx-2" >
                        <div class="card-body">
                          <h4 class="card-title">{{ $job['title'] }}</h4>
                          <img class="card-img-top" src="{{ 'images/great-wall-of-china.jpg' }}" alt="">
                          <p class="card-text">{{ $job['Name'] }}</p>
                          <a href="mailto:".{{ $job['email'] }} class="card-link"><i class="fa-duotone fa-solid fa-envelope fa-2x text-primary" id="email"></i></a>
                          <a href="{{ $job['facebook'] }}" class="card-link"><i class="fa-brands fa-facebook fa-2x text-primary" id="facebook"></i></a>
                          <a href="htpps:/wa.me/".{{ $job['mobile'] }} class="card-link"><i class="fa-brands fa-whatsapp fa-2x"></i></a>
                        </div>
                    </div>-->

                    @endforeach




                      </div>
                </div>


        </section>
     <x-footer></x-footer>
</x-pagemeta>
