<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private string $title,
        private string $page,
        private string $route,
        private string $active,
    )
    {
        $this->title = $title;
        $this->page = $page;
        $this->route = $route;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.dashboard.breadcrumb', [
            'title' => $this->title,
            'page' => $this->page,
            'route' => $this->route,
            'active' => $this->active,
        ]);
    }
}
