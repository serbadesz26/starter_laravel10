<!-- Modals add menu -->
<div id="modal-form-edit-menu-{{ $menuItem->id }}" class="modal fade" tabindex="-1" aria-labelledby="modal-form-edit-menu-{{ $menuItem->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('menu.item.update', [$menu->id, $menuItem->id]) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-menu-{{ $menuItem->id }}-label">Edit Menu Item ({{ $menuItem->name }})</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Menu Name" name="name" value="{{ $menuItem->name }}">
                        <x-form.validation.error name="name" />
                    </div>

                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="text" class="form-control" id="icon" placeholder="Remix Icon (eg: ri-home-line)" name="icon" value="{{ $menuItem->icon }}">
                        <x-form.validation.error name="icon" />
                    </div>

                    <div class="mb-3">
                        <label for="route" class="form-label">Route</label>
                        <select class="form-control" id="route" name="route" data-choices data-choices-removeItem>
                            @foreach ($routes as $route)
                            @if (!blank($route->getName()))
                            <option @selected($menuItem->route == $route->getName()) value="{{ $route->getName() }}">{{ $route->getName() }}</option>
                            @endif
                            @endforeach
                        </select>
                        <x-form.validation.error name="route" />
                    </div>

                    <div class="mb-3">
                        <label for="permission_name" class="form-label">Permission Name</label>
                        <select class="form-control" id="permission_name" name="permission_name" data-choices data-choices-removeItem>
                            @foreach ($permissions as $permission)
                            <option @selected($menuItem->permission_name == $permission->name) value="{{ $permission->name }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                        <x-form.validation.error name="permission_name" />
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode" name="status" value="1" @checked($menuItem->status)>
                        </div>
                        <x-form.validation.error name="status" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Update</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->