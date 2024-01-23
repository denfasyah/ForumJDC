@include('components.menuCreate')

<div class="mt-4 mx-4">
  <div class="flex justify-center">
    <div class="lg:w-3/5">
      <div class="bg-white rounded-2xl pb-5 relative">
        <h1 class="text-2xl text-center font-bold text-Blue">
          Create your Event
        </h1>
        <div class="container flex flex-col sm:flex-row">
          <div class="w-full mt-10 sm:mt-0 sm:mr-2">
            <div class="mb-4 mt-5">
              <label for="" class="font-semibold"> Description event</label>
              <div class="border-2 border-Blue pb-20 rounded-xl mt-2">
                <textarea
                class="mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
                rows="5"
                placeholder="lorem"
              ></textarea>

                <div class="flex mt-10 mx-8">
                  <input type="file" id="file" class="hidden" />
                  <label
                    for="file"
                    class="text-center bg-Background font-bold text-xs h-60 w-full cursor-pointer rounded-xl border-2 border-dashed border-Blue"
                  >
                    <img
                      class="mx-auto mt-20 mb-2 w-8"
                      src="{{ asset('icon/addphoto.png') }}"
                    />Upload Your Video or photo here</label
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="w-full mt-5 sm:ml-2">
            <div class="mb-4 mt-5">
              <label for="" class="font-semibold">Community</label>
              <input
                type="text"
                class="border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
              />
            </div>
            <div class="mb-4">
              <label for="" class="font-semibold">Title</label>
              <input
                type="text"
                class="border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
              />
            </div>
            <div class="mb-4">
              <label for="" class="font-semibold">Date</label>
              <input
                type="date"
                class="border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
              />
            </div>
            <div class="mb-4">
              <label for="" class="font-semibold">Select Privacy</label>
              <select
                class="select border-2 border-Blue mt-1 focus:border-Blue rounded-xl focus:outline-none px-4 py-2 w-full"
              >
                <option disabled selected class="hidden"></option>
                <option>Public</option>
                <option>Private</option>
              </select>
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
    <div class="w-1/3 ml-4">
      <div class="bg-white p-3 rounded-2xl relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Pooling
        </h2>
        <div class="w-full mt-5 sm:ml-2">
          <div class="mb-4 mt-5">
            <label for="" class="font-semibold">Question</label>
            <input
              type="text"
              class="border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
            />
          </div>
          <div class="mb-4">
            <label for="" class="font-semibold"> Choose an answer</label>
            <div class="">
              <input
                type="radio"
                class="border-2 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-4"
              />
              <input
                type="text"
                class="border-b-2 border-slate-300 mt-1 w-full focus:outline-none"
                placeholder="option 1"
              />
            </div>
            <div class="">
              <input
                type="radio"
                class="border-2 border-Blue mt-1  rounded-xl focus:outline-none px-4 py-4"
              />
              <input
                type="text"
                class="border-b-2 border-slate-300 w-full mt-1 focus:outline-none"
                placeholder="option 2"
              />
            </div>
          </div>

          <div class="mb-4">
            <label for="" class="font-semibold">Another option</label>
            <div class="form-control">
              <label class="label cursor-pointer">
                <span class="label-text font-semibold text-xs">
                  Allow users to choose more than one answer</span
                >
                <input type="checkbox" class="toggle mr-5" />
              </label>
            </div>
            <div class="form-control">
              <label class="label cursor-pointer">
                <span class="label-text font-semibold text-xs">
                  Hide pooling</span
                >
                <input type="checkbox" class="toggle mr-5" />
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('components.footer')
</div>
