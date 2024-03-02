<div class="flex items-baseline">
    <!-- icon like -->
    <button wire:click="LikesCount">
        <svg class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5 lg:mt-0 md:mt-0 sm:mt-0" fill="{{ $condition == true ? 'none' : '#bfbfbf' }}" stroke="#bfbfbf"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
            </path>
        </svg>
    </button>
    <span class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
        {{ $count }}
    </span>
</div>
