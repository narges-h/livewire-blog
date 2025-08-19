<?php

namespace App\Livewire\Index;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $newArticle;
    public $bestArticle;
    public function mount(){
        $this->newArticle = Article::orderBy('id', 'desc')->take(4)->get();
        $this->bestArticle = Article::where('is_best', 1)->take(4)->get();


    }
    public function render()
    {
//        return view('livewire.index.index');

        return view('livewire.index.index')
            ->layout('layouts.app');


    }
}
