<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StorePermissionRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $permissions = Permission::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('guard_name', 'like', '%' . $request->search . '%');
            })
            ->with('roles', function ($query) {
                return $query->select('id', 'name');
            })
            ->orderBy('name')
            ->paginate(10);
        $roles = Role::orderBy('name')->get();

        // dd($$permissions->links());

        return view('permission.index', compact('permissions', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        return Permission::create($request->validated())
            ?->assignRole(!blank($request->roles) ? $request->roles : array())
            ? back()->with('success', 'Permission has been created successfully!')
            : back()->with('failed', 'Permission was not created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('permission.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('permission.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePermissionRequest $request, Permission $permission)
    {
        return $permission->update($request->validated())
            && $permission->syncRoles(!blank($request->roles) ? $request->roles : array())
            ? back()->with('success', 'Permission has been updated successfully!')
            : back()->with('failed', 'Permission was not updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        return $permission->delete()
            ? back()->with('success', 'Permission has been deleted successfully!')
            : back()->with('failed', 'Permission was not deleted successfully!');
    }
}
