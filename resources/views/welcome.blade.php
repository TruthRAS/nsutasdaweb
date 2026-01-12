<x-page_set_up>

        <x-layout></x-layout>
        <x-carousel_template></x-carousel_template>


        <!--End of carousel section-->

        <x-aboutus></x-aboutus>

        <section class="py-5">
            <div class="container-fluid justify-content-center">
                <div class="leaders">
                    <h4 class="text-center">Our Leadership</h4>
                    <hr class="ruler">

                </div>

                <div class="d-flex flex-row">

                    <x-our_leaders>
                        <x-slot:title>
                           {{"Hi"}}
                        </x-slot:title>
                        <x-slot:name>
                           {{"Hiiii"}}
                        </x-slot:name>
                        <x-slot:email>
                           {{"Hiii"}}
                        </x-slot:email>
                        <x-slot:mobile>
                           {{"0203201440"}}
                        </x-slot:mobile>
                        <x-slot:facebook>
                           {{"Facebook"}}
                        </x-slot:facebook>
                    </x-our_leaders>






                      </div>
                </div>


        </section>



        <x-footer></x-footer>




    </x-page_set_up>
