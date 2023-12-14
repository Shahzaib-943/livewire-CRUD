<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

// #[Layout('layouts.secondary-layout')]
class CreatePost extends Component
{
    public function render()
    {
        // return view('livewire.create-post')->layout('layouts.secondary-layout');
        return view('livewire.create-post');
    }
}
