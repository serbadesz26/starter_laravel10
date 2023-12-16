<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PermissionManagementDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        $this->call(PermissionSeederTableSeeder::class);
        $this->call(RoleSeederTableSeeder::class);
        $this->call(RouteSeederTableSeeder::class);
    }
}
