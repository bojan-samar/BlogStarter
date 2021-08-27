<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeParent($query)
    {
        return $query->whereNull('parent_id');
    }

    public function canEdit(){
        if (auth()->guest()) {
            return false;
        }

        if (auth()->user()->hasRole('superadmin')) {
            return true;
        }


        if ($this->user_id == auth()->user()->id) {
            return true;
        }

        return false;
    }

    public function children(){
        return $this->hasMany(Comment::class, 'parent_id')->oldest();
    }

    public function commentable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
