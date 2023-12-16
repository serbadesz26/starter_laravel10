<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuGroup;
use App\Models\MenuItem;

class MenuSettingSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = MenuGroup::create([
            'name' => 'Setting',
            'permission_name' => 'setting',
            'posision' => 2,
        ]);

        MenuItem::create([
            'name' => 'General Setting',
            'icon' => 'ri-settings-2-line',
            'route' => 'setting.index',
            'permission_name' => 'setting_index',
            'menu_group_id' => $setting->id,
            'posision' => 1,
        ]);

        MenuItem::create([
            'name' => 'User Management',
            'icon' => 'ri-file-user-line',
            'route' => 'user.index',
            'permission_name' => 'user_index',
            'menu_group_id' => $setting->id,
            'posision' => 2,
        ]);

        MenuItem::create([
            'name' => 'Menu Management',
            'icon' => 'ri-menu-line',
            'route' => 'menu.index',
            'permission_name' => 'menu_index',
            'menu_group_id' => $setting->id,
            'posision' => 3,
        ]);

        MenuItem::create([
            'name' => 'Route Management',
            'icon' => 'ri-link',
            'route' => 'route.index',
            'permission_name' => 'route_index',
            'menu_group_id' => $setting->id,
            'posision' => 4,
        ]);

        MenuItem::create([
            'name' => 'Role Management',
            'icon' => 'ri-shield-user-line',
            'route' => 'role.index',
            'permission_name' => 'role_index',
            'menu_group_id' => $setting->id,
            'posision' => 5,
        ]);

        MenuItem::create([
            'name' => 'Permission Management',
            'icon' => 'ri-shield-star-line',
            'route' => 'permission.index',
            'permission_name' => 'permission_index',
            'menu_group_id' => $setting->id,
            'posision' => 6,
        ]);
    }
}
