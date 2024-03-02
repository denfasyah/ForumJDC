<?php

namespace App\Livewire;

use Livewire\Component;

class DisLikesButton extends Component
{
    public $value;
    public $condition = true;
    public function DisLikesCount() {
        $this->condition ? $this->condition = false : $this->condition = true;
        $this->condition === false ? $this->value++ : $this->value--;
    }
    public function render()
    {
        return view('livewire.dis-likes-button');
    }
}
