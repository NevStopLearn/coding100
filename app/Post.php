<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    protected $dates = ['published_at'];
    
    protected $fillable = [
        'title', 'body', 'published_at', 'author_id'
    ];

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
}
