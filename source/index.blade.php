@extends('_layouts.main')

@section('body')
<div id="main-section" class="overflow-hidden ">
    <div class="flex h-screen items-center justify-center relative isolate px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 ">
        <div class="text-center">
          <img class="block w-2/3 mx-auto" src="/img/GeoDesignW.png" alt="GeoDesign">
          {{-- <h1 class="text-6xl font-bold tracking-tight text-white sm:text-6xl">GeoDesign</h1>
          <p class="mt-6 text-xl leading-8 text-white">Building Beautiful, Progressive, and Eco-friendly Spaces.</p> --}}
          {{-- <p class="text-sm italic text-white ">Integrating Form & Function <br> With The Natural Environment</p> --}}
        </div>
      </div>
    </div>
    <footer class="text-white absolute pl-10 mb-24 bottom-0 z-100">
        <a href="tel:+13057759916" class="block underline">305.775.9916
        </a>
        <a href="mailto:george@geodesignmiami.com" class="block underline">george@geodesignmiami.com</i>
        </a>
        
    </footer>
  </div>
  
@endsection
