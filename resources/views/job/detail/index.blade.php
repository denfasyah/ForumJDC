@extends('index') @section('job')

<div class="container mt-5">
  <div class="flex flex-wrap mt-6 -mx-3">
    <div class="w-full max-w-full px-3 lg:w-1/2 lg:flex-none">
      <h1>Lorem</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit sapiente
        magnam quam voluptatibus? Qui dolorem provident alias modi obcaecati
        consectetur tenetur illo maiores asperiores animi natus, tempora
        dolores, dolorum, dolor saepe! Quo, vel minima! Consequuntur, nemo.
        Illo, voluptatem, autem corrupti dolores fuga asperiores deserunt
        corporis repellendus quos minima unde incidunt.
      </p>
      <a href="">https://www.example.com/loker_it/</a>
    </div>

    <div
      class="w-full px-3 lg:mt-0 mb-6 flex justify-center lg:mb-0 lg:w-1/3 lg:flex-none"
    >
      <img
        src="{{ asset('img/loker1.png') }}"
        alt="img-blur-shadow"
        class="w-80 rounded-t-2xl h-full"
      />
    </div>
  </div>
</div>

@endsection
