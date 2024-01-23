<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Junior Developer Community | Forum</title>
    <link
      href="//fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap"
      rel="stylesheet"
    />
  </head>

  <body class="bg-Background">
    <!-- Navbar -->
    <div class="navbar bg-Blue shadow-md fixed z-30">
      <div class="navbar-start">
        <a
          href="/"
          class="lg:ml-5 md:ml-5 sm:ml-0 text-xl text-red-500 font-bold"
          >FORUM</a
        >
        <div class="hidden lg:flex">
          <ul class="menu-horizontal px-1 lg:ml-10 md:ml-5 sm:ml-2">
            <li>
              <a href="#" class="text-white font-inter">Home</a>
            </li>
            <li>
              <a
                href="#"
                class="text-white mx-5 font-inter"
                onclick="tagsModal.showModal()"
                >Tags</a
              >
            </li>
            <li>
              <a href="#" class="text-white">Popular</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="navbar-center ml-2">
        <!-- Search bar -->
        <div class="join">
          <input
            class="bg-DarkBlue input join-item rounded-l-full text-white placeholder-slate-200 lg:pr-2 md:pr-2 focus:outline-none focus:border-none"
            placeholder="Search here"
          />
          <button class="bg-DarkBlue border-none join-item rounded-r-full">
            <img
              src="{{ asset('svg/search.svg') }}"
              alt="Search Icon"
              class="mr-3"
            />
          </button>
        </div>
      </div>

      <div class="navbar-end relative">
        <div class="hidden lg:flex">
          <a href="/user/create" class="">
            <img
              src="{{ asset('icon/create.png') }}"
              alt="BookmartNav Icon"
              class="w-5"
            />
          </a>
          <a href="/user/bookmart" class="ml-5">
            <img
              src="{{ asset('svg/bookmartNav.svg') }}"
              alt="BookmartNav Icon"
            />
          </a>

          <div class="dropdown dropdown-bottom dropdown-end">
            <div tabindex="0" role="button" class="m-1 mx-5">
              <img
                src="{{ asset('svg/notificationNav.svg') }}"
                alt="NotificationNav Icon"
              />
            </div>
            <div
              tabindex="0"
              class="dropdown-content z-[1] mt-4 pb-10 menu p-2 shadow bg-base-100 rounded-box w-60"
            >
              <div class="flex justify-between mt-5">
                <h1 class="font-bold text-md ml-3">Notification</h1>
                <p class="flex gap-2">
                  On <input type="checkbox" class="toggle bg-Blue" checked />
                </p>
              </div>
              <hr class="h-0.5 bg-slate-400 mt-3" />
              <img
                src="{{ asset('icon/Vector-7.png') }}"
                class="mt-10 mb-3 w-20 h-20 mx-auto"
              />
              <p class="text-center text-xs font-semibold mx-5">
                You don't have a message, Try joining the community, reading,
                commenting, or creating a thread to get notifications
              </p>
            </div>
          </div>

          <a href="/user/profile" class="">
            <div class="w-10 rounded-full">
              <img
                src="{{ asset('svg/profileNav.svg') }}"
                alt="ProfileNav Icon"
              />
            </div>
          </a>

          <div class="dropdown dropdown-bottom dropdown-end">
            <div tabindex="0" role="button" class="m-1 mx-5">
              <img
                src="{{ asset('svg/settingsNav.svg') }}"
                alt="ProfileNav Icon"
              />
            </div>
            <div
              tabindex="0"
              class="dropdown-content z-[1] mt-4 pb-10 menu p-2 shadow bg-base-100 rounded-box w-60"
            >
              <h1 class="font-bold text-md mt-5 ml-3">Settings</h1>
              <hr class="h-0.5 bg-slate-400 mt-3" />
              <div class="hover:bg-Blue hover:text-white mt-3 p-2 rounded-lg">
                <a
                  href=""
                  class="text-xs flex justify-between font-bold items-center"
                >
                  Notification
                  <svg
                    class="mr-2"
                    width="14"
                    height="14"
                    fill="none"
                    stroke="#050505"
                    stroke-linecap="round"  
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"
                    ></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                  </svg>
                </a>
              </div>

              
              <div class="mt-1 group hover:bg-Blue hover:text-white p-2 rounded-lg">
                <a href="" class="text-xs flex justify-between font-bold items-center">
                    Language and Region
                    <svg class="mr-2" width="14" height="14" fill="none" stroke="#050505" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2a10 10 0 1 0 0 20 10 10 0 1 0 0-20z"></path>
                  <path d="M2 12h20"></path>
                  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
                </a>
            </div>

            <div class="mt-1 group hover:bg-Blue hover:text-white p-2 rounded-lg">
                <a href="" class="flex justify-between text-xs font-bold  items-center">
                    Dark Mode
                    <svg class="mr-2" width="14" height="14" fill="none" stroke="#050505" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z"></path>
                </svg>
                </a>
            </div>


            </div>
          </div>
        </div>

        <!-- naknansfsa -->
        <div class="dropdown">
          <div tabindex="0" role="button" class="lg:hidden">
            <img
              src="{{ asset('svg/hamburger.svg') }}"
              alt="Hamburger-Menu"
              class="h-7 w-7 font-bold mr-2"
            />
          </div>
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content mt-5 z-[1] p-2 shadow rounded-box w-52 overflow-y-auto right-0 origin-top-right absolute bg-black"
          >
            <li><a class="text-white">Home</a></li>
            <li><a class="text-white">Tags</a></li>
            <li><a class="text-white">Popular</a></li>
            <div class="flex mt-2">
              <a href="#" class=""
                ><svg
                  width="25"
                  height="25"
                  fill="none"
                  stroke="#f0efef"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="m19 21-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                  ></path></svg
              ></a>
              <a href="#" class=""
                ><svg
                  width="25"
                  height="25"
                  fill="none"
                  stroke="#f0efef"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                  <path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg
              ></a>
              <a href="#" class=""
                ><svg
                  width="32"
                  height="32"
                  fill="#f0efef"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12 2.25c-5.376 0-9.75 4.374-9.75 9.75s4.374 9.75 9.75 9.75 9.75-4.374 9.75-9.75S17.376 2.25 12 2.25ZM9.646 7.726c.594-.63 1.43-.976 2.354-.976.924 0 1.753.349 2.349.982.604.64.898 1.502.829 2.429C15.038 12 13.614 13.5 12 13.5c-1.614 0-3.042-1.5-3.178-3.34-.069-.934.225-1.798.824-2.434ZM12 20.25a8.227 8.227 0 0 1-5.906-2.495c.44-.626 1-1.16 1.647-1.567C8.936 15.422 10.448 15 12 15c1.552 0 3.064.422 4.258 1.188a5.76 5.76 0 0 1 1.648 1.567A8.223 8.223 0 0 1 12 20.25Z"
                  ></path></svg
              ></a>
              <a href="#" class=""
                ><svg
                  width="26"
                  height="26"
                  fill="none"
                  stroke="#f0efef"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="1.5"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.296 9.015a3 3 0 1 0-.59 5.97 3 3 0 0 0 .59-5.97v0ZM19.518 12a7.238 7.238 0 0 1-.072.975l2.12 1.662a.507.507 0 0 1 .114.644l-2.005 3.469a.507.507 0 0 1-.615.215l-2.105-.847a.753.753 0 0 0-.711.082 7.703 7.703 0 0 1-1.01.588.747.747 0 0 0-.413.569l-.316 2.244a.519.519 0 0 1-.5.43h-4.01a.52.52 0 0 1-.501-.415l-.315-2.242a.753.753 0 0 0-.422-.573 7.278 7.278 0 0 1-1.006-.59.75.75 0 0 0-.708-.08l-2.105.848a.507.507 0 0 1-.616-.215L2.32 15.295a.506.506 0 0 1 .114-.644l1.792-1.406a.752.752 0 0 0 .28-.66 6.392 6.392 0 0 1 0-1.165.75.75 0 0 0-.284-.654L2.431 9.36a.507.507 0 0 1-.111-.641L4.325 5.25a.507.507 0 0 1 .616-.215l2.105.847a.755.755 0 0 0 .71-.082 7.71 7.71 0 0 1 1.01-.587.747.747 0 0 0 .414-.57L9.495 2.4a.52.52 0 0 1 .5-.43h4.01a.52.52 0 0 1 .502.416l.315 2.241a.753.753 0 0 0 .421.573c.351.17.687.366 1.006.59a.75.75 0 0 0 .709.08l2.104-.848a.507.507 0 0 1 .616.215l2.005 3.469a.506.506 0 0 1-.115.644l-1.791 1.406a.752.752 0 0 0-.284.66c.016.195.026.39.026.585Z"
                  ></path></svg
              ></a>
            </div>
          </ul>
        </div>
      </div>
    </div>

    <!-- Modal for Tags -->
    <dialog id="tagsModal" class="modal">
      <div class="modal-box absolute top-0 mt-20 border-2 border-Blue">
        <h3 class="font-bold text-lg text-center">Choose Category</h3>
        <div class="form-control text-xs font-medium">
          <!-- Category checkboxes -->
          <label class="label cursor-pointer mt-5">
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">Sports</span>
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">Food & Travel</span>
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">Hobby</span>
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">Games</span>
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">Automative</span>
          </label>
          <label class="label cursor-pointer mt-5 mx-5">
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">Tech</span>
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">Entertainment</span>
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">News</span>
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">Story</span>
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="">Female</span>
          </label>
        </div>
        <form method="dialog">
          <button
            class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
          >
            ✕
          </button>
        </form>
        <form class="flex justify-center items-center mt-2" method="dialog">
          <button
            class="mt-4 bg-Blue mr-2 text-white px-7 py-1 text-sm rounded-md hover:bg-DarkBlue"
            onclick="closeCategoryModal()"
          >
            Save
          </button>
          <button
            class="mt-4 bg-Blue text-white px-6 py-1 text-sm rounded-md hover:bg-DarkBlue"
          >
            Cancel
          </button>
        </form>
      </div>
    </dialog>

    <!-- end navbar -->

    <!--  -->
  </body>
</html>
