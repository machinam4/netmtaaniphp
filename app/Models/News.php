<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'news_channel_id',
        'headline',
        'description',
        'thumbnail',
        'url'
    ];

    public function channel()
    {
        return $this->belongsTo(NewsScrape::class, 'news_channel_id');
    }
}
