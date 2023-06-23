<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soko_videos extends Model
{
    use HasFactory;
    protected $fillable = [
        'soko_id',
        'name',
        'type',
        'link',
    ];

    public function soko_video()
    {
        return $this->belongsTo(Soko::class);
    }
}
