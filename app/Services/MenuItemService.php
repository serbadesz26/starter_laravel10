<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\MenuGroup;
use App\Models\MenuItem;

class MenuItemService
{
  public function create(Request $request, MenuGroup $menuGroup): MenuItem
  {
    return MenuItem::create(array_merge(
      $request->validated(),
      array(
        'menu_group_id' => $menuGroup->id,
        'status' => !blank($request->status) ? true : false,
        'posision' => $menuGroup->items()->max('posision') + 1
      )
    ));
  }

  public function update(Request $request, MenuGroup $menuGroup, MenuItem $menuItem): MenuItem|bool
  {
    return $menuItem->update(array_merge(
      $request->validated(),
      array(
        'menu_group_id' => $menuGroup->id,
        'status' => !blank($request->status) ? true : false
      )
    ));
  }
}
