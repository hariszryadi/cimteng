<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkmAnswer extends Model
{
    use HasFactory;

    protected $table = 'skm_answers';

    protected $fillable = ['skm_id', 'ip', 'answer'];

    public function skm() {
        return $this->belongsTo(Skm::class);
    }
}
