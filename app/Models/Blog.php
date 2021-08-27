<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    public $guarded = [''];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function comments(){

        return $this->morphMany(Comment::class,'commentable');
    }


    public function getCurrentRatingAttribute()
    {
        $current_rating = $this->attributes['rating_points'] / $this->attributes['rating_count'];
        return number_format($current_rating, 2);
    }

    public function blogThumbnailUrl()
    {
        return Storage::url('blog/' . $this->id . '/' . $this->id . '_thumbnail.jpg');
    }
}
