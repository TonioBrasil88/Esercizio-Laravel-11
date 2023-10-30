<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreateArticle extends Component
{
 
    public function render()
    {
        return view('livewire.create-article');
    }

    #[Rule('required|min:3')]
    public $title = '';

    #[Rule('required|min:3')]
    public $subtitle = '';

    #[Rule('required|min:3')]
    public $body = '';

    public $dataSended = false;

    public function updateTitle()
    {
        $this->validateOnly('title');
    }

    public function updateSubtitle()
    {
        $this->validateOnly('subtitle');
    }

    public function updateBody()
    {
        $this->validateOnly('body');
    }


    public function store()
    {

        $this->validate();
     
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]); 
        
        $this->reset(); // questa funzione è messa a disposizione da Livewire e resetta le proprietà del componente

        $this->dataSended = true;
    }
}