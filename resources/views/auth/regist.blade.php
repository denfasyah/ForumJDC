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
                <h2 class=" text-2xl font-bold text-white mb-2">
                  Forum
                </h2>
                <p class=" text-lg font-bold text-white mb-5">
                  Register to your Account
                </p>
                @livewire('register')
                <p class="text-white mt-4 text-center text-xs">
                  Already have an account?
                  <a
                    class="text-xs text-slate-900 font-semibold -200 hover:underline mt-4"
                    href="/login"
                    >Login</a
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
    const _h = document.querySelectorAll('input[id="hide"]')
    _h.forEach((x)=> {
      x.addEventListener("click", () => {
        let _p = document.getElementById(x.getAttribute('data-name'))
        _p.type = (_p.type == "password") ? _p.type = "text" : _p.type = "password"
      })
    })
    </script>
</html>
