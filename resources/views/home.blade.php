<x-layout>
  <x-slot name="message">
    @if (session('success'))
    <div class="p-4 text-sm text-lightBlue text-center bg-darkSteelBlue" role="alert">
      <span class="font-medium">{{session('success')}} </span>
    </div>
    @endif
  </x-slot>
  <x-hero />
  <x-home_blogs_section :blogs="$blogs"/>
  <x-subscribe />
</x-layout>