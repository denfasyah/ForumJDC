@include('components.header2')

<!-- layout -->
<br />
<div class="mt-14 mx-3">
  <div class="flex justify-between flex-wrap lg:flex-nowrap">
    <div class="lg:w-1/3 w-2/5">
      <div class="bg-white p-5 rounded-2xl relative">
        <h2
          class="gap-2 text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          <img src="{{ asset('icon/community.png') }}" />
          New Community
        </h2>
        <hr class="h-0.5 bg-slate-400" />

        <div class="flex flex-wrap">
          <div class="avatarmt-5 flex items-center">
            <div
              class="w-12 lg:w-14 md:w-14 sm:w-14 mask mask-circle mx-auto lg:mt-5 md:mt-5 sm:mt-3"
            >
              <!-- <span>.</span> -->
              <img
                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"
              />
            </div>
            <p class="mt-5 ml-5 text-xs lg:text-lg font-semibold">
              Laravel
              <span class="block text-xs text-slate-400"
                >453 Thread 1.2k Post</span
              >
            </p>
          </div>
          <button
            class="lg:p-2 lg:px-5 lg:mt-8 lg:mr-5 md:p-1 md:px-3 bg-Blue text-white text-xs rounded-md lg:absolute px-1 font-bold lg:right-0 flex ml-16"
          >
            Join
          </button>
        </div>
        <hr class="h-0.5 mt-3 bg-slate-200" />
        <div class="flex justify-center mt-5">
          <button class="bg-Blue text-white w-full p-2 rounded-lg">
            See All
          </button>
        </div>

        <!-- Content for Friends section -->
      </div>

      <div class="bg-white p-5 rounded-2xl mt-3 relative">
        <h2
          class="gap-2 text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          <img src="{{ asset('icon/event.png') }}" />
          Community Event
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <div class="flex">
          <div class="avatar">
            <div class="w-14 mt-5 rounded-full">
              <img
                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"
              />
            </div>
            <p class="mt-5 ml-5 text-lg font-semibold">
              Harajuku Festival
              <span class="block text-sm text-slate-400"
                >453 Thread 1.2k Post</span
              >
            </p>
          </div>
          <button
            class="lg:px-5 md:p-1 md:px-3 font-bold bg-Blue text-white text-xs rounded-md absolute mt-7 px-1 lg:mt-7 lg:mr-5 md:mt-10 md:mr-5 mr-2 right-0"
          >
            See
          </button>
        </div>
        <hr class="h-0.5 mt-3 bg-slate-200" />
        <div class="flex justify-center mt-5">
          <button class="bg-Blue text-white w-full p-2 rounded-lg">
            See More Event
          </button>
        </div>

        <!-- Content for Friends section -->
      </div>
    </div>
    <div class="w-1/2 bg-white lg:mx-4 h-14 rounded-2xl">
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
      <!-- <div class="w-full bg-white mt-4 h-80 text-center rounded-2xl">
                <h2>lorem</h2>
            </div> -->

      <!-- pagination -->
      <div class="w-full bg-white mt-4 text-center rounded-2xl">
        <div class="join flex justify-center flex-wrap">
          <button class="join-item btn bg-white">
            <svg
              width="26"
              height="26"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 2a10 10 0 1 0 0 20 10 10 0 1 0 0-20z"></path>
              <path d="m12 8-4 4 4 4"></path>
              <path d="M16 12H8"></path>
            </svg>
          </button>
          <button class="join-item btn bg-white">1</button>
          <button class="join-item btn bg-white">2</button>
          <button class="join-item btn bg-white">3</button>
          <button class="join-item btn bg-white">...........</button>
          <button class="join-item btn bg-white">70</button>
          <button class="join-item btn bg-white">
            <svg
              width="26"
              height="26"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 2a10 10 0 1 0 0 20 10 10 0 1 0 0-20z"></path>
              <path d="m12 16 4-4-4-4"></path>
              <path d="M8 12h8"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div class="lg:w-1/3 w-2/5 mt-4 lg:mt-0">
      <div class="bg-white p-5 rounded-2xl relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Marketplace
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <div class="flex">
          <div class="avatar">
            <div class="w-14 mt-5 rounded-full">
              <img
                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"
              />
            </div>
            <p class="mt-5 ml-5 text-lg font-semibold">
              Japan Market
              <span class="block text-sm text-slate-400"
                >453 Thread 1.2k Post</span
              >
            </p>
          </div>
          <button
            class="lg:px-5 md:p-1 md:px-3 font-bold bg-Blue text-white text-xs rounded-md absolute mt-7 px-1 lg:mt-7 lg:mr-5 md:mt-10 md:mr-5 mr-2 right-0"
          >
            See All
          </button>
        </div>
        <hr class="h-0.5 mt-3 bg-slate-200" />
        <div class="flex justify-center mt-5">
          <button class="bg-Blue text-white w-full p-2 rounded-lg">
            See More Event
          </button>
        </div>

        <!-- Content for Friends section -->
      </div>

      <div class="bg-white p-5 rounded-2xl mt-3 relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Top Creator
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <div class="flex">
          <div class="avatar">
            <div class="w-14 mt-5 rounded-full">
              <img
                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"
              />
            </div>
            <p class="mt-5 ml-5 text-lg font-semibold">
              Rebecca
              <span class="block text-sm text-slate-400"
                >453 Thread 1.2k Post</span
              >
            </p>
          </div>
          <button
            class="lg:px-5 md:p-1 md:px-3 font-bold bg-Blue text-white text-xs rounded-md absolute mt-7 px-1 lg:mt-7 lg:mr-5 md:mt-10 md:mr-5 mr-2 right-0"
          >
            See
          </button>
        </div>
        <hr class="h-0.5 mt-3 bg-slate-200" />
        <div class="flex justify-center mt-5">
          <button class="bg-Blue text-white w-full p-2 rounded-lg">
            See More Event
          </button>
        </div>

        <!-- Content for Friends section -->
      </div>
    </div>
  </div>
</div>

@include('components.footer')
