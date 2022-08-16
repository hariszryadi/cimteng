<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanVillagePotency extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'urban_village_potency';

    public function urban_village() {
        return $this->belongsTo(UrbanVillage::class);
    }

    public function type_potency() {
        return $this->belongsTo(TypePotency::class);
    }
}
