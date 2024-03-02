<?php

namespace App\Livewire;

use Livewire\Component;

class ShareButton extends Component
{
    public $value, $url;
    public function render()
    {
        return view('livewire.share-button');
    }
}
