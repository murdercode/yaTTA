<?php

namespace App\View\Components\Atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LightIndicator extends Component
{
    public bool $isPrimary;

    /**
     * Create a new component instance.
     */
    public function __construct(bool $isPrimary = true)
    {
        $this->isPrimary = $isPrimary;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.light-indicator');
    }
}
