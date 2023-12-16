@extends('layouts.dashboard.app')

@section('title', 'Route Management')

@section('breadcrumb')
<x-dashboard.breadcrumb title="Route Management" page="Route Management" active="Route" route="{{ route('route.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
    <!-- cardheader -->
    <div class="card-header border-bottom-dashed align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Route</h4>
        <div class="flex-shrink-0">
            <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-form-add-route">
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
                <th scope="col">Route</th>
                <th scope="col">Permission</th>
                <th scope="col">Status</th>
                <th scope="col">Description</th>
                <th scope="col" class="col-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($routes as $route)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $route->route }}</td>
                <td>
                    <span class="badge badge-soft-success">{{ $route->permission_name }}</span>
                </td>
                <td>
                    @if ($route->status)
                    <span class="badge badge-soft-success">Enable</span>
                    @else
                    <span class="badge badge-soft-danger">Disable</span>
                    @endif
                </td>
                <td>{{ $route->description }}</td>
                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-edit-route-{{ $route->id }}">
                                    Edit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('modal-form-delete-route-{{ $route->id }}').submit()">
                                    Delete
                                </a>
                            </li>
                        </ul>

                        @include('components.form.modal.route.edit')
                        @include('components.form.modal.route.delete')
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
            {{ $routes->links() }}
        </nav>
    </div>
</div>

@include('components.form.modal.route.add')
@endsection