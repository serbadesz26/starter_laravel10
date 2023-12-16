<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService
{
  public function create(Request $request): User
  {
    return User::create(array_merge(
      $request->validated(),
      array(
        'password' => Hash::make('password'),
        'email_verified_at' => !blank($request->verified) ? now() : null
      )
    ))?->assignRole(!blank($request->role) ? $request->role : array());
  }

  public function update(Request $request, User $user): User|bool
  {
    $user->syncRoles($request->role);

    $email = $request->email === $user->email
      ? $request->email
      : (blank(User::firstWhere('email', $request->email)) ? $request->email : null);

    return blank($email) ? false : $user->update(array_merge(
      $request->validated(),
      array(
        'email' => $email,
        'email_verified_at' => !blank($request->verified) ? now() : null
      )
    ));
  }
}
