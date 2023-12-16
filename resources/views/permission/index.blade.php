@extends('layouts.dashboard.app')

@section('title', 'Permission Management')

@section('breadcrumb')
<x-dashboard.breadcrumb title="Permission Management" page="Permission Management" active="Permission" route="{{ route('permission.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
    <!-- cardheader -->
    <div class="card-header border-bottom-dashed align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Permission</h4>
        <div class="flex-shrink-0">
            <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-form-add-permission">
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
                <th scope="col">Guard</th>
                <th scope="col">Description</th>
                <th scope="col" class="col-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($permissions as $permission)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->guard_name }}</td>
                <td>{{ $permission->description }}</td>
                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-edit-permission-{{ $permission->id }}">
                                    Edit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('modal-form-delete-permission-{{ $permission->id }}').submit()">
                                    Delete
                                </a>
                            </li>
                        </ul>

                        @include('components.form.modal.permission.edit')
                        @include('components.form.modal.permission.delete')
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
            {!! $permissions->links() !!}
        </nav>
    </div>
</div>

@include('components.form.modal.permission.add')
@endsection