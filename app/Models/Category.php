<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $translatable = ['slug', 'name'];

    protected $table = 'categories';

    protected $fillable = ['slug', 'name'];

    public function post()
    {
        return $this->hasMany(Post::class,'category_id','id');
    }
    public function scopeTotalPost($query)
    {
        $query->withCount(['post']);
    }
}
