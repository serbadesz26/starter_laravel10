@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('breadcrumb')
<x-dashboard.breadcrumb
    :title="'Dashboard'"
    :page="'Dashboard'"
    :active="'Dashboard'"
    :route="route('dashboard.index')"
/>
@endsection