<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $logo = array(
            'sm' => 'logo-sm.png',
            'dark' => 'logo-dark.png',
            'light' => 'logo-light.png',
        );

        $data = array(
            'role' => 'User',
            'logo' => json_encode($logo)
        );

        Setting::create([
            'name' => 'General',
            'data' => json_encode($data)
        ]);
    }
}
