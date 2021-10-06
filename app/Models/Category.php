<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //relacion uno a muchos
    protected $fillable=['name','slug'];

    public function getRouteKeyName(){

     return ('slug');
    }

    public function posts()
    {
               return $this->hasMany(Post::class);
    }
}
