<div class="sidebar">

    <x-navlink :active="request()->is('monday')" href="monday">Monday</x-navlink>
    <x-navlink :active="request()->is('teusday')" href="teusday">Teusday</x-navlink>
    <x-navlink :active="request()->is('wednesday')" href="wednesday">Wednesday</x-navlink>
    <x-navlink :active="request()->is('thursday')" href="thursday">Thursday</x-navlink>
    <x-navlink :active="request()->is('friday')" href="friday">Friday</x-navlink>
    <x-navlink :active="request()->is('saturday')" href="saturday">Saturday</x-navlink>
    <x-navlink :active="request()->is('sunday')" href="sunday">Sunday</x-navlink>
  </div>
