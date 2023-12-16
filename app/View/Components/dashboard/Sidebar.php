<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\MenuGroup;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menus = MenuGroup::query()
            ->with('items', function ($query) {
                return $query->where('status', true)->orderBy('posision');
            })
            ->where('status', true)
            ->orderBy('posision')
            ->get();
        return view('components.dashboard.sidebar', compact('menus'));
    }
}
