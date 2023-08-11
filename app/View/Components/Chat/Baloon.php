<?php

namespace App\View\Components\Chat;

use App\Models\Message;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Baloon extends Component
{
    public Message $message;

    /**
     * Create a new component instance.
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chat.baloon');
    }
}
