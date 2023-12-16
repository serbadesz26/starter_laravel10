<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\MenuGroup;

class MenuGroupService
{
  public function create(Request $request): MenuGroup
  {
    return MenuGroup::create(array_merge(
      $request->validated(),
      array(
        'status' => !blank($request->status) ? true : false,
        'posision' => MenuGroup::max('posision') + 1
      ),
    ));
  }

  public function update(Request $request, MenuGroup $menuGroup): MenuGroup|bool
  {
    return $menuGroup->update(array_merge(
      $request->validated(),
      array('status' => !blank($request->status) ? true : false)
    ));
  }
}
