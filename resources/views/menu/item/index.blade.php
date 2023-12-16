@extends('layouts.dashboard.app')

@section('title', 'Menu Items')

@section('breadcrumb')
<x-dashboard.breadcrumb title="Menu Management" page="Menu Management" active="Item" route="{{ route('menu.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
    <!-- cardheader -->
    <div class="card-header border-bottom-dashed align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Menu</h4>
        <div class="flex-shrink-0">
            <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-form-add-menu">
                <i class="ri-add-line"></i>
                Add
            </button>
        </div>
    </div>
    <!-- end cardheader -->
    <!-- Hoverable Rows -->
    <table class="table table-hover table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Icon</th>
                <th scope="col">Route</th>
                <th scope="col">Permission</th>
                <th scope="col">Status</th>
                <th scope="col" class="col-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menuItems as $menuItem)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $menuItem->name }}</td>
                <td>{{ $menuItem->icon }}</td>
                <td>{{ $menuItem->route }}</td>
                <td>{{ $menuItem->permission_name }}</td>
                <td>
                    @if ($menuItem->status)
                    <span class="badge badge-soft-success">Show</span>
                    @else
                    <span class="badge badge-soft-danger">Hide</span>
                    @endif
                </td>
                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-edit-menu-{{ $menuItem->id }}">
                                    Edit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('modal-form-delete-menu-{{ $menuItem->id }}').submit()">
                                    Delete
                                </a>
                            </li>
                        </ul>

                        @include('components.form.modal.menu-item.edit')
                        @include('components.form.modal.menu-item.delete')

                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <th colspan="5" class="text-center">No data to display</th>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="card-footer py-4">
        <nav aria-label="..." class="pagination justify-content-end">
            {{ $menuItems->links() }}
        </nav>
    </div>
</div>

@include('components.form.modal.menu-item.add')
@endsection