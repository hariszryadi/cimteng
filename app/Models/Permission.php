<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
