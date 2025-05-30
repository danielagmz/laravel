<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public $article;
    public $anonymous = false;
    public $onclick = null;
    /**
     * Create a new component instance.
     */
    public function __construct($article, $onclick = null)
    {
        $this->article = $article;
        $this->onclick = $onclick;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}
