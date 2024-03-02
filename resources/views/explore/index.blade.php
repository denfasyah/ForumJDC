@extends('index')
@section('explore')
    <div class="container mt-5">
        @foreach ($explore as $key => $value)
            <div class="bg-white rounded-2xl p-5 my-3">
                <div class="flex justify-between">
                    <div class="flex items-start -space-y-1 gap-3">
                        <div class="avatar flex items-center">
                            <diqv class="mask mask-circle w-10 lg:w-12 md:w-14 sm:w-8 mx-auto">
                                <img src="{{ asset('icon/anime.png') }}" />
                        </div>
                        <div class="flex flex-col">
                            <span
                                class="font-bold text-xs lg:text-lg md:text-lg sm:text-md mt-1">{{ $value->user['username'] }}</span>
                            <span class="mb-2 text-xs lg:text-md md:text-md sm:text-md">09.00 AM</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 -space-y-1">
                        @livewire('BookmarkIcon')
                        <div class="dropdown dropdown-bottom dropdown-end">
                            <div tabindex="0" role="button" class="">
                                <svg class="w-5 lg:w-6 md:w-6 sm:w-6" fill="none" stroke="#bfbfbf" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                    <path d="M19 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                    <path d="M5 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                </svg>
                            </div>
                            <ul tabindex="0" class="dropdown-content z-[1] menu shadow bg-base-100 rounded-box w-36">
                                <li class="px-3 py-1.5 hover:bg-base-300 transition-all rounded ">Item 1</li>
                                <li class="px-3 py-1.5 hover:bg-base-300 transition-all rounded ">Item 2</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Messages --}}
                <p class=" lg:text-sm md:text-sm sm:text-sm font-medium py-2 px-1">
                    {{ $value->body }}
                </p>
                {{--  --}}
                <div class="mt-5">
                    {{-- <img src="{{ asset('img/banner.png') }}" alt="" class="w-full rounded-2xl"> --}}
                </div>
                <div class="flex gap-5 relative px-1">
                    @livewire('LikesButton', ['count' => $value->like])
                    @livewire('DisLikesButton', ['count' => $value->dislike])
                    <div class="flex items-baseline">
                        <!-- icon message -->
                        <a href="#">
                            <svg class="w-4" fill="none" stroke="#bfbfbf" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                </path>
                            </svg>
                        </a>
                        <span class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
                            3.2K
                        </span>
                    </div>
                    <div class="flex items-baseline">
                        <!-- icon share -->
                        <a href="#">
                            <svg class="w-4" fill="none" stroke="#bfbfbf" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 2a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                                <path d="M6 9a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                                <path d="M18 16a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                                <path d="m8.59 13.51 6.83 3.98"></path>
                                <path d="m15.41 6.51-6.82 3.98"></path>
                            </svg>
                        </a>
                        <span class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
                            {{ $value->share }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
