<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <title>Junior Developer Community | Forum</title>
  </head>

  <body>
    <div
      class="hero min-h-screen bg-gradient-to-tl from-30% from-Blue to-white"
    >
      <div class="hero-content flex-col lg:flex-row-reverse">
        <!-- login form -->
        <div
          class="flex flex-col lg:flex-row-reverse lg:bg-white lg:px-5 rounded-md lg:py-5 shadow-2xl"
        >
          <div class="text-center lg:text-left lg:w-1/2">
            <div class="flex flex-col items-center justify-center dark">
              <div
                class="w-full max-w-md bg-gradient-to-tl from-Blue to-Blue rounded-3xl shadow-2xl p-10"
              >
                <h2 class="container text-2xl font-bold text-white mb-2">
                  Forum
                </h2>
                <p class="container text-lg font-bold text-white mb-2">
                  Log in to your Account
                </p>
                <p class="container text-xs text-white mb-2">
                  Welcome! Select method to log in
                </p>
                <div class="flex justify-center mb-7">
                  <a href="#">
                    <button
                      class="flex items-center mr-5 bg-white text-slate-800 font-bold text-xs py-2 px-6 rounded-md mt-4"
                    >
                      <img src="{{ asset('svg/google.svg') }}" alt="google" />
                      Google
                    </button>
                  </a>
                  <a href="#">
                    <button
                      class="flex items-center bg-white text-slate-800 font-bold text-xs py-2 px-4 rounded-md mt-4"
                    >
                      <img
                        src="{{ asset('svg/facebook.svg') }}"
                        alt="facebook"
                      />
                      Facebook
                    </button>
                  </a>
                </div>
                <div
                  class="text-xs font-semi-bold text-white text-center mb-5 relative"
                >
                  <div class="flex items-center">
                    <div class="flex-1 h-px bg-white"></div>
                    <div class="mx-4">Or continue with email</div>
                    <div class="flex-1 h-px bg-white"></div>
                  </div>
                </div>
               @livewire('login')
                <p class="text-white mt-4 text-center text-xs">
                  Don't have an account?
                  <a
                    class="text-xs text-slate-900 font-semibold -200 hover:underline mt-4"
                    href="/register"
                    >Register</a
                  >
                </p>
              </div>
            </div>
          </div>
          <!-- people img -->
          <img
            src="{{ asset('img/people.png') }}"
            class="hidden lg:flex lg:mt-16 lg:mr-8 w-96 h-96 rounded-md"
            alt=""
          />
        </div>
      </div>
    </div>
      @livewireScripts
  </body>
    <script>
      document.getElementById("hide").addEventListener("click", (x) => {
        let _p = document.getElementById(x.target.getAttribute("data-name"));
        _p.type =
        _p.type == "password" ? (_p.type = "text") : (_p.type = "password");
      });
      </script>
</html>
