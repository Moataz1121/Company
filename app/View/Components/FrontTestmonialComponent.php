<?php

namespace App\View\Components;

use App\Models\Test;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrontTestmonialComponent extends Component
{
    public $tests;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->tests = Test::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-testmonial-component');
    }
}
