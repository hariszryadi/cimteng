<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGalleryPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['gallery_photo_id', 'photo'];

    public function master() {
        return $this->belongsTo(GalleryPhoto::class);
    }
}
