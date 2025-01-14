<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticleCreate extends Component
{
    //! data binding
    #[Validate('required|min:5|max:100')]
    public $title;
    #[Validate('required|min:8|max:120')]
    public $subtitle;
    #[Validate('required|min:10|max:500')]
    public $body;

    /* protected $rules = [
        'title' => 'required|min:5|max:100',
        'subtitle' => 'required|min:8|max:120',
        'body' => 'required|min:10|max:500'
    ]; */

    public function store(){
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);
        session()->flash('message', 'Articolo inserito con successo');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
