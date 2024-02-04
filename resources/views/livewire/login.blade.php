<div>
    <form wire:submit.prevent="login" class="flex flex-col w-80" >
        <div class="mb-3">
            <div class="relative">
                <span class="absolute top-2.5 left-0 flex items-center pl-2 mb-3">
                    <img src="{{ asset('svg/email.svg') }}" alt="email" />
                </span>
                <input placeholder="Email"
                    class="pl-10 bg-white
                      text-black border-0 rounded-md p-2 w-full
                      focus:outline-none focus:ring-1 focus:ring-blue-500
                      transition ease-in-out duration-150 @error('email')
                      ring-2 ring-error @enderror"
                    type="email" name="email" wire:model="email" />
            </div>
            @error('email')
                <div class="text-start text-sm text-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="relative">
                <span class="absolute top-2.5 left-0 flex items-center pl-2 mb-3">
                    <img src="{{ asset('svg/password.svg') }}" alt="password" />
                </span>
                <span class="absolute top-2.5 right-0 pr-3 flex items-center mb-3" id="togglePassword">
                    <label class="swap">
                        <input type="checkbox" id="hide" data-name="password" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="swap-off w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="swap-on w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </label>
                </span>
                <input id="password" placeholder="Password"
                    class="pl-10
                    bg-white text-black border-0 rounded-md p-2 w-full
                    focus:outline-none focus:ring-1 focus:ring-blue-500
                    transition ease-in-out duration-150 @error('password')
                    ring-2 ring-error @enderror"
                    type="password" name="password" wire:model="password" />
            </div>
            @error('password')
                <div class="text-start text-sm text-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex items-center justify-between flex-wrap mt-5">
            <label class="text-sm text-white cursor-pointer" for="remember-me">
                <input class="mr-2" id="remember-me" type="checkbox" />
                Remember me
            </label>
            <a class="text-sm text-white hover:underline mb-0.5" href="#">Forgot password?</a>
        </div>
        <button
            class="bg-Aqua text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-cyan-500 transition ease-in-out duration-150"
            type="submit">
            Login
        </button>
        @csrf
    </form>
</div>
