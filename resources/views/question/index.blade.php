@extends('index') @section('quest')

<div class="container mt-5">
  <div class="flex flex-wrap mt-6 -mx-3">
    <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
      <div
        class="shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4"
      >
        <div class="relative h-full overflow-hidden bg-cover rounded-xl">
          <div class="bg-white p-5 rounded-2xl relative">
            <h2
              class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center justify-center"
            >
              Create Question
            </h2>
            <hr class="h-0.5 bg-slate-400" />
            <form role="form text-left">
              <div class="mb-4">
                <label for="" class="font-bold">Question</label>
                <input
                  class="mt-2 text-sm w-full rounded-lg border border-solid border-gray-300 bg-white focus:outline-none py-2 px-3"
                  type="text"
                />
              </div>
              <div class="mb-4">
                <label for="" class="font-bold">Photo</label>
                <input
                  class="bg-Background mt-2 text-sm w-full rounded-lg border border-solid border-gray-300 py-2 px-3"
                  type="file"
                />
              </div>
            </form>
            <div class="flex justify-end gap-2 mt-5">
              <button
                class="bg-Blue text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1"
              >
                Create
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full px-3 mt-5 lg:mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
      <div
        class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="flex-auto p-4">
          <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
              <div class="flex flex-col h-full">
                <div class="avatar flex items-center">
                  <div class="mask mask-circle w-7 lg:w-12 md:w-14 sm:w-8">
                    <img src="{{ asset('icon/anime.png') }}" />
                  </div>
                  <h5 class="font-bold ml-5">Adent</h5>
                </div>
                <p class="mb-1 font-semibold">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, laudantium?
                </p>
                <a
                  class="mt-auto mb-0 text-lg font-semibold leading-normal group text-Blue"
                  href="{{ route('answer') }}"
                >
                  Answer
                  <i
                    class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"
                  ></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="relative flex flex-col mt-5 min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="flex-auto p-4">
          <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
              <div class="flex flex-col h-full">
                <div class="avatar flex items-center">
                  <div class="mask mask-circle w-7 lg:w-12 md:w-14 sm:w-8">
                    <img src="{{ asset('icon/anime.png') }}" />
                  </div>
                  <h5 class="font-bold ml-5">Kangyan</h5>
                </div>
                <p class="mb-1 font-semibold">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, laudantium?
                </p>
                <a
                  class="mt-auto mb-0 text-lg font-semibold leading-normal group text-Blue"
                  href="javascript:;"
                >
                  Answer
                  <i
                    class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"
                  ></i>
                </a>
              </div>
            </div>
            <div
              class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 flex-none"
            >
              <img
                src="{{ asset('img/errtest.png') }}"
                class="w-60 rounded-lg"
                alt="imgquestion"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
