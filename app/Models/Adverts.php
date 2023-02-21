<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adverts extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'advert_no',
        'type',
        'link',
        'owner',
        'start_date',
        'end_date',
        'tags',
        'position',
        'status',
        'duration'
    ];

    public function visits()
    {
        return visits($this)->relation();
    }
}
