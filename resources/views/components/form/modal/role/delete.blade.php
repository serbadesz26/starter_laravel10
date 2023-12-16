<form action="{{ route('role.destroy', $role->id) }}" method="post" id="modal-form-delete-role-{{ $role->id }}">
    @csrf
    @method('DELETE')
</form>