<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                
                <form action={{ route('register.store')}} class="flex flex-col w-80" method="POST">
                  <div class="mb-3">
                  <div class="relative">
                    <span
                      class="absolute top-2.5 left-0 flex items-center pl-2 mb-3"
                    >
                      <img src="{{ asset('svg/user.svg') }}" alt="user" />
                    </span>
                    <input
                      placeholder="Fullname"
                      class="pl-10 bg-white text-black border-0 rounded-md p-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150 @error('FullName') is-invalid @enderror"
                      type="text"
                      name="FullName"
                    />
                  </div>
                  @error('FullName')
                  <div class="text-start text-sm">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-3">

                    <div class="relative">
                      <span
                      class="absolute top-2.5 left-0 flex items-center pl-2 mb-3"
                    >
                      <img src="{{ asset('svg/at.svg') }}" alt="at" />
                    </span>
                    <input
                      placeholder="Username"
                      class="pl-10 bg-white text-black border-0 rounded-md p-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150 @error('Username') is-invalid @enderror"
                      type="text"
                      name="Username"
                    />
                  </div>
                  @error('Username')
                  <div class="text-start text-sm">{{ $message }}</div>
                    @enderror
                </div>
                  <div class="mb-3">
                  <div class="relative">
                    <span
                      class="absolute top-2.5 left-0 flex items-center pl-2 mb-3"
                    >
                      <img src="{{ asset('svg/email.svg') }}" alt="email" />
                    </span>
                    <input
                      placeholder="Email"
                      class="pl-10 bg-white text-black border-0 rounded-md p-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150 @error('Email') is-invalid @enderror"
                      type="email"
                      name="Email"
                    />
                  </div>
                  @error('Email')
                  <div class="text-start text-sm">{{ $message }}</div>
                    @enderror
                </div>
                  <div class="mb-3">
                  <div class="relative">
                    <span
                      class="absolute top-2.5 left-0 flex items-center pl-2 mb-3"
                    >
                      <img
                        src="{{ asset('svg/password.svg') }}"
                        alt="password"
                      />
                    </span>
                    <span
                      class="absolute top-2.5 right-0 pr-3 flex items-center mb-3"
                    >
                    <label class="swap">
                      <input type="checkbox" id="hide" data-name="password"/>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="swap-off w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="swap-on w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                      </svg>
                    </label>
                    </span>
                    <input
                      id="password"
                      placeholder="Password"
                      class="pl-10 bg-white text-black border-0 rounded-md p-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150 @error('Password') is-invalid @enderror"
                      type="password"
                      name="Password"
                    />
                  </div>
                  @error('Password')
                  <div class="text-start text-sm">{{ $message }}</div>
                  @enderror
                </div>
                  <div class="mb-3">
                  <div class="relative">
                    <span
                      class="absolute top-2.5 left-0 flex items-center pl-2 mb-3"
                    >
                      <img
                        src="{{ asset('svg/password.svg') }}"
                        alt="password"
                      />
                    </span>
                    <span
                      class="absolute top-2.5 right-0 pr-3 flex items-center mb-3"
                    >
                    <label class="swap">
                      <input type="checkbox" id="hide" data-name="rpassword"/>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="swap-off w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="swap-on w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                      </svg>
                    </label>
                    </span>
                    <input
                      id="rpassword"
                      placeholder="Retype Password"
                      class="pl-10 bg-white text-black border-0 rounded-md p-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150 @error('RePassword') is-invalid @enderror"
                      type="password"
                      name="RePassword"
                    />
                  </div>
                  @error('RePassword')
                  <div class="text-start text-sm">{{ $message }}</div>
                  @enderror
                  </div>
                  <button
                    class="bg-Aqua text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-cyan-500 transition ease-in-out duration-150"
                    type="submit"
                    name="KeyCode"
                    value="1"
                  >
                    Register
                  </button>
                  @csrf
                  <a href="#">
                    <button
                      class="flex items-center justify-center border-2 gap-2 text-slate-200 font-bold  py-2 w-full rounded-md mt-4"
                    >
                      <img src="{{ asset('svg/googleWhite.svg') }}" alt="google" />
                      Register with Google
                    </button>
                  </a>
                </form>
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
