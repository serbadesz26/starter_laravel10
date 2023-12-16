<form action="{{ route('menu.item.destroy', [$menu->id, $menuItem->id]) }}" method="post" id="modal-form-delete-menu-{{ $menuItem->id }}">
    @csrf
    @method('DELETE')
</form>