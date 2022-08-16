<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePotency extends Model
{
    protected $table = 'type_potency';

    protected $fillable = ['name'];

    public $timestamps = false;

    public function urban_village_potency() {
        return $this->hasMany(UrbanVillagePotency::class);
    }
}