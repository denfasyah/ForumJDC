@extends('index') @section('learn')
<div class="container mt-5">
  <div class="lg:px-10 mb-10">
    <div class="bg-white rounded-2xl pb-10 shadow-soft-xl">
      <div
        class="card card-side px-10 pt-10 flex items-center flex-wrap justify-center lg:text-left md:text-left sm:text-left text-center"
      >
        <figure class="lg:w-40 md:w-40 sm:w-60 w-40 h-full">
          <img
            src="{{ asset('img/learnhtml.png') }}"
            class="rounded"
            alt="Movie"
          />
        </figure>
        <div class="card-body">
          <h2 class="card-title text-2xl">Belajar HTML Dasar Untuk Pemula</h2>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga,
            unde?
          </p>
        </div>
      </div>
      <hr
        class="h-px mt-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"
      />
      <ul class="px-10 mt-10">
        <!-- list -->
        <li class="bg-Background px-2 py-1  w-full rounded">
          <a href="" class="flex items-center gap-2">
            <img src="{{ asset('svg/document.svg') }}" alt="" />
            <p class="">1 : Pengenalan Dasar HTML untuk Pemula</p>
          </a>
        </li>

        <li class="bg-Background mt-2 p-2 w-full rounded">
          <a href="" class="flex items-center gap-2">
            <img src="{{ asset('svg/document.svg') }}" alt="" />
            <p class="">2 : Mengenal Tag, Elemen, dan Atribut dalam HTML</p>
          </a>
        </li>
        <li class="bg-Background mt-2 p-2 w-full rounded">
          <a href="" class="flex items-center gap-2">
            <img src="{{ asset('svg/document.svg') }}" alt="" />
            <p class="">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
              aspernatur!
            </p>
          </a>
        </li>
        <li class="bg-Background mt-2 p-2 w-full rounded">
          <a href="" class="flex items-center gap-2">
            <img src="{{ asset('svg/document.svg') }}" alt="" />
            <p class="">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
              aspernatur!
            </p>
          </a>
        </li>
        <li class="bg-Background mt-2 p-2 w-full rounded">
          <a href="" class="flex items-center gap-2">
            <img src="{{ asset('svg/document.svg') }}" alt="" />
            <p class="">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
              aspernatur!
            </p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection
