<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents_categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'contents_sections_id',
        'name',
        'thumbnail'
    ];

    public function section(){
        return $this->belongsTo(Contents_sections::class, 'contents_sections_id');
    }

    public function contents(){
        return $this->hasMany(Contents::class);
    }
}
