<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Customer_input extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $label;
    public $id;
    public $name;
    public function __construct($id,$type,$name,$label)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.customer_input');
    }
}