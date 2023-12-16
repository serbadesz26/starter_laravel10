<form action="{{ route('menu.destroy', $menuGroup->id) }}" method="post" id="modal-form-delete-menu-{{ $menuGroup->id }}">
    @csrf
    @method('DELETE')
</form>