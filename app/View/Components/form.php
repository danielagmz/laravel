<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component

{
    public $type;
    public $article;
    /**
     * Create a new component instance.
     */
    public function __construct($type = '',$article = null)

    {
        $this->type = $type;
        $this->article = $article;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
