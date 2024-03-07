<!DOCTYPE html>
<html data-theme="nord">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Junior Dev</title>
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    @vite(['resources/css/app.css', 'ressources/js/app.js'])
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->

    <link href="./assets/css/soft-ui-dashboard-tailwind.css" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    @livewireStyles
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script
      defer
      data-site="YOUR_DOMAIN_HERE"
      src="https://api.nepcha.com/js/nepcha-analytics.js"
    ></script>
  </head>

  <body
    class="m-0 font-sans text-base antialiased font-normal leading-default text-slate-500"
  >
    <!-- sidenav  -->
    <aside
      class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent"
    >
      <div class="h-19.5">
        <i
          class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
          sidenav-close
        ></i>
        <a
          class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700"
          href="/"
        >
          <img
            src="./assets/img/logo-ct.png"
            class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
            alt="main_logo"
          />
          <span
            class="ml-1 transition-all text-lg text-Blue font-bold duration-200 ease-nav-brand"
            >Junior Developer</span
          >
        </a>
      </div>

      <hr
        class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"
      />

      <div
        class="items-center block w-auto max-h-screen overflow-auto grow basis-full"
      >
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full">
            <a
              class="@if (request()->is('explore')) shadow-soft-2xl rounded-lg bg-white @endif py-2.5 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
              href="{{ route('explore') }}"
            >
              <div
                class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
              >
                <svg
                  width="12px"
                  height="12px"
                  viewBox="0 0 45 40"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>shop</title>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-1716.000000, -439.000000)"
                      fill="#000000"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                          <path
                            class="opacity-60"
                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                          ></path>
                          <path
                            class=""
                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span
                class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft"
                >Explore</span
              >
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a
              class="@if (request()->is('event')) shadow-soft-2xl rounded-lg bg-white @endif py-2.5 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
              href="{{ route('event') }}"
            >
              <div
                class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
              >
                <svg
                  width="12px"
                  height="12px"
                  viewBox="0 0 42 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>office</title>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-1869.000000, -293.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(153.000000, 2.000000)">
                          <path
                            class="fill-slate-800 opacity-60"
                            d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                          ></path>
                          <path
                            class="fill-slate-800"
                            d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span
                class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft"
                >Event</span
              >
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a
              class="@if (request()->is('learning')) shadow-soft-2xl rounded-lg bg-white @endif py-2.5 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
              href="{{ route('learn') }}"
            >
              <div
                class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
              >
                <svg
                  width="12px"
                  height="12px"
                  viewBox="0 0 43 36"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>credit-card</title>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-2169.000000, -745.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(453.000000, 454.000000)">
                          <path
                            class="fill-slate-800 opacity-60"
                            d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                          ></path>
                          <path
                            class="fill-slate-800"
                            d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span
                class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft"
                >Learning</span
              >
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a
              class="@if (request()->is('quest')) shadow-soft-2xl rounded-lg bg-white @endif py-2.5 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
              href="{{ route('quest') }}"
            >
              <div
                class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
              >
                <svg
                  width="12px"
                  height="12px"
                  viewBox="0 0 42 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>box-3d-50</title>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-2319.000000, -291.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(603.000000, 0.000000)">
                          <path
                            class="fill-slate-800"
                            d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"
                          ></path>
                          <path
                            class="fill-slate-800 opacity-60"
                            d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                          ></path>
                          <path
                            class="fill-slate-800 opacity-60"
                            d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span
                class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft"
                >Question</span
              >
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a
              class="@if (request()->is('job')) shadow-soft-2xl rounded-lg bg-white @endif py-2.5 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
              href="{{ route('job') }}"
            >
              <div
                class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
              >
                <svg
                  width="12px"
                  height="12px"
                  viewBox="0 0 40 40"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>settings</title>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      transform="translate(-2020.000000, -442.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(304.000000, 151.000000)">
                          <polygon
                            class="fill-slate-800 opacity-60"
                            points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"
                          ></polygon>
                          <path
                            class="fill-slate-800 opacity-60"
                            d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                          ></path>
                          <path
                            class="fill-slate-800"
                            d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span
                class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft"
                >Job</span
              >
            </a>
          </li>
          @if (request()->is('event'))
          <hr
            class="h-px mt-5 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"
          />
          <li class="mt-0.5 flex justify-center w-full">
            <button
              class="mx-5 w-full rounded mr-5 bg-Blue text-white lg:px-10 md:px-7 sm:px-5 px-4 py-1"
              onclick="my_modal_about.showModal()"
            >
              Create
            </button>
            <dialog id="my_modal_about" class="modal">
              <div class="modal-box">
                <form method="dialog">
                  <button
                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
                  >
                    ✕
                  </button>
                </form>
                <h1 class="text-center font-bold text-lg">Create Event</h1>
                <hr class="h-0.5 bg-slate-400" />
                <div class="mb-2 mt-5">
                  <label for="" class="font-semibold">Title</label>
                  <input
                    type="text"
                    class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                  />
                </div>
                <div class="mb-2">
                  <label for="" class="font-semibold">Date</label>
                  <input
                    type="date"
                    class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                  />
                </div>
                <div class="mb-2">
                  <label for="" class="font-semibold">Desc</label>
                  <textarea
                    class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none placeholder-slate-500 px-4 py-2 w-full text-black"
                    rows="4"
                    placeholder="Ceritakan tentang diri kamu"
                  ></textarea>
                </div>
                <div class="mb-2">
                  <label for="" class="font-bold">Photo</label>
                  <input
                    class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                    type="file"
                  />
                </div>
                <div class="flex justify-end gap-2 mt-5">
                  <button
                    class="bg-Blue text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1"
                  >
                    Create
                  </button>
                </div>
              </div>
            </dialog>
          </li>

          @endif @if (request()->is('job'))
          <hr
            class="h-px mt-5 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"
          />
          <li class="mt-0.5 flex justify-center w-full">
            <button
              class="mx-5 w-full rounded bg-Blue text-white lg:px-10 md:px-7 sm:px-5 px-4 py-1"
              onclick="my_modal_about.showModal()"
            >
              Create
            </button>
            <dialog id="my_modal_about" class="modal">
              <div class="modal-box">
                <form method="dialog">
                  <button
                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
                  >
                    ✕
                  </button>
                </form>
                <h1 class="text-center font-bold text-lg">Create Job</h1>
                <hr class="h-0.5 bg-slate-400" />
                <div class="mb-2 mt-5">
                  <label for="" class="font-semibold">Title</label>
                  <input
                    type="text"
                    class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                  />
                </div>
                <div class="mb-2">
                  <label for="" class="font-semibold">Date</label>
                  <input
                    type="date"
                    class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                  />
                </div>
                <div class="mb-2">
                  <label for="" class="font-semibold">Desc</label>
                  <textarea
                    class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none placeholder-slate-500 px-4 py-2 w-full text-black"
                    rows="4"
                    placeholder="Ceritakan tentang diri kamu"
                  ></textarea>
                </div>
                <div class="mb-2">
                  <label for="" class="font-bold">Photo</label>
                  <input
                    class="border-2 border-Blue mt-1 bg-slate-200 rounded-xl focus:outline-none px-4 py-2 w-full"
                    type="file"
                  />
                </div>
                <div class="flex justify-end gap-2 mt-5">
                  <button
                    class="bg-Blue text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1"
                  >
                    Create
                  </button>
                </div>
              </div>
            </dialog>
          </li>
          @endif
        </ul>
      </div>
    </aside>

    <!-- end sidenav -->

    <main
      class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200"
    >
      <!-- Navbar -->
      <nav
        class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
        navbar-main
        navbar-scroll="true"
      >
        <div
          class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit"
        >
          <nav>
            <!-- breadcrumb -->
            <ol
              class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16"
            >
              <li class="text-sm leading-normal">
                <a
                  href="/"
                  class="opacity-50 text-slate-700"
                  href="javascript:;"
                  >Home</a
                >
              </li>
              @if (request()->is('explore'))
              <a
                href="{{ route('explore') }}"
                class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page"
                >Explore</a
              >
              @elseif(request()->is('event'))
              <a
                href="{{ route('event') }}"
                class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page"
                >Event</a
              >
              @elseif(request()->is('learning'))
              <a
                href="{{ route('learn') }}"
                class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page"
                >Learning</a
              >
              @elseif(request()->is('job'))
              <a
                href="{{ route('job') }}"
                class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page"
                >Job</a
              >
              @elseif(request()->is('quest'))
              <a
                href="{{ route('quest') }}"
                class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page"
                >Quest</a
              >
              @elseif(request()->is('profile'))
              <a
                href="{{ route('quest') }}"
                class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page"
                >Profile</a
              >
              @endif
            </ol>
            @if (request()->is('explore'))
            <h6 class="mb-0 font-bold capitalize">Explore</h6>
            @elseif(request()->is('event'))
            <h6 class="mb-0 font-bold capitalize">Event</h6>
            @elseif(request()->is('learning'))
            <h6 class="mb-0 font-bold capitalize">Learning</h6>
            @elseif(request()->is('quest'))
            <h6 class="mb-0 font-bold capitalize">Questions</h6>
            @elseif(request()->is('job'))
            <h6 class="mb-0 font-bold capitalize">Job</h6>
            @elseif(request()->is('profile'))
            <h6 class="mb-0 font-bold capitalize">Profile</h6>
            @endif
          </nav>

          <div
            class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto"
          >
            <div class="flex items-center md:ml-auto md:pr-4">
              <div
                class="relative flex flex-wrap items-stretch w-full transition-all ease-soft"
              >
                <span
                  class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-1.5 px-2.5 text-center font-normal text-slate-500 transition-all"
                >
                  <i class="fas fa-search"></i>
                </span>
                <input
                  type="text"
                  class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded border border-solid border-gray-300 bg-white bg-clip-padding py-1.5 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                  placeholder="Type here..."
                />
              </div>
            </div>
            <ul
              class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full"
            >
              <div class="relative">
                <button
                  dropdown-trigger
                  aria-expanded="false"
                  type="button"
                  class="inline-block font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer leading-pro text-sm ease-soft-in tracking-tight-soft bg-150 bg-x-25 hover:scale-102 active:opacity-85"
                >
                  <div class="avatar flex items-center">
                    <div class="mask mask-circle w-7 lg:w-12 md:w-14 sm:w-8">
                      <img src="{{ asset('icon/anime.png') }}" />
                    </div>
                  </div>
                </button>
                <p class="hidden transform-dropdown-show"></p>
                <ul
                  dropdown-menu
                  class="z-10 text-sm lg:shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft before:text-5.5 transform-dropdown pointer-events-none absolute left-auto top-1/2 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-0 w-28 py-2 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-16 before:left-auto before:top-0 before:z-40 before:text-white before:transition-all before:content-['\f0d8']"
                >
                  <li>
                    <a
                      href="{{ route('profile') }}"
                      class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300"
                      >Profile</a
                    >
                  </li>
                  <li>
                    <a
                      class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300"
                      href="javascript:;"
                      >Logout</a
                    >
                  </li>
                </ul>
              </div>

              <li class="flex items-center pl-4 xl:hidden">
                <a
                  href="javascript:;"
                  class="block p-0 text-sm transition-all ease-nav-brand text-slate-500"
                  sidenav-trigger
                >
                  <div class="w-4.5 overflow-hidden">
                    <i
                      class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"
                    ></i>
                    <i
                      class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"
                    ></i>
                    <i
                      class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"
                    ></i>
                  </div>
                </a>
              </li>
              <li class="flex items-center px-4">
                <a
                  href="javascript:;"
                  class="p-0 text-sm transition-all ease-nav-brand text-slate-500"
                >
                  <i
                    fixed-plugin-button-nav
                    class="cursor-pointer fa fa-cog"
                  ></i>
                  <!-- fixed-plugin-button-nav  -->
                </a>
              </li>

              <!-- notifications -->

              <li class="relative flex items-center pr-2">
                <p class="hidden transform-dropdown-show"></p>
                <a
                  href="javascript:;"
                  class="block p-0 text-sm transition-all ease-nav-brand text-slate-500"
                  dropdown-trigger
                  aria-expanded="false"
                >
                  <i class="cursor-pointer fa fa-bell"></i>
                </a>

                <ul
                  dropdown-menu
                  class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer"
                >
                  <!-- add show class on dropdown open js -->
                  <li class="relative mb-2">
                    <a
                      class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                      href="javascript:;"
                    >
                      <div class="flex py-1">
                        <div class="my-auto">
                          <img
                            src="./assets/img/team-2.jpg"
                            class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl"
                          />
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 text-sm font-normal leading-normal">
                            <span class="font-semibold">New message</span> from
                            Laur
                          </h6>
                          <p class="mb-0 text-xs leading-tight text-slate-400">
                            <i class="mr-1 fa fa-clock"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="relative mb-2">
                    <a
                      class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                      href="javascript:;"
                    >
                      <div class="flex py-1">
                        <div class="my-auto">
                          <img
                            src="./assets/img/small-logos/logo-spotify.svg"
                            class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl"
                          />
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 text-sm font-normal leading-normal">
                            <span class="font-semibold">New album</span> by
                            Travis Scott
                          </h6>
                          <p class="mb-0 text-xs leading-tight text-slate-400">
                            <i class="mr-1 fa fa-clock"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="relative">
                    <a
                      class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                      href="javascript:;"
                    >
                      <div class="flex py-1">
                        <div
                          class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl"
                        >
                          <svg
                            width="12px"
                            height="12px"
                            viewBox="0 0 43 36"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <title>credit-card</title>
                            <g
                              stroke="none"
                              stroke-width="1"
                              fill="none"
                              fill-rule="evenodd"
                            >
                              <g
                                transform="translate(-2169.000000, -745.000000)"
                                fill="#FFFFFF"
                                fill-rule="nonzero"
                              >
                                <g
                                  transform="translate(1716.000000, 291.000000)"
                                >
                                  <g
                                    transform="translate(453.000000, 454.000000)"
                                  >
                                    <path
                                      class="color-background"
                                      d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                      opacity="0.593633743"
                                    ></path>
                                    <path
                                      class="color-background"
                                      d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"
                                    ></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 text-sm font-normal leading-normal">
                            Payment successfully completed
                          </h6>
                          <p class="mb-0 text-xs leading-tight text-slate-400">
                            <i class="mr-1 fa fa-clock"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- end Navbar -->

      <!-- content here -->
      {{--
      <div
        class="w-full max-w-full mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12"
      >
        <div
          class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border"
        >
          <div class="relative">
            <a class="block shadow-xl rounded-2xl">
              <img
                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/home-decor-1.jpg"
                alt="img-blur-shadow"
                class="max-w-full shadow-soft-2xl rounded-2xl"
              />
            </a>
          </div>
          <div class="flex-auto px-1 pt-6">
            <p
              class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text"
            >
              Project #2
            </p>
            <a href="javascript:;">
              <h5>Modern</h5>
            </a>
            <p class="mb-6 leading-normal text-sm">
              As Uber works through a huge amount of internal management
              turmoil.
            </p>
            <div class="flex items-center justify-between">
              <button
                type="button"
                class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500"
              >
                View Project
              </button>
              <div class="mt-2">
                <a
                  href="javascript:;"
                  class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30"
                >
                  <img
                    class="w-full rounded-circle"
                    alt="Image placeholder"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/team-1.jpg"
                  />
                </a>
                <a
                  href="javascript:;"
                  class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30"
                >
                  <img
                    class="w-full rounded-circle"
                    alt="Image placeholder"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/team-2.jpg"
                  />
                </a>
                <a
                  href="javascript:;"
                  class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30"
                >
                  <img
                    class="w-full rounded-circle"
                    alt="Image placeholder"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/team-3.jpg"
                  />
                </a>
                <a
                  href="javascript:;"
                  class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30"
                >
                  <img
                    class="w-full rounded-circle"
                    alt="Image placeholder"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/team-4.jpg"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      --}} @yield('explore') @yield('quest') @yield('job') @yield('event')
      @yield('learn') @yield('profile') @yield('answer')
    </main>
    <div fixed-plugin>
      <a
        fixed-plugin-button
        class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700"
      >
        <i class="py-2 pointer-events-none fa fa-cog"> </i>
      </a>
      <!-- -right-90 in loc de 0-->
      <div
        fixed-plugin-card
        class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200"
      >
        <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
          <div class="float-left">
            <h5 class="mt-4 mb-0">UI Configurator</h5>
            <!-- <p>See our dashboard options.</p> -->
          </div>
          <div class="float-right mt-6">
            <button
              fixed-plugin-close-button
              class="inline-block p-0 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700"
            >
              <i class="fa fa-close"></i>
            </button>
          </div>
          <!-- End Toggle Button -->
        </div>
        <hr
          class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"
        />
        <div class="flex-auto p-6 pt-0 sm:pt-4">
          <!-- Sidebar Backgrounds -->
          <div>
            <h6 class="mb-0">Themes Colors</h6>
          </div>
          <div class="my-2 text-left" sidenav-colors>
            <!-- dark -->
            <label class="swap">
              <!-- this hidden checkbox controls the state -->
              <input type="checkbox" class="theme-controller" value="black" />

              <!-- icon -->
              <span
                class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-gray-900 to-slate-800 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
              />
            </label>
            <!-- end dark -->

            <!-- light -->
            <label class="swap">
              <!-- this hidden checkbox controls the state -->
              <input
                type="checkbox"
                class="theme-controller"
                value="corporate"
              />

              <!-- icon -->
              <span
                class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-slate-50 to-slate-300 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
              />
            </label>
            <!-- end light -->
          </div>
          <!-- Sidenav Type -->
          <div class="mt-4">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="text-sm leading-normal">
              Choose between 2 different sidenav types.
            </p>
          </div>
          <div class="flex">
            <button
              transparent-style-btn
              class="inline-block w-full px-4 py-3 mb-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500"
              data-class="bg-transparent"
              active-style
            >
              Transparent
            </button>
            <button
              white-style-btn
              class="inline-block w-full px-4 py-3 mb-2 ml-2 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
              data-class="bg-white"
            >
              White
            </button>
          </div>
          <p class="block mt-2 text-sm leading-normal xl:hidden">
            You can change the sidenav type just on desktop view.
          </p>
          <!-- Navbar Fixed -->
          <div class="mt-4">
            <h6 class="mb-0">Navbar Fixed</h6>
          </div>
          <div class="min-h-6 mb-0.5 block pl-0">
            <input
              navbarFixed
              class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
              type="checkbox"
            />
          </div>
          <hr
            class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent sm:my-6"
          />
        </div>
      </div>
    </div>
    @livewireScripts
  </body>
  <!-- plugin for charts  -->
  <script src="./assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script
    src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5"
    async
  ></script>
</html>
