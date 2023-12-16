<form action="{{ route('user.destroy', $user->id) }}" method="post" id="modal-form-delete-user-{{ $user->id }}">
    @csrf
    @method('DELETE')
</form>