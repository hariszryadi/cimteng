<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanVillageMonograph extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'urban_village_monograph';

    public function urban_village() {
        return $this->belongsTo(UrbanVillage::class);
    }
}
