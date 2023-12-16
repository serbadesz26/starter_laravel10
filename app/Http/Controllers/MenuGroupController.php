<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuGroup;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\StoreMenuGroupRequest;
use App\Services\MenuGroupService;

class MenuGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $menuGroups = MenuGroup::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('permission_name', 'like', '%' . $request->search . '%');
            })
            ->orderBy('name')
            ->paginate(10);
        $permissions = Permission::orderBy('name')->get();

        return view('menu.index', compact('menuGroups', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuGroupRequest $request, MenuGroupService $menuGroupService)
    {
        return $menuGroupService->create($request)
            ? back()->with('success', 'Menu group has been created successfully!')
            : back()->with('failed', 'Menu group was not created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('menu.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('menu.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMenuGroupRequest $request, MenuGroup $menu, MenuGroupService $menuGroupService)
    {
        return $menuGroupService->update($request, $menu)
            ? back()->with('success', 'Menu group has been updated successfully!')
            : back()->with('failed', 'Menu group was not updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuGroup $menu)
    {
        return $menu->delete()
            ? back()->with('success', 'Menu group has been deleted successfully!')
            : back()->with('failed', 'Menu group was not deleted successfully!');
    }
}
