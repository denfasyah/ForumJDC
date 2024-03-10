@extends('index') @section('profile')
    <div class="container mt-5">
        <div class="w-full px-6 mx-auto">
            <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl">
                <img src="{{ asset('img/sampul.png') }}" alt="profile_image"
                    class="absolute inset-y-0 w-full h-full bg-center object-cover" />
            </div>

            <div
                class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16  break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
                <div class="flex flex-wrap -mx-3">
                    <div class="flex-none w-auto max-w-full px-3">
                        <div
                            class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                            <img src="{{ asset('icon/anime.png') }}" alt="profile_image"
                                class="w-full shadow-soft-sm rounded-xl" />
                        </div>
                    </div>
                    <div class="flex-none w-auto max-w-full px-3 my-auto">
                        <div class="h-full">
                            <h5 class="mb-1">Adent</h5>
                            <p class="mb-0 font-semibold leading-normal text-sm">adent@example.com</p>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                        <div class="relative right-0 ">
                            <ul class="relative flex flex-wrap gap-5 p-1 list-none bg-transparent rounded-xl" nav-pills
                                role="tablist">


                                <li class="z-30 flex-auto text-center">
                                    <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700"
                                        nav-link href="javascript:;" role="tab" aria-selected="false">
                                        <svg class="text-slate-700" width="16px" height="16px" viewBox="0 0 40 44"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>document</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(154.000000, 300.000000)">
                                                            <path class="fill-slate-800"
                                                                d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                opacity="0.603585379"></path>
                                                            <path class="fill-slate-800"
                                                                d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ml-1">Messages</span>
                                    </a>
                                </li>

                                <li class="z-30 flex-auto text-center">
                                    <a class="z-30 block w-full px-0 py-1 mb-0 transition-colors border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700"
                                        nav-link href="javascript:;" role="tab" aria-selected="false">
                                        <svg class="text-slate-700" width="16px" height="16px" viewBox="0 0 40 40"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(304.000000, 151.000000)">
                                                            <polygon class="fill-slate-800" opacity="0.596981957"
                                                                points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                            </polygon>
                                                            <path class="fill-slate-800"
                                                                d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                opacity="0.596981957"></path>
                                                            <path class="fill-slate-800"
                                                                d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ml-1">Settings</span>
                                    </a>
                                </li>

                                <li class="z-30 flex-auto ">
                                    <div class="dropdown dropdown-bottom dropdown-end">

                                        <div tabindex="0" role="button" class="">
                                            <svg class="w-5 lg:w-6 md:w-6 sm:w-6" fill="none" stroke="#000000"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                                <path d="M19 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                                <path d="M5 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                            </svg>
                                        </div>
                                        <ul tabindex="0"
                                            class="dropdown-content menu shadow bg-base-100 rounded-box w-36 mt-6">
                                            @foreach ($user->socialMedia->sortByDesc('platform_id') as $item)
                                                <li>
                                                    <div class="">
                                                        <a href="{{ $item->platform->link . $item->username }}"
                                                            class="flex items-center gap-2">
                                                            <img src="{{ asset('icon/' . $item->platform->images) }}"
                                                                class="w-6 rounded-md" alt="" />
                                                            <span>{{ $item->platform->platform_name }}</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="w-full p-6 mx-auto">
            <div class="flex justify-center flex-wrap -mx-3">


                <!-- about me -->
                <div class="w-full px-3 mt-5 lg:mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                            <div class="flex justify-between flex-wrap -mx-3">
                                <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                                    <h6 class="mb-0">About Me</h6>
                                </div>
                                <div class="absolute right-0">
                                    <button class="mr-5" onclick="my_modal_about.showModal()">
                                        <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                                    </button>
                                    <dialog id="my_modal_about" class="modal">
                                        <div class="modal-box">
                                            <form method="dialog">
                                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                                                    ✕
                                                </button>
                                            </form>
                                            <h1 class="text-center font-bold text-lg">About Me</h1>
                                            <div class="mb-4">
                                                <label for="" class="font-semibold">Desc</label>
                                                <textarea
                                                    class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none placeholder-slate-500 px-4 py-2 w-full text-black"
                                                    rows="4" placeholder="Ceritakan tentang diri kamu"></textarea>
                                            </div>
                                            <div class="flex justify-end gap-2 mt-5">
                                                <button
                                                    class="bg-Blue text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </dialog>
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto p-4">
                            <p class="leading-normal text-md line-clamp-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis
                                soluta ipsa explicabo iusto voluptatibus autem laudantium omnis
                                ipsum a error, exercitationem cum. Quas, aliquid temporibus
                                numquam accusantium quibusdam eos nisi voluptatum minus nobis
                                sapiente veritatis commodi pariatur, voluptas saepe dolorum
                                ducimus magni. Quos eos fugiat, deserunt facilis nisi enim animi.
                            </p>
                            <hr
                                class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                        </div>
                    </div>

                </div>
                <!-- end about me -->


                <!-- bio & skills -->
                <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12 z-[-1]">
                    <!-- biodata -->
                    <!-- <div
              class="flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border"
            >
              <div class="p-4 pb-0 relative mb-0 bg-white border-b-0 rounded-t-2xl">
                <div class="flex flex-wrap -mx-3">
                  <div
                    class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none"
                  >
                    <h6 class="mb-0">Biodata</h6>
                  </div>
                  <div class="absolute right-0">
                    <button class="mr-5" onclick="my_modal_biodata.showModal()">
                      <i
                        class="leading-normal fas fa-user-edit text-sm text-slate-400"
                      ></i>
                    </button>
                    <dialog id="my_modal_biodata" class="modal">
                      <div class="modal-box">
                        <form method="dialog">
                          <button
                            class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
                          >
                            ✕
                          </button>
                        </form>
                        <h1 class="text-center font-bold text-lg">Biodata</h1>
                        <div class="mb-2 mt-5">
                          <label for="" class="font-semibold">FullName</label>
                          <input
                            type="text"
                            class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                          />
                        </div>
                        <div class="mb-2 flex justify-between gap-2">
                          <div class="block w-1/2">
                            <label for="" class="font-semibold">Age</label>
                            <input
                              type="number"
                              class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                            />
                          </div>
                          <div class="block w-1/2">
                            <label for="" class="font-semibold">Gender</label>
                            <select
                              class="select border-2 bg-slate-200 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full"
                            >
                              <option disabled selected class="hidden"></option>
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>

                        <div class="mb-2 flex justify-between gap-2">
                          <div class="block w-1/2">
                            <label for="" class="font-semibold">City</label>
                            <input
                              type="text"
                              class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                            />
                          </div>
                          <div class="block w-1/2">
                            <label for="" class="font-semibold">Email</label>
                            <input
                              type="text"
                              class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                            />
                          </div>
                        </div>
                        <div class="mb-2">
                          <label for="" class="font-semibold">Education</label>
                          <input
                            type="text"
                            class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                          />
                        </div>

                        <div class="mb-2 flex justify-between gap-2">
                          <div class="block w-1/2">
                            <label for="" class="font-semibold">Github</label>
                            <input
                              type="text"
                              class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                            />
                          </div>
                          <div class="block w-1/2">
                            <label for="" class="font-semibold">Linkedin</label>
                            <input
                              type="text"
                              class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                            />
                          </div>
                        </div>

                        <div class="flex justify-end gap-2 mt-5">
                          <button
                            class="bg-Blue text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1"
                          >
                            Update
                          </button>
                        </div>
                      </div>
                    </dialog>
                  </div>
                </div>
              </div>
              <div class="flex-auto p-4">
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                  <li
                    class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit"
                  >
                    <strong class="text-slate-700">Full Name:</strong> &nbsp; Adent
                    Fallah Amorisyah
                  </li>
                  <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
                  >
                    <strong class="text-slate-700">Age:</strong> &nbsp; 20
                  </li>
                  <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
                  >
                    <strong class="text-slate-700">Gender:</strong> &nbsp; Male
                  </li>
                  <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
                  >
                    <strong class="text-slate-700">Email:</strong> &nbsp;
                    example@mail.com
                  </li>
                  <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
                  >
                    <strong class="text-slate-700">City:</strong> &nbsp; Bekasi
                  </li>
                  <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
                  >
                    <strong class="text-slate-700">Education:</strong> &nbsp; Oxford
                  </li>
                  <li
                    class="relative block px-4 py-2 pb-0 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit"
                  >
                    <strong class="leading-normal text-slate-700">Social:</strong>
                    &nbsp;
                    <a
                      class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center text-blue-800 align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none"
                      href="javascript:;"
                    >
                      <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a
                      class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-600"
                      href="javascript:;"
                    >
                      <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a
                      class="inline-block py-0 pl-1 pr-2 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-900"
                      href="javascript:;"
                    >
                      <i class="fab fa-instagram fa-lg"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div> -->

                    <!-- skills -->
                    <div
                        class=" flex relative pb-6 flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                            <h6 class="mb-0">Skills</h6>
                        </div>
                        <div class="absolute right-0 mt-4">
                            <button class="mr-5" onclick="my_modal_skills.showModal()">
                                <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                            </button>
                            <dialog id="my_modal_skills" class="modal">
                                <div class="modal-box">
                                    <form method="dialog">
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                                            ✕
                                        </button>
                                    </form>
                                    <h1 class="text-center font-bold text-lg">Skills</h1>
                                    <div class="mb-4">
                                        <label for="" class="font-semibold">Skill</label>
                                        <select
                                            class="select border-2 bg-slate-200 border-Blue mt-1 rounded-xl focus:outline-none px-4 py-2 w-full">
                                            <option disabled selected class="hidden"></option>
                                            <option>Html</option>
                                            <option>Css</option>
                                        </select>
                                    </div>
                                    <div class="flex justify-end gap-2 mt-5">
                                        <button class="bg-Blue text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </dialog>
                        </div>
                        <div class="flex mx-5 gap-5 mt-2 flex-wrap">
                            <div className="tooltip hover:cursor-pointer" data-tip="Html">
                                <img src="{{ asset('svg/logoHtml.svg') }}" alt="html" width="50" height="50"
                                    class="mb-3 bg-slate-50 rounded-full p-2 shadow-slate-500 shadow-xl" />
                            </div>
                            <div className="tooltip hover:cursor-pointer" data-tip="Html">
                                <img src="{{ asset('svg/logoHtml.svg') }}" alt="html" width="50" height="50"
                                    class="mb-3 bg-slate-50 rounded-full p-2 shadow-slate-500 shadow-xl" />
                            </div>
                            <div className="tooltip hover:cursor-pointer" data-tip="Html">
                                <img src="{{ asset('svg/logoHtml.svg') }}" alt="html" width="50" height="50"
                                    class="mb-3 bg-slate-50 rounded-full p-2 shadow-slate-500 shadow-xl" />
                            </div>
                            <div className="tooltip hover:cursor-pointer" data-tip="Html">
                                <img src="{{ asset('svg/logoHtml.svg') }}" alt="html" width="50" height="50"
                                    class="mb-3 bg-slate-50 rounded-full p-2 shadow-slate-500 shadow-xl" />
                            </div>
                            <div className="tooltip hover:cursor-pointer" data-tip="Html">
                                <img src="{{ asset('svg/logoHtml.svg') }}" alt="html" width="50" height="50"
                                    class="mb-3 bg-slate-50 rounded-full p-2 shadow-slate-500 shadow-xl" />
                            </div>
                            <div className="tooltip hover:cursor-pointer" data-tip="Html">
                                <img src="{{ asset('svg/logoHtml.svg') }}" alt="html" width="50" height="50"
                                    class="mb-3 bg-slate-50 rounded-full p-2 shadow-slate-500 shadow-xl" />
                            </div>
                            <div className="tooltip hover:cursor-pointer" data-tip="Html">
                                <img src="{{ asset('svg/logoHtml.svg') }}" alt="html" width="50" height="50"
                                    class="mb-3 bg-slate-50 rounded-full p-2 shadow-slate-500 shadow-xl" />
                            </div>
                            <div className="tooltip hover:cursor-pointer" data-tip="Html">
                                <img src="{{ asset('svg/logoHtml.svg') }}" alt="html" width="50" height="50"
                                    class="mb-3 bg-slate-50 rounded-full p-2 shadow-slate-500 shadow-xl" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end bio % skills -->


                <!-- projects -->
                <div class="w-full max-w-full px-3 mt-6 lg:mx-10">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                            <h6 class="mb-1">Projects</h6>
                        </div>
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                        <div class="relative">
                                            <a class="block shadow-xl rounded-2xl">
                                                <img src="{{ asset('img/errtest.png') }}" alt="img-blur-shadow"
                                                    class="max-w-full shadow-soft-2xl rounded-2xl" />
                                            </a>
                                        </div>
                                        <div class="flex-auto px-1 pt-6">
                                            <p
                                                class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                                27 Maret 2024
                                            </p>
                                            <a href="javascript:;">
                                                <h5>Lorem</h5>
                                            </a>
                                            <p class="mb-6 leading-normal text-sm line-clamp-1">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Aliquam, quod.
                                            </p>
                                            <div class="flex items-center justify-end">
                                                <button type="button"
                                                    class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-Blue text-Blue hover:border-Blue hover:bg-transparent hover:text-Blue hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-Blue">
                                                    View Project
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                        <div class="relative">
                                            <a class="block shadow-xl rounded-2xl">
                                                <img src="{{ asset('img/errtest.png') }}" alt="img-blur-shadow"
                                                    class="max-w-full shadow-soft-2xl rounded-2xl" />
                                            </a>
                                        </div>
                                        <div class="flex-auto px-1 pt-6">
                                            <p
                                                class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                                27 Maret 2024
                                            </p>
                                            <a href="javascript:;">
                                                <h5>Lorem</h5>
                                            </a>
                                            <p class="mb-6 leading-normal text-sm line-clamp-1">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Aliquam, quod.
                                            </p>
                                            <div class="flex items-center justify-end">
                                                <button type="button"
                                                    class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-Blue text-Blue hover:border-Blue hover:bg-transparent hover:text-Blue hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-Blue">
                                                    View Project
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                        <div class="relative">
                                            <a class="block shadow-xl rounded-2xl">
                                                <img src="{{ asset('img/errtest.png') }}" alt="img-blur-shadow"
                                                    class="max-w-full shadow-soft-2xl rounded-2xl" />
                                            </a>
                                        </div>
                                        <div class="flex-auto px-1 pt-6">
                                            <p
                                                class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                                                27 Maret 2024
                                            </p>
                                            <a href="javascript:;">
                                                <h5>Lorem</h5>
                                            </a>
                                            <p class="mb-6 leading-normal text-sm line-clamp-1">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Aliquam, quod.
                                            </p>
                                            <div class="flex items-center justify-end">
                                                <button type="button"
                                                    class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-Blue text-Blue hover:border-Blue hover:bg-transparent hover:text-Blue hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-Blue">
                                                    View Project
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                                    <div
                                        class="relative flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border">
                                        <div class="flex flex-col justify-center flex-auto p-6 text-center" <a
                                            href="javascript:;">
                                            >
                                            <i class="mb-4 fa fa-plus text-slate-400"></i>
                                            <h5 class="text-slate-400">New project</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end project -->
            </div>
        </div>
    </div>
@endsection
