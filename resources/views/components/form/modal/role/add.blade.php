<!-- Modals add menu -->
<div id="modal-form-add-role" class="modal fade" tabindex="-1" aria-labelledby="modal-form-add-role-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('role.store') }}" method="post">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-add-role-label">Add Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Role Name" name="name">
                        <x-form.validation.error name="name" />
                    </div>

                    <div class="mb-3">
                        <label for="guard_name" class="form-label">Guard</label>
                        <input type="text" class="form-control" id="guard_name" placeholder="Guard Name" name="guard_name">
                        <x-form.validation.error name="guard_name" />
                    </div>

                    <div class="mb-3">
                        <label for="permissions[]" class="form-label">Permission Name</label>
                        <select class="form-control" id="permissions[]" name="permissions[]" data-choices data-choices-removeItem multiple>
                            @foreach ($permissions as $permission)
                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                        <x-form.validation.error name="permissions" />
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" placeholder="Role description" name="description"></textarea>
                        <x-form.validation.error name="description" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Save</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->