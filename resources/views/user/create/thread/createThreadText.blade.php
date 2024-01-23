@include('components.menuCreate')

<div class="mx-2 mt-14">
  <div class="flex justify-between flex-wrap lg:flex-nowrap">
    <div class="w-3/5  h-14 rounded-2xl">
      <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0">
        <div
          class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border"
        >
        <div class="mt-8 flex  flex-wrap px-3 -mx-3 sm:px-6 xl:px-12">
            <img src="{{ asset('icon/Vector.png') }}" alt="Search Icon" class="mr-3">
            <p class=" text-Blue">Create Thread</p>
            <div class="lg:w-3/12 md:w-3/12  max-w-full  ml-auto flex-0">
              <a
                class="inline-block w-full text-center text-black text-md "
              >
               Text
              </a>
            </div>
            <div class="lg:w-3/12 md:w-3/12 sm:mx-5 mx-5 lg:mx-0 md:mx-0  max-w-full  flex-0">
              <a
                class="inline-block w-full  text-center text-black text-md "
              >
                Photos
              </a>
            </div>
            <div class="lg:w-3/12 md:w-3/12  max-w-full  mr-auto flex-0">
              <a
                class="inline-block w-full text-center text-black text-md "
              >
               Videos
              </a>
            </div>
          </div>
          <div class="flex-auto p-6">
            <form role="form text-left">
              <div class="mb-4">
                <label for="" class="font-bold">Title</label>
                <input
                  class="mt-2 text-sm  w-full  rounded-lg border border-solid border-gray-300 bg-white focus:outline-none py-2 px-3"
                  type="text"
                />
              </div>
              <div class="mb-4">
                <label for="" class="font-bold">Description</label>
                <input
                  class="mt-2 text-sm  w-full  rounded-lg border border-solid border-gray-300 bg-white focus:outline-none py-2 px-3"
                  type="text"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="w-1/3">
      <div class="bg-white p-5 rounded-2xl relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex justify-center text-red-600 items-center"
        >
          Attention
        </h2>
        <hr class="h-0.5 bg-slate-400" />

        <ul class="container mt-5 list-disc">
          <li class="">
            Please pay attention when you want to post, use polite words.
          </li>
          <li class="">Please be nice, No Racist, and No Porn.</li>
          <li class="">Don't forget to read the rules in your community.</li>
          <li class="">
            Pay attention to the applicable terms and conditions.
          </li>
        </ul>

        <div class="flex"></div>
      </div>
      <div class="bg-white p-5 mt-4 rounded-2xl relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Choose Community
        </h2>
        <div class="flex border-1  w-full rounded-xl">
            <input placeholder="Choose Community" class="p-1 border border-slate-600 border-1 w-full focus:outline-none px-2 rounded-xl">
            <button class="absolute right-4 mt-1 border-1 border-slate-600 ">
                <img src="{{ asset('svg/searchPost.svg') }}" alt="Search Icon" class="mr-3">
            </button>
            
       </div>

        <div class="flex justify-end gap-2 mt-5">
          <button class="border-2 border-Blue text-Blue rounded-xl lg:px-8 md:px-5 sm:px-5 px-2 py-1">
            Cancel
          </button>
          <button class="bg-Blue text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1">Post</button>
        </div>
      </div>
    </div>
  </div>
</div>

@include('components.footer')
