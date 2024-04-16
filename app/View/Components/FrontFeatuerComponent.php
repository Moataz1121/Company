<?php

namespace App\View\Components;

use App\Models\Featuer;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrontFeatuerComponent extends Component
{
    public $featuers;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->featuers = Featuer::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-featuer-component');
    }
}
