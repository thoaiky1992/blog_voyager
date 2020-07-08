<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected $table = 'posts';

    protected $with = ['comments'];

    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id','id');
    }
    public function scopeTotalComments($query){
        $query->withCount(['comments']);
    }

}
