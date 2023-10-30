<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleTable extends Component
{

    public $count = 0;
    
    public function mount() 
    {
        $this->articles = Article::orderBy('created_at')->get();   
    }

    public function increment()
    {
        $this->count++;
    }

    public function delete(Article $article)
    {
        $article->delete();
    }

    public function render()
    {
        $articles = Article::orderBy('created_at')->get();
        return view('livewire.article-table', compact('articles'));
    }
}
