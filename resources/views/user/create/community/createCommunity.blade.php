@include('components.menuCreate')

<div class="mt-4">
  <div class="flex justify-center">
    <div class="lg:w-3/5">
      <div class="bg-white rounded-2xl pb-5 relative">
        <div class="flex justify-center">
          <img
            src="{{ asset('img/diss.png') }}"
            alt="Search Icon"
            class="w-60 h-60"
          />
          <hr class="h-0.5 bg-slate-400" />
        </div>
        <h1 class="text-2xl text-center font-bold text-Blue">
          Create your Community
        </h1>
        <div class="container flex flex-col sm:flex-row">
          <div class="w-full mt-10 sm:mt-0 sm:mr-2">
            <div class="mb-4 mt-5">
              <label for="" class="font-semibold">Community name</label>
              <input
                type="text"
                class="border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
              />
            </div>
            <div class="mb-4">
                <label for="" class="font-semibold">Category</label>
                <select class="select border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full">
                    <option disabled selected class="hidden"></option>
                    <option>Game of Thrones</option>
                    <option>Lost</option>
                    <option>Breaking Bad</option>
                    <option>Walking Dead</option>
                  </select>
            </div>
            <div class="mb-4">
              <label for="" class="font-semibold">Add someone</label>
              <input
                type="text"
                class="border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
              />
            </div>
            <div class="mb-4">
              <label for="" class="font-semibold">Description</label>
              <input
                type="text"
                class="border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
              />
            </div>
            <div class="text-red-500 text-center"> *  <a href="" class="text-Blue">terms and conditions</a> <span class="text-black">for creating a community</span></div>
          </div>
          <div class="w-full mt-5 sm:ml-2">
            <div class="mb-4">
              <label for="" class="font-semibold">Rules</label>
              <textarea
                class="border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
                rows="4"
              ></textarea>
            </div>
            <div class="flex justify-end gap-2 mt-5">
              <button
                class="border-2 border-Blue text-Blue rounded-xl lg:px-8 md:px-5 sm:px-5 px-2 py-1"
              >
                Cancel
              </button>
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
  </div>

  @include('components.footer')
</div>
