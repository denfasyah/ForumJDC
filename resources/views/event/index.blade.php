@extends('index') @section('event')

<div class="container mt-5">
  <!-- content -->
  <div class="grid grid-cols-1 mt-5 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <!-- Card 1 -->

    <div
      class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border"
    >
      <div class="relative">
        <img
          src="{{ asset('img/competition.png') }}"
          alt="img-blur-shadow"
          class="w-full rounded-t-2xl h-full"
        />
      </div>
      <div class="flex-auto pb-5 px-1 pt-2 mx-2">
        <p
          class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text"
        >
          27 Februari 2024
        </p>
        <h5>Competition</h5>
        <p class="mb-6 leading-normal text-sm line-clamp-1">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem,
          quos.
        </p>
        <div class="flex items-center justify-end">
          <a
            href="{{ route('event') }}?detailevent"
            type="button"
            class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-Blue text-Blue hover:border-Blue hover:bg-transparent hover:text-Blue hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-Blue"
          >
            View
          </a>
        </div>
      </div>
    </div>

    <div
      class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border"
    >
      <div class="relative">
        <img
          src="{{ asset('img/meetup.png') }}"
          alt="img-blur-shadow"
          class="w-full rounded-t-2xl h-full"
        />
      </div>
      <div class="flex-auto pb-5 px-1 pt-2 mx-2">
        <p
          class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text"
        >
          27 Februari 2024
        </p>
        <h5>Meet Up</h5>
        <p class="mb-6 leading-normal text-sm line-clamp-1">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem,
          quos.
        </p>
        <div class="flex items-center justify-end">
          <a
            href="{{ route('event') }}?detailevent""
            type="button"
            class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-Blue text-Blue hover:border-Blue hover:bg-transparent hover:text-Blue hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-Blue"
          >
            View
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
