<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iumk extends Model
{
    use HasFactory;

    protected $table = 'iumk';

    protected $fillable = ['no_iumk', 'name_company', 'location_company', 'merchandise', 'urban_village_id'];

    public function urban_village() {
        return $this->belongsTo(UrbanVillage::class);
    }
}
