<form action="{{ route('route.destroy', $route->id) }}" method="post" id="modal-form-delete-route-{{ $route->id }}">
    @csrf
    @method('DELETE')
</form>