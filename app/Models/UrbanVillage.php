<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanVillage extends Model
{
    use HasFactory;

    public function monograph() {
        return $this->hasOne(UrbanVillageMonograph::class);
    }

    public function employee() {
        return $this->hasMany(UrbanVillageEmployee::class);
    }
    
    public function potency() {
        return $this->hasMany(UrbanVillagePotency::class);
    }
}
