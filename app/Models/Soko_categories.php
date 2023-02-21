<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Soko as ModelsSoko;
use App\Models\Soko_sections;


class Soko_categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'soko_sections_id',
        'name',
        'thumbnail'
    ];

    public function section()
    {
        return $this->belongsTo(Soko_sections::class, 'soko_sections_id');
    }

    public function sokos()
    {
        return $this->hasMany(ModelsSoko::class);
    }
    public function visits()
    {
        return visits($this)->relation();
    }
}
