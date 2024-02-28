<?php

namespace App\Livewire;

use Livewire\Component;

class BookmarkIcon extends Component
{
    public $clicked = true;

    public function saveAsBookmark() {
        $this->clicked ? $this->clicked = false : $this->clicked = true;
    }
    public function render()
    {
        return view('livewire.bookmark-icon');
    }
}
