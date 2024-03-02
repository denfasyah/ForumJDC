<?php

namespace App\Livewire;

use Livewire\Component;

class DisLikesButton extends Component
{
    public $count;
    public $condition = true;
    public function DisLikesCount() {
        $this->condition ? $this->condition = false : $this->condition = true;
        $this->condition === false ? $this->count++ : $this->count--;
    }
    public function render()
    {
        return view('livewire.dis-likes-button');
    }
}
