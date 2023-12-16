@extends('layouts.dashboard.app')


@section('title', 'General Setting')

@section('breadcrumb')
<x-dashboard.breadcrumb title="General Setting" page="General Setting" active="Setting" route="{{ route('setting.index') }}" />
@endsection

@section('content')
<div class="card card-height-100">
    <!-- cardheader -->
    <div class="card-header border-bottom-dashed align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Setting</h4>
    </div>
    <!-- end cardheader -->
    <div class="card-body">

        <form action="{{ route('setting.update', $setting->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="role" class="form-label">Default User Role</label>
                <select class="form-select mb-3" aria-label="Select User Role" data-choices name="role">
                    @foreach ($roles as $role)
                    <option @selected($role->name == $data->role) value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>

    </div>
</div>
@endsection