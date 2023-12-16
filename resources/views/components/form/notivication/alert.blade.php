@if (session()->has('success'))
<!-- Success Alert -->
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('failed'))
<!-- Danger Alert -->
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session()->get('failed') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif