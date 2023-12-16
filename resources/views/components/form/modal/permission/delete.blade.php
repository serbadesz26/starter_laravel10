<form action="{{ route('permission.destroy', $permission->id) }}" method="post" id="modal-form-delete-permission-{{ $permission->id }}">
    @csrf
    @method('DELETE')
</form>