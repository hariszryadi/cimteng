<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'status'];

    public function detail() {
        return $this->hasMany(DetailGalleryPhoto::class);
    }
}
