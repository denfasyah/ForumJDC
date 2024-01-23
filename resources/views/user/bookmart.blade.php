@include('components.header2')

<!-- hero -->

<br />

<!-- layout -->
<div class="mx-2 mt-14">
  <div class="flex justify-between flex-wrap lg:flex-nowrap">
    <div class="w-3/5 bg-white h-14 rounded-2xl">
      <div class="w-full bg-white pb-3 rounded-2xl">
        <div class="flex relative">
          <div class="avatar flex items-center ml-5 mt-5">
            <div class="mask mask-circle w-7 lg:w-12 md:w-14 sm:w-8 mx-auto">
              <img src="{{ asset('icon/anime.png') }}" />
            </div>
            <div class="ml-5">
              <p
                class="font-bold text-xs lg:text-lg md:text-lg sm:text-md mt-1"
              >
                Adent
              </p>
              <p class="mb-2 text-xs lg:text-md md:text-md sm:text-md">
                09.00 AM
              </p>
            </div>
          </div>
          <!-- icon bookmart -->
          <a
            href="#"
            class="absolute mt-7 right-0 mr-10 lg:mr-14 md:mr-14 sm:mr-14"
          >
            <svg
              class="w-4 lg:w-6 md:w-6 sm:w-6"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="m19 21-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
            </svg>
          </a>
          <!-- icon more -->
          <a href="#" class="absolute mt-7 right-0 mr-5">
            <svg
              class="w-4 lg:w-6 md:w-6 sm:w-6"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
              <path d="M19 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
              <path d="M5 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
            </svg>
          </a>
        </div>

        <p
          class="text-xs lg:text-sm md:text-sm sm:text-sm font-medium mx-8 mt-2"
        >
          eat > sleep > code 😋
        </p>

        <div class="mx-5 mt-5">
          <!-- <img src="{{ asset('img/banner.png') }}" alt="" class="w-full rounded-2xl"> -->
        </div>

        <div class="flex relative">
          <div class="flex mt-3 ml-7">
            <!-- icon like -->
            <a href="#">
              <svg
                class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5 lg:mt-0 md:mt-0 sm:mt-0"
                fill="none"
                stroke="#bfbfbf"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                ></path>
              </svg>
            </a>
            <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
              1.7M
            </p>
          </div>

          <div class="flex mt-3 ml-1 lg:ml-5 md:ml-5 sm:ml-3">
            <!-- icon dislike -->
            <a href="#">
              <svg
                class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5"
                fill="none"
                stroke="#bfbfbf"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"
                ></path>
              </svg>
            </a>
            <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
              20
            </p>
          </div>

          <div class="flex absolute right-0 mr-7">
            <div class="flex mt-3 ml-2">
              <!-- icon message -->
              <a href="#">
                <svg
                  class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5"
                  fill="none"
                  stroke="#bfbfbf"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                  ></path>
                </svg>
              </a>
              <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
                3.2K
              </p>
            </div>

            <div class="flex mt-3 ml-1 lg:ml-5 md:ml-5 sm:ml-3">
              <!-- icon share -->
              <a href="#">
                <svg
                  class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5"
                  fill="none"
                  stroke="#bfbfbf"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M18 2a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                  <path d="M6 9a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                  <path d="M18 16a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                  <path d="m8.59 13.51 6.83 3.98"></path>
                  <path d="m15.41 6.51-6.82 3.98"></path>
                </svg>
              </a>
              <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
                1K
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full mt-4 bg-white pb-3 rounded-2xl">
        <div class="flex relative">
          <div class="avatar flex items-center ml-5 mt-5">
            <div class="mask mask-circle w-7 lg:w-12 md:w-14 sm:w-8 mx-auto">
              <img src="{{ asset('icon/anime.png') }}" />
            </div>
            <div class="ml-5">
              <p
                class="font-bold text-xs lg:text-lg md:text-lg sm:text-md mt-1"
              >
                Adent
              </p>
              <p class="mb-2 text-xs lg:text-md md:text-md sm:text-md">
                09.00 AM
              </p>
            </div>
          </div>
          <!-- icon bookmart -->
          <a
            href="#"
            class="absolute mt-7 right-0 mr-10 lg:mr-14 md:mr-14 sm:mr-14"
          >
            <svg
              class="w-4 lg:w-6 md:w-6 sm:w-6"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="m19 21-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
            </svg>
          </a>
          <!-- icon more -->
          <a href="#" class="absolute mt-7 right-0 mr-5">
            <svg
              class="w-4 lg:w-6 md:w-6 sm:w-6"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
              <path d="M19 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
              <path d="M5 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
            </svg>
          </a>
        </div>

        <p
          class="text-xs lg:text-sm md:text-sm sm:text-sm font-medium mx-8 mt-2"
        >
          eat > sleep > code 😋
        </p>

        <div class="mx-5 mt-5">
          <!-- <img src="{{ asset('img/banner.png') }}" alt="" class="w-full rounded-2xl"> -->
        </div>

        <div class="flex relative">
          <div class="flex mt-3 ml-7">
            <!-- icon like -->
            <a href="#">
              <svg
                class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5 lg:mt-0 md:mt-0 sm:mt-0"
                fill="none"
                stroke="#bfbfbf"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                ></path>
              </svg>
            </a>
            <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
              1.7M
            </p>
          </div>

          <div class="flex mt-3 ml-1 lg:ml-5 md:ml-5 sm:ml-3">
            <!-- icon dislike -->
            <a href="#">
              <svg
                class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5"
                fill="none"
                stroke="#bfbfbf"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"
                ></path>
              </svg>
            </a>
            <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
              20
            </p>
          </div>

          <div class="flex absolute right-0 mr-7">
            <div class="flex mt-3 ml-2">
              <!-- icon message -->
              <a href="#">
                <svg
                  class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5"
                  fill="none"
                  stroke="#bfbfbf"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                  ></path>
                </svg>
              </a>
              <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
                3.2K
              </p>
            </div>

            <div class="flex mt-3 ml-1 lg:ml-5 md:ml-5 sm:ml-3">
              <!-- icon share -->
              <a href="#">
                <svg
                  class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5"
                  fill="none"
                  stroke="#bfbfbf"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M18 2a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                  <path d="M6 9a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                  <path d="M18 16a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                  <path d="m8.59 13.51 6.83 3.98"></path>
                  <path d="m15.41 6.51-6.82 3.98"></path>
                </svg>
              </a>
              <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
                1K
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-1/3">
      <div class="bg-white p-5 rounded-2xl relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Popular Now
          <a
            class="text-Blue text-xs absolute right-0 mr-2 lg:text-md lg:mr-5 md:text-md md:mr-5 sm:text-sm sm:mr-5 mt-6"
            >More</a
          >
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <div class="flex">
          <div class="columns-3 my-2">
            <img
              class="w-full aspect-square rounded-lg ..."
              src="{{ asset('icon/anime.png') }}"
            />
            <img
              class="w-full aspect-square rounded-lg mt-2 ..."
              src="{{ asset('icon/anime.png') }}"
            />
            <img
              class="w-full aspect-square rounded-lg mt-2 ..."
              src="{{ asset('icon/anime.png') }}"
            />
            <img
              class="w-full aspect-square rounded-lg mt-2 ..."
              src="{{ asset('icon/anime.png') }}"
            />
            <img
              class="w-full aspect-square rounded-lg mt-2 ..."
              src="{{ asset('icon/anime.png') }}"
            />
            <img
              class="w-full aspect-square rounded-lg mt-2 ..."
              src="{{ asset('icon/anime.png') }}"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('components.footer')
