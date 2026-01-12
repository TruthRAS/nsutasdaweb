<x-page_set_up>
    <x-layout>

    </x-layout>
    <x-dashboard>
        <x-slot:heading>
            Monday's Activity
        </x-slot:heading>
    </x-dashboard>

    <div class="container-activity shadow">
        <div class="row">
        <div class="col-lg-10 shadow">

        @foreach ($jobs as $job)

        <div class="container-body shadow ">
            <div class="activity_container " id="activity_container">
            <div class="title ">{{ $job['title'] }}
                <hr class="ruler">
            </div>

            <h5 class="activity_time">{{ $job['time'] }}</h5>
            <p class="main_activity"> {{ $job['days_activity'] }}</p>
            <p class="main_activity text-black"> {{ $job['Hym_title'] }}</p>
            <p class="lesson-number text-center"> {{ $job['lesson_number'] }}</p>
            <p class="supporting_verses text-center"> {{ $job['memory_text'] }}</p>
            <p class="activity_description "> {{ $job['lesson'] }}</p>
            <p class="activity_description pb-1 "><pre class="text-black text-center " > {{ $job['hymnal'] }}</pre></p>
            <p class="activity_description pb-2"> {{ $job['prayer_topic'] }}</p>

        </div>
        </div>

        @endforeach

        </div>
        <div class="col-lg-2" >
            <x-adverticement></x-adverticement>

        </div>
    </div>

</div>
<x-footer>

</x-footer>


    </x-page_set_up>
