<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class MenuGroup extends Model
{
    use Uuid, HasFactory;

    protected $fillable = ['name', 'status', 'permission_name', 'posision'];

    protected $casts = ['status' => 'boolean'];

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
