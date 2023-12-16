<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RouteSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        // Dashboard
        Route::insert([
            [
                'route' => 'dashboard.index',
                'permission_name' => 'dashboard_index'
            ],
        ]);

        // General Setting
        Route::insert([
            [
                'route' => 'setting.index',
                'permission_name' => 'setting_index'
            ],
            [
                'route' => 'setting.update',
                'permission_name' => 'setting_update'
            ],
        ]);

        // User Management
        Route::insert([
            [
                'route' => 'user.index',
                'permission_name' => 'user_index'
            ],
            [
                'route' => 'user.store',
                'permission_name' => 'user_store'
            ],
            [
                'route' => 'user.update',
                'permission_name' => 'user_update'
            ],
            [
                'route' => 'user.destroy',
                'permission_name' => 'user_destroy'
            ],
        ]);

        // User Profile
        Route::insert([
            [
                'route' => 'profile.index',
                'permission_name' => 'profile_index'
            ]
        ]);

        // Menu Group Management
        Route::insert([
            [
                'route' => 'menu.index',
                'permission_name' => 'menu_index'
            ],
            [
                'route' => 'menu.store',
                'permission_name' => 'menu_store'
            ],
            [
                'route' => 'menu.update',
                'permission_name' => 'menu_update'
            ],
            [
                'route' => 'menu.destroy',
                'permission_name' => 'menu_destroy'
            ],
        ]);

        // Menu Item Management
        Route::insert([
            [
                'route' => 'menu.item.index',
                'permission_name' => 'menu_item_index'
            ],
            [
                'route' => 'menu.item.store',
                'permission_name' => 'menu_item_store'
            ],
            [
                'route' => 'menu.item.update',
                'permission_name' => 'menu_item_update'
            ],
            [
                'route' => 'menu.item.destroy',
                'permission_name' => 'menu_item_destroy'
            ],
        ]);

        // Route Management
        Route::insert([
            [
                'route' => 'route.index',
                'permission_name' => 'route_index'
            ],
            [
                'route' => 'route.store',
                'permission_name' => 'route_store'
            ],
            [
                'route' => 'route.update',
                'permission_name' => 'route_update'
            ],
            [
                'route' => 'route.destroy',
                'permission_name' => 'route_destroy'
            ],
        ]);

        // Role Management
        Route::insert([
            [
                'route' => 'role.index',
                'permission_name' => 'role_index'
            ],
            [
                'route' => 'role.store',
                'permission_name' => 'role_store'
            ],
            [
                'route' => 'role.update',
                'permission_name' => 'role_update'
            ],
            [
                'route' => 'role.destroy',
                'permission_name' => 'role_destroy'
            ],
        ]);

        // Permission Management
        Route::insert([
            [
                'route' => 'permission.index',
                'permission_name' => 'permission_index'
            ],
            [
                'route' => 'permission.store',
                'permission_name' => 'permission_store'
            ],
            [
                'route' => 'permission.update',
                'permission_name' => 'permission_update'
            ],
            [
                'route' => 'permission.destroy',
                'permission_name' => 'permission_destroy'
            ],
        ]);
    }
}
