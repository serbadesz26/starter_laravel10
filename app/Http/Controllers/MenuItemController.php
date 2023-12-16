<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Route;
use App\Models\MenuGroup;
use App\Models\MenuItem;
use App\Http\Requests\StoreMenuitemRequest;
use App\Services\MenuItemService;


class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, MenuGroup $menu)
    {
        $menuItems = $menu->items()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('permission_name', 'like', '%' . $request->search . '%');
            })
            ->orderBy('name')
            ->paginate(10);
        $permissions = Permission::orderBy('name')->get();
        $routes = Route::getRoutes();

        return view('menu.item.index', compact('menu', 'menuItems', 'permissions', 'routes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuitemRequest $request, MenuGroup $menu, MenuItemService $menuItemService)
    {
        return $menuItemService->create($request, $menu)
            ? back()->with('success', 'Menu item has been created successfully!')
            : back()->with('failed', 'Menu item was not created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('menu.item.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('menu.item.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMenuitemRequest $request, MenuGroup $menu, MenuItem $item, MenuItemService $menuItemService)
    {
        return $menuItemService->update($request, $menu, $item)
            ? back()->with('success', 'Menu item has been updated successfully!')
            : back()->with('failed', 'Menu item was not updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuGroup $menu, MenuItem $item)
    {
        return $item->delete()
            ? back()->with('success', 'Menu item has been deleted successfully!')
            : back()->with('failed', 'Menu item was not deleted successfully!');
    }
}
