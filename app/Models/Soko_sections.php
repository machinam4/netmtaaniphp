<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soko_sections extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'thumbnail'
    ];

    public function categories()
    {
        return $this->hasMany(Soko_categories::class);
    }
    public function visits()
    {
        return visits($this)->relation();
    }
}
