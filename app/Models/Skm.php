<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skm extends Model
{
    use HasFactory;

    protected $table = 'skm';

    public $timestamps = false;

    public function answer() {
        return $this->hasMany(SkmAnswer::class);
    }
}
