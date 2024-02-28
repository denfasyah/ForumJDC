<?php

namespace App\Livewire;

use Livewire\Component;

class LikesButton extends Component
{
    public $count = 0;
    public $condition = true;
    public function LikesCount() {
        $this->condition ? $this->condition = false : $this->condition = true;
        $this->condition === false ? $this->count++ : $this->count--;
    }
    public function render()
    {
        return view('livewire.likes-button');
    }
}
