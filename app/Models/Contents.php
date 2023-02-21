<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    use HasFactory;
    protected $fillable=[
        'contents_sections_id',
        'contents_categories_id',
        'item_no',
        'subcategory',
        'thumbnail',
        'link',
        'type',
        'description',
        'status',
        'name'
    ];

    public function category(){
        return $this->belongsTo(Contents_categories::class);
    }
    public function section(){
        return $this->belongsTo(Contents_sections::class);
    }
    // public function images(){
    //     return $this->hasMany(soko_images::class);
    // }
}
