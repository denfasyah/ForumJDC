@extends('index') @section('event')

<div class="container mt-5">
  <div class="flex px-10 flex-wrap mt-6 -mx-3">
    <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
      <h1>Meet Up</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit sapiente
        magnam quam voluptatibus? Qui dolorem provident alias modi obcaecati
        consectetur tenetur illo maiores asperiores animi natus, tempora
        dolores, dolorum, dolor saepe! Quo, vel minima! Consequuntur, nemo.
        Illo, voluptatem, autem corrupti dolores fuga asperiores deserunt
        corporis repellendus quos minima unde incidunt.
      </p>
      <p>Time : 27 Februari 2024</p>
    </div>

    <div class="w-full px-3 lg:mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
      <img
        src="{{ asset('img/meetup.png') }}"
        alt="img-blur-shadow"
        class="w-full rounded-2xl"
      />
    </div>
  </div>
</div>

@endsection
