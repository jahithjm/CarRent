@props(['title'=>''])

<x-base-layout :$title>

    <x-layout.header/>
    {{$slot}}



    @hasSection('footerLinks')
    <footer>
        @yield('footerLinks')
    </footer>
    @endif

</x-base-layout>
