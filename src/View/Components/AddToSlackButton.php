<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\View\Factory;

class Button extends Component
{
    public function __construct(
        private readonly Factory $view,
    ) {
        //
    }

    public function render(): View|Closure|string
    {
        return $this->view->make('components.button');
    }
}
