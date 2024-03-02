    <div class="flex items-baseline">
        <!-- icon share -->
        <span class="tooltip tooltip-right" id="shareExplore" data-copy="{{ $url }}">
            <svg class="w-4" fill="none" stroke="#bfbfbf" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 2a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                <path d="M6 9a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                <path d="M18 16a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                <path d="m8.59 13.51 6.83 3.98"></path>
                <path d="m15.41 6.51-6.82 3.98"></path>
            </svg>
        </span>
        <span class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
            {{ $value }}
        </span>
    </div>
