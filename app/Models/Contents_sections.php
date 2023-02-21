<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents_sections extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'thumbnail'
    ];

    public function categories(){
        return $this->hasMany(Contents_categories::class);
    }
}
