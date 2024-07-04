<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardItems extends Component
{
    public $title;
    public $itemCount;
    public $icon;
    public $link;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $itemCount, $icon, $link)
    {
        $this->title = $title;
        $this->itemCount = $itemCount;
        $this->icon = $icon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-items');
    }
}
