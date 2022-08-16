<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanVillageEmployee extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'urban_village_employee';

    public function urban_village() {
        return $this->belongsTo(UrbanVillage::class);
    }
}
