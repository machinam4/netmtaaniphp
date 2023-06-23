<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soko extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_id',
        'soko_categories_id',
        'item_no',
        'subcategory',
        'location',
        'model',
        'price',
        'description',
        'status',
        'name'
    ];

    public function category()
    {
        return $this->belongsTo(Soko_categories::class, 'soko_categories_id');
    }
    public function images()
    {
        return $this->hasMany(soko_images::class);
    }
    public function video()
    {
        return $this->hasMany(soko_videos::class);
    }
    public function visits()
    {
        return visits($this)->relation();
    }
}
