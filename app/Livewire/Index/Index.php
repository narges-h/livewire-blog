<?php

namespace App\Livewire\Index;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
//        return view('livewire.index.index');

        return view('livewire.index.index')
            ->layout('layouts.app');


    }
}
