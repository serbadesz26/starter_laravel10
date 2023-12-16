<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Setting;


class SettingService
{
    public function update(Request $request, Setting $setting): Setting|bool
    {
        return $setting->update(array(
            'name' => $setting->name,
            'data' => json_encode($request->validated())
        ));
    }
}
