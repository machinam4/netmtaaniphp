<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class radios extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'channel',
        'url',
        'thumbnail'
    ];
}
