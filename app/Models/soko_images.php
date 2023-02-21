<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soko_images extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'sokos_id',
        'soko_id',
        'name',
    ];

    public function soko_item(){
        return $this->belongsTo(Soko::class);
    }
}
