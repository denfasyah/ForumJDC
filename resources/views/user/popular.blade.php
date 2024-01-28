@include('components.header2')

<!-- layout -->
<br />
<div class="mt-14 mx-3 bg-white p-5 rounded-xl">
  <div class="flex gap-5 mx-5 flex-wrap">
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">Animal</button>
    </a>
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">
        Anime & Film
      </button>
    </a>
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">
        Automotive
      </button>
    </a>
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">
        Entertainment
      </button>
    </a>
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">Female</button>
    </a>
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">
        Food & Travel
      </button>
    </a>
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">Games</button>
    </a>
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">Sports</button>
    </a>
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">Story</button>
    </a>
    <a href="">
      <button class="border-2 border-Blue py-3 px-5 rounded-lg">
        Technology
      </button>
    </a>
  </div>

  <div class="flex items-center justify-between mt-5 mx-5">
    <div class="flex gap-2">
      <span>#</span>
      <h1 class="font-bold text-xl">Popular Now</h1>
    </div>
    <div class="flex items-center gap-2 mr-5">
      <p class="text-slate-400 font-semibold">Total thread: 99</p>
      <div class="dropdown dropdown-bottom dropdown-end">
        <div
          tabindex="0"
          role="button"
          class="border-2 border-Blue py-1 px-2 rounded-md"
        >
          Filter
        </div>
        <ul
          tabindex="0"
          class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52"
        >
          <li><a>This week</a></li>
          <li><a>1 week ago </a></li>
          <li><a>2 week ago </a></li>
          <li><a>3 week ago </a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="overflow-x-hidden h-[850px] mt-10">
    <div class="p-3 relative">
      <h1 class="text-lg font-semibold">
        Animal <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <div id="slide1" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide2" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide3" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide4" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide5" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide6" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide7" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide8" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide9" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide10" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>

        <div
          class="absolute flex justify-between transform -translate-y-1/3 left-1 right-1 top-1/2"
        >
          <button
            onclick="prevSlide()"
            id="prevBtn"
            class="btn btn-circle bg-Blue text-white"
          >
            ❮
          </button>
          <button
            onclick="nextSlide()"
            id="nextBtn"
            class="btn btn-circle bg-Blue text-white"
          >
            ❯
          </button>
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />

    <div class="p-3 relative h-40">
      <h1 class="text-lg font-semibold">
        Anime & Film <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <h1 class="mx-auto mt-5 text-slate-400 font-semibold">
          there are no popular topics in this category
        </h1>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />

    <div class="p-3 relative">
      <h1 class="text-lg font-semibold">
        Automotive <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <div id="slide1" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide2" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide3" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide4" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide5" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide6" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide7" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide8" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide9" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide10" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>

        <div
          class="absolute flex justify-between transform -translate-y-1/3 left-1 right-1 top-1/2"
        >
          <a href="" id="prevBtn" class="btn btn-circle bg-Blue text-white"
            >❮</a
          >
          <a href="" id="nextBtn" class="btn btn-circle bg-Blue text-white"
            >❯</a
          >
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />

    <div class="p-3 relative">
      <h1 class="text-lg font-semibold">
        Entertainment <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <div id="slide1" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide2" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide3" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide4" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide5" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide6" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide7" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide8" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide9" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide10" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>

        <div
          class="absolute flex justify-between transform -translate-y-1/3 left-1 right-1 top-1/2"
        >
          <a href="" id="prevBtn" class="btn btn-circle bg-Blue text-white"
            >❮</a
          >
          <a href="" id="nextBtn" class="btn btn-circle bg-Blue text-white"
            >❯</a
          >
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />

    <div class="p-3 relative">
      <h1 class="text-lg font-semibold">
        Female <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <div id="slide1" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide2" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide3" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide4" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide5" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide6" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide7" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide8" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide9" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide10" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>

        <div
          class="absolute flex justify-between transform -translate-y-1/3 left-1 right-1 top-1/2"
        >
          <a href="" id="prevBtn" class="btn btn-circle bg-Blue text-white"
            >❮</a
          >
          <a href="" id="nextBtn" class="btn btn-circle bg-Blue text-white"
            >❯</a
          >
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />

    <div class="p-3 relative">
      <h1 class="text-lg font-semibold">
        Food & Travel <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <div id="slide1" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide2" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide3" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide4" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide5" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide6" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide7" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide8" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide9" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide10" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>

        <div
          class="absolute flex justify-between transform -translate-y-1/3 left-1 right-1 top-1/2"
        >
          <a href="" id="prevBtn" class="btn btn-circle bg-Blue text-white"
            >❮</a
          >
          <a href="" id="nextBtn" class="btn btn-circle bg-Blue text-white"
            >❯</a
          >
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />

    <div class="p-3 relative">
      <h1 class="text-lg font-semibold">
        Games <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <div id="slide1" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide2" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide3" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide4" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide5" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide6" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide7" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide8" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide9" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide10" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>

        <div
          class="absolute flex justify-between transform -translate-y-1/3 left-1 right-1 top-1/2"
        >
          <a href="" id="prevBtn" class="btn btn-circle bg-Blue text-white"
            >❮</a
          >
          <a href="" id="nextBtn" class="btn btn-circle bg-Blue text-white"
            >❯</a
          >
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />

    <div class="p-3 relative">
      <h1 class="text-lg font-semibold">
        Sports <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <div id="slide1" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide2" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide3" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide4" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide5" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide6" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide7" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide8" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide9" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide10" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>

        <div
          class="absolute flex justify-between transform -translate-y-1/3 left-1 right-1 top-1/2"
        >
          <a href="" id="prevBtn" class="btn btn-circle bg-Blue text-white"
            >❮</a
          >
          <a href="" id="nextBtn" class="btn btn-circle bg-Blue text-white"
            >❯</a
          >
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />

    <div class="p-3 relative">
      <h1 class="text-lg font-semibold">
        Story <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <div id="slide1" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide2" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide3" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide4" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide5" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide6" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide7" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide8" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide9" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide10" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>

        <div
          class="absolute flex justify-between transform -translate-y-1/3 left-1 right-1 top-1/2"
        >
          <a href="" id="prevBtn" class="btn btn-circle bg-Blue text-white"
            >❮</a
          >
          <a href="" id="nextBtn" class="btn btn-circle bg-Blue text-white"
            >❯</a
          >
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />

    <div class="p-3 relative">
      <h1 class="text-lg font-semibold">
        Technology <span class="text-slate-400">8/17</span>
      </h1>
      <div class="carousel w-full mx-5 py-2 gap-5">
        <div id="slide1" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide2" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide3" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide4" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide5" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide6" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide7" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide8" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide9" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>
        <div id="slide10" class="carousel-item relative w-40 h-40">
          <img
            src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full object-cover rounded-lg"
          />
        </div>

        <div
          class="absolute flex justify-between transform -translate-y-1/3 left-1 right-1 top-1/2"
        >
          <a href="" id="prevBtn" class="btn btn-circle bg-Blue text-white"
            >❮</a
          >
          <a href="" id="nextBtn" class="btn btn-circle bg-Blue text-white"
            >❯</a
          >
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-slate-400" />
  </div>
</div>



@include('components.footer')
