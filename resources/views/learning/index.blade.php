@extends('index') @section('learn')
<div class="container mt-5">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <!-- Card 1 -->

    <div
      class="relative flex flex-col h-full min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border"
    >
      <div
        class="relative h-full overflow-hidden bg-cover rounded-xl"
        style="background-image: url('{{ asset('img/learnhtml.png') }}')"
      >
        <span
          class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"
        ></span>
        <div class="relative z-10 flex flex-col flex-auto h-full p-4">
          <h5 class="pt-2 mb-6 font-bold text-white">HTML DASAR</h5>
          <a
            class="mt-28 mb-0 font-semibold leading-normal text-white group text-sm"
            href="javascript:;"
          >
            Learn
            <i
              class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"
            ></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div
      class="relative flex flex-col h-full min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border"
    >
      <div
        class="relative h-full overflow-hidden bg-cover rounded-xl"
        style="background-image: url('{{ asset('img/learncss.png') }}')"
      >
        <span
          class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"
        ></span>
        <div class="relative z-10 flex flex-col flex-auto h-full p-4">
          <h5 class="pt-2 mb-6 font-bold text-white">CSS DASAR</h5>
          <a
            class="mt-28 mb-0 font-semibold leading-normal text-white group text-sm"
            href="javascript:;"
          >
            Learn
            <i
              class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"
            ></i>
          </a>
        </div>
      </div>
    </div>
    <!-- Card 3 -->
    <div
      class="relative flex flex-col h-full min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border"
    >
      <div
        class="relative h-full overflow-hidden bg-cover rounded-xl"
        style="background-image: url('{{ asset('img/learnjs.png') }}')"
      >
        <span
          class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"
        ></span>
        <div class="relative z-10 flex flex-col flex-auto h-full p-4">
          <h5 class="pt-2 mb-6 font-bold text-white">JAVASCRIPT DASAR</h5>
          <a
            class="mt-28 mb-0 font-semibold leading-normal text-white group text-sm"
            href="javascript:;"
          >
            Learn
            <i
              class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"
            ></i>
          </a>
        </div>
      </div>
    </div>
    <!-- Card 4 -->
    <div
      class="relative flex flex-col h-full min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border"
    >
      <div
        class="relative h-full overflow-hidden bg-cover rounded-xl"
        style="background-image: url('{{ asset('img/learnphp.png') }}')"
      >
        <span
          class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"
        ></span>
        <div class="relative z-10 flex flex-col flex-auto h-full p-4">
          <h5 class="pt-2 mb-6 font-bold text-white">PHP DASAR</h5>
          <a
            class="mt-28 mb-0 font-semibold leading-normal text-white group text-sm"
            href="javascript:;"
          >
            Learn
            <i
              class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"
            ></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
