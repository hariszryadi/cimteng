<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lakip extends Model
{
    protected $table = 'lakip';

    protected $fillable = ['year', 'source'];
}