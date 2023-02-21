<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsScrape extends Model
{
    use HasFactory;
    protected $fillable = [
        'country',
        'topic',
        'channel',
        'url',
        'thumbnail'
    ];

    public function news(){
        return $this->hasMany(News::class, 'news_channel_id');
    }
}
