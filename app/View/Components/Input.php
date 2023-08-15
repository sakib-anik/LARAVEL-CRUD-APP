<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $text;
    public $type;
    public $demo;
    public function __construct($id,$text,$type,$demo=0)
    {
        $this->id = $id;
        $this->text = $text;
        $this->type = $type;
        $this->demo = $demo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}